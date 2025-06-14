/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart Apex Boxplot
 * Version: 4.1.0
 */
import { CustomApexChart, ins } from '../app'
//
// BASIC BOXPLOT
//
new CustomApexChart({
    selector: '#basic-boxplot',
    options: () => ({
        series: [{
            type: 'boxPlot',
            data: [
                {
                    x: 'Q1 2022',
                    y: [12, 18, 21, 26, 34]
                },
                {
                    x: 'Q2 2022',
                    y: [10, 14, 19, 24, 30]
                },
                {
                    x: 'Q3 2022',
                    y: [9, 13, 17, 22, 28]
                },
                {
                    x: 'Q4 2022',
                    y: [14, 19, 23, 27, 35]
                },
                {
                    x: 'Q1 2023',
                    y: [11, 15, 20, 25, 32]
                },
                {
                    x: 'Q2 2023',
                    y: [13, 17, 22, 26, 33]
                },
                {
                    x: 'Q3 2023',
                    y: [15, 19, 24, 29, 37]
                }
            ]
        }],
        plotOptions: {
            boxPlot: {
                colors: {
                    upper: ins('secondary'),
                    lower: ins('info'),
                }
            }
        },
        chart: {
            type: 'boxPlot',
            height: 350,
            toolbar: {
                show: false
            }
        },
        stroke: {
            colors: ['#677fac']
        }
    })
})


//
// SCATTER BOXPLOT
//
new CustomApexChart({
    selector: '#scatter-boxplot',
    options: () => ({
        series: [
            {
                name: 'Resolution Time',
                type: 'boxPlot',
                data: [
                    {
                        x: new Date('2018-01-01').getTime(),
                        y: [12, 18, 22, 26, 31]
                    },
                    {
                        x: new Date('2019-01-01').getTime(),
                        y: [14, 20, 24, 28, 34]
                    },
                    {
                        x: new Date('2020-01-01').getTime(),
                        y: [10, 16, 21, 25, 30]
                    },
                    {
                        x: new Date('2021-01-01').getTime(),
                        y: [11, 17, 23, 27, 33]
                    },
                    {
                        x: new Date('2022-01-01').getTime(),
                        y: [13, 19, 25, 30, 36]
                    }
                ]
            },
            {
                name: 'Outliers',
                type: 'scatter',
                data: [
                    {
                        x: new Date('2018-01-01').getTime(),
                        y: 8
                    },
                    {
                        x: new Date('2019-01-01').getTime(),
                        y: 37
                    },
                    {
                        x: new Date('2020-01-01').getTime(),
                        y: 5
                    },
                    {
                        x: new Date('2021-01-01').getTime(),
                        y: 38
                    },
                    {
                        x: new Date('2022-01-01').getTime(),
                        y: 40
                    }
                ]
            }
        ],
        chart: {
            type: 'boxPlot',
            height: 350,
            toolbar: {show: false}
        },
        colors: [ins('danger'), ins('success')],
        plotOptions: {
            boxPlot: {
                colors: {
                    upper: ins('success'),
                    lower: ins('danger'),
                }
            }
        },
        stroke: {
            colors: ['#a1a9b1']
        },
        legend: {
            offsetY: 5,
        },
        xaxis: {
            type: 'datetime',
            tooltip: {
                formatter: function (val) {
                    return new Date(val).getFullYear()
                }
            }
        },
        grid: {
            padding: {
                bottom: 5
            }
        },
        tooltip: {
            shared: false,
            intersect: true
        },
    })
})


//
// HORIZONTAL BOXPLOT
//
new CustomApexChart({
    selector: '#horizontal-boxplot',
    options: () => ({
        series: [{
            data: [
                {x: 'Monday', y: [2, 3, 4, 5, 7]},
                {x: 'Tuesday', y: [1.5, 2.5, 3.5, 4.5, 6]},
                {x: 'Wednesday', y: [3, 4, 5, 6, 8]},
                {x: 'Thursday', y: [2.2, 3.2, 4.2, 5.5, 6.5]},
                {x: 'Friday', y: [2.8, 3.6, 4.6, 5.8, 7.2]},
                {x: 'Saturday', y: [1, 2, 3, 4, 5.5]},
                {x: 'Sunday', y: [2.5, 3.5, 4.5, 5.2, 6.8]}
            ]
        }],
        chart: {
            type: 'boxPlot',
            height: 350,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
                barHeight: '50%'
            },
            boxPlot: {
                colors: {
                    upper: ins('warning'),
                    lower: ins('purple'),
                }
            }
        },
        xaxis: {
            axisBorder: {
                show: false,
            }
        },
        stroke: {
            colors: ['#a1a9b1']
        },
        grid: {
            padding: {right: 20}
        }
    })
})