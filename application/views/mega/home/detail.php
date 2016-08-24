<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="9mwgXr3AkgEIeolSvfLX3OIZ3MVPpRZtV9cbnfdTkHM" />
<meta name="description" content="Biệt thự nghỉ dưỡng Lê Hoàng đem đến cho gia đình bạn những phút giây bên nhau GẮN KẾT YÊU THƯƠNG – NÂNG TẦM HẠNH PHÚC." />
<meta name="keywords" content="Shop thời trang, Khách sạn Đà Lạt, Đà Lạt Hotel, Đà Lạt Villa, Khách sạn trung tâm Đà Lạt, Đặt phòng Đà Lạt, Khách sạn tại Đà Lạt" />
<link rel="stylesheet" href="<?php echo public_url()?>/mega/css/style.css" type="text/css">
<link rel="stylesheet" href="<?php echo public_url()?>/mega/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo public_url()?>/mega/css/slider.css" type="text/css">
<link rel="stylesheet" href="<?php echo public_url()?>/mega/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php echo public_url()?>/mega/css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="<?php echo public_url()?>/mega/css/flexslider.css" type="text/css">
<link rel="stylesheet" href="<?php echo public_url()?>/mega/css/font-awesome.css" type="text/css">

<link href='https://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
  
  <script src="<?php echo public_url()?>/mega/bootstrap/dist/js/bootstrap.js"></script>
  <script src="<?php echo public_url()?>/mega/js/jquery.js"></script>
  
  <script>
jQuery(document).ready(function($) {    
  //selector đến menu cần làm việc
  var TopFixMenu = $("#nav1");
  // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
    $(window).scroll(function()
  {
    // Nếu cuộn được hơn 150px rồi
        if($(this).scrollTop()>100)
    {
  // Tiến hành show menu ra
        TopFixMenu.show();
        }
  // Ngược lại, nhỏ hơn 150px thì hide menu đi.
    else
    {
           TopFixMenu.show();
        }
  }
    )
  $(window).resize(function(){
    if($(window).width() < 768 ) 
  {
        $('.slider-intro').hide();
  }
    else 
  {
        $('.slider-intro').show();
  };
});

})
</script>
  
