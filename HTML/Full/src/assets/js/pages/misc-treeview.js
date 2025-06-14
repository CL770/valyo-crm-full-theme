/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Misc Treeview
 * Version: 4.0.1
 */

class TreeView {
    constructor() {
        this.defaultTypes = {
            default: {icon: "ti ti-folder-filled fs-lg text-warning"},
            file: {icon: "ti ti-article fs-lg"}
        };
    }

    init() {
        this.initTree("#jstree-1", {types: this.defaultTypes});
        this.initTree("#jstree-2", {types: this.defaultTypes});

        this.initSelectableLinks("#jstree-1");
        this.initSelectableLinks("#jstree-2");

        this.initTree("#jstree-3", {
            plugins: ["wholerow", "checkbox", "types"],
            types: this.defaultTypes,
            core: {
                themes: {responsive: false},
                data: [
                    {
                        text: "Sample Nodes with Checkboxes",
                        children: [
                            {text: "Item initially selected", state: {selected: true}},
                            {text: "Custom feedback icon", icon: "ti ti-message-circle fs-lg text-danger"},
                            {
                                text: "Folder opened by default",
                                icon: "ti ti-folder fs-lg text-default",
                                state: {opened: true},
                                children: ["Subfolder item", "Another subfolder item"]
                            },
                            {text: "Document with a warning icon", icon: "ti ti-file-text fs-lg text-warning"},
                            {
                                text: "Node with disabled state",
                                icon: "ti ti-x fs-lg text-success",
                                state: {disabled: true}
                            },
                            {text: "New added item", icon: "ti ti-plus fs-lg text-info"},
                            {text: "Icon with a download symbol", icon: "ti ti-download fs-lg text-primary"}
                        ]
                    },
                    {
                        text: "Additional Category",
                        children: [
                            {text: "Category item 1", icon: "ti ti-briefcase fs-lg text-warning"},
                            {text: "Category item 2", icon: "ti ti-server fs-lg text-success"},
                            {text: "Category item 3", icon: "ti ti-lock fs-lg text-danger"}
                        ]
                    },
                    "And wholerow selection"
                ]
            }
        });

        this.initTree("#jstree-4", {
            plugins: ["contextmenu", "state", "types"],
            types: this.defaultTypes,
            core: {
                check_callback: true,
                themes: {responsive: false},
                data: this.getStaticData()
            },
            state: {key: "demo2"}
        });

        this.initTree("#jstree-5", {
            plugins: ["dnd", "state", "types"],
            types: {
                default: {icon: "ti ti-folder-filled text-success fs-lg"},
                file: {icon: "ti ti-file-text text-primary fs-lg"}
            },
            core: {
                check_callback: true,
                themes: {responsive: false},
                data: this.getTree5Data()
            },
            state: {key: "demo2"}
        });

        this.initTree("#jstree-6", {
            plugins: ["dnd", "state", "types"],
            types: {
                default: {icon: "ti ti-folder-filled text-primary fs-lg"},
                file: {icon: "ti ti-article fs-lg text-primary"}
            },
            core: {
                check_callback: true,
                themes: {responsive: false},
                data: {
                    url: node => node.id === '#' ? 'assets/data/treeview-data.json' : 'assets/data/treeview-data.json',
                    data: node => ({id: node.id})
                }
            },
            state: {key: "demo3"}
        });
    }

    initTree(selector, options) {
        const el = document.querySelector(selector);
        if (el) {
            $(el).jstree({
                core: {
                    themes: {responsive: false},
                    ...(options.core || {})
                },
                plugins: options.plugins || ["types"],
                types: options.types || this.defaultTypes,
                ...(options.state && {state: options.state})
            });
        }
    }

    initSelectableLinks(selector) {
        const el = document.querySelector(selector);
        if (!el) return;

        $(el).on('select_node.jstree', function (e, data) {
            const anchor = document.querySelector(`#${data.selected} a`);
            if (!anchor) return;

            const href = anchor.getAttribute("href");
            const target = anchor.getAttribute("target");

            if (href && href !== "#" && href !== "javascript:;") {
                if (target === "_blank") {
                    window.open(href, "_blank");
                } else {
                    window.location.href = href;
                }
                return false;
            }
        });
    }

