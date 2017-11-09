
<div id="datavis_intro">
    <div id="datavis_form">
        <h4>   <?php echo t("Select dates"); ?></h4>
        <?php
        print $my_form;
        ?>


    </div>
    <div id="datavis_downloadlinks">
        <?php if (isset($content_carbon)): ?>
            <strong>
                <?php
                echo t("Download data");
                $carbon_api_address = variable_get('datavis_carbon_api');
                $par_api = variable_get('datavis_par_api');
                $temp_api = variable_get('datavis_temp_api');
                $tsoil_api = variable_get('datavis_tsoil_api');
                $wsoil_api = variable_get('datavis_wsoil_api');
                $rh_api = variable_get('datavis_rh_api');
                ?>
            </strong>
            <br>
            <br>

            <div id="links">
                <!--<a href="https://avaa.tdata.fi/smear-services/smeardata.jsp?variables=PAR2,T336,tsoil_A,wsoil_A,RH672,&table=HYY_META&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989&quality=ANY&averaging=30MIN&type=ARITHMETIC"><?php echo t("All Input variables"); ?></a><br>-->
                <a href="<?php echo $carbon_api_address ?>?from=<?php echo $from ?>&to=<?php echo $to ?>"><?php echo t("Carbon flow") ?></a><br>
                <a href="<?php echo $par_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Light Intensity"); ?></a><br>
            </div >
            <div id="links">
                <a href="<?php echo $temp_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Air temperature"); ?></a><br>
                <a href="<?php echo $tsoil_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Soil temperature"); ?></a><br>
            </div>
            <div id="links">
                <a href="<?php echo $wsoil_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Soil moisture"); ?></a><br>
                <a href="<?php echo $rh_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Air Humidity"); ?></a><br>
            </div>
        </div>
    <?php endif; ?>
    <div id="datavis_intro_txt">
        <?php
        echo $content_intro;
        ?>
    </div>
</div>


<hr>

<div id="datavis_graphrow">
    <div id="datavis_graphdiv">
        <div id="datavis_carbongraph">
        </div>   
    </div>
    <div id="datavis_textdiv"> 

        <?php
        echo $content_carbon;
        ?>
    </div>
    <div id="datavis_linkdiv">
        <p> <?php echo t('Zoom in by adjusting borders'); ?> </p>
         <a href="<?php echo $carbon_api_address ?>?from=<?php echo $from ?>&to=<?php echo $to ?>">  <?php echo t("Download data"); ?></a>
    </div>
</div>
<hr>

<div id="datavis_graphrow">
    <div id="datavis_graphdiv">
        <div id="datavis_pargraph">
        </div>   
    </div>
    <div id="datavis_textdiv"> 
        <?php
        echo $content_par;
        ?>
    </div>
    <div id="datavis_linkdiv">
         <a href="<?php echo $par_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Download data"); ?></a>
    </div>
</div>
<hr>

<div  id="datavis_graphrow">
    <div id="datavis_graphdiv">
        <div id="datavis_tempgraph"></div>
    </div>   

    <div id="datavis_textdiv"> 
        <?php
        echo $content_temp;
        ?>
    </div>
    <div id="datavis_linkdiv">
        <a href="<?php echo $temp_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Download data"); ?></a>
    </div>
</div>
<hr>





<!--<h2>Soil Temperature |  HYY_META.tsoil_A</h2>-->
<div  id="datavis_graphrow" class="graph"  >
    <div id="datavis_graphdiv">
        <div id="datavis_soilgraph"></div> 
    </div>

    <div id="datavis_textdiv">
        <?php
        echo $content_tsoil;
        ?>    </div>
    <div id="datavis_linkdiv">
       <a href="<?php echo $tsoil_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Download data"); ?></a>
    </div>
</div>
<hr>

<div  id="datavis_graphrow" class="graph"  >
    <div id="datavis_graphdiv">
        <div id="datavis_wsoilgraph"></div>
    </div>

    <div id="datavis_textdiv"> 

        <?php
        echo $content_wsoil;
        ?>
    </div>
    <div id="datavis_linkdiv">
        <a href="<?php echo $wsoil_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Download data"); ?></a>

    </div>

</div>