<title>Thời Trang Trẻ| <?php echo $product->name?></title>
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
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
  <!-- end breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="<?php echo mega_url('home'); ?>" title="Go to Home Page">Home</a><span>&raquo;</span></li>
          <li class=""> 
              <a href="" title="Go to Home Page">
                
                <?php foreach ($list as $row): ?>
                      <?php if($product->catalog_id == $row->id )?> <?php echo $row->name?> 
                <?php endforeach;?>
                
                

              </a><span>&raquo;</span>
          </li>
          <li class="category13"><strong> <?php echo $product->name?> </strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end breadcrumbs --> 
  <!-- main-container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="row">
          <div class="product-view">
            <div class="product-essential">
              <form action="#" method="post" id="product_addtocart_form">
                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                <div class="product-img-box col-sm-4 col-xs-12">
                  <div class="new-label new-top-left"> New </div>
                  <div class="product-image">
                    <div class="large-image"> <a href="<?php echo public_url()?>/mega/products-images/product4.jpg" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img alt="product-image" src="<?php echo base_url()?>/upload/product/<?php echo $product->image_link?>"> </a> </div>
                    <div class="flexslider flexslider-thumb">
                      <ul class="previews-list slides">
                        <li><a href='<?php echo base_url()?>/upload/product/<?php echo $product->image_link?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url()?>/upload/product/<?php echo $product->image_link?>' "><img src="<?php echo base_url()?>/upload/product/<?php echo $product->image_link?>" alt="Thumbnail 1"/></a></li>
                        <li><a href='<?php echo public_url()?>/mega/products-images/product10.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo public_url()?>/mega/products-images/product10.jpg' "><img src="<?php echo public_url()?>/mega/products-images/product10.jpg" alt="Thumbnail 2"/></a></li>
                        <li><a href='<?php echo public_url()?>/mega/products-images/product3.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo public_url()?>/mega/products-images/product3.jpg' "><img src="<?php echo public_url()?>/mega/products-images/product3.jpg" alt="Thumbnail 1"/></a></li>
                        <li><a href='<?php echo public_url()?>/mega/products-images/product4.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo public_url()?>/mega/products-images/product4.jpg' "><img src="<?php echo public_url()?>/mega/products-images/product4.jpg" alt="Thumbnail 2"/></a></li>
                        <li><a href='<?php echo public_url()?>/mega/products-images/product5.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo public_url()?>/mega/products-images/product5.jpg' "><img src="<?php echo public_url()?>/mega/products-images/product5.jpg" alt="Thumbnail 2"/></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end: more-images -->
                  <div class="clear"></div>
                </div>
                <div class="product-shop col-sm-5 col-xs-12">
                  <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                  <div class="product-name">
                    <h1><?php echo $product->name?></h1>
                  </div>
                  <div class="short-description">
                    <p> <?php echo $product->meta_desc?> </p>
                  </div>
                  <div class="ratings">
                    <div class="rating-box">
                      <div style="width:60%" class="rating"></div>
                    </div>
                    <p class="rating-links"> <a href="#"><?php echo $product->view?> Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                  </div>
                  <p class="availability in-stock">Availability: <span>In Stock</span></p>
                  <div class="price-block">
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $<?php echo $product->price?> </span> </p>
                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo $product->price- $product->discount?> </span> </p>
                    </div>
                  </div>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <label>Qty :</label>
                      <select>
                        <option>1</option>
                        <option>2 </option>
                        <option>3</option>
                        <option>4</option>
                        <option>5 </option>
                        <option>6</option>
                        <option>7</option>
                        <option>8 </option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                    <button type="button" title="Add to Cart" class="button btn-cart" onClick="productAddToCartForm.submit(this)"><span>Add to Cart</span></button>
                  </div>
                  <div class="email-addto-box">
                    <p class="email-friend"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Email to a Friend"><span></span></a></p>
                    <ul class="add-to-links">
                      <li><span class="separator">|</span> <a class="link-compare" href="compare.php" data-toggle="tooltip" data-placement="top" data-original-title="Add to Compare"></a></li>
                      <li> <a class="link-wishlist" href="wishlist.php"  data-toggle="tooltip" data-placement="top" data-original-title="Add to Wishlist"></a></li>
                    </ul>
                  </div>
                  <div class="toggle-content">
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Product Description</a></h4>
                      <div style="display: none;" class="toggle_container tabcontent">
                        <div class="std">
                          <p><?php echo $product->content?><span class="read-more">… <a href="#">read more</a></span></p>
                          <dl class="specs-table">
                            <dt>Detailing</dt>
                            <dd>Clean and polish leather shoes regularly with quality shoe care products </dd>
                            <dt>Fabric</dt>
                            <dd>Leather leather shoes regularly with quality shoe care products.
                              leather shoes regularly with quality shoe care products</dd>
                            <dt>Care</dt>
                            <dd>Clean and polish leather shoes regularly with quality shoe care products. Cushioned with Nike Lunarlon Technology for ultimate comfort</dd>
                          </dl>
                          <p>The perfect mix of portability and performance in a slim 1" form factor:</p>
                          <p>Triangular shaped backpack/ shoulder bag with front zip open and croc textured finish. </p>
                          <p>Made from water-repellent Squall fabric, this is one tough travel bag. The efficient bag sports a cushioned shoulder strap for carrying ease. With an exterior pocket running the length of the front and secure zipper closure. 100% nylon with polyester base. Spot clean. Imported.</p>
                        </div>
                      </div>
                    </div>
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Additional Information</a></h4>
                      <div style="display: none;" class="toggle_container ">
                        <p>Triangular shaped backpack/ shoulder bag with front zip open and croc textured finish. </p>
                        <p>Made from water-repellent Squall fabric, this is one tough travel bag. The efficient bag sports a cushioned shoulder strap for carrying ease. With an exterior pocket running the length of the front and secure zipper closure. 100% nylon with polyester base. Spot clean. Imported. </p>
                      </div>
                    </div>
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Product Tags</a></h4>
                      <div style="display: none;" class="toggle_container ">
                        <div class="box-collateral box-tags">
                          <div class="tags">
                            <div id="addTagForm">
                              <div class="form-add-tags">
                                <label for="productTagName">Add Tags:</label>
                                <div class="input-box">
                                  <input class="input-text required-entry" name="productTagName" id="productTagName" type="text">
                                  <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                                </div>
                                <!--input-box--> 
                              </div>
                            </div>
                          </div>
                          <!--tags-->
                          <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                        </div>
                      </div>
                    </div>
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Custom Tab</a></h4>
                      <div style="display: none;" class="toggle_container ">
                        <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                          simply dummy text of the printing and typesetting industry. Lorem Ipsum
                          has been the industry's standard dummy text ever since the 1500s, when 
                          an unknown printer took a galley of type and scrambled it to make a type
                          specimen book. It has survived not only five centuries, but also the 
                          leap into electronic typesetting, remaining essentially unchanged. It 
                          was popularised in the 1960s with the release of Letraset sheets 
                          containing Lorem Ipsum passages, and more recently with desktop 
                          publishing software like Aldus PageMaker including versions of Lorem 
                          Ipsum.</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-img-box col-sm-3 col-xs-12">
                  <div class="product-additional"><span class="product-additional"><img alt="custom block" src="images/offer-banner5.png"></span></div>
                </div>
              </form>
              
              <!-- related Product Slider -->
              <div class="product-collateral"> 
                
                <!-- related Product Slider -->
                <section class="related-pro">
                  <div class="slider-items-products">
                    <div class="new_title center">
                      <h2>Related Products</h2>
                    </div>
                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 products-grid"> 
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="new-label new-top-left">New</div>
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product1.jpg" alt="Sample Product"> </a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price" id="product-price-1"> <span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product3.jpg" alt="Sample Product"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:0%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price" id="old-price-2"> $567.00 </span> </p>
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price" id="product-price-2"> $456.00 </span> </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="sale-label sale-top-right">Sale</div>
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product4.jpg" alt="Sample Product"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:20%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $99.00 </span> </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                            <strong></strong> </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product5.jpg" alt="Sample Product"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:0%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="new-label new-top-left">New</div>
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product5.jpg" alt="Sample Product"> </a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="new-label new-top-left">New</div>
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product1.jpg" alt="Sample Product"> </a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                      </div>
                    </div>
                  </div>
                </section>
                <!-- related Product Slider End --> 
                
                <!-- Upsell Product Slider -->
                <section class="upsell-pro">
                  <div class="slider-items-products">
                    <div class="new_title center">
                      <h2>Upsell Products</h2>
                    </div>
                    <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 products-grid"> 
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="new-label new-top-left">New</div>
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product2.jpg" alt="Sample Product"> </a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product6.jpg" alt="Sample Product"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:0%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="sale-label sale-top-right">Sale</div>
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product4.jpg" alt="Sample Product"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:20%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $99.00 </span> </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                            <strong></strong> </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product2.jpg" alt="Sample Product"></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:0%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                        
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="new-label new-top-left">New</div>
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product10.jpg" alt="Sample Product"> </a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="new-label new-top-left">New</div>
                                <div class="item-img-info"> <a href="#" title="Sample Product" class="product-image"> <img src="<?php echo public_url()?>/mega/products-images/product3.jpg" alt="Sample Product"> </a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a  href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"> <span class="regular-price" > <span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                  <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item --> 
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Upsell Product Slider End --> 
                
              </div>
            </div>
          </div>
          <div class="box-collateral box-reviews" id="customer-reviews">
              <div class="page-title">
                <h2>Reviews</h2>
              </div>
              <div class="box-reviews1">
                <div class="form-add">
                  <form id="review-form" method="post" action="http://www.magikcommerce.com/review/product/post/id/176/">
                    <h3>Write Your Own Review</h3>
                    <fieldset>
                      <h4>How do you rate this product? <em class="required">*</em></h4>
                      <span id="input-message-box"></span>
                      <table id="product-review-table" class="data-table">
                        <colgroup>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        </colgroup>
                        <thead>
                          <tr class="first last">
                            <th>&nbsp;</th>
                            <th><span class="nobr">1 *</span></th>
                            <th><span class="nobr">2 *</span></th>
                            <th><span class="nobr">3 *</span></th>
                            <th><span class="nobr">4 *</span></th>
                            <th><span class="nobr">5 *</span></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="first odd">
                            <th>Price</th>
                            <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                            <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                            <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                            <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                            <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                          </tr>
                          <tr class="even">
                            <th>Value</th>
                            <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                            <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                            <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                            <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                            <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                          </tr>
                          <tr class="last odd">
                            <th>Quality</th>
                            <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                            <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                            <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                            <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                            <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                          </tr>
                        </tbody>
                      </table>
                      <input type="hidden" value="" class="validate-rating" name="validate_rating">
                      <div class="review1">
                        <ul class="form-list">
                          <li>
                            <label class="required" for="nickname_field">Nickname<em>*</em></label>
                            <div class="input-box">
                              <input type="text" class="input-text required-entry" id="nickname_field" name="nickname">
                            </div>
                          </li>
                          <li>
                            <label class="required" for="summary_field">Summary<em>*</em></label>
                            <div class="input-box">
                              <input type="text" class="input-text required-entry" id="summary_field" name="title">
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="review2">
                        <ul>
                          <li>
                            <label class="label-wide" for="review_field">Review<em class="required">*</em></label>
                            <div class="input-box">
                              <textarea class="required-entry" rows="3" cols="5" id="review_field" name="detail"></textarea>
                            </div>
                          </li>
                        </ul>
                        <div class="buttons-set">
                          <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <div class="box-reviews2">
                <h3>Customer Reviews</h3>
                <div class="box visible">
                  <ul>
                    <li>
                      <table class="ratings-table">
                        <colgroup>
                        <col>
                        <col>
                        </colgroup>
                        <tbody>
                          <tr>
                            <th>Value</th>
                            <td><div class="rating-box">
                                <div class="rating" style="width:100%;"></div>
                              </div></td>
                          </tr>
                          <tr>
                            <th>Quality</th>
                            <td><div class="rating-box">
                                <div class="rating" style="width:100%;"></div>
                              </div></td>
                          </tr>
                          <tr>
                            <th>Price</th>
                            <td><div class="rating-box">
                                <div class="rating" style="width:100%;"></div>
                              </div></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="review">
                        <h6><a href="#/catalog/product/view/id/61/">Excellent</a></h6>
                        <small>Review by <span>Leslie Prichard </span>on 1/3/2014 </small>
                        <div class="review-txt"> I have purchased shirts from Minimalism a few times and am never disappointed. The quality is excellent and the shipping is amazing. It seems like it's at your front door the minute you get off your pc. I have received my purchases within two days - amazing.</div>
                      </div>
                    </li>
                    <li class="even">
                      <table class="ratings-table">
                        <colgroup>
                        <col>
                        <col>
                        </colgroup>
                        <tbody>
                          <tr>
                            <th>Value</th>
                            <td><div class="rating-box">
                                <div class="rating" style="width:100%;"></div>
                              </div></td>
                          </tr>
                          <tr>
                            <th>Quality</th>
                            <td><div class="rating-box">
                                <div class="rating" style="width:100%;"></div>
                              </div></td>
                          </tr>
                          <tr>
                            <th>Price</th>
                            <td><div class="rating-box">
                                <div class="rating" style="width:80%;"></div>
                              </div></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="review">
                        <h6><a href="#/catalog/product/view/id/60/">Amazing</a></h6>
                        <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                        <div class="review-txt"> Minimalism is the online ! </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="actions"> <a class="button view-all" id="revies-button"><span><span>View all</span></span></a> </div>
              </div>
              <div class="clear"></div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Two columns content -->
  <div class="brand-logo ">
    <div class="container">
      <div class="row">
        <div class="slider-items-products col-lg-12">
          <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6"> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo1.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo2.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo3.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo4.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo5.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo6.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo1.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo4.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <footer class="footer">
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="footer-logo"><a href="index.php" title="Logo"><img src="images/logo.png" alt="logo"></a></div>
            <address>
            <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
            &nbsp;CA 12345  USA
            </address>
            <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
            <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:support@magikcommerce.com">support@magikcommerce.com</a> </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
            <h4>Shopping Guide</h4>
            <ul class="links">
              <li class="first"><a href="#" title="How to buy">How to buy</a></li>
              <li><a href="faq.php" title="FAQs">FAQs</a></li>
              <li><a href="#" title="Payment">Payment</a></li>
              <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
              <li><a href="#" title="Where is my order?">Where is my order?</a></li>
              <li class="last"><a href="#" title="Return policy">Return policy</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
            <h4>Style Advisor</h4>
            <ul class="links">
              <li class="first"><a href="login.php" title="Your Account">Your Account</a></li>
              <li><a href="#" title="Information">Information</a></li>
              <li><a href="#" title="Addresses">Addresses</a></li>
              <li><a href="#" title="Addresses">Discount</a></li>
              <li><a href="#" title="Orders History">Orders History</a></li>
              <li class="last"><a href="#" title=" Additional Information">Additional Information</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
            <h4>Information</h4>
            <ul class="links">
              <li class="first"><a href="sitemap.php" title="Site Map">Site Map</a></li>
              <li><a href="#/" title="Search Terms">Search Terms</a></li>
              <li><a href="#" title="Advanced Search">Advanced Search</a></li>
              <li><a href="contact_us.php" title="Contact Us">Contact Us</a></li>
              <li><a href="#" title="Suppliers">Suppliers</a></li>
              <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-8 col-sm-9 col-xs-12">
            <div class="block-subscribe">
              <h4>Sign up for emails</h4>
              <div class="newsletter">
                <form>
                  <input type="text" placeholder="Enter your email" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter1" name="email">
                  <button class="subscribe" title="Subscribe" type="submit"><span>Submit</span></button>
                </form>
              </div>
            </div>
            <div class="social">
              <h4>Follow Us</h4>
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 coppyright"> &copy; 2015 Magikcommerce. All Rights Reserved.</div>
          <div class="col-sm-8 col-xs-12 company-links">
            <ul class="links">
              <li><a href="#" title="Magento Themes">Magento Themes</a></li>
              <li><a href="#" title="Premium Themes">Premium Themes</a></li>
              <li><a href="#" title="Responsive Themes">Responsive Themes</a></li>
              <li class="last"><a href="#" title="Magento Extensions">Magento Extensions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- End Footer --> 
  