    getStaticData() {
        return [
            {
                text: "Parent Node",
                children: [
                    {text: "Initially selected", state: {selected: true}},
                    {text: "Custom Icon", icon: "ti ti-message-circle fs-lg text-danger"},
                    {
                        text: "Initially open",
                        icon: "ti ti-folder-open fs-lg text-success",
                        state: {opened: true},
                        children: [{text: "Another node", icon: "ti ti-file-text fs-lg text-warning"}]
                    },
                    {text: "Another Custom Icon", icon: "ti ti-file-text fs-lg text-warning"},
                    {text: "Disabled Node", icon: "ti ti-x fs-lg text-success", state: {disabled: true}},
                    {
                        text: "Sub Nodes",
                        icon: "ti ti-folder fs-lg text-danger",
                        children: [
                            {text: "Item 1", icon: "ti ti-file-text fs-lg text-warning"},
                            {text: "Item 2", icon: "ti ti-file-text fs-lg text-success"},
                            {text: "Item 3", icon: "ti ti-file-text fs-lg text-default"},
                            {text: "Item 4", icon: "ti ti-file-text fs-lg text-danger"},
                            {text: "Item 5", icon: "ti ti-file-text fs-lg text-info"},
                            {text: "Item 6", icon: "ti ti-file fs-lg text-primary"},
                            {text: "Item 7", icon: "ti ti-file fs-lg text-warning"}
                        ]
                    }
                ]
            },
            {
                text: "Additional Category",
                children: [
                    {text: "Category item 1", icon: "ti ti-briefcase fs-lg text-warning"},
                    {text: "Category item 2", icon: "ti ti-server fs-lg text-success"},
                    {text: "Category item 3", icon: "ti ti-lock fs-lg text-danger"}
                ]
            },
            {
                text: "Miscellaneous Nodes",
                children: [
                    {text: "Node with plus icon", icon: "ti ti-plus fs-lg text-info"},
                    {text: "Node with download icon", icon: "ti ti-download fs-lg text-primary"},
                    {text: "Node with edit icon", icon: "ti ti-pencil fs-lg text-secondary"}
                ]
            }
        ];
    }

    getTree5Data() {
        return [
            {
                text: "Main Category",
                icon: "ti ti-folder-filled text-warning fs-lg",
                children: [
                    {text: "Dashboard", icon: "ti ti-layout-dashboard text-success fs-lg"},
                    {
                        text: "Reports",
                        icon: "ti ti-report text-info fs-lg",
                        state: {opened: true},
                        children: [
                            {text: "Annual Report", icon: "ti ti-file-description text-warning fs-lg"},
                            {text: "Monthly Report", icon: "ti ti-file-analytics text-secondary fs-lg"}
                        ]
                    },
                    {
                        text: "User Management",
                        icon: "ti ti-users text-danger fs-lg",
                        children: [
                            {text: "Add User", icon: "ti ti-user-plus text-success fs-lg"},
                            {text: "User Roles", icon: "ti ti-shield-lock text-info fs-lg"},
                            {text: "Permissions", icon: "ti ti-key text-warning fs-lg"}
                        ]
                    },
                    {
                        text: "Settings",
                        icon: "ti ti-settings text-muted fs-lg",
                        children: [
                            {text: "General", icon: "ti ti-sliders text-primary fs-lg"},
                            {text: "Security", icon: "ti ti-lock text-danger fs-lg"},
                            {text: "Notifications", icon: "ti ti-bell text-warning fs-lg"}
                        ]
                    },
                    {
                        text: "Disabled Node",
                        icon: "ti ti-ban text-danger fs-lg",
                        state: {disabled: true}
                    }
                ]
            },
            {
                text: "Archives",
                icon: "ti ti-archive text-warning fs-lg",
                children: [
                    {text: "2024", icon: "ti ti-calendar-event text-primary fs-lg"},
                    {text: "2023", icon: "ti ti-calendar-event text-secondary fs-lg"},
                    {text: "2022", icon: "ti ti-calendar-event text-success fs-lg"}
                ]
            },
            {
                text: "Media",
                icon: "ti ti-photo text-info fs-lg",
                children: [
                    {text: "Images", icon: "ti ti-image text-primary fs-lg"},
                    {text: "Videos", icon: "ti ti-player-play text-danger fs-lg"},
                    {text: "Audio", icon: "ti ti-music text-success fs-lg"}
                ]
            }
        ];
    }
}

document.addEventListener("DOMContentLoaded", () => {
    new TreeView().init();
});