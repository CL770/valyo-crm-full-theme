/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart Apex Mixed
 * Version: 4.0.1
 */

//
// LINE & COLUMN CHART
//
new CustomApexChart({
    selector: '#line-column-mixed',
    options: () => ({
        chart: {
            height: 380,
            type: 'line',
            toolbar: {
                show: false
            }
        },
        series: [{
            name: 'Product Sales',
            type: 'column',
            data: [320, 410, 390, 450, 300, 500, 470, 520, 480, 440, 460, 490]
        }, {
            name: 'Support Tickets',
            type: 'line',
            data: [25, 35, 40, 30, 28, 45, 50, 47, 42, 38, 35, 40]
        }],
        stroke: {
            width: [0, 4]
        },
        labels: [
            '01 Apr 2024', '02 Apr 2024', '03 Apr 2024', '04 Apr 2024',
            '05 Apr 2024', '06 Apr 2024', '07 Apr 2024', '08 Apr 2024',
            '09 Apr 2024', '10 Apr 2024', '11 Apr 2024', '12 Apr 2024'
        ],
        colors: [ins('success'), ins('danger')],
        xaxis: {
            type: 'datetime'
        },
        yaxis: [{
            title: {
                text: 'Product Sales',
                style: {
                    fontSize: '14px',
                    fontWeight: 500
                },
                offsetX: -5,
            },

        }, {
            opposite: true,
            title: {
                text: 'Support Tickets',
                style: {
                    fontSize: '14px',
                    fontWeight: 500
                },
                offsetX: 5,
            }
        }],
        legend: {
            offsetY: 5,
        },
        grid: {
            borderColor: [ins('border-color')],
            padding: {
                right: 20
            }
        }

    })
})


//
// MULTIPLE Y-AXIS CHART
//
new CustomApexChart({
    selector: '#multiple-yaxis-mixed',
    options: () => ({
        chart: {
            height: 380,
            type: 'line',
            stacked: false,
            toolbar: {
                show: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: [0, 0, 3]
        },
        series: [{
            name: 'Active Users',
            type: 'column',
            data: [1.2, 2.3, 2.8, 3.1, 3.9, 4.5, 5.2, 6.1]
        }, {
            name: 'Subscriptions',
            type: 'column',
            data: [0.8, 1.5, 1.9, 2.3, 2.8, 3.3, 3.9, 4.4]
        }, {
            name: 'Monthly Revenue',
            type: 'line',
            data: [10, 14, 18, 21, 26, 31, 36, 42]
        }],
        xaxis: {
            categories: [2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023],
        },
        colors: [ins('primary'), ins('secondary'), ins('danger')],
        yaxis: [
            {
                axisTicks: {
                    show: true,
                },
                axisBorder: {
                    show: true,
                    color: ins('primary')
                },
                title: {
                    text: "Active Users (millions)",
                    style: {
                        fontSize: '14px',
                        fontWeight: 500
                    }
                },
                offsetX: -5,
            },
            {
                axisTicks: {
                    show: true,
                },
                axisBorder: {
                    show: true,
                    color: ins('secondary')
                },
                labels: {
                    offsetX: 0
                },
                offsetX: -5,
                title: {
                    text: "Subscriptions (millions)",
                    style: {
                        fontSize: '14px',
                        fontWeight: 500
                    }
                },
            },
            {
                opposite: true,
                axisTicks: {
                    show: true,
                },
                axisBorder: {
                    show: true,
                    color: ins('danger')
                },
                offsetX: 5,
                title: {
                    text: "Monthly Revenue (millions)",
                    style: {
                        fontSize: '14px',
                        fontWeight: 500
                    }
                }
            },

        ],
        tooltip: {
            followCursor: true,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y + " thousand crores"
                    }
                    return y;
                }
            }
        },
        grid: {
            borderColor: [ins('border-color')],
            padding: {
                right: 20,
                bottom: 0
            }
        },
        legend: {
            offsetY: 5,
        },
        responsive: [{
            breakpoint: 600,
            options: {
                yaxis: {
                    show: false
                },
                legend: {
                    show: false
                }
            }
        }]
    })
})