<hr>
<!--Air humidity--> 
<div  id="datavis_graphrow" class="graph"  >
    <div id="datavis_graphdiv">
        <div id="datavis_rhgraph"></div>
    </div>

    <div id="datavis_textdiv"> 

        <?php
        echo $content_rh;
        ?>
    </div>
    <div id="datavis_linkdiv">
        <a href="<?php echo $rh_api?>&from=<?php echo $from ?>%2000:00:00.989&to=<?php echo $to ?>%2000:00:00.989"><?php echo t("Download data"); ?></a>

    </div></div>

<hr>
<div id="datavis_graphrow">

    <div id="datavis_graphdiv">
        <div id="datavis_widgetgraph">
        </div>   
    </div>

    <div id="datavis_textdiv"> 
        <?php
        echo $content_widget;
        ?>
        <select id="series1">
            <option value="carbon"><?php echo t("Carbon flow"); ?></option>
            <option value="photo"><?php echo t("Photosynthesis"); ?></option>
            <option value="stem"><?php echo t("Stem respiration"); ?></option>
            <option value="root"><?php echo t("Root respiration"); ?></option>
            <option value="canopy"><?php echo t("Canopy respiration"); ?></option>
            <option value="par"><?php echo t("Light intensity"); ?></option>
            <option value="temp"><?php echo t("Air temperature"); ?></option>
            <option value="tsoil"><?php echo t("Soil temperature"); ?></option>
            <option value="wsoil"><?php echo t("Soil moisture"); ?></option>
            <option value="rh"><?php echo t("Air humidity"); ?></option>

        </select> 
        <select  id="series2">
            <option value="carbon"><?php echo t("Carbon flow"); ?></option>
            <option value="photo"><?php echo t("Photosynthesis"); ?></option>
            <option value="stem"><?php echo t("Stem respiration"); ?></option>
            <option value="root"><?php echo t("Root respiration"); ?></option>
            <option value="canopy"><?php echo t("Canopy respiration"); ?></option>
            <option value="par"><?php echo t("Light intensity"); ?></option>
            <option value="temp"><?php echo t("Air temperature"); ?></option>
            <option value="tsoil"><?php echo t("Soil temperature"); ?></option>
            <option value="wsoil"><?php echo t("Soil moisture"); ?></option>
            <option value="rh"><?php echo t("Air humidity"); ?></option>

        </select>
        <button  id="plot"><?php echo t("Plot Series"); ?></button> 
        <div id="reg_results_slope"> </div>
        <div id="reg_results_r"> </div>
        <div id="reg_results_r2"> </div>
    </div>

    <div id="datavis_linkdiv">
        <div id ="widget_buttons" style="display:none">
            <div style="text-align:center; width: 480px">
                <button id="ry1"><?php echo t("Linear Regression"); ?></button> 
                <button id="clear"><?php echo t("Clear Line"); ?></button>
            </div>
        </div>

    </div>

