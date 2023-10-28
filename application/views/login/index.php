<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?=link_tag('assets/logo.png', 'icon', 'image/x-icon')?>
	<?=link_tag('assets/bootstrap/index.css')?>
	<?=script_tag('assets/bootstrap/index.js')?>
	
	<?=link_tag('assets/OnePlusSans/index.css')?>
	<?=link_tag('assets/login/index.css')?>

	<?=script_tag('assets/jquery.js')?>
	
	<section class="text-center">
		<div class="container">
			<div class="row align-items-center justify-content-center vh-100">
				<div class="col-6">
				<?php
					$attr = array(
						"class" => "img-fluid",
						"src" => "assets/logo.png" 
					);

					echo img($attr);
				?>
				</div>
				<div class="col-xl-4 col-lg-5 col-md-5 col-sm-10">
					

					