//
// LINE & AREA CHART
//
new CustomApexChart({
    selector: '#line-area-mixed',
    options: () => ({
        chart: {
            height: 380,
            type: 'line',
            toolbar: {
                show: false
            }
        },
        stroke: {
            curve: 'smooth',
            width: 2
        },
        series: [{
            name: 'Steps Walked',
            type: 'area',
            data: [4200, 5000, 3100, 4800, 3900, 5100, 4300, 4700, 4500, 4900, 4600]
        }, {
            name: 'Avg Heart Rate',
            type: 'line',
            data: [78, 82, 80, 85, 77, 90, 84, 88, 86, 89, 83]
        }],
        fill: {
            type: 'solid',
            opacity: [0.35, 1],
        },
        labels: [
            'May 01', 'May 02', 'May 03', 'May 04', 'May 05', 'May 06',
            'May 07', 'May 08', 'May 09', 'May 10', 'May 11'
        ],
        colors: [ins('secondary'), ins('danger')],
        markers: {
            size: 0
        },
        legend: {
            offsetY: 5,
        },
        yaxis: [
            {
                title: {
                    text: 'Steps Walked',
                    style: {
                        fontSize: '14px',
                        fontWeight: 500
                    },
                    offsetX: -5,
                },
            },
            {
                opposite: true,
                title: {
                    text: 'Avg Heart Rate (bpm)',
                    style: {
                        fontSize: '14px',
                        fontWeight: 500
                    },
                    offsetX: 5,
                },
            },
        ],
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0)
                    }
                    return y;

                }
            }
        },
        grid: {
            borderColor: [ins('border-color')],
            padding: {
                bottom: 0
            }
        },
        responsive: [{
            breakpoint: 600,
            options: {
                yaxis: {
                    show: false
                },
                legend: {
                    show: false
                }
            }
        }]
    })
})


//
// LINE, COLUMN & AREA CHART
//
new CustomApexChart({
    selector: '#all-mixed',
    options: () => ({
        chart: {
            height: 380,
            type: 'line',
            stacked: false,
            toolbar: {
                show: false
            }
        },
        stroke: {
            width: [0, 2, 4],
            curve: 'smooth'
        },
        plotOptions: {
            bar: {
                columnWidth: '50%'
            }
        },
        series: [{
            name: 'Region North',
            type: 'column',
            data: [25, 13, 20, 29, 17, 24, 34, 22, 40, 26, 33]
        }, {
            name: 'Region South',
            type: 'area',
            data: [48, 52, 39, 61, 28, 47, 25, 44, 58, 31, 46]
        }, {
            name: 'Region Central',
            type: 'line',
            data: [32, 28, 41, 33, 49, 38, 60, 50, 55, 37, 42]
        }],
        fill: {
            opacity: [0.85, 0.25, 1],
            gradient: {
                inverseColors: false,
                shade: 'light',
                type: "vertical",
                opacityFrom: 0.85,
                opacityTo: 0.55,
                stops: [0, 100, 100, 100]
            }
        },
        colors: [ins('info'), ins('purple'), ins('danger')],
        labels: [
            '01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003',
            '05/01/2003', '06/01/2003', '07/01/2003', '08/01/2003',
            '09/01/2003', '10/01/2003', '11/01/2003'
        ],
        markers: {
            size: 0
        },
        legend: {
            offsetY: 5,
        },
        xaxis: {
            type: 'datetime'
        },
        yaxis: {
            title: {
                text: 'Performance Metrics',
                style: {
                    fontSize: '14px',
                    fontWeight: 500
                }
            },
            offsetX: -5,
        },
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0)
                    }
                    return y;

                }
            }
        },
        grid: {
            borderColor: [ins('border-color')],
            padding: {
                right: 20,
                bottom: 0
            }
        }
    })
})