</div>
<script>
    (function ($) {
        drawCarbonGraph(Drupal.settings.datavis.carbon_data, 'datavis_carbongraph');
        drawGraph(Drupal.settings.datavis.temp_data, 'datavis_tempgraph', Drupal.settings.datavis.colors.temp_graph_color);
        drawGraph(Drupal.settings.datavis.par_data, 'datavis_pargraph', Drupal.settings.datavis.colors.par_graph_color);
        drawGraph(Drupal.settings.datavis.soil_data, 'datavis_soilgraph', Drupal.settings.datavis.colors.tsoil_graph_color);
        drawGraph(Drupal.settings.datavis.soil_water_data, 'datavis_wsoilgraph', Drupal.settings.datavis.colors.wsoil_graph_color);
        drawGraph(Drupal.settings.datavis.rh_data, 'datavis_rhgraph', Drupal.settings.datavis.colors.rh_graph_color);
        document.getElementById("plot").onclick = function () {
            $("#reg_results_slope").html("");
            $("#reg_results_intercept").html("");
            $("#reg_results_r").html("");
            $("#reg_results_r2").html("");
            document.getElementById("widget_buttons").style.display = 'block';
            var e = document.getElementById("series1");
            var selection1 = e.options[e.selectedIndex].value;
            var e2 = document.getElementById("series2");
            var selection2 = e2.options[e2.selectedIndex].value;

            x_data = getDataSeriesBySelection(selection1);
            y_data = getDataSeriesBySelection(selection2);
            drawLinearRegression(x_data, y_data, selection1, selection2);
        };

        function getDataSeriesBySelection(selection) {
            switch (selection) {
                case 'carbon':
                    return Drupal.settings.datavis.carbon_data;
                    break;
                case 'photo':
                    return Drupal.settings.datavis.carbon_data;
                    break;
                case 'root':
                    return Drupal.settings.datavis.carbon_data;
                    break;
                case 'canopy':
                    return Drupal.settings.datavis.carbon_data;
                    break;
                case 'stem':
                    return Drupal.settings.datavis.carbon_data;
                    break;
                case 'par':
                    return Drupal.settings.datavis.par_data;
                    break;
                case 'temp':
                    return Drupal.settings.datavis.temp_data;
                    break;
                case 'wsoil':
                    return Drupal.settings.datavis.soil_water_data;
                    break;
                case 'rh':
                    return Drupal.settings.datavis.rh_data;
                    break;
                case 'tsoil':
                    return Drupal.settings.datavis.soil_data;
                    break;
            }
        }
        function drawLinearRegression(api_data, api_data2, selection1, selection2) {
            var reg_data = [];
            var title1 = api_data.title;
            var label1 = api_data.label;
            var title2 = api_data2.title;
            var label2 = api_data2.label;
            var i = 0;
            if (selection1 == 'carbon' || selection1 == 'photo' || selection1 == 'stem' || selection1 == 'root' || selection1 == 'canopy') {
                var id = 1;
                switch (selection1) {
                    case 'carbon':
                        id = 1;
                        break;
                    case 'photo':
                        id = 2;
                        title1 = Drupal.settings.datavis.carbon_data_titles.photo_title;
                        label1 = Drupal.settings.datavis.carbon_data_titles.photo_label;
                        break;
                    case 'root':
                        id = 3;
                        title1 = Drupal.settings.datavis.carbon_data_titles.root_title;
                        label1 = Drupal.settings.datavis.carbon_data_titles.root_label;
                        break;
                    case 'canopy':
                        id = 4;
                         title1 = Drupal.settings.datavis.carbon_data_titles.canopy_title;
                        label1 = Drupal.settings.datavis.carbon_data_titles.canopy_label;
                        break;
                    case 'stem':
                        id = 5;
                         title1 = Drupal.settings.datavis.carbon_data_titles.stem_title;
                        label1 = Drupal.settings.datavis.carbon_data_titles.stem_label;
                        break;
                    default:
                        id = 1;

                }
                api_data.data.split('\n').map(function (line) {
                    if (line !== '') {
                        var columns = line.split(','); // get the columns
                        var value = columns[id];
                        var date = columns[0];
                        reg_data[date] = parseFloat(value).toFixed(2);
                    }
                });
            } else {
                api_data.data.split('\n').map(function (line) {
                    var columns = line.split(','); // get the columns
                    if (line !== '') {
                        var value = columns[6];
                        var date = columns[0] + "/";

                        date += (columns[1].length === 1) ? "0" + columns[1] : columns[1];
                        date += "/";
                        date += (columns[2].length === 1) ? "0" + columns[2] : columns[2];
                        date += " ";
                        date += (columns[3].length === 1) ? "0" + columns[3] : columns[3];
                        date += ":";
                        date += (columns[4].length === 1) ? "0" + columns[4] : columns[4];
                        date += ":";
                        date += (columns[5].length === 1) ? "0" + columns[5] : columns[5];
                        reg_data[date] = value;
                    }
                });
            }
            // Second CSV TO ARRAY and merge values by timestamp to reg_array
            var graph_data = [];
            if (selection2 === 'carbon' || selection2 === 'photo' || selection2 === 'stem' || selection2 === 'root' || selection2 === 'canopy') {
                var id = 1;
                switch (selection2) {
                     case 'carbon':
                        id = 1;
                        break;
                    case 'photo':
                        id = 2;
                        title2 = Drupal.settings.datavis.carbon_data_titles.photo_title;
                        label2 = Drupal.settings.datavis.carbon_data_titles.photo_label;
                        break;
                    case 'root':
                        id = 3;
                        title2 = Drupal.settings.datavis.carbon_data_titles.root_title;
                        label2 = Drupal.settings.datavis.carbon_data_titles.root_label;
                        break;
                    case 'canopy':
                        id = 4;
                         title2 = Drupal.settings.datavis.carbon_data_titles.canopy_title;
                        label2 = Drupal.settings.datavis.carbon_data_titles.canopy_label;
                        break;
                    case 'stem':
                        id = 5;
                         title2 = Drupal.settings.datavis.carbon_data_titles.stem_title;
                        label2 = Drupal.settings.datavis.carbon_data_titles.stem_label;
                        break;
                    default:
                        id = 1;

                }
                var newCsv2 = api_data2.data.split('\n').map(function (line) {
                    var columns = line.split(','); // get the columns
                    if (columns.length > 1) {
                        var value2 = parseFloat(columns[id]).toFixed(2);
                        var date = columns[0];
                        var row = []
                        var value1 = reg_data[date];
                        if (isNaN(value1) || isNaN(value2)) {
                        } else {
                            row.push(value1);
                            row.push(value2);
                            graph_data.push(row);
                        }
                    }
                });
            } else {
                var newCsv2 = api_data2.data.split('\n').map(function (line) {
                    var columns = line.split(','); // get the columns
                    if (columns.length > 1) {
                        var value2 = columns[6];
                        var date = columns[0] + "/";
                        date += (columns[1].length === 1) ? "0" + columns[1] : columns[1];
                        date += "/";
                        date += (columns[2].length === 1) ? "0" + columns[2] : columns[2];
                        date += " ";
                        date += (columns[3].length === 1) ? "0" + columns[3] : columns[3];
                        date += ":";
                        date += (columns[4].length === 1) ? "0" + columns[4] : columns[4];
                        date += ":";
                        date += (columns[5].length === 1) ? "0" + columns[5] : columns[5];
                        var row = []
                        var value1 = reg_data[date];
                        if (isNaN(value1) || isNaN(value2)) {
                        } else {
                            row.push(value1);
                            row.push(value2);
                            graph_data.push(row);
                        }
                    }
                });
            }
            var data = graph_data.join('\n');

            var g, regression, clearLines; // defined below
            document.getElementById("ry1").onclick = function () {
                regression(1);
            };

            document.getElementById("clear").onclick = function () {
                $("#reg_results_slope").html("");
                $("#reg_results_intercept").html("");
                $("#reg_results_r").html("");
                $("#reg_results_r2").html("");
                clearLines();
            };

            var coeffs = [null, null, null];
            regression = function (series) {
                // Only run the regression over visible points.
                var range = g.xAxisRange();
                var sum_xy = 0.0, sum_x = 0.0, sum_y = 0.0, sum_x2 = 0.0, sum_y2 = 0.0, num = 0;
                for (var i = 0; i < g.numRows(); i++) {
                    var x = g.getValue(i, 0);
                    if (x < range[0] || x > range[1])
                        continue;
                    var y = g.getValue(i, series);
                    if (y === null || y === undefined)
                        continue;
                    if (y.length == 2) {
                        // using fractions
                        y = y[0] / y[1];
                    }
                    num++;
                    sum_x += x;
                    sum_y += y;
                    sum_xy += x * y;
                    sum_x2 += x * x;
                    sum_y2 += y * y;
                }

                var slope = (num * sum_xy - sum_x * sum_y) / (num * sum_x2 - sum_x * sum_x);
                var intercept = (sum_y - slope * sum_x) / num;

                var r = (num * sum_xy - sum_x * sum_y) / Math.sqrt((num * sum_x2 - sum_x * sum_x) * (num * sum_y2 - sum_y * sum_y));
                var r2 = Math.pow((num * sum_xy - sum_x * sum_y) / Math.sqrt((num * sum_x2 - sum_x * sum_x) * (num * sum_y2 - sum_y * sum_y)), 2);

                coeffs[series] = [intercept, slope];
                if (typeof (console) != 'undefined') {
                    $("#reg_results_slope").html("<b>Slope:</b> " + slope);
                    $("#reg_results_intercept").html("<b>Intercept:</b> " + r);
                    $("#reg_results_r").html("<b>R:</b> " + r);
                    $("#reg_results_r2").html("<b>R²:</b> " + r2);
                }
                g.updateOptions({}); // forces a redraw.
            };

            clearLines = function () {
                for (var i = 0; i < coeffs.length; i++)
                    coeffs[i] = null;
                g.updateOptions({});
            };

            function drawLines(ctx, area, layout) {
                if (typeof (g) == 'undefined') {
                    return;
                }
                // won't be set on the initial draw.

                var range = g.xAxisRange();
                for (var i = 0; i < coeffs.length; i++) {
                    if (!coeffs[i])
                        continue;
                    var a = coeffs[i][1];
                    var b = coeffs[i][0];
                    var x1 = range[0];
                    var y1 = a * x1 + b;
                    var x2 = range[1];
                    var y2 = a * x2 + b;
                    var p1 = g.toDomCoords(x1, y1);
                    var p2 = g.toDomCoords(x2, y2);

                    var color = Drupal.settings.datavis.colors.widget_line_color;
                    ctx.save();
                    ctx.strokeStyle = color;
                    ctx.lineWidth = 4.0;

                    ctx.beginPath();
                    ctx.moveTo(p1[0], p1[1]);
                    ctx.lineTo(p2[0], p2[1]);
                    ctx.closePath();
                    ctx.stroke();
                    ctx.restore();
                }
            }
          
            g = new Dygraph(
                    document.getElementById("datavis_widgetgraph"),
                    data,
                    {
                        title: title1 + " vs. " + title2,
                        ylabel: label1,
                        xlabel: label2,
                        underlayCallback: drawLines,
                        drawPoints: true,
                        drawAxesAtZero: true,
                        strokeWidth: 0.0,
                        pointSize: 1.5,
                        color: Drupal.settings.datavis.colors.widget_graph_color,
                    }
            );
        }
        function drawCarbonGraph(data, graph_div_id) {
            var lines = data.data.split("\n");
            var data_array = [];
            // This loop parses data from Avaa API to Dygraph native array. 
            if (lines.length > 3) {
                for (var idx = 0; idx < lines.length; idx++) {
                    // Special processing for every row except the header.
                    if (idx > 0) {
                        var line = lines[idx];
                        // Oftentimes there's a blank line at the end. Ignore it.
                        if (line.length == 0) {
                            continue;
                        }
                        var row = line.split(",");
                        var result_row = row;
                        result_row[0] = new Date(row[0]); // Turn the string date into a Date.
                        for (var rowIdx = 1; rowIdx < row.length; rowIdx++) {
                            // Turn "123" into 123.
                            result_row[rowIdx] = (parseFloat(row[rowIdx]));
                        }
                        data_array.push(result_row);
                    } else {
                        var line = lines[idx];
                        var row = line.split(",");

                        var header = row;
                    }

                }
                var g = new Dygraph(
                        document.getElementById(graph_div_id),
                        data_array, {
                            ylabel: data.label,
                            title: data.title,
                            labels: header,
                            showRangeSelector: true,
                            series: {
                                "carbonflow": {color: Drupal.settings.datavis.colors.carbon_graph_color},
                                "photosynthesis": {color: Drupal.settings.datavis.colors.carbon_photo_color},
                                "stem_respiration": {color: Drupal.settings.datavis.colors.carbon_stem_color},
                                "root_respiration": {color: Drupal.settings.datavis.colors.carbon_root_color},
                                "canopy_respiration": {color: Drupal.settings.datavis.colors.carbon_canopy_color},
                            },
                            plotter: multiColumnBarPlotter
                        }
                );
                g.resize(450, 300);

            } else {
                noDataGraph(graph_div_id);
            }

        }
        function noDataGraph(graph_div_id) {
            var g_empty;
            var data_empty = [];

            data_empty = ",\n0,0";
            g_empty = new Dygraph(
                    document.getElementById(graph_div_id),
                    data_empty, {
                        drawYAxis: false,
                        title: Drupal.settings.datavis.no_data_text,
                        pointSize: 0,
                        highlightCircleSize: 0,
                        showLabelsOnHighlight: false
                    });

        }
        function drawGraph(data, graph_div_id, color) {

            var lines = data.data.split("\n");
            if (lines.length > 3) {


                var data_array = [];
                // This loop parses data from Avaa API to Dygraph native array. 

                for (var idx = 0; idx < lines.length; idx++) {
                    // Special processing for every row except the header.
                    if (idx > 0) {
                        var line = lines[idx];
                        // Oftentimes there's a blank line at the end. Ignore it.
                        if (line.length == 0) {
                            continue;
                        }
                        var row = line.split(",");
                        var result_row = [];
                        var result_inx = 0;
                        var date_string = row[0] + "-" + row[1] + "-" + row[2] + " " + row[3] + ":" + row[4] + ":" + row[5];
                        result_row[result_inx++] = new Date(date_string); // Turn the string date into a Date.
                        for (var rowIdx = 6; rowIdx < row.length; rowIdx++) {
                            // Turn "123" into 123.
                            result_row[result_inx++] = parseFloat(row[rowIdx]);
                        }
                        data_array.push(result_row);
                    } else {
                        var line = lines[idx];
                        var row = line.split(",");
                        var result_row = [];
                        var result_inx = 0;
                        result_row[result_inx++] = 'Time'; // Turn the string date into a Date.
                        for (var rowIdx = 6; rowIdx < row.length; rowIdx++) {
                            // Turn "123" into 123.
                            result_row[result_inx++] = row[rowIdx];
                        }
                        var header = result_row;
                    }

                }
                var g = new Dygraph(
                        // containing div
                        document.getElementById(graph_div_id),
                        data_array, {
                            ylabel: data.label,
                            title: data.title,
                            color: color,
//                        titleHeight: 18,
                            labels: header,
                            showRangeSelector: true,
                        }
                );
                g.resize(450, 300);
            } else {
                noDataGraph(graph_div_id);
            }

        }
        function multiColumnBarPlotter(e) {
            // We need to handle all the series simultaneously.
            if (e.seriesIndex !== 0)
                return;

            var g = e.dygraph;
            var ctx = e.drawingContext;
            var sets = e.allSeriesPoints;

            var y_bottom = e.dygraph.toDomYCoord(0);

            // Find the minimum separation between x-values.
            // This determines the bar width.
            var min_sep = Infinity;
            for (var j = 0; j < 1; j++) {
                var points = sets[j];
                for (var i = 1; i < points.length; i++) {
                    var sep = points[i].canvasx - points[i - 1].canvasx;
                    if (sep < min_sep)
                        min_sep = sep;
                }
            }
            var bar_width = Math.floor(4.0 * min_sep);

            var fillColors = [];
            var strokeColors = g.getColors();
            for (var i = 0; i < strokeColors.length; i++) {
                fillColors.push(strokeColors[i]);
            }
            for (var j = 1; j < sets.length; j++) {
                ctx.fillStyle = fillColors[j];
                ctx.strokeStyle = strokeColors[j];

                for (var i = 0; i < sets[j].length; i++) {

                    var p = sets[j][i];
                    var cumulative_y = p.canvasy;
                    if (j > 2) {
                        for (var z = j - 1; z > 1; z--) {
                            cumulative_y -= y_bottom - sets[z][i].canvasy;
                        }
                    }
                    var center_x = p.canvasx;
                    ctx.fillRect(center_x, cumulative_y,
                            bar_width / sets.length, y_bottom - p.canvasy);
                    ctx.strokeRect(center_x, cumulative_y,
                            bar_width / sets.length, y_bottom - p.canvasy);

                }
            }
            ctx.fillStyle = fillColors[0];
            ctx.strokeStyle = strokeColors[0];
            for (var i = 0; i < sets[0].length; i++) {
                ctx.beginPath();
                ctx.moveTo(e.points[0].canvasx, e.points[0].canvasy);
                for (var i = 1; i < e.points.length; i++) {
                    var p = e.points[i];
                    ctx.lineTo(p.canvasx, p.canvasy);
                }
                ctx.lineWidth = 3;
                ctx.stroke();
            }
        }
        function barChartPlotter(e) {
            var ctx = e.drawingContext;
            var points = e.points;
            var y_bottom = e.dygraph.toDomYCoord(0);

            ctx.fillStyle = e.color;

            // Find the minimum separation between x-values.
            // This determines the bar width.
            var min_sep = Infinity;
            for (var i = 1; i < points.length; i++) {
                var sep = points[i].canvasx - points[i - 1].canvasx;
                if (sep < min_sep)
                    min_sep = sep;
            }
            var bar_width = Math.floor(2.0 / 3 * min_sep);

            // Do the actual plotting.
            for (var i = 0; i < points.length; i++) {
                var p = points[i];
                var center_x = p.canvasx;

                ctx.fillRect(center_x - bar_width / 2, p.canvasy,
                        bar_width, y_bottom - p.canvasy);

                ctx.strokeRect(center_x - bar_width / 2, p.canvasy,
                        bar_width, y_bottom - p.canvasy);
            }
        }
    }
    )(jQuery);
</script>

