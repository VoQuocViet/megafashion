<!doctype html>
<html>
<head>
<?php include ("module/head.php");?>
</head>

<body class="cms-index-index">
<div class="page"> 
<!-- Header -->
  <header class="header-container">
    	<?php include ("module/header.php");?>
   </header>
  <!-- end header --> 
<!-- Navbar -->
  <nav>
    <?php include ("module/menu.php");?>
  </nav>
  <!-- end nav --> 
  
  <!-- Slider -->
  <section class="slider-intro">
    <?php include ("module/slide.php");?>
  </section>
  <!-- end Slider -->
  <!-- service section  -->
  <div class="service-section">
    <?php include ("module/service.php");?>
  </div>
  
  <!-- End service section  --> 

<!-- main container -->
  
  <section class="main-container col1-layout home-content-container">
    <?php include ("module/content.php");?>
  </section>
  <!-- End main container -->
  
  <!-- content -->
<div class="container">
	<div class="row" style="height:300px;">
    
    </div>
</div>
<!--end-content-->
<footer class="footer">
    <?php include ("module/footer.php");?>
  </footer>
  </div>
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/slider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript">
    //<![CDATA[
	jQuery(function() {
		jQuery(".slideshow").cycle({
			fx: 'scrollHorz', easing: 'easeInOutCubic', timeout: 10000, speedOut: 800, speedIn: 800, sync: 1, pause: 1, fit: 0, 			pager: '#home-slides-pager',
			prev: '#home-slides-prev',
			next: '#home-slides-next'
		});
	});
    //]]>
    </script>
</body>
</body>
</html>
