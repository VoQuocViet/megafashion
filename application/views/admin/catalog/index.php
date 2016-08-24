<?php $this->load->view('admin/catalog/head', $this->data)?>

<div class="line"></div>

<!-- Main content wrapper -->
<div class="wrapper">
	<?php $this->load->view('admin/message', $this->data);?>
	<!-- Static table -->
	<div class="widget" id='main_content'>
	
		<div class="title">
		    <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách Danh mục</h6>
			<div class="num f12">Tổng số: <b><?php echo $total ?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable taskWidget" id="checkAll">
			<thead>
				<tr>
				    <td style="width:21px;"><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png" /></td>
				    <td style="width:200px;">Mã danh mục</td>
					<td>Tên</td>
					<td style="width:200px;">Danh mục cha</td>
					<td style="width:200px;">Thứ tự xếp</td>
					<td style="width:150px;">Hành động</td>
				</tr>
			</thead>
			
			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="3">
					     <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="admin/cat/del_all.html">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
							
					     <div class='pagination'>
			               &nbsp;<strong>1</strong>&nbsp;<a href="admin/cat/index/10">2</a>&nbsp;<a href="admin/cat/index/10">Trang kế tiếp</a>&nbsp;			            </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody>
			<?php foreach($list as $row) :?>
			    <tr class='row_18'>
			        <td><input type="checkbox" name="id[]" value="<?php echo $row->id ?>" /></td>
					<td><?php echo $row->id ?></td>  
					<td><?php echo $row->name ?></td> 
					<td><?php echo $row->parent_id ?></td>
					<td><?php echo $row->sort_order ?></td>   
					<td class="option">
						<a href="<?php echo admin_url('catalog/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
						</a>
						
						<a href="<?php echo admin_url('catalog/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" >
						    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
			<?php endforeach; ?>		
			</tbody>
		</table>
	</div>
</div>
<div class="clear mt30"></div>