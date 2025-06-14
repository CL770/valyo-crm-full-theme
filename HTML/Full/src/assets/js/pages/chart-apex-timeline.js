/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart Apex Timeline
 * Version: 4.0.1
 */

//
// Basic Timeline
//
new CustomApexChart({
    selector: '#basic-timeline',
    options: () => ({
        series: [{
            data: [
                {
                    x: 'Venue Booking',
                    y: [
                        new Date('2024-06-01').getTime(),
                        new Date('2024-06-03').getTime()
                    ]
                },
                {
                    x: 'Vendor Coordination',
                    y: [
                        new Date('2024-06-04').getTime(),
                        new Date('2024-06-07').getTime()
                    ]
                },
                {
                    x: 'Marketing',
                    y: [
                        new Date('2024-06-08').getTime(),
                        new Date('2024-06-12').getTime()
                    ]
                },
                {
                    x: 'Event Execution',
                    y: [
                        new Date('2024-06-13').getTime(),
                        new Date('2024-06-15').getTime()
                    ]
                }
            ]
        }],
        colors: [ins('primary')],
        chart: {
            height: 350,
            type: 'rangeBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: true
            }
        },
        xaxis: {
            type: 'datetime',
            axisBorder: {
                show: false,
            }
        }
    })
})


//
// DISTRIBUTED TIMELINE
//
new CustomApexChart({
    selector: '#distributed-timeline',
    options: () => ({
        series: [{
            data: [
                {
                    x: 'Market Research',
                    y: [
                        new Date('2024-07-01').getTime(),
                        new Date('2024-07-05').getTime()
                    ]
                },
                {
                    x: 'MVP Design',
                    y: [
                        new Date('2024-07-06').getTime(),
                        new Date('2024-07-10').getTime()
                    ]
                },
                {
                    x: 'Development Sprint 1',
                    y: [
                        new Date('2024-07-09').getTime(),
                        new Date('2024-07-15').getTime()
                    ]
                },
                {
                    x: 'Beta Testing',
                    y: [
                        new Date('2024-07-14').getTime(),
                        new Date('2024-07-19').getTime()
                    ]
                },
                {
                    x: 'Public Launch',
                    y: [
                        new Date('2024-07-20').getTime(),
                        new Date('2024-07-25').getTime()
                    ]
                }
            ]
        }],
        colors: [ins('secondary'), ins('success'), ins('warning'), ins('danger'), ins('info')],
        chart: {
            height: 350,
            type: 'rangeBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
                distributed: true,
                dataLabels: {
                    hideOverflowingLabels: false
                }
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
                let label = opts.w.globals.labels[opts.dataPointIndex]
                let a = moment(val[0])
                let b = moment(val[1])
                let diff = b.diff(a, 'days')
                return label + ': ' + diff + (diff > 1 ? ' days' : ' day')
            },
            style: {
                colors: ['#f3f4f5', '#fff']
            }
        },
        xaxis: {
            type: 'datetime',
            axisBorder: {
                show: false,
            }
        },
        yaxis: {
            show: true
        }
    })
})


//
// MULTI SERIES TIMELINE
//
new CustomApexChart({
    selector: '#multi-series-timeline',
    options: () => ({
        series: [
            {
                name: 'Fedex',
                data: [
                    {
                        x: 'Pickup',
                        y: [new Date('2024-10-01').getTime(), new Date('2024-10-02').getTime()]
                    },
                    {
                        x: 'Transit',
                        y: [new Date('2024-10-03').getTime(), new Date('2024-10-07').getTime()]
                    },
                    {
                        x: 'Delivered',
                        y: [new Date('2024-10-08').getTime(), new Date('2024-10-09').getTime()]
                    }
                ]
            },
            {
                name: 'DHL',
                data: [
                    {
                        x: 'Pickup',
                        y: [new Date('2024-09-30').getTime(), new Date('2024-10-01').getTime()]
                    },
                    {
                        x: 'Transit',
                        y: [new Date('2024-10-02').getTime(), new Date('2024-10-06').getTime()]
                    },
                    {
                        x: 'Delivered',
                        y: [new Date('2024-10-07').getTime(), new Date('2024-10-08').getTime()]
                    }
                ]
            }
        ],
        colors: [ins('purple'), ins('secondary')],
        chart: {
            height: 350,
            type: 'rangeBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                const a = moment(val[0])
                const b = moment(val[1])
                const diff = b.diff(a, 'days')
                return diff + (diff > 1 ? ' days' : ' day')
            }
        },
        fill: {
            type: 'solid',
        },
        xaxis: {
            type: 'datetime',
            axisBorder: {
                show: false,
            }
        },
        legend: {
            position: 'top'
        },
    })
})