</div>
<div class="help_slider">
  <div class="text alignleft">Need Help?</div>
  <div class="icons"> <a class="show_hide" id="questionbox-side-phonebutton" href="javascript:void(0)"><i class="icon-phones">&nbsp;</i></a> <a class="show_hide1" id="questionbox-side-emailbutton" href="javascript:void(0)"><i class="icon-email">&nbsp;</i></a> </div>
</div>
<div id="hideShow" class="right-side-content" style="display: none;"> 
  <!--Contact Static Block -->
  <div class="slider-phone active">
    <h2 class="">Talk To Us</h2>
    <h3 class="">Available 24/7</h3>
    <p class="textcenter"> Want to speak to someone? We're here 24/7 to answer any questions. Just call!<br>
      <br>
      <span class="phone-number"> +1 800 123 1234</span></p>
    <a id="hideDiv" class="slider-close" href="javascript:void(0)"></a> </div>
  <div class="slider-email hidden">
    <h2 class="">Let us know how we can help you.</h2>
    <form action="#" enctype="application/x-www-form-urlencoded" method="post" id="form-contact-help_slider">
      <div class="column sixty">
        <div class="">
          <ul>
            <li>
              <label>First Name</label>
              <input type="text" name="FirstName" class="required-entry">
              <div class="clearfix"></div>
            </li>
            <li>
              <label>Last Name</label>
              <input type="text" name="LastName" class="required-entry">
              <div class="clearfix"></div>
            </li>
            <li>
              <label>Email Address</label>
              <input type="email" name="Email" class="required-entry">
              <div class="clearfix"></div>
            </li>
            <li>
              <label>Phone Number</label>
              <input type="text" name="Phone">
              <div class="clearfix"></div>
            </li>
          </ul>
        </div>
      </div>
      <div class="column fourty last">
        <div class="padding">
          <textarea name="Contact_Form_Message__c" class="required-entry">How can we help you?</textarea>
          <div class="textright">
            <button class="button btn-sent" title="Add to Cart" type="button"><span>Send</span></button>
          </div>
        </div>
      </div>
    </form>
    <div class="clearfix"></div>
    <a class="slider-close" href="#"></a></div>
