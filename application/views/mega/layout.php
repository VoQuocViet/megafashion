<html>
<head>
	<?php $this->load->view('mega/head'); ?>
</head>
<body class="cms-index-index">
	<div class="page"> 
<!-- Header -->
    <header class="header-container">
      	<?php $this->load->view('mega/header');?>
     </header>
  <!-- end header --> 
<!-- Navbar -->
    <nav>
        <?php $this->load->view('mega/menu')?>
    </nav>
  <!-- end nav --> 
  
  <!-- Slider -->
    <section class="slider-intro">
        <?php $this->load->view('mega/slider'); ?>
    </section>
  <!-- end Slider -->
  <!-- service section  -->
    <div class="service-section">
      <?php $this->load->view('mega/service'); ?>
    </div>
  
  <!-- End service section  --> 

<!-- main container -->
  
    <section class="main-container col1-layout home-content-container">
      <?php 
        $this->load->view($temp);
        ?>
    </section>
  <!-- End main container -->
  
  <!-- content -->
    <!-- <div class="container">
    	<div class="row" style="height:300px;">
        
        </div>
    </div> -->
<!--end-content-->
    <footer class="footer">
        <?php $this->load->view('mega/footer');?>
    </footer>
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/prototype.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/parallax.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/common.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/slider.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/toggle.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/pro-img-slider.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="<?php echo public_url()?>/mega/js/cloud-zoom.js"></script> 
<script type="text/javascript">
    //<![CDATA[
  jQuery(function() {
    jQuery(".slideshow").cycle({
      fx: 'scrollHorz', easing: 'easeInOutCubic', timeout: 10000, speedOut: 800, speedIn: 800, sync: 1, pause: 1, fit: 0,       pager: '#home-slides-pager',
      prev: '#home-slides-prev',
      next: '#home-slides-next'
    });
  });
    //]]>
    </script>
</body>
</html>