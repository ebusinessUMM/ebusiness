<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RMP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="https://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet" type="text/css" />
		<link href="https://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css" />
		<script src="https://getbootstrap.com/dist/js/bootstrap.min.js" charset="utf-8"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" charset="utf-8"></script>
		<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js" charset="utf-8"></script>
		<script src="https://getbootstrap.com/dist/js/bootstrap.min.js" charset="utf-8"></script>
		<script src="https://getbootstrap.com/assets/js/ie-emulation-modes-warning.js" charset="utf-8"></script>


		<script src="http://maps.googleapis.com/maps/api/js"></script>

		<style media="screen">

			#footer{
			height: 100px;
			background: rgb(48, 46, 46);
			padding-top: 31px;
			bottom: 0px;
			width: 100%;
			font-family: sans-serif, arial;
			font-size: 14px;
			color:#fff;
			}

		</style>
	</head>
	<body>

		<?php $this->load->view('layout/top_menu') ?>
		 <!-- Carousel================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	      </ol>
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img class="first-slide" src="<?php echo base_url('uploads/bg-1.jpg'); ?>" alt="First slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>R M P - Sablon</h1>
	              <p>Tempat penyablonan baju berkulitas tinggi.</p><br><br><br>
	              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>" role="button">Buy now</a></p>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img class="second-slide" src="<?php echo base_url('uploads/bg-2.jpg'); ?>" alt="Second slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Terpenuhi kebutuhan sablonmu merupakan Kebanggaan kami</h1>
	              <p>Cash On Delivery, Online, Pembelian Langsung ke toko. Pilih metodemu paling nyaman.</p>
	              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>" role="button">Buy now</a></p>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img class="third-slide" src="<?php echo base_url('uploads/bg-3.jpg'); ?>" alt="Third slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Menerima sablonan satuan dengan harga terjangkau.</h1>
	              <p>Bosan dengan bajumu saat ini? Ingin punya kreasi sendiri? Kami menerima Sablon Baju</p>
	              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>" role="button">Buy now</a></p>
	            </div>
	          </div>
	        </div>
	      </div>
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div><!-- /.carousel -->

		<div class="container"><!--start container-->

			<ul class="nav nav-tabs nav-pills nav-divider ">
      </ul>
			<br>
		  <!--
			start slider
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides
			  <div align="center" class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="<?php echo base_url('uploads/3.jpg'); ?>" alt="...">
			      <div class="carousel-caption">
			        <b class="text-success">KiddRock Star</b>
			      </div>
			    </div>
			    <div class="item">
			      <img src="<?php echo base_url('uploads/BP0081putihL.jpg'); ?>" alt="...">
			      <div class="carousel-caption">
			        <b class="text-success">KiddRock Rock</b>
			      </div>
			    </div>
			    <h3 style="color:rgb(46, 148, 168);">-- Dapatkan pengiriman gratis untuk 10 jenis pembelian --</h3>
			  </div>

			  <!-- Controls -
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<!--end slider
			-->
			<br>

			<div class="alert alert-success" role="alert">
				<h4 class="glyphicon glyphicon-bullhorn">
					<span style="font-family: arial; font-size: 17px;">Info disini.</span><br>
				</h4>
			</div>

			<div class="row">
				<!--looping products-->
				<?php foreach($products as $product) : ?>
	  		<div class="col-sm-3 col-md-3">
	    		<div class="thumbnail" style="padding-top:30px">
						<?=img([
							'src'		=>	'uploads/' . $product->image,
							'style'	=>	'max-width: 290px; max-height: 190px '
						])?>
	      		<div class="caption">
	        		<h3 style="min-height:40px;"><?=$product->name?></h3>
					<h4>Rp. <?=$product->price?></h4>
					<p><?=$product->description?></p>
	        		<p>
						<button type="button" class="btn btn-primary">Buy</button>
						<button type="button" class="btn btn-success">Add to cart</button>
					</p>
	      		</div>
	    		</div>
	  		</div>
				<?php endforeach; ?> <!--end looping-->
			</div>

			<div class="alert alert-info" role="alert">
				<h4 class="glyphicon glyphicon-bullhorn">
					<span style="font-family: arial; font-size: 17px;">Info disini.</span><br>
				</h4>
			</div>

			<div class="row">

				<div class="col-md-6">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#owner" aria-controller="owner"
						  role="tab" data-toggle="tab"> Pemilik RMP</a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="owner">
							<br>
								<img style="width: 160px; height: 160px;" src="<?php echo base_url('assets/img/yangpunya.png'); ?>" class="img-circle"><br><br>
								<div class="panel panel-primary" >
								  <div class="panel-heading">Info Pemilik</div>
								  <div class="panel-body">
										<h5><li class="glyphicon glyphicon-user"></li>&nbsp; Nama</h5>
										<h5><li class="glyphicon glyphicon-map-marker"></li>&nbsp; Malang - Jawa Timur </h5>
										<h5><li class="glyphicon glyphicon-envelope"></li>&nbsp; email@gmail.com</h5>
								  </div>
								</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<h4><li class="glyphicon glyphicon-map-marker"></li> Lokasi RMP</h4>
					<div id="map" style="width: 550px; height: 370px;"></div>
						<script type="text/javascript">

							//menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(-7.919226, 112.591950);

							//pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom: 13,
                  center: myLatlng
              };

							//menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map"), myOptions);

							//menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"Monas"
              });
        		</script>
					</div>

			</div>

		</div> <!-- end container-->

		<br><br><br>

		<!-- start footer -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">&copy; 2017. Universitas Muhammadiyah Malang<br>dibuat oleh murid Bu Evi
          			</div>
				</div>
			</div>
	    </footer>
		<!-- end footer -->

	</body>
</html>
