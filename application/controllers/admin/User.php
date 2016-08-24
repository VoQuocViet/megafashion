<?php
/**
* 
*/
class User extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('user_model');
	}
	public function index()
	{
		// đếm tổng số user trong database
		$total = $this->user_model->get_total();
		$this->data['total'] = $total;

		// lấy danh sách thành viên
		$list = $this->user_model->get_list();
		$this->data['list'] = $list;

		//lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

		$this->data['temp'] = 'admin/user/index';
		$this->load->view('admin/main', $this->data);
	}
	public function add()
	{
		// load thư viện
		$this->load->library('form_validation');
		$this->load->helper('form');

		// nếu có giá trị post lên
		if($this->input->post())
		{
			$name= $this->form_validation->set_rules('name','Tên thành viên','required|min_length[6]');
			$email = $this->form_validation->set_rules('email','Email','required|valid_email');
			$phone = $this->form_validation->set_rules('phone','Số điện thoại','required|min_length[9]|max_length[12]');
			$address = $this->form_validation->set_rules('address','Địa chỉ','required');
			$password = $this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			$re_password = $this->form_validation->set_rules('re_password','Nhập lại mật khẩu','matches[password]');
			$created = $this->form_validation->set_rules('created','Ngày tạo','required');

			if($this->form_validation->run())
			{
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$phone = $this->input->post('phone');
				$address = $this->input->post('address');
				$password = $this->input->post('password');
				$created = $this->input->post('created');
				$data = array(
					'name' => $name,
					'email' => $email,
					'phone' => $phone,
					'address' => $address,
					'password' => md5($password),
					'created' => $created
				);
				if($this->user_model->create($data))
				{
					$this->session->set_flashdata('message', 'Thêm thành viên mới thành công');
				}
				else
				{
					$this->session->set_flashdata('message', 'Thêm thất bại');
				}
				redirect(admin_url('user'));
			}
		}
		// load view
		$this->data['temp'] = 'admin/user/add';
		$this->load->view('admin/main', $this->data);
	}
	public function edit()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		// lấy ra id của thành viên cần chỉnh sửa
		$id= $this->uri->rsegment('3');
		$id= intval($id);

		$info = $this->user_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('message','Không tồn tại thành viên này');
			redirect(admin_url('user'));
		}
		$this->data['info'] = $info;
		if($this->input->post())
		{
			$name= $this->form_validation->set_rules('name','Tên thành viên','required|min_length[6]');
			$email = $this->form_validation->set_rules('email','Email','required|valid_email');
			$phone = $this->form_validation->set_rules('phone','Số điện thoại','required|min_length[9]|max_length[12]');
			$address = $this->form_validation->set_rules('address','Địa chỉ','required');
			$created = $this->form_validation->set_rules('created','Ngày tạo','required');
			// nếu nhập pass mới thì lấy pas
			$password = $this->input->post('password');
			if($password)
			{
				$password = $this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
				$re_password = $this->form_validation->set_rules('re_password','Nhập lại mật khẩu','matches[password]');
			}
			if($this->form_validation->run())
			{
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$phone = $this->input->post('phone');
				$address = $this->input->post('address');
				$created = $this->input->post('created');
				$data = array(
					'name' => $name,
					'email' => $email,
					'phone' => $phone,
					'address' => $address,
					'created' => $created
				);
				if($password)
				{
					$data['password']= md5($password);
				}
				if($this->user_model->update($id, $data))
				{
					$this->session->set_flashdata('message','Cập nhật thông tin thành viên thành công');
				}
				else
				{
					$this->session->set_flashdata('message','Cập nhật thất bại');
				}
				redirect(admin_url('user'));
			}
			
		}

		$this->data['temp'] = 'admin/user/edit';
		$this->load->view('admin/main', $this->data);
	}
	public function delete(){
		$id = $this->uri->rsegment('3');
		$id = intval($id);

		$info = $this->user_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('message','Không tồn tại thông tin thành viên');
			redirect(admin_url('user'));
		}
		$this->user_model->delete($id);
		$this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('user'));
	}
}