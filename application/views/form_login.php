<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bakul Fotografi Jatim</title>
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
	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>
		<div class="container"><br><br><br><br>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4" style="margin-left: 40px; margin-top:20px;">
					<h3>Please Login!</h3><br>
				<div><?=validation_errors()?></div>
			<div><?=$this->session->flashdata('error')?></div>
			<?=form_open('login', ['class'=>'form-horizontal']) ?>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="username" >
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-md-3 control-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox"> Remember me
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-success">Sign in</button>
						<button type="#" class="btn btn-default">Sign up</button>
			    </div>
			  </div>
				</form>
				</div>
			<div class="col-md-4"></div>
		</div>
	</div> <!-- penutup container-->

	<br><br><br>
	</body>
</html>
