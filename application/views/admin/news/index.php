<?php $this->load->view('admin/news/head', $this->data)?>

<div class="line"></div>


<!-- Main content wrapper -->
<div class="wrapper" id="main_product">
<?php $this->load->view('admin/message', $this->data);?>
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>
				Danh sách tin tức
			</h6>
		 	<div class="num f12">Số lượng: <b><?php echo $total_rows?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
	
			
			<thead>
				<tr>
					<td style="width:4%;"><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png" /></td>
					<td style="width:4%;">Mã số</td>
					<td style="width:7%;">Hình Đại Diện</td>
					<td style="width:21%;;">Tiêu Đề</td>
					<td style="width:45%;">Tóm Tắt</td>
					
					<td style="width:8%;">Ngày Tạo</td>
					<td style="width:8%;">Hành động</td>
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
							
					     
					</td>
				</tr>
			</tfoot>
			
			<tbody class="list_item">
			<?php foreach ($list as $row): ?>
			    <tr class='row_9'>
					<td><input type="checkbox" name="id[]" value="<?php echo $row->id?>" /></td>
					<!-- ma so -->
					<td class="textC"><?php echo $row->id?></td>
					<!-- hinh dai dien -->
					<td class="image_thumb">
							<img height="60" width="70" src="<?php echo base_url('upload/news/'.$row->image_link)?>">
							<div class="clear"></div>
					</td>
					<!-- tieu de -->
					<td>
						<a href="product/view/9.html" class="tipS" title="<?php echo $row->title?>" target="_blank">
						<b><?php echo $row->title?></b>
						</a>
						</br>
						<a class="f11" > Xem: <?php echo $row->count_view?></a>
						
					</td>
					<!-- tom tat -->
					<td class="textC"><?php echo $row->intro?></td>
					
					<!-- ngay tao -->
					<td class="textC"><?php echo $row->created?></td>
					
					<td class="option textC">
						
						 <a href="<?php echo admin_url('news/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS">
							<img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
						</a>
						
						<a href="<?php echo admin_url('news/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" >
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