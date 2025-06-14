/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart Apex Sparklines
 * Version: 4.1.0
 */


Apex.grid = {
    padding: {
        right: 0,
        left: 0
    }
}

Apex.dataLabels = {
    enabled: false
}

// data for the sparklines that appear below header area
const sparkDataVisits = [120, 135, 160, 180, 170, 145, 190, 210, 185, 195, 220, 240, 230, 250, 270, 265, 280, 300, 310, 305, 320, 330, 345, 360];
const sparkDataViews = [500, 540, 520, 560, 580, 610, 590, 600, 630, 660, 640, 650, 670, 680, 700, 720, 740, 760, 750, 770, 790, 810, 830, 850];
const sparkDataBounce = [45, 42, 40, 39, 38, 37, 35, 34, 36, 33, 32, 31, 30, 29, 28, 27, 27, 26, 25, 24, 24, 23, 22, 21];


new CustomApexChart({
    selector: '#spark1',
    options: () => ({
        chart: {
            type: 'area',
            height: 160,
            sparkline: {
                enabled: true
            },
        },
        stroke: {
            width: 2,
            curve: 'straight'
        },
        fill: {
            opacity: 0.2,
        },
        series: [{
            name: 'Unique Visitors',
            data: sparkDataVisits
        }],
        colors: [ins('primary')],
        yaxis: {
            min: 0
        },
        title: {
            text: '12,520',
            offsetX: 0,
            style: {
                fontSize: '20px',
                fontWeight: 600
            }
        },
        subtitle: {
            text: 'Visitors',
            offsetX: 0,
            style: {
                fontSize: '14px',
                fontWeight: 500,
            }
        }
    })
})

new CustomApexChart({
    selector: '#spark2',
    options: () => ({
        chart: {
            type: 'area',
            height: 160,
            sparkline: {
                enabled: true
            },
        },
        stroke: {
            width: 2,
            curve: 'straight'
        },
        fill: {
            opacity: 0.2,
        },
        series: [{
            name: 'Page Views',
            data: sparkDataViews
        }],
        colors: [ins('secondary')],
        yaxis: {
            min: 0
        },
        title: {
            text: '32,870',
            offsetX: 0,
            style: {
                fontSize: '20px',
                fontWeight: 600
            }
        },
        subtitle: {
            text: 'Page Views',
            offsetX: 0,
            style: {
                fontSize: '14px',
                fontWeight: 500,
            }
        }
    })
})

new CustomApexChart({
    selector: '#spark3',
    options: () => ({
        chart: {
            type: 'area',
            height: 160,
            sparkline: {
                enabled: true
            },
        },
        stroke: {
            width: 2,
            curve: 'straight'
        },
        fill: {
            opacity: 0.2,
        },
        series: [{
            name: 'Bounce Rate',
            data: sparkDataBounce
        }],
        colors: [ins('danger')],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        yaxis: {
            min: 0
        },
        title: {
            text: '21.0%',
            offsetX: 0,
            style: {
                fontSize: '20px',
                fontWeight: 600
            }
        },
        subtitle: {
            text: 'Bounce Rate',
            offsetX: 0,
            style: {
                fontSize: '14px',
                fontWeight: 500,
            }
        }
    })
})

new CustomApexChart({
    selector: '#chart1',
    options: () => ({
        chart: {
            type: 'line',
            width: 140,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        series: [{data: [10, 30, 50, 25, 60, 70, 55, 35, 45, 20, 65]}],
        colors: [ins('purple')],
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    })
})

new CustomApexChart({
    selector: '#chart2',
    options: () => ({
        chart: {
            type: 'line',
            width: 140,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        series: [{data: [20, 35, 15, 30, 40, 60, 70, 45, 50, 55, 25]}],
        colors: [ins('info')],
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    })
})

new CustomApexChart({
    selector: '#chart3',
    options: () => ({
        chart: {
            type: 'line',
            width: 140,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        series: [{data: [5, 15, 25, 20, 35, 45, 30, 25, 15, 10, 40]}],
        colors: [ins('gray')],
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    })
})

new CustomApexChart({
    selector: '#chart4',
    options: () => ({
        chart: {
            type: 'line',
            width: 140,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        series: [{data: [40, 60, 50, 70, 55, 30, 20, 15, 10, 25, 35]}],
        colors: [ins('warning')],
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    })
})

new CustomApexChart({
    selector: '#chart5',
    options: () => ({
        chart: {
            type: 'bar',
            width: 100,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        series: [{data: [18, 28, 32, 22, 41, 36, 20, 15, 27, 33, 25]}],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        colors: [ins('purple')],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    })
})

new CustomApexChart({
    selector: '#chart6',
    options: () => ({
        chart: {
            type: 'bar',
            width: 100,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        series: [{data: [10, 25, 20, 35, 30, 40, 45, 50, 55, 60, 48]}],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        colors: [ins('info')],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    })
})

new CustomApexChart({
    selector: '#chart7',
    options: () => ({
        chart: {
            type: 'bar',
            width: 100,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        series: [{data: [50, 42, 36, 28, 20, 18, 25, 32, 40, 46, 51]}],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        colors: [ins('gray')],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    })
})

new CustomApexChart({
    selector: '#chart8',
    options: () => ({
        chart: {
            type: 'bar',
            width: 100,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        series: [{data: [12, 18, 25, 30, 24, 28, 36, 42, 39, 44, 33]}],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        colors: [ins('warning')],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    })
})