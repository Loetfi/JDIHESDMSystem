<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Codeigniter Demos </title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>global/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>global/site/starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <a class="navbar-brand" href="#">Phpword library latest</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://webeasystep.com/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://webeasystep.com/contact">Contact</a>
        </li>
    </ul>
</nav>

<div class="container">


		<h2>News Table</h2>
		<div class="alert alert-info">
			<strong>Demo Test!</strong>
			You can test Phpword library in this demo with latest version ,just click to download microsoft .docx file</div>
		<p></p>
		<div class="table-responsive">
		<table class="table">
			<thead>
			<tr>
				<th>Title</th>
				<th>Desc</th>
				<th>Image</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($news as $n) : ?>
			<tr>
				<td><?= $n['ne_title']; ?></td>
				<td><?= $n['ne_desc']; ?></td>
				<td><img src="<?php echo base_url(); ?>global/uploads/<?= $n['ne_img']; ?>"/>
				</td>
			</tr>
			</tbody>
			<?php endforeach ?>
		</table>
		</div>
		<a href="<?= base_url()?>Phpword/download" class="btn btn-success">Download word file</a>


</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= base_url()?>global/site/bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?= base_url()?>global/site/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?= base_url()?>global/site/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
