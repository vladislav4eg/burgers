<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pencil
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<!-- meta tags -->
		<meta charset="utf-8">
		<title>Burger</title>
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="theme-color" content="#000">

	<!-- favicon -->
		<link rel="icon" href="img/favicon.ico">

	<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Coustard:400,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

	<!-- stylesheet -->

		<!-- full min -->
			<link rel="stylesheet" href="css/main.min.css">

		<!-- full -->
			<!--<link rel="stylesheet" href="css/main.css"> -->

	<!-- stylesheet-end -->

</head>

<?php wp_head(); ?>

<body>

<?php get_template_part("parts/header"); ?>