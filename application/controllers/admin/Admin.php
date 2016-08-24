<?php
Class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    
    /*
     * Lay danh sach admin
     */
    function index()
    {

        $input = array();
        $list = $this->admin_model->get_list($input);
        $this->data['list']= $list;

        // lấy tổng số admin có trong database
        $total = $this->admin_model->get_total();
        $this->data['total']= $total;

        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $this->data['temp'] = 'admin/admin/index';
        $this->load->view('admin/main' , $this->data);


    }
    
    /*
     * Kiểm tra username đã tồn tại chưa
     */
    function check_username()
    {
        $username = $this->input->post('username');
        $where = array('username' => $username);
        //kiêm tra xem username đã tồn tại chưa
        if($this->admin_model->check_exists($where))
        {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Tài khoản đã tồn tại');
            return false;
        }
        return true;
    }
    
    /*
     * Thêm mới quản trị viên
     */
    function add()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên', 'required|min_length[6]');
            $this->form_validation->set_rules('username', 'Tài khoản', 'required|callback_check_username|min_length[6]');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
            $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name     = $this->input->post('name');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                
                $data = array(
                    'name'     => $name,
                    'username' => $username,
                    'password' => md5($password)
                );
                if($this->admin_model->create($data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('admin'));
            }
        }
        
        $this->data['temp'] = 'admin/admin/add';
        $this->load->view('admin/main', $this->data);


    }
    
    /*
     * Ham chinh sua thong tin quan tri vien
     */
    function edit()
    {
        /*//lay id cua quan tri vien can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua quan trị viên
        $info  = $this->admin_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
            redirect(admin_url('admin'));
        }
        $this->data['info'] = $info;
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');
            $this->form_validation->set_rules('username', 'Tài khoản đăng nhập', 'required|callback_check_username');
            
            $password = $this->input->post('password');
            if($password)
            {
                $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
                $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
            }
            if($this->form_validation->run())
            {
                //them vao csdl
                $name     = $this->input->post('name');
                $username = $this->input->post('username');
               
                $data = array(
                    'name'     => $name,
                    'username' => $username,
                );
                //neu ma thay doi mat khau thi moi gan du lieu
                if($password)
                {
                    $data['password'] = md5($password);
                }
                
                if($this->admin_model->update($id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không cập nhật được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('admin'));
            }
        }*/
        // lấy id quản trị viên cần chỉnh sửa
        $id= $this->uri->rsegment('3');
        $id= intval($id);

        $this->load->library('form_validation');
        $this->load->helper('form');

        // lấy thông tin quản trị viên

        $info= $this->admin_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
            redirect(admin_url('admin'));
        }
        $this->data['info']= $info;
        
        if($this->input->post())
        {
            // validation form name and username
            $this->form_validation->set_rules('name','Tên','required|min_length[6]');
            $this->form_validation->set_rules('username', 'Tài khoản đăng nhập','required|min_length[6]');
            // nếu có password thì mới lấy pass
            $password= $this->input->post['password'];
            if($password)
            {
                $this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
                $this->form_validation->set_rules('re_password','Nhập lại mật khẩu','matches[password]');
            }
            if($this->form_validation->run())
            {
                // thêm vào csdl
                $name= $this->input->post('name');
                $username= $this->input->post('username');
                $data= array(
                    'name' => $name,
                    'username' => $username,
                );
                // nếu thay đổi mật khẩu thì mới gán dữ liệu
                if($password)
                {
                    $data['password']= md5($password);
                }
                if($this->admin_model->update($id, $data))
                {
                    // tạo ra nội dung thông báo
                    $this->session->set_flashdata('message','Cập nhật dữ liệu thành công');
                }
                else{
                    $thí->session->set_flashdata('message','Cập nhật thất bại');
                }
                redirect(admin_url('admin'));
            }
        }

        $this->data['temp'] = 'admin/admin/edit';
        $this->load->view('admin/main', $this->data);
    }
    
    /*
     * Hàm xóa dữ liệu
     */
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->admin_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
            redirect(admin_url('admin'));
        }
        //thuc hiện xóa
        $this->admin_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('admin'));
    }
    
    /*
     * Thuc hien dang xuat
     */
    function logout()
    {
        $this->session->unset_userdata('logged_in');
   		session_destroy();
  
        redirect(admin_url('login'));
    }


}



