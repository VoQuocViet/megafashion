<?php 
Class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
        //load ra file model
		$this->load->library('cart');
        $this->load->model('product_model');
		$this->load->helper('string');
	}
	function index()
	{
		//lay tong so luong ta ca cac san pham trong websit
        $total_rows = $this->product_model->get_total();
        $this->data['total_rows'] = $total_rows;
        
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
        $config['base_url']   = mega_url('home/index'); //link hien thi ra danh sach san pham
        $config['per_page']   = 8;//so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 3;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Next';
        $config['prev_link']   = 'Previou';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(3);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        
        
        
        //lay danh sach san pha
        $list = $this->product_model->get_list($input);
        $this->data['list'] = $list;
       // lây san pham theo dieu kien xem nhieu nhat
	   	$input_view = array();
        $input_view['where'] = array('view >' => 5);// lay danh sach san pham co luot view >4
	   	$list_view = $this->product_model->get_list($input_view);
        $this->data['list_view'] = $list_view;

        // lay danh sach theo dieu kien mua nhieu nhat
        $input_buy = array();
        $input_buy['where'] = array('buyed >' => 5);// lay danh sach san pham co luot view >4
	   	$list_buyed = $this->product_model->get_list($input_buy);
        $this->data['list_buyed'] = $list_buyed;
        
        
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
		// load tin tức
		$this->load->model('news_model');
		$new = $this->news_model->get_list();
        $this->data['new'] = $new;
		// kết thúc load tin
		$this->data['temp']='mega/home/index';
		$this->load->view('mega/layout',$this->data);
	}
	function view()
	{
		$this->load->model('product_model');
		$id = $this->uri->rsegment('3');
        $product = $this->product_model->get_info($id);
		if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
            redirect(mega_url('home'));
        }
        $this->data['product'] = $product;

       
		$this->data['temp']='mega/home/view';
		$this->load->view('mega/home/view',$this->data);
	}
	function detail()
	{
        $id = $this->uri->rsegment('3');
        $product = $this->product_model->get_info($id);
        if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
            redirect(admin_url('product'));
        }
        $this->data['product'] = $product;

        $this->load->model('catalog_model');
        $input = array();
        $input['where'] = array('id' => $product->catalog_id);
        $list = $this->catalog_model->get_list($input);
        $this->data['list']= $list;


		$this->data['temp']='mega/home/detail';
		$this->load->view('mega/home/detail',$this->data);
	}
}