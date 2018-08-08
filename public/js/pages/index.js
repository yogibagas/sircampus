/*
 *  Document   : index.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Dashboard page
 */

var Index = function() {

    return {
        init: function() {
            /* Mini Bar Charts with jquery.sparkline plugin, for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about */
            var miniChartBarOptions = {
                type: 'bar',
                barWidth: 8,
                barSpacing: 6,
                height: '64px',
                tooltipOffsetX: -25,
                tooltipOffsetY: 20,
                barColor: '#999999',
                tooltipPrefix: '+ ',
                tooltipSuffix: ' Sales',
                tooltipFormat: '{{prefix}}{{value}}{{suffix}}'
            };
            $('#mini-chart-sales').sparkline([8,3,1,5,4,8,9,6,5,7,10,5,8,9], miniChartBarOptions);

            miniChartBarOptions['tooltipSuffix'] = '%';
            $('#mini-chart-brand').sparkline([50,65,70,90,95,110,140,160,190,200,220,230,260], miniChartBarOptions);

            /*
             * With Gmaps.js, Check out examples and documentation at http://hpneo.github.io/gmaps/examples.html
             */

        }
    };
}();