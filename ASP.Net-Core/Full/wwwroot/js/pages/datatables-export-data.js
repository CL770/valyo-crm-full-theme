/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Datatables Export Data
 * Version: 4.1.0
 */

document.addEventListener('DOMContentLoaded', () => {
    const exportDataTable = document.querySelector('[data-tables="export-data"]');
    if (exportDataTable) {
        new DataTable(exportDataTable, {
            dom: "<'d-md-flex justify-content-between align-items-center my-2'Bf>" +
                "rt" +
                "<'d-md-flex justify-content-between align-items-center mt-2'ip>",
            responsive: true,
            buttons: [
                {extend: 'copy', className: 'btn btn-sm btn-secondary'},
                {extend: 'csv', className: 'btn btn-sm btn-secondary active'},
                {extend: 'excel', className: 'btn btn-sm btn-secondary'},
                {extend: 'print', className: 'btn btn-sm btn-secondary active'},
                {extend: 'pdf', className: 'btn btn-sm btn-secondary'}
            ],
            language: {
                paginate: {
                    first: '<i class="ti ti-chevrons-left"></i>',
                    previous: '<i class="ti ti-chevron-left"></i>',
                    next: '<i class="ti ti-chevron-right"></i>',
                    last: '<i class="ti ti-chevrons-right"></i>'
                }
            }
        });
    }

    const exportDropdownTable = document.querySelector('[data-tables="export-data-dropdown"]');
    if (exportDropdownTable) {
        new DataTable(exportDropdownTable, {
            dom: "<'d-md-flex justify-content-between align-items-center my-2'<'dropdown'B>f>" +
                "rt" +
                "<'d-md-flex justify-content-between align-items-center mt-2'ip>",
            responsive: true,
            buttons: [
                {
                    extend: 'collection',
                    text: '<i class="ti ti-download me-1"></i> Export',
                    className: 'btn btn-sm btn-secondary dropdown-toggle',
                    autoClose: true,
                    buttons: [
                        {
                            extend: 'copy',
                            text: '<i class="ti ti-copy me-1 fs-lg align-middle"></i> Copy',
                            className: 'dropdown-item'
                        },
                        {
                            extend: 'csv',
                            text: '<i class="ti ti-file-type-csv me-1 fs-lg align-middle"></i> CSV',
                            className: 'dropdown-item'
                        },
                        {
                            extend: 'excel',
                            text: '<i class="ti ti-file-spreadsheet me-1 fs-lg align-middle"></i> Excel',
                            className: 'dropdown-item'
                        },
                        {
                            extend: 'print',
                            text: '<i class="ti ti-printer me-1 fs-lg align-middle"></i> Print',
                            className: 'dropdown-item'
                        },
                        {
                            extend: 'pdf',
                            text: '<i class="ti ti-file-text me-1 fs-lg align-middle"></i> PDF',
                            className: 'dropdown-item'
                        }
                    ]
                }
            ],
            language: {
                paginate: {
                    first: '<i class="ti ti-chevrons-left"></i>',
                    previous: '<i class="ti ti-chevron-left"></i>',
                    next: '<i class="ti ti-chevron-right"></i>',
                    last: '<i class="ti ti-chevrons-right"></i>'
                }
            }
        });
    }
});