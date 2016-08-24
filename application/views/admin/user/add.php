<?php $this->load->view('admin/user/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Thêm Thành Viên Mới</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<!-- field name -->
				<div class="formRow">
					<label class="formLeft" for="param_name">Tên Thành Viên:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" value="<?php echo set_value('name') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('name')?> </div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- field email -->
				<div class="formRow">
					<label class="formLeft" for="param_email">Email:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="email" id="param_email" _autocheck="true" type="text" value="<?php echo set_value('email') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('email')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- field phone -->
				<div class="formRow">
					<label class="formLeft" for="param_phone">Số Điện Thoại:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="phone" id="param_phone" _autocheck="true" type="text" value="<?php echo set_value('phone') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('phone')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- field address -->
				<div class="formRow">
					<label class="formLeft" for="param_address">Địa Chỉ:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="address" id="param_address" _autocheck="true" type="text" value="<?php echo set_value('address') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('address')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Mật khẩu -->
				<div class="formRow">
					<label class="formLeft" for="param_password">Mật khẩu:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="password" id="param_password" _autocheck="true" type="password"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('password')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Nhập lại mật khẩu -->
				<div class="formRow">
					<label class="formLeft" for="param_name">Nhập lại mật khẩu:</label>
					<div class="formRight">
						<span class="oneTwo"><input name="re_password" id="param_re_password" _autocheck="true" type="password"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('re_password')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- field created -->
				<div class="formRow">
					<label class="formLeft" for="param_created">Ngày Tạo:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="created" id="param_created" _autocheck="true" type="date" value="<?php echo set_value('created') ?>"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('created')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formSubmit">
	           			<input type="submit" value="Thêm mới" class="redB">
	           			<input type="reset" value="Hủy bỏ" class="basic">
	           		</div>
			</fieldset>
		</form>
	</div>

</div>