</div>
<div id="hideShow1" style="display: none;">
  <div class="right-side-content hidden1">
    <div class="slider-email active">
      <div id="messages_product_view"></div>
      <div id="formSuccess" style="display:none;">Your inquiry was submitted and will be responded to as soon as possible. Thank you for contacting us.</div>
      <form id="contactForm1" method="post">
        <div class="column sixty">
          <h2>TALK TO US</h2>
          <ul>
            <li>
              <label>Name<em class="required">*</em></label>
              <input name="name" id="name" title="Name" value="" class="input-text required-entry" type="text">
            </li>
            <li>
              <label>Email<em class="required">*</em></label>
              <input name="email" id="email" title="Email" value="" class="input-text required-entry validate-email" type="text">
            </li>
            <li>
              <label>Telephone</label>
              <input name="telephone" id="telephone" title="Telephone" value="" class="input-text" type="text">
            </li>
          </ul>
          <p class="required">* Required Fields</p>
        </div>
        <!--column sixty-->
        <div class="column fourty last">
          <div class="padding">
            <label>Comment<em class="required">*</em></label>
            <textarea name="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
            <div class="textright">
              <input type="text" name="hideit" value="" style="display:none !important;">
              <button type="submit" title="Submit" class="button btn-sent"><span>Submit</span></button>
              <img src="images/mgkloading1.php" alt="loader" id="loader" style="display:none;"> </div>
            <!--textright--> 
          </div>
          <!--padding--> 
        </div>
        <!--column fourty last-->
      </form>
      <a href="javascript:void(0)" id="hideDiv1" class="slider-close"></a> </div>
    <!--slider-email active--> 
  </div>
  <!--right-side-content hidden1--> 
</div>

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
<script>
      new UISearch( document.getElementById( 'form-search' ) );
    </script>
</body>

<!-- Giao dien duoc chia se mien phi tai www.ptheme.net [Free HTML Download]. SKYPE[ptheme.net] - EMAIL[ptheme.net@gmail.com].-->
</html>
