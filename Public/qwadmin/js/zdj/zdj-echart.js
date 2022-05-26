/**
 * Created by zzz on 2017/12/2.
 */


var option = {
    title: {
        x: 'center',
        align: 'right'
    },
    grid: {
        bottom: 80
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

    dataZoom: [
        {
            show: true,
            realtime: true,
            start: 65,
            end: 85
        },
        {
            type: 'inside',
            realtime: true,
            start: 65,
            end: 85
        }
    ],
    xAxis: [
        {
            type: 'category',
            boundaryGap: false,
            axisLine: {onZero: false},
            data: dates
        }
    ],
    yAxis: [
        {
            name: '流量(m^3/s)',
            type: 'value'
        }
    ],
    series: []
};


var mychart = echarts.init(document.getElementById('mychart'));
mychart.setOption(option);

// $.get("/wms/Public/modeloutput/00002_1_1.json", function (data) {
//     // 填入数据
//     mychart.setOption({
//         series: [{
//             data: data
//         }]
//     });
// });


function reloadChart(pvar, guage, scens) {
    var jqxhr = $.getJSON("/wms/qwadmin/index/getdatas", "pvar=" + pvar + "&guage=" + guage + "&scens=" + scens, function (data) {

        var s = $("#myselect").val();
        var name = "";
        switch (s) {
            case "1":
                name = "Flow (cms)";
                break;
            case  "2":
                name = "泥沙(tons)";
                break;
            case  "3":
                name = "Total-N (kg)";
                break;
            case  "4":
                name = "有机氮(kg)";
                break;
            case  "5":
                name = "无机氮(kg)";
                break;
            case  "6":
                name = "总磷(kg)";
                break;
            case  "7":
                name = "降水(mm)";
                break;
            case  "8":
                name = "温度(C)";
                break;
        }
        mychart.setOption({
            title: {
                x: 'center',
                align: 'right'
            },
            grid: {
                bottom: 80
            },
            legend: {
                show: true,
                left: 20,
                top: 10,
                x: 'left',
                data: data.legend,
                orient: 'horizontal'
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

            dataZoom: [
                {
                    show: true,
                    realtime: true,
                    start: 65,
                    end: 85
                },
                {
                    type: 'inside',
                    realtime: true,
                    start: 65,
                    end: 85
                }
            ],
            xAxis: [
                {
                    type: 'category',
                    boundaryGap: false,
                    axisLine: {onZero: false},
                    data: dates
                }
            ],
            yAxis: [
                {
                    nameLocation: 'middle',
                    nameGap: 58,
                    name: name,
                    type: 'value'
                }
            ],
            series: data.series
        }, true);
    });

    return 0;
}