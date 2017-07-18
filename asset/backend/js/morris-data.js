
$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010',
            iphone: 2666,
            ipad: null,
            itouch: 2647
        }, {
            period: '2010',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441
        }, {
            period: '2010',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501
        }, {
            period: '2010',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689
        }, {
            period: '2011',
            iphone: 6810,
            ipad: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            iphone: 5670,
            ipad: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '2013 Q1',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '2013 Q2',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "sdjhajd Sales",
            value: 12
        },{
            label: "dkfjs Sales",
            value: 20
        },
            {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90,
            c:10
        }, {
            y: '2007',
            a: 75,
            b: 65,
            c:10
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65,
            c:10
        }, {
            y: '2010',
            a: 50,
            b: 40,
            c:10
        }, {
            y: '2011',
            a: 75,
            b: 65,
            c:10
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b','c'],
        labels: ['Series A', 'Series B','Series C'],
        hideHover: 'auto',
        resize: true
    });

    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
            period: '2010',
            iphone: 2666,
            ipad: null,
            itouch: 2647,
            windows: 231
        }, {
            period: '2010 Q2',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441,
            windows: 231
        }, {
            period: '2010 Q3',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501,
            windows: 231
        }, {
            period: '2010 Q4',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689,
            windows: 231
        }, {
            period: '2011 Q1',
            iphone: 6810,
            ipad: 1914,
            itouch: 2293,
            windows: 231
        }, {
            period: '2011 Q2',
            iphone: 5670,
            ipad: 4293,
            itouch: 1881,
            windows: 231
        }, {
            period: '2011 Q3',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588,
            windows: 231
        }, {
            period: '2011 Q4',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175,
            windows: 231
        }, {
            period: '2014 Q1',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028,
            windows: 231
        }, {
            period: '2014 Q2',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791,
            windows: 231
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch', 'windows'],
        labels: ['iPhone', 'iPad', 'iPod Touch', 'Windows'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

});