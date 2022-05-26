/**
 * Created by zzz on 2017/12/2.
 */


var flowoption = {
    title: {
        x: 'center',
        align: 'right'
    },
    grid: {
        bottom: 35,
        left: 55,
        right: 15,
        top: 40
    },
    toolbox: {
        feature: {
            dataZoom: {
                yAxisIndex: 'none'
            },
            restore: {},
            saveAsImage: {}
        }
    },
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'cross',
            animation: false,
            label: {
                backgroundColor: '#505765'
            }
        }
    },


    xAxis: {
        type: 'category',
        splitLine: {
            lineStyle: {
                type: 'dashed'
            }
        }
    },
    yAxis: [
        {
            type: 'value'
        }
    ],
    series: []
};

var pcpoption = {
    title: {
        x: 'center',
        align: 'right'
    },
    grid: {
        bottom: 35,
        left: 55,
        right: 15,
        top: 40
    },
    toolbox: {
        feature: {
            dataZoom: {
                yAxisIndex: 'none'
            },
            restore: {},
            saveAsImage: {}
        }
    },
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'cross',
            animation: false,
            label: {
                backgroundColor: '#505765'
            }
        }
    },


    xAxis: [
        {
            type: 'category',
            boundaryGap: false,
            axisLine: {onZero: false},
            data: []
        }
    ],
    yAxis: [
        {
            type: 'value'
        }
    ],
    series: []
};

var pcpchart = echarts.init(document.getElementById('mychart1'));
pcpchart.setOption(pcpoption);

var flowchart = echarts.init(document.getElementById('mychart2'));
flowchart.setOption(flowoption);

// $.get("/wms/Public/modeloutput/00002_1_1.json", function (data) {
//     // 填入数据
//     mychart.setOption({
//         series: [{
//             data: data
//         }]
//     });
// });


function reloadflowChart(pvar, guages, type) {
    var jqxhr = $.getJSON("/wms/qwadmin/HMS/retrieveflowData", "id=" + pvar + "&guages=" + guages + "&type=" + type, function (data) {

        flowchart.setOption({
            title: {
                x: 'center',
                align: 'right'
            },
            legend: {
                show: true,
                left: 20,
                top: 10,
                x: 'left',
                data: data.legend,
                orient: 'horizontal'
            },
            grid: {
                bottom: 30,
                left: 75,
                right: 20,
                top: 40
            },
            toolbox: {
                right: 30,
                feature: {
                    dataZoom: {
                        yAxisIndex: 'none'
                    },
                    restore: {},
                    saveAsImage: {}
                }
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    animation: false,
                    label: {
                        backgroundColor: '#505765'
                    }
                }
            },

            xAxis: {
                type: 'time',
                splitLine: {
                    lineStyle: {
                        type: 'dashed'
                    }
                }
            },
            yAxis: [
                {
                    name: "Discharge(m^3/s)",
                    type: 'value',
                    nameGap:40,
                    nameLocation:"middle"
                }
            ],
            series: data.series
        }, true);
    });

    return 0;
}

function reloadflowChartf(pvar, guages, type) {
    var jqxhr = $.getJSON("/wms/qwadmin/HMS/retrieveflowDataf", "id=" + pvar + "&guages=" + guages + "&type=" + type, function (data) {

        flowchart.setOption({
            title: {
                x: 'center',
                align: 'right'
            },
            legend: {
                show: true,
                left: 20,
                top: 10,
                x: 'left',
                data: data.legend,
                orient: 'horizontal'
            },
            grid: {
                bottom: 30,
                left: 75,
                right: 20,
                top: 40
            },
            toolbox: {
                right: 30,
                feature: {
                    dataZoom: {
                        yAxisIndex: 'none'
                    },
                    restore: {},
                    saveAsImage: {}
                }
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    animation: false,
                    label: {
                        backgroundColor: '#505765'
                    }
                }
            },

            xAxis: {
                type: 'time',
                splitLine: {
                    lineStyle: {
                        type: 'dashed'
                    }
                }
            },
            yAxis: [
                {
                    name: "Discharge(m^3/s)",
                    type: 'value',
                    nameGap:40,
                    nameLocation:"middle"
                }
            ],
            series: data.series
        }, true);
    });

    return 0;
}
function reloadpcpChart(pvar, guages, type) {
    var jqxhr = $.getJSON("/wms/qwadmin/HMS/retrievepcpData", "id=" + pvar + "&guages=" + guages + "&type=" + type, function (data) {

        pcpchart.setOption({
            title: {
                x: 'center',
                align: 'right'
            },
            legend: {
                show: true,
                left: 20,
                top: 10,
                x: 'left',
                data: data.legend,
                orient: 'horizontal'
            },
            grid: {
                bottom: 30,
                left: 75,
                right: 20,
                top: 40
            },
            toolbox: {
                right: 30,
                feature: {
                    dataZoom: {
                        yAxisIndex: 'none'
                    },
                    restore: {},
                    saveAsImage: {}
                }
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    animation: false,
                    label: {
                        backgroundColor: '#505765'
                    }
                }
            },

            xAxis: {
                type: 'time',
                splitLine: {
                    lineStyle: {
                        type: 'dashed'
                    }
                },
                min: data.dates[0],
                max: data.dates[data.dates.length - 1]
            },
            yAxis: [
                {
                    name: "Precipitation(mm)",
                    type: 'value',
                    nameGap:40,
                    nameLocation:"middle"
                }
            ],
            series: data.series
        }, true);
    });

    return 0;
}

function reloadpcpChartf(pvar, guages, type) {
    var jqxhr = $.getJSON("/wms/qwadmin/HMS/retrievepcpDataf", "id=" + pvar + "&guages=" + guages + "&type=" + type, function (data) {

        pcpchart.setOption({
            title: {
                x: 'center',
                align: 'right'
            },
            legend: {
                show: true,
                left: 20,
                top: 10,
                x: 'left',
                data: data.legend,
                orient: 'horizontal'
            },
            grid: {
                bottom: 30,
                left: 75,
                right: 20,
                top: 40
            },
            toolbox: {
                right: 30,
                feature: {
                    dataZoom: {
                        yAxisIndex: 'none'
                    },
                    restore: {},
                    saveAsImage: {}
                }
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    animation: false,
                    label: {
                        backgroundColor: '#505765'
                    }
                }
            },

            xAxis: {
                type: 'time',
                splitLine: {
                    lineStyle: {
                        type: 'dashed'
                    }
                }
            },
            yAxis: [
                {
                    name: "Precipitation(mm)",
                    type: 'value',
                    nameGap:40,
                    nameLocation:"middle"
                }
            ],
            series: data.series
        }, true);
    });

    return 0;
}

