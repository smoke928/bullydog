<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- Bootstrap Core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Main Style CSS -->
    <link href="../../assets/css/main_style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional Bootstrap theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="../../../assets/js/emp.js"></script>
	<script type="text/javascript">
		$( document ).ready(function() {
	  		$('#emp').emp({
	  			'start_year' 	: 2009,
	  			'end_year'		: 2015
	  		});
	  		
		});
	</script>
	<style type="text/css">
		.modal:nth-of-type(even) {
	    z-index: 1042 !important;
		}
		.modal-backdrop.in:nth-of-type(even) {
		    z-index: 1041 !important;
		}
		select{
			padding:5px;
			margin-top:10px;
		}
	</style>
</head>
<body>