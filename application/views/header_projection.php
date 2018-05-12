<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Projet M1</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href=<?php echo '"'; echo base_url(); echo 'assets/css/style.css"'?> />
	<style type="text/css">

	body
	{
		background-color: #000;
	}
	p
	{
		color:white;
	}
	#home
	{
		margin-left: 20%;
		margin-right: 20%;
		margin-top: 5%;
		text-align: justify;
	}
	#btn_back
	{
		margin:1%;
		position: absolute;
	}
	</style>
</head>
<body>
<script type="text/javascript" src="../js/video.js"></script>
<script type="text/javascript" src="../js/stream.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<form id="btn_back" method="post" action=<?php echo '"'; echo base_url(); echo 'projet/home"'?>" enctype="multipart/form-data">
  <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>
</form>