//
// ADVANCED TIMELINE
//
new CustomApexChart({
    selector: '#advanced-timeline',
    options: () => ({
        series: [
            {
                name: 'Team Alpha',
                data: [
                    {
                        x: 'Planning',
                        y: [new Date('2024-08-01').getTime(), new Date('2024-08-03').getTime()]
                    },
                    {
                        x: 'Development',
                        y: [new Date('2024-08-04').getTime(), new Date('2024-08-09').getTime()]
                    },
                    {
                        x: 'Testing',
                        y: [new Date('2024-08-10').getTime(), new Date('2024-08-15').getTime()]
                    },
                    {
                        x: 'Testing',
                        y: [new Date('2024-08-16').getTime(), new Date('2024-08-18').getTime()]
                    },
                    {
                        x: 'Release Prep',
                        y: [new Date('2024-08-19').getTime(), new Date('2024-08-22').getTime()]
                    }
                ]
            },
            {
                name: 'Team Beta',
                data: [
                    {
                        x: 'Planning',
                        y: [new Date('2024-08-02').getTime(), new Date('2024-08-05').getTime()]
                    },
                    {
                        x: 'Development',
                        y: [new Date('2024-08-06').getTime(), new Date('2024-08-11').getTime()]
                    },
                    {
                        x: 'Testing',
                        y: [new Date('2024-08-12').getTime(), new Date('2024-08-20').getTime()],
                        goals: [
                            {
                                name: 'UAT Milestone',
                                value: new Date('2024-08-17').getTime(),
                                strokeColor: ins('danger')
                            }
                        ]
                    },
                    {
                        x: 'Launch',
                        y: [new Date('2024-08-25').getTime(), new Date('2024-08-27').getTime()]
                    }
                ]
            },
            {
                name: 'Team Gamma',
                data: [
                    {
                        x: 'Development',
                        y: [new Date('2024-08-15').getTime(), new Date('2024-08-22').getTime()]
                    },
                    {
                        x: 'QA Review',
                        y: [new Date('2024-08-10').getTime(), new Date('2024-08-14').getTime()],
                        goals: [
                            {
                                name: 'QA Blocker',
                                value: new Date('2024-08-12').getTime(),
                                strokeColor: ins('warning')
                            }
                        ]
                    }
                ]
            }
        ],
        chart: {
            height: 350,
            type: 'rangeBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
                barHeight: '80%'
            }
        },
        colors: [ins('success'), ins('danger'), ins('warning')],
        xaxis: {
            type: 'datetime',
            axisBorder: {
                show: false,
            }
        },
        stroke: {
            width: 1
        },
        fill: {
            type: 'solid',
            opacity: 0.6
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left'
        },
    })
})


//
// MULTIPLE SERIES - GROUP ROWS
//
new CustomApexChart({
    selector: '#group-rows-timeline',
    options: () => ({
        series: [
            {
                name: 'Sophia Miller',
                data: [{
                    x: 'Operations',
                    y: [new Date(2022, 0, 3).getTime(), new Date(2022, 3, 15).getTime()]
                }]
            },
            {
                name: 'Liam Johnson',
                data: [
                    {
                        x: 'Operations',
                        y: [new Date(2022, 3, 16).getTime(), new Date(2022, 6, 30).getTime()]
                    },
                    {
                        x: 'Finance',
                        y: [new Date(2021, 6, 1).getTime(), new Date(2022, 3, 15).getTime()]
                    }
                ]
            },
            {
                name: 'Olivia Patel',
                data: [
                    {
                        x: 'Operations',
                        y: [new Date(2022, 7, 1).getTime(), new Date(2022, 11, 31).getTime()]
                    },
                    {
                        x: 'Finance',
                        y: [new Date(2022, 3, 16).getTime(), new Date(2022, 6, 30).getTime()]
                    },
                    {
                        x: 'HR',
                        y: [new Date(2021, 2, 1).getTime(), new Date(2021, 11, 31).getTime()]
                    }
                ]
            },
            {
                name: 'Noah Chen',
                data: [{
                    x: 'Finance',
                    y: [new Date(2023, 0, 1).getTime(), new Date(2023, 6, 30).getTime()]
                }]
            },
            {
                name: 'Emma Davis',
                data: [{
                    x: 'Finance',
                    y: [new Date(2023, 7, 1).getTime(), new Date(2024, 0, 15).getTime()]
                }]
            },
            {
                name: 'Aiden Scott',
                data: [{
                    x: 'HR',
                    y: [new Date(2021, 4, 15).getTime(), new Date(2021, 6, 30).getTime()]
                }]
            },
            {
                name: 'Mia Lopez',
                data: [{
                    x: 'HR',
                    y: [new Date(2021, 7, 1).getTime(), new Date(2022, 1, 15).getTime()]
                }]
            },
            {
                name: 'Ethan Brooks',
                data: [{
                    x: 'HR',
                    y: [new Date(2022, 1, 16).getTime(), new Date(2022, 7, 1).getTime()]
                }]
            },
            {
                name: 'Aria Kim',
                data: [{
                    x: 'HR',
                    y: [new Date(2022, 7, 2).getTime(), new Date(2023, 0, 1).getTime()]
                }]
            },
            {
                name: 'Lucas Nguyen',
                data: [{
                    x: 'HR',
                    y: [new Date(2023, 0, 2).getTime(), new Date(2023, 3, 30).getTime()]
                }]
            },
            {
                name: 'Harper White',
                data: [{
                    x: 'HR',
                    y: [new Date(2023, 4, 1).getTime(), new Date(2023, 6, 30).getTime()]
                }]
            },
            {
                name: 'Benjamin Reyes',
                data: [{
                    x: 'HR',
                    y: [new Date(2023, 7, 1).getTime(), new Date(2024, 0, 1).getTime()]
                }]
            }
        ],
        colors: [ins('primary'), ins('secondary'), ins('warning'), ins('danger'), ins('info'), ins('purple'), ins('pink'), ins('dark'), ins('gray'), ins('orange')],
        chart: {
            height: 350,
            type: 'rangeBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
                barHeight: '50%',
                rangeBarGroupRows: true
            }
        },
        fill: {
            type: 'solid'
        },
        xaxis: {
            type: 'datetime',
            axisBorder: {
                show: false,
            }
        },
        legend: {
            position: 'right'
        }
    })
})