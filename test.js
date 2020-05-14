function aa($a){
    $(document).ready(function() {
        htmlobj = $.ajax({
            method: "GET",
            url: "test.php",
            async: false
        });

        msg = JSON.parse(htmlobj.responseText);
        Bet_number = msg.body.data[0].amount;  

        var chart = {
            type: 'spline',
            animation: Highcharts.svg, // don't animate in IE < IE 10.
            marginRight: 10,
            events: {
                load: function() {
                    var series = this.series[0];
                    setInterval(function() {

                        htmlobj = $.ajax({
                            url: "test.php",
                            async: false
                        });
                        msg1 = JSON.parse(htmlobj.responseText);
                        Bet_number1 = msg1.body.data[0].amount;
                        console.log(msg1);
                        for (a = 0; a >= 0; a--) {
                            var x = (new Date(msg1.body.data[a].creation_date)).getTime() - 10800000,
                                y = parseInt(msg1.body.data[60].amount);
                            series.addPoint([x, y], true, true);
                            console.log(x, y);
                        }
                        console.log(111);
                    }, 120000); //一分鐘呼叫一次新的數據

                }
            }
        };
        var title = {
            //text: '最後更新時間:'+ Y+M+D+h+m
            text: 'AIO總人數'
        }
        var xAxis = {
            type: 'datetime',

            tickInterval: 600000 //一個區間10分鐘
        };
        var yAxis = {
            title: {
                text: '人數'
            },

            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080/',
                dashStyle: 'longdashdot',
                value: 5.5
            }]
        };

        var tooltip = {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                    Highcharts.numberFormat(this.y);

            }
        };
        var plotOptions = {
            area: {
                pointStart: 1940,
                marker: {
                    enabled: false,
                    symbol: 'circle',
                    radius: 2,
                    states: {
                        hover: {
                            enabled: true
                        }
                    }
                }
            }
        };
        var legend = {
            enabled: false
        };
        var exporting = {
            enabled: false
        };
        var series = [{
            name: '人數',
            color: 'red',
            data: (function() {
                // generate an array of random data
                var date = new Date(msg.body.data[0].creation_date);
                var data = [],
                    time = date.getTime() - 28800000,
                    i;
                for (i = 0; i <= 60; i++) {
                    data.push({
                        x: time + (i) * 300000,
                        y: parseInt(msg.body.data[i].amount)
                    });
                }
                return data;
            }())
        }];

        var json = {};
        json.chart = chart;
        json.title = title;
        json.tooltip = tooltip;
        json.xAxis = xAxis;
        json.yAxis = yAxis;
        json.legend = legend;
        json.exporting = exporting;
        json.series = series;
        json.plotOptions = plotOptions;


        Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });
        $($a).highcharts(json);

    });

}
        