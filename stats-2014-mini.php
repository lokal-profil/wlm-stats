<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Wiki Loves Monuments statistics</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" type="text/css" href="wlm.css" />
<script language="javascript" type="text/javascript" src="modules/jquery.js"></script>
<script language="javascript" type="text/javascript" src="modules/jquery.flot.js"></script>
</head>

<body style="background-color: white;">
<div id="dates_graph" style="width: 300px;height: 150px;"></div>
    <script type="text/javascript">
    $(function () {
        var dates_graph_data_2014 = [["1314403200000", 1], ["1345680000000", 4], ["1380412800000", 1], ["1386028800000", 1], ["1396396800000", 1], ["1397347200000", 1], ["1400457600000", 1], ["1407369600000", 2], ["1407456000000", 1], ["1408406400000", 1], ["1408752000000", 3], ["1408838400000", 3], ["1408924800000", 16], ["1409011200000", 22], ["1409097600000", 58], ["1409184000000", 46], ["1409270400000", 48], ["1409356800000", 10], ["1409443200000", 837], ["1409529600000", 10066], ["1409616000000", 6531], ["1409702400000", 6595], ["1409788800000", 5285], ["1409875200000", 5430], ["1409961600000", 6534], ["1410048000000", 6925], ["1410134400000", 5187], ["1410220800000", 4659], ["1410307200000", 5070], ["1410393600000", 4157], ["1410480000000", 5416], ["1410566400000", 5198], ["1410652800000", 6586], ["1410739200000", 6604], ["1410825600000", 7280], ["1410912000000", 7816], ["1410998400000", 5855], ["1411084800000", 5128], ["1411171200000", 6786], ["1411257600000", 7939], ["1411344000000", 7570], ["1411430400000", 7779], ["1411516800000", 6979], ["1411603200000", 8705], ["1411689600000", 9844], ["1411776000000", 10181], ["1411862400000", 12936], ["1411948800000", 16419], ["1412035200000", 24490], ["1412121600000", 2690], ["1412208000000", 1791], ["1412294400000", 2082], ["1412380800000", 2461], ["1412467200000", 2187], ["1412553600000", 2046], ["1412640000000", 2472], ["1412726400000", 3088], ["1412812800000", 3423], ["1412899200000", 4224], ["1412985600000", 3894], ["1413072000000", 4663], ["1413158400000", 5635], ["1413244800000", 7117], ["1413331200000", 8647], ["1413417600000", 1856], ["1413504000000", 1206], ["1413590400000", 1697], ["1413676800000", 2711], ["1413763200000", 941], ["1413849600000", 1548], ["1413936000000", 1984], ["1414022400000", 1124], ["1414108800000", 1543], ["1414195200000", 1827], ["1414281600000", 1328], ["1414368000000", 1329], ["1414454400000", 1323], ["1414540800000", 1625], ["1414627200000", 2651], ["1414713600000", 3422], ["1414800000000", 29]];
        
        var dates_graph_data_2013 = [["1409443200000", 409], ["1409529600000", 14345], ["1409616000000", 8265], ["1409702400000", 9208], ["1409788800000", 8663], ["1409875200000", 7886], ["1409961600000", 8220], ["1410048000000", 8453], ["1410134400000", 9373], ["1410220800000", 9606], ["1410307200000", 8279], ["1410393600000", 9629], ["1410480000000", 7791], ["1410566400000", 8388], ["1410652800000", 8160], ["1410739200000", 9568], ["1410825600000", 8790], ["1410912000000", 9468], ["1410998400000", 8790], ["1411084800000", 8381], ["1411171200000", 8992], ["1411257600000", 10009], ["1411344000000", 12367], ["1411430400000", 9869], ["1411516800000", 13156], ["1411603200000", 14209], ["1411689600000", 15964], ["1411776000000", 15085], ["1411862400000", 19514], ["1411948800000", 33069], ["1412035200000", 41951], ["1412121600000", 3711]];

        var dates_graph_data_2012 = [["1409443200000", 525], ["1409529600000", 7641], ["1409616000000", 8638], ["1409702400000", 6954], ["1409788800000", 7276], ["1409875200000", 7946], ["1409961600000", 6513], ["1410048000000", 7268], ["1410134400000", 8386], ["1410220800000", 10372], ["1410307200000", 10613], ["1410393600000", 8214], ["1410480000000", 8694], ["1410566400000", 9046], ["1410652800000", 8725], ["1410739200000", 8627], ["1410825600000", 11119], ["1410912000000", 9520], ["1410998400000", 8408], ["1411084800000", 7387], ["1411171200000", 8284], ["1411257600000", 10391], ["1411344000000", 10656], ["1411430400000", 14308], ["1411516800000", 11642], ["1411603200000", 12848], ["1411689600000", 13158], ["1411776000000", 17252], ["1411862400000", 20409], ["1411948800000", 26966], ["1412035200000", 47387], ["1412121600000", 5554]];

        var dates_graph_data_2011 = [["1409443200000", 222], ["1409529600000", 2373], ["1409616000000", 1560], ["1409702400000", 2211], ["1409788800000", 3473], ["1409875200000", 3333], ["1409961600000", 2968], ["1410048000000", 3050], ["1410134400000", 2850], ["1410220800000", 3146], ["1410307200000", 3546], ["1410393600000", 4306], ["1410480000000", 4069], ["1410566400000", 3755], ["1410652800000", 3378], ["1410739200000", 4762], ["1410825600000", 3596], ["1410912000000", 4648], ["1410998400000", 7038], ["1411084800000", 5095], ["1411171200000", 4185], ["1411257600000", 4669], ["1411344000000", 4390], ["1411430400000", 4807], ["1411516800000", 6123], ["1411603200000", 8159], ["1411689600000", 6691], ["1411776000000", 9158], ["1411862400000", 10408], ["1411948800000", 13188], ["1412035200000", 21971], ["1412121600000", 927]];
       
        var dates_graph = $("#dates_graph");
        var dates_graph_data = [{ data: dates_graph_data_2014, label: "2014"}, { data: dates_graph_data_2013, label: "2013"}, { data: dates_graph_data_2012, label: "2012"}, { data: dates_graph_data_2011, label: "2011"}];
        var dates_graph_options = { xaxis: { mode: "time", min: (new Date("2014/08/31")).getTime(), max: (new Date("2014/11/01")).getTime() }, lines: { show: true }, points: { show: true }, legend: { noColumns: 4, position: "nw" }, grid: { hoverable: true }, clickable: true, hoverable: true };
        $.plot(dates_graph, dates_graph_data, dates_graph_options);
    });
    
    //from http://people.iola.dk/olau/flot/examples/interacting.html
    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 12,
            border: '1px solid #fdd',
            padding: '2px',
            'background-color': '#fee',
            opacity: 0.80
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#dates_graph").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));
        
        if (item) {
            if (previousPoint != item.datapoint) {
                previousPoint = item.datapoint;
                
                $("#tooltip").remove();
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);
                
                showTooltip(item.pageX, item.pageY,
                            "y = "+Math.round(y));
            }
        } else {
            $("#tooltip").remove();
            previousPoint = null;            
        }
    });

    </script>
</body>
</html>