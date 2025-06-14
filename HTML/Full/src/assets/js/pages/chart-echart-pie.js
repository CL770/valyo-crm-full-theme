/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Chart EChart Pie
 * Version: 4.0.1
 */

//
// pie chart
//
new CustomEChart({
    selector: '#echart-pie-basic',
    options: () => ({
        legend: {
            show: false
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            type: "pie", radius: window.innerWidth < 530 ? "60%" : "75%", // ⬆️ Increased radius
            label: {
                color: ins("tertiary-color")
            }, center: ["50%", "50%"], data: [{value: 1200, name: "Facebook", itemStyle: {color: ins("primary")}}, {
                value: 1000, name: "Youtube", itemStyle: {color: ins("danger")}
            }, {value: 800, name: "Twitter", itemStyle: {color: ins("info")}}, {
                value: 600, name: "Linkedin", itemStyle: {color: ins("secondary")}
            }, {value: 400, name: "Github", itemStyle: {color: ins("warning")}}], emphasis: {
                itemStyle: {
                    shadowBlur: 10, shadowOffsetX: 0, shadowColor: ins("tertiary-color", 0.5)
                }
            }
        }], tooltip: {
            trigger: "item",
            padding: [8, 15],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            axisPointer: {type: "none"},
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1,
        }, xs: {series: [{radius: "45%"}]}, sm: {series: [{radius: "60%"}]}
    })
})


//
// doughnut chart
//
new CustomEChart({
    selector: '#echart-doughnut-pie-basic',
    options: () => ({
        legend: {
            bottom: 0, left: 'center', textStyle: {
                color: ins('tertiary-color')
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            type: 'pie', radius: ['60%', '80%'], center: ['50%', '45%'], avoidLabelOverlap: false, label: {
                show: false, position: 'center'
            }, labelLine: {
                show: false
            }, data: [{value: 1200, name: 'FB', itemStyle: {color: ins('primary')}}, {
                value: 1000, name: 'YT', itemStyle: {color: ins('danger')}
            }, {value: 800, name: 'TX', itemStyle: {color: ins('info')}}, {
                value: 600, name: 'LD', itemStyle: {color: ins('secondary')}
            }, {value: 400, name: 'GT', itemStyle: {color: ins('warning')}}]
        }], tooltip: {
            trigger: 'item',
            padding: [8, 15],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            axisPointer: {type: "none"},
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1,
        }
    })
})


//
// doughnut rounded chart
//
new CustomEChart({
    selector: '#echart-doughnut-rounded-pie-basic',
    options: () => ({
        legend: {
            orient: 'vertical', left: 'left', textStyle: {
                color: ins('tertiary-color')
            }
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            type: 'pie',
            radius: ['55%', '90%'],
            center: window.innerWidth < 530 ? ['65%', '55%'] : ['50%', '55%'],
            avoidLabelOverlap: false,
            itemStyle: {
                borderRadius: 10, borderColor: ins('light'), borderWidth: 2
            },
            label: {
                show: false, position: 'center'
            },
            labelLine: {
                show: false
            },
            data: [{value: 1200, name: 'Starter', itemStyle: {color: ins('primary')}}, {
                value: 1000, name: 'Basic', itemStyle: {color: ins('danger')}
            }, {value: 800, name: 'Optimal', itemStyle: {color: ins('info')}}, {
                value: 600, name: 'Business', itemStyle: {color: ins('secondary')}
            }, {value: 400, name: 'Premium', itemStyle: {color: ins('warning')}}]
        }], tooltip: {
            trigger: 'item',
            padding: [8, 15],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            axisPointer: {type: "none"},
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1,
        }, xs: {series: [{center: ['65%', '55%']}]}, sm: {series: [{center: ['50%', '55%']}]}
    })
})


//
// multiple pie chart
//
const leftChartData = [{value: 1048, name: 'Starter', itemStyle: {color: ins('danger')}}, {
    value: 735, name: 'Basic', itemStyle: {color: ins('primary')}
}, {value: 580, name: 'Optimal', itemStyle: {color: ins('secondary')}}, {
    value: 484, name: 'Business', itemStyle: {color: ins('warning')}
}, {value: 300, name: 'Premium', itemStyle: {color: ins('success')}}, {
    value: 300, name: 'Platinum', itemStyle: {color: ins('info')}
}];

const rightChartData = [{value: 1048, name: 'Facebook', itemStyle: {color: ins('primary')}}, {
    value: 735, name: 'Youtube', itemStyle: {color: ins('danger')}
}, {value: 580, name: 'Twitter', itemStyle: {color: ins('info')}}, {
    value: 484, name: 'Linkedin', itemStyle: {color: ins('secondary')}
}, {value: 300, name: 'Github', itemStyle: {color: ins('warning')}}];

new CustomEChart({
    selector: '#echart-pie-multiple-chart',
    options: () => ({
        tooltip: {
            trigger: 'item',
            padding: [8, 15],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            axisPointer: {type: "none"},
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1,
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            type: 'pie', radius: window.innerWidth < 450 ? '55%' : '65%', center: ['30%', '50%'], // Moved slightly toward center
            data: leftChartData, label: {show: false}
        }, {
            type: 'pie', radius: window.innerWidth < 450 ? '55%' : '65%', center: ['70%', '50%'], // Moved slightly toward center
            avoidLabelOverlap: false, label: {show: false}, data: rightChartData
        }], xs: {
            series: [{radius: '55%'}, {radius: '55%'}]
        }, sm: {
            series: [{radius: '65%'}, {radius: '65%'}]
        }
    })
})


