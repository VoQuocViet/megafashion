<div class="container">
      <div class="row">
        <div class="std">
          <div class="best-pro col-lg-9">
          <!-- SAN PHAM XEM NHIEU NHAT -->
            <div class="slider-items-products">
              <div class="new_title center">
                <h2>Sản Phẩm Xem Nhiều Nhất</h2>
              </div>
              <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4"> 
                  
                  <!-- Item -->
                 <?php foreach($list_view as $row):?>
                  <div class="item">
                    <div class="col-item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="new-label new-top-left">New</div>
                          <div class="item-img-info"> <a href="<?php echo mega_url('home/detail/'.$row->id)?>"  title="Sample Product" class="product-image"> <img src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt="<?php echo $row->name?>"> </a>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="product-detail-bnt"><a href="<?php echo mega_url('home/view/'.$row->id)?>" class="button detail-bnt"> <span> Quick View</span></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="<?php echo mega_url('home/detail/'.$row->id)?>" title="<?php echo $row->name?>"> <?php echo $row->name?> </a> </div>
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
                                <div class="price-box"> <span class="regular-price" id="product-price-1"> <span class="price"><?php echo $row->price?></span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                            <button  title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                            <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  <?php endforeach;?>
                </div>
              </div>
            </div>
            <!-- SAN PHAM MUA NHIEU NHAT -->
            <div class="slider-items-products">
              <div class="new_title center">
                <h2>Sản Phẩm Mua Nhiều Nhất</h2>
              </div>
              <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4"> 
                  
                  <!-- Item -->
                 <?php foreach($list_buyed as $row_buy):?>
                  <div class="item">
                    <div class="col-item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="new-label new-top-left">New</div>
                          <div class="item-img-info"> <a href="<?php echo mega_url('home/detail/'.$row->id)?>"  title="Sample Product" class="product-image"> <img src="<?php echo base_url('upload/product/'.$row_buy->image_link)?>" alt="<?php echo $row->name?>"> </a>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="product-detail-bnt"><a href="<?php echo mega_url('home/view/'.$row->id)?>" class="button detail-bnt"> <span> Quick View</span></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="<?php echo mega_url('home/detail/'.$row->id)?>" title="<?php echo $row_buy->name?>"> <?php echo $row_buy->name?> </a> </div>
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
                                <div class="price-box"> <span class="regular-price" id="product-price-1"> <span class="price"><?php echo $row->price?></span> </span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="actions"><span class="add-to-links"> <a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                            <button  title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                            <a href="compare.php" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  <?php endforeach;?>
                 
                  
                </div>
              </div>
            </div>
            <!-- Tin Tuc  -->
            <div class="slider-items-products">
                  Mục tin tức
            </div>
          </div>
          <div class="right-bar col-lg-3">
              <div class="new_title center">
                  <h2> Tìm Theo Gía </h2>
              </div>
          </div>
        </div>
      </div>
    </div>