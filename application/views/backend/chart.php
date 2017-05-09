<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet" type="text/css" />
    <link href="https://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css" />
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" charset="utf-8"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js" charset="utf-8"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://getbootstrap.com/assets/js/ie-emulation-modes-warning.js" charset="utf-8"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url('assets/js/jquery.canvasjs.min.js'); ?>"></script>
    <script type="text/javascript">
    $(function () {

    	//Better to construct options first and then pass it as a parameter
    	var options = {
    		exportEnabled: true,
                    animationEnabled: true,
    		title: {
    			text: "Mei"
    		},
    		data: [
    		{
    			type: "splineArea", //change it to line, area, bar, pie, etc
    			dataPoints: [
    				{ y: 14 },
    				{ y: 23 },
    				{ y: 7 },
    				{ y: 19 },
    				{ y: 10 },
    				{ y: 18 },
    				{ y: 24 },
    				{ y: 12 },
    				{ y: 14 }
    			]
    		}
    		]
    	};

    	$("#chartContainer").CanvasJSChart(options);

    });
    </script>

    <script type="text/javascript">
    $(function () {

    	//Better to construct options first and then pass it as a parameter
    	var options = {
    		exportEnabled: true,
                    animationEnabled: true,
    		title: {
    			text: "Juni"
    		},
    		data: [
    		{
    			type: "splineArea", //change it to line, area, bar, pie, etc
    			dataPoints: [
    				{ y: 10 },
    				{ y: 6 },
    				{ y: 14 },
    				{ y: 12 },
    				{ y: 19 },
    				{ y: 14 },
    				{ y: 26 },
    				{ y: 10 },
    				{ y: 22 }
    			]
    		}
    		]
    	};

    	$("#chartContainer1").CanvasJSChart(options);

    });
    </script>

  </head>
  <body>
    <!--load topmenu -->
    <?php $this->load->view('backend/admin_topmenu'); ?>
    <!--end load topmenu -->
    <h2 align="center">Statistik penjualan</h2><br><br><br>
    <div class="container">
      <div class="col-md-6">
        <div id="chartContainer" style="height: 400px; width: 100%;"></div>
      </div>

      <div class="col-md-6">
        <div id="chartContainer1" style="height: 400px; width: 100%;"></div>
      </div>

    </div>

  </body>
</html>
