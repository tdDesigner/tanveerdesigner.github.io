<!DOCTYPE html>
<html>
<head>
<title>Tanveer Designer</title>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<style>
		.parent-box{
			background-color: #ddd;
			display: flex;
		}
		.box{
			height: 300px;
			background-color: orange;
			margin: 10px;
		}
		.owl-carousel .owl-nav button.owl-prev{
    	background: none;
    	color: inherit;
    	border: none;
    	padding: 0 !important;
    	font: inherit;
    	position: absolute;
    	top: 50%;
    	transform: translateY(-50%);
    	width: 50px;
    	height: 50px;
    	border-radius: 50%;
    	background-color: green;
}

/* #WEB SURAJ# */

		 .owl-carousel .owl-nav button.owl-next{
		background: none;
    	color: inherit;
    	border: none;
    	padding: 0 !important;
    	font: inherit;	
    	position: absolute;
    	top: 50%;
    	transform: translateY(-50%);
    	right: 0;
    	width: 50px;
    	height: 50px;
    	border-radius: 50%;
    	background-color: green;
		 }
	</style>
</head>
<body>
</div>
	<div class="parent-box owl-carousel">
		<div class="box">
			<iframe width="320" height="300" src="Videos/1.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/2.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/3.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/4.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/5.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/6.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
			<iframe width="320" height="300" src="Videos/7.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/8.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/9.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/10.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/11.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="box">
        <iframe width="320" height="300" src="Videos/12.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>	
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script>
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			items:4,
			autoplay:true,
			autoplayTimeout:6000,
			responsive : {
				0 : {
					items:1
				},

				480 : {
					items:2
				},

				768 : {
					items:3
				},

				992 : {
					items:4
				}


			}
			});
	</script>
</body>
</html>
