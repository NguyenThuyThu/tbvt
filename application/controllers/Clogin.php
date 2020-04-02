<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   Controller đăng nhập
*
**/
class Clogin extends CI_Controller
{
	
    public function __construct() {
        parent::__construct();
        $this->load->model('Hethong/Mlogin');
    }
    
    public function index() {
        if($this->input->post('dangnhap')){
           $this->DangNhap();
        }
        $data['message'] = getMessages();
        $this->parser->parse('Hethong/Vlogin', $data);
    }

    //đăng nhập
    public function DangNhap()
    {
        $taikhoan   = $this->input->post('taikhoan');
        $matkhau    = sha1($this->input->post('matkhau'));
        $user       = $this->Mlogin->dangnhap($taikhoan,$matkhau);
        if(!empty($user))
        {
            $session = array(
                'sMaSV'             => $user['sMaSV'],
                'ten_taikhoan'      => $user['ten_taikhoan'],
                'ma_thanhvien'      => $user['ma_thanhvien'],
                'hoten_thanhvien'   => $user['hoten_thanhvien'],
                'ma_quyen'          => $user['ma_quyen'],
            );
            $this->session->set_userdata("user", $session);
            setMessages("success", "Đăng nhập thành công", "Thông báo");
            return redirect(base_url('TrangChu'));
        }else{
            setMessages("error", "Tài khoản hoặc mật khẩu không chính xác!", "Thông báo");
            return redirect(base_url());
        }
    }
    // đăng xuất
    public function DangXuat() {
        $this->session->userdata = array();
        $this->session->sess_destroy();
        $this->input->set_cookie('', '', time()-36000);
        redirect(base_url().'login');
        exit();
    }
} // End class