//
// pie chart label alignment
//
const data = [
    {value: 850, name: 'Starter', itemStyle: {color: ins('primary')}}, {
        value: 750, name: 'Starter Pro', itemStyle: {color: ins('secondary')}
    }, {value: 457, name: 'Basic', itemStyle: {color: ins('success')}}, {
        value: 654, name: 'Optimal', itemStyle: {color: ins('info')}
    }, {value: 447, name: 'Business', itemStyle: {color: ins('warning')}}, {
        value: 682, name: 'Classic addition', itemStyle: {color: ins('dark')}
    }, {value: 471, name: 'Premium', itemStyle: {color: ins('purple')}}, {
        value: 524, name: 'Platinum', itemStyle: {color: ins('light')}
    }];

new CustomEChart({
    selector: '#echart-pie-label-align-chart',
    options: () => ({
        title: [{
            text: 'Pie Label Align Chart',
            left: 'center',
            textStyle: {color: ins('tertiary-color'), fontSize: 13, fontWeight: '600'}
        }, {
            subtext: 'alignTo: "labelLine"',
            left: '50%',
            top: '85%',
            textAlign: 'center',
            subtextStyle: {color: ins('tertiary-color')}
        }], tooltip: {
            trigger: 'item',
            padding: [8, 15],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            axisPointer: {type: "none"},
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1
        }, series: [{
            type: 'pie', radius: window.innerWidth < 530 ? '45%' : '60%', center: ['50%', '50%'], data, label: {
                position: 'outer', alignTo: 'labelLine', bleedMargin: 5, color: ins('tertiary-color')
            }, left: '5%', right: '5%', top: 0, bottom: 0
        }], xs: {series: [{radius: '45%'}]}, sm: {series: [{radius: '60%'}]}
    })
})


//
// pie nightingale chart
//
new CustomEChart({
    selector: '#echart-pie-nightingale-chart',
    options: () => ({
        // legend: {
        //     top: 'bottom'
        // },
        tooltip: {
            trigger: 'item',
            padding: [8, 15],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            axisPointer: {type: "none"},
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1,
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            name: 'Nightingale Chart',
            type: 'pie',
            radius: [50, 130],
            center: ['50%', '50%'],
            roseType: 'area',
            itemStyle: {
                borderRadius: 8
            },
            label: {
                color: ins('tertiary-color')
            },
            data: [{value: 40, name: 'Rose 1'}, {value: 38, name: 'Rose 2'}, {value: 32, name: 'Rose 3'}, {
                value: 30, name: 'Rose 4'
            }, {value: 28, name: 'Rose 5'}, {value: 26, name: 'Rose 6'}, {value: 22, name: 'Rose 7'}, {
                value: 18, name: 'Rose 8'
            }]
        }]
    })
})


//
// pie chart edge align
//
const data1 = [{value: 850, name: 'Starter', itemStyle: {color: ins('primary')}}, {
    value: 750, name: 'Starter Pro', itemStyle: {color: ins('secondary')}
}, {value: 457, name: 'Basic', itemStyle: {color: ins('success')}}, {
    value: 654, name: 'Optimal', itemStyle: {color: ins('info')}
}, {value: 447, name: 'Business', itemStyle: {color: ins('warning')}}, {
    value: 682, name: 'Classic addition', itemStyle: {color: ins('dark')}
}, {value: 471, name: 'Premium', itemStyle: {color: ins('purple')}}, {
    value: 524, name: 'Platinum', itemStyle: {color: ins('light')}
}];

new CustomEChart({
    selector: '#echart-pie-edge-align-chart',
    options: () => ({
        title: [{
            text: 'Pie Edge Align Chart',
            left: 'center',
            textStyle: {color: ins('body-color'), fontSize: 13, fontWeight: '600'}
        }, {
            subtext: 'alignTo: "edge"',
            left: '50%',
            top: '85%',
            textAlign: 'center',
            subtextStyle: {color: ins('body-color')}
        }], tooltip: {
            trigger: 'item',
            padding: [8, 15],
            backgroundColor: ins("secondary-bg"),
            borderColor: ins("border-color"),
            textStyle: {color: ins("light-text-emphasis")},
            borderWidth: 1,
            transitionDuration: 0.125,
            axisPointer: {type: "none"},
            shadowBlur: 2,
            shadowColor: "rgba(76, 76, 92, 0.15)",
            shadowOffsetX: 0,
            shadowOffsetY: 1,
        }, textStyle: {
            fontFamily: getComputedStyle(document.body).fontFamily
        }, series: [{
            type: 'pie', radius: window.innerWidth < 530 ? '45%' : '60%', center: ['50%', '50%'], data:data1, label: {
                position: 'outer', alignTo: 'edge', margin: 20, color: ins('tertiary-color')
            }, left: '5%', right: '5%', top: 0, bottom: 0
        }], xs: {series: [{radius: '45%'}]}, sm: {series: [{radius: '60%'}]}
    })
})