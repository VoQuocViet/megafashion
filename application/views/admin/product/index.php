<?php $this->load->view('admin/product/head', $this->data)?>

<div class="line"></div>


<!-- Main content wrapper -->
<div class="wrapper" id="main_product">
<?php $this->load->view('admin/message', $this->data);?>
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>
				Danh sách sản phẩm
			</h6>
		 	<div class="num f12">Số lượng: <b><?php echo $total_rows?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			<thead class="filter">
			<tr>
			<td colspan="6">
				<form class="list_filter form" action="<?php echo admin_url('product')?>" method="get">
					<table cellpadding="0" cellspacing="0" width="80%"><tbody>
					
						<tr>
							<td class="label" style="width:40px;"><label for="filter_id">Mã số</label></td>
							<td class="item"><input name="id" value="<?php echo $this->input->get('id')?>" id="filter_id" type="text" style="width:55px;" /></td>
							
							<td class="label" style="width:40px;"><label for="filter_id">Tên</label></td>
							<td class="item" style="width:155px;" ><input name="name" value="<?php echo $this->input->get('name')?>" id="filter_iname" type="text" style="width:155px;" /></td>
							
							<td class="label" style="width:60px;"><label for="filter_status">Thể loại</label></td>
							<td class="item">
								<select name="catalog">
									<option value=""></option>
									<!-- kiem tra danh muc co danh muc con hay khong -->
									<?php foreach ($catalogs as $row): ?>
										<?php if(count($row->subs) > 1): ?>
											<optgroup label="<?php echo $row->name ?>">
												<?php foreach ($row->subs as $sub): ?>
											    	<option value="<?php echo $sub->id ?>" <?php echo ($this->input->get('catalog') == $sub->id) ? 'selected' : ''?>><?php echo $sub->name ?>	</option>
											    <?php endforeach; ?>
											</optgroup>
										<?php else:?>
											<option style="font-weight:bold;" value="<?php echo $row->id ?>" <?php echo ($this->input->get('catalog') == $row->id) ? 'selected' : ''?>><?php echo $row->name ?>	</option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</td>
							
							<td style='width:150px'>
							<input type="submit" class="button blueB" value="Lọc" />
							<input type="reset" class="basic" value="Reset" onclick="window.location.href = '<?php echo admin_url('product')?>'; ">
							</td>
							
						</tr>
					</tbody></table>
				</form>
			</td>
			</tr>
			</thead>
			
			<thead>
				<tr>
					<td style="width:21px;"><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png" /></td>
					<td style="width:60px;">Mã số</td>
					<td>Tên</td>
					<td>Giá</td>
					<td style="width:75px;">Ngày tạo</td>
					<td style="width:120px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="6">
						 <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="admin/product/del_all.html">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
							
					     <div class='pagination'>
					     <?php echo $this->pagination->create_links()?>
			             </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody class="list_item">
			<?php foreach ($list as $row): ?>
			    <tr class='row_9'>
					<td><input type="checkbox" name="id[]" value="<?php echo $row->id?>" /></td>
					
					<td class="textC"><?php echo $row->id?></td>
					
					<td>
						<div class="image_thumb">
							<img height="50" src="<?php echo base_url('upload/product/'.$row->image_link)?>">
							<div class="clear"></div>
						</div>
						
						<a href="product/view/9.html" class="tipS" title="<?php echo $row->name?>" target="_blank">
						<b><?php echo $row->name?></b>
						</a>
						
						<div class="f11" >Đã bán: <?php echo $row->buyed?>| Xem: <?php echo $row->view?></div>
						
					</td>
					
					<td class="textR">
						<?php if($row->discount > 0):?>
					       <?php $price_new = $row->price - $row->discount;?>
					       <b style="color:red"><?php echo number_format($price_new)?> đ</b>
					       <p style="text-decoration:line-through"><?php echo number_format($row->price)?> đ</p>
					    <?php else:?>
					        <b style="color:red"><?php echo number_format($row->price)?> đ</b>
					    <?php endif;?>
					</td>

					
					<td class="textC"><?php echo $row->created?></td>
					
					<td class="option textC">
						<a href="" title="Gán là tiêu biểu" class="tipE">
							<img src="<?php echo public_url('admin')?>/images/icons/color/star.png" />
						</a>
						<a  href="<?php echo admin_url('product/detail/'.$row->id)?>" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">
								<img src="<?php echo public_url('admin')?>/images/icons/color/view.png" />
						 </a>
						 <a href="<?php echo admin_url('product/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS">
							<img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
						</a>
						
						<a href="<?php echo admin_url('product/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" >
						    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
		        <?php endforeach;?>
		        			</tbody>
			
		</table>
	</div>
	
</div>		
<div class="clear mt30"></div>