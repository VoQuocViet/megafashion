<?php $this->load->view('admin/news/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
    
	   	<!-- Form -->
		<form enctype="multipart/form-data" method="post" action="<?php echo admin_url('news/add')?>" id="form" class="form">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
						<h6>Thêm tin mới</h6>
					</div>
					
				    <ul class="tabs">
		                <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
		                <li class=""><a href="#tab2">SEO Onpage</a></li>
		                <li class=""><a href="#tab3">Bài viết</a></li>
		                
					</ul>
					
					<div class="tab_container">
					     <div class="tab_content pd0" id="tab1" style="display: block;">
					         <div class="formRow">
								<label for="param_name" class="formLeft">Tiêu Đề:<span class="req">*</span></label>
								<div class="formRight">
									<span class="oneTwo"><input type="text" _autocheck="true" id="param_title" name="title"></span>
									<span class="autocheck" name="name_autocheck"></span>
									<div class="clear error" name="name_error"></div>
								</div>
								<div class="clear"></div>
							</div>

							<div class="formRow">
								<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
								<div class="formRight">
									<div class="left">
							    		<input type="file" name="image" id="image" size="25">
									</div>
									<div class="clear error" name="image_error"></div>
								</div>
								<div class="clear"></div>
							</div>

							<div class="formRow">
								<label for="param_cat" class="formLeft">Loại Tin:<span class="req">*</span></label>
								<div class="formRight">
								    <select name="catalog"  class="left" >
										<option value="">Lựa chọn danh mục</option>
											<!-- kiem tra danh muc co danh muc con hay khong -->
											<?php foreach ($catalogs as $row):?>
											<?php if(count($row->subs) > 1):?>
							  				<optgroup label="<?php echo $row->name?>">
							  				    <?php foreach ($row->subs as $sub):?>
							           			<option value="<?php echo $sub->id?>"> ---<?php echo $sub->name?> </option>
								                <?php endforeach;?>
							           		</optgroup>
							           		<?php else:?>
							           		  <option value="<?php echo $row->id?>" style="font-weight:bold;"><?php echo $row->name?></option>
							           		<?php endif;?>
							           		<?php endforeach;?>
									</select>
									<span class="autocheck" name="cat_autocheck"></span>
									<div class="clear error" name="cat_error"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label for="param_sale" class="formLeft">Tóm Tắt:</label>
								<div class="formRight">
									<span class="oneTwo"><textarea cols="" rows="4" id="param_intro" name="intro"></textarea></span>
									<span class="autocheck" name="sale_autocheck"></span>
									<div class="clear error" name="sale_error"></div>
								</div>
								<div class="clear"></div>
							</div>					         
							<div class="formRow hide"></div>
</div>
						 
<div class="tab_content pd0" id="tab2" style="display: none;">
						     			
<div class="formRow">
	<label for="param_created" class="formLeft">Ngày Tạo :</label>
		<div class="formRight">
			<span class="oneFour"><input type="date" id="param_created" name="created" style="height:35px; width:368px"></span>
			<span class="autocheck" name="created_autocheck"></span>
		</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_meta_desc" class="formLeft">Meta description:</label>
	<div class="formRight">
		<span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_desc" name="meta_desc"></textarea></span>
		<span class="autocheck" name="meta_desc_autocheck"></span>
		<div class="clear error" name="meta_desc_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label for="param_meta_key" class="formLeft">Meta keywords:</label>
	<div class="formRight">
		<span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_key" name="meta_key"></textarea></span>
		<span class="autocheck" name="meta_key_autocheck"></span>
		<div class="clear error" name="meta_key_error"></div>
	</div>
	<div class="clear"></div>
</div>
						     <div class="formRow hide"></div>
						 </div>
						 
						 <div class="tab_content pd0" id="tab3" style="display: none;">
						      <div class="formRow">
                            	<label class="formLeft">Nội dung:</label>
                            	<div class="formRight">
                            		<textarea class="editor" id="param_content" name="content"></textarea>
                            		<div class="clear error" name="content_error"></div>
                            	</div>
                            	<div class="clear"></div>
                            </div>
						      <div class="formRow hide"></div>
						 </div>
						
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit">
	           			<input type="submit" class="redB" value="Thêm mới">
	           			<input type="reset" class="basic" value="Hủy bỏ">
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
<div class="clear mt30"></div>
