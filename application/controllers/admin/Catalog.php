<?php
/**
* 
*/
class Catalog extends My_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('catalog_model');
	}
	function index(){
		// lấy ra tổng số danh mục
		$total = $this->catalog_model->get_total();
		$this->data['total'] = $total;
		// lấy ra danh sách danh mục sản phẩm
		$list= $this->catalog_model->get_list();
		$this->data['list'] = $list;

		//lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

		$this->data['temp'] = 'admin/catalog/index';
		$this->load->view('admin/main', $this->data); 
	}
	public function add()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{
			$name = $this->form_validation->set_rules('name','Tên danh mục','required');

			if($this->form_validation->run())
			{
				$name = $this->input->post('name');
				$sort_order = $this->input->post('sort_order');
				$parent_id = $this->input->post('parent_id');
				$data = array(
					'name' => $name,
					'sort_order' => $sort_order,
					'parent_id' => $parent_id
				);
				if($this->catalog_model->create($data))
				{
					$this->session->set_flashdata('message','Thêm danh mục mới thành công');
				}
				else
				{
					$this->session->set_flashdata('message','Thêm mới thất bại');
				}
				redirect(admin_url('catalog'));
			}
		}

		// lấy ra danh sách danh mục cha
		$input = array();
		$input['where'] = array('parent_id' =>0);
		$list= $this->catalog_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/catalog/add';
		$this->load->view('admin/main', $this->data); 
	}
	public function edit()
	{
		$id= $this->uri->rsegment('3');
        $id= intval($id);

        $this->load->library('form_validation');
        $this->load->helper('form');

        // lấy thông tin quản trị viên

        $info= $this->catalog_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại danh mục');
            redirect(admin_url('catalog'));
        }
        $this->data['info']= $info;
        
        if($this->input->post())
        {
            // validation form name and username
            $this->form_validation->set_rules('name','Tên danh mục','required');
             $parent_id= $this->input->post['parent_id'];
            if($this->form_validation->run())
            {
                // thêm vào csdl
                $name= $this->input->post('name');
                $sort_order= $this->input->post('sort_order');
                $parent_id= $this->input->post('parent_id');
                $data= array(
                    'name' => $name,
                    'sort_order' => intval($sort_order),
                    'parent_id' => $parent_id
                );
                
                if($this->catalog_model->update($id, $data))
                {
                    // tạo ra nội dung thông báo
                    $this->session->set_flashdata('message','Cập nhật dữ liệu thành công');
                }
                else{
                    $thí->session->set_flashdata('message','Cập nhật thất bại');
                }
                redirect(admin_url('catalog'));
            }
        }
        $input = array();
		$input['where'] = array('parent_id' =>0);
		$list= $this->catalog_model->get_list($input);
		$this->data['list'] = $list;

        $this->data['temp'] = 'admin/catalog/edit';
        $this->load->view('admin/main', $this->data);
	}
	public function delete()
	{
		$id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->catalog_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại danh mục');
            redirect(admin_url('catalog'));
        }
        //thuc hiện xóa
        $this->catalog_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('catalog'));
	}
}