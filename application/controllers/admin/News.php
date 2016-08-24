<?php
/**
* 
*/
class News extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('news_model');
	}
	function index(){

		// lay tong so luong tat ca cac san pham trong web
		$total_rows = $this->news_model->get_total();
		$this->data['total_rows'] = $total_rows;
		// lay danh sach san pham
		$list = $this->news_model->get_list();
		$this->data['list'] = $list;
		//lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
		// load ra view
		$this->data['temp'] = 'admin/news/index';
        $this->load->view('admin/main' , $this->data);
	}
	function add(){

		//lay danh sach danh muc san pham
        $this->load->model('catalognews_model');
        $input = array();
        $input['where'] = array('parent_id' => 0);
        $catalogs = $this->catalognews_model->get_list($input);
        foreach ($catalogs as $row)
        {
            $input['where'] = array('parent_id' => $row->id);
            $subs = $this->catalognews_model->get_list($input);
            $row->subs = $subs;
        }
        $this->data['catalogs'] = $catalogs;

        //load thu vien validat
        $this->load->library('form_validation');
        $this->load->helper('form');
        //neu du lieu dc post len 
        if($this->input->post())
        {
        	$this->form_validation->set_rules('title','Tiêu đề','required');
        	$this->form_validation->set_rules('intro','Tóm tắt','required');
        	$this->form_validation->set_rules('content','Nội dung','required');

        	// neu nhap lieu chinh xac
        	if($this->form_validation->run())
        	{
        		//them vao co so du lieu
        		$title       = $this->input->post('title');
        		$catalog_id = $this->input->post('catalog');
        		$intro      = $this->input->post('intro');
        		/*$price      = str_replace(',', '', $price);

        		$discount      = $this->input->post('discount');
        		$discount      = str_replace(',', '', $discount);*/

        		//lay ten file anh minh hoa duoc update len
                $this->load->library('upload_library');
                $upload_path = './upload/news';
                $upload_data = $this->upload_library->upload($upload_path, 'image');  
                $image_link = '';
                if(isset($upload_data['file_name']))
                {
                    $image_link = $upload_data['file_name'];
                }
                

                // luu du lieu can them
                $data = array(
                	'title'        =>$title,
                	'catalognews_id'  =>$catalog_id,
                	'intro'       =>$intro,
                	'content'     =>$this->input->post('content'),
                	'meta_desc'   =>$this->input->post('meta_desc'),
                	'meta_key'    =>$this->input->post('meta_key'),
                	'image_link'  =>$image_link,
                	'created'    =>$this->input->post('created'),
                	
                	
                	
                );
                if($this->news_model->create($data))
                {
                	//tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else
                {
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('news'));
        	}

        }
		// load view add
		$this->data['temp'] = 'admin/news/add';
		$this->load->view('admin/main', $this->data);
	}
	function edit()
	{
		// lấy ra id của thành viên cần chỉnh sửa
		$id = $this->uri->rsegment('3');
        $news = $this->news_model->get_info($id);
        /*if(!$news)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
            redirect(admin_url('news'));
        }*/
        $this->data['news'] = $news;

        //lay danh sach danh muc san pham
        $this->load->model('catalognews_model');
        $input = array();
        $input['where'] = array('parent_id' => 0);
        $catalogs = $this->catalognews_model->get_list($input);
        foreach ($catalogs as $row)
        {
            $input['where'] = array('parent_id' => $row->id);
            $subs = $this->catalognews_model->get_list($input);
            $row->subs = $subs;
        }
        $this->data['catalogs'] = $catalogs;

        $this->load->library('form_validation');
		$this->load->helper('form');

		//neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('title','Tiêu đề','required');
        	$this->form_validation->set_rules('intro','Tóm tắt','required');
        	$this->form_validation->set_rules('content','Nội dung','required');
        
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao co so du lieu
        		$title       = $this->input->post('title');
        		$catalog_id = $this->input->post('catalog');
        		$intro      = $this->input->post('intro');
        		/*$price      = str_replace(',', '', $price);
        		$discount      = $this->input->post('discount');
        		$discount      = str_replace(',', '', $discount);*/
        		
        		//lay ten file anh minh hoa duoc update len
                $this->load->library('upload_library');
                $upload_path = './upload/news';
                $upload_data = $this->upload_library->upload($upload_path, 'image');  
                $image_link = '';
                if(isset($upload_data['file_name']))
                {
                    $image_link = $upload_data['file_name'];
                }

                // luu du lieu can them
                $data = array(
                	'title'        =>$title,
                	'catalognews_id'  =>$catalog_id,
                	'intro'       =>$intro,
                	'content'     =>$this->input->post('content'),
                	'meta_desc'   =>$this->input->post('meta_desc'),
                	'meta_key'    =>$this->input->post('meta_key'),
                	'created'    =>$this->input->post('created'),	
                );
                if($image_link != '')
                {
                    $data['image_link'] = $image_link;
                }
                //them moi vao csdl
                if($this->news_model->update($news->id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }
                else
                {
                    $this->session->set_flashdata('message', 'Không cập nhật được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('news'));
            }
        }
		// load ra view 
		$this->data['temp'] = 'admin/news/edit';
		$this->load->view('admin/main' , $this->data);
	}
	function delete(){

		$id = $this->uri->rsegment('3');
		$id = intval($id);

		$info = $this->news_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('message','Không tồn tại thông tin thành viên');
			redirect(admin_url('product'));
		}
		$this->news_model->delete($id);
		$this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('news'));
	}

}