<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Clogin extends CI_Controller
{
	public function __construct() {
		parent:: __construct();
		$this->load->model('Giaodien/Mdangky');
	}

	public function index()
	{
		$data['tb'] = "";
		// Bấm Thêm Tài khoản
		if($this->input->post('dangky'))
		{
			$data['tb'] = $this->ThemTaiKhoan();
		}
		// Bấm Thêm Tài khoản
		if($this->input->post('dangnhap'))
		{
			$data['tb']=$this->DangNhap();
		}
		$temp = array(
			'template' =>  'Giaodien/Vdangky',
			'data' => array(
				'title' => 'Viễn thông Xanh Việt Nam',
			),
		);
		$this->load->view('layout/main_content', $temp);

	}

	/*Thêm Tài khoản*/
	public function ThemTaiKhoan(){
		$ma_thanhvien= rand(1000,99999);
		$ma_taikhoan = rand(1000,99999);
		$data_thanhvien = array(
			'ma_thanhvien' => $ma_thanhvien,
			'hoten_thanhvien' => $this->input->post('hoten'), 
			'email'     => $this->input->post('email')
		);

		$data_quyen_tk = array(
			'ma_taikhoan' => $ma_taikhoan,
			'ten_taikhoan'  => $this->input->post('taikhoan'),
			'makhau'   => sha1($this->input->post('password')),
			'ngaydangky_taikhoan'   => date('Y/m/d H:i:s'),
			'ma_thanhvien' => $ma_thanhvien,
			'ma_quyen' => 3
		);
		$check = $this->Mdangky->get_where_row("tbl_taikhoan","ten_taikhoan", $data_quyen_tk['ten_taikhoan']);
		if(!empty($check)){
			setMessages("error", " Tài khoản của bạn đã tồn tại", " Thông báo");
			return " Tài khoản của bạn đã tồn tại!";
		}else{
			$row = $this->Mdangky->insert("tbl_thanhvien",$data_thanhvien);
			$row = $this->Mdangky->insert("tbl_taikhoan",$data_quyen_tk);	
			if($row > 0){
				setMessages("success", " Đăng ký thành công", " Thông báo");
				$data = array(
					'ma_thanhvien'  	=> $ma_thanhvien,
					'ten_taikhoan'  	=> $data_quyen_tk['ten_taikhoan'],
					'hoten_thanhvien'  	=> $data_thanhvien['hoten_thanhvien'],
					'ma_quyen' 			=> 3
				);
				$this->session->set_userdata("user", $data);
				return redirect(base_url("trangchu"));

			}else{
				setMessages("error", " Đăng ký thất bại", " Thông báo");
				return redirect(base_url());
			}
		}
		
		
	}

	//đăng nhập
    public function DangNhap()
    {
        $taikhoan =	$this->input->post('taikhoan');
        $password =	sha1($this->input->post('password'));
        $userdata =	$this->Mdangky->dangnhap($taikhoan,$password);
        // pr($userdata);
        if(!empty($userdata))
        {
        	$data = array(
				'ma_thanhvien' 		=> $userdata['ma_thanhvien'],
				'ten_taikhoan'  	=> $userdata['ten_taikhoan'],
				'ma_taikhoan'  		=> $userdata['ma_taikhoan'],
				'hoten_thanhvien'  	=> $userdata['hoten_thanhvien'],
				'ma_quyen' 			=> 3
			);
			$this->session->set_userdata("user", $data);
			if($userdata['ma_quyen'] == 1 || $userdata['ma_quyen'] == 2){
				setMessages("success", " Đăng nhập thành công", " Thông báo");
	           return redirect(base_url().'trangchu');
			}
			else if($userdata['ma_quyen'] == 3){
				setMessages("success", " Đăng nhập thành công", " Thông báo");
	           return redirect(base_url());
			}
			
        }else{
	        	setMessages("error", " Tài khoản hoặc mật khẩu không chính xác!", " Thông báo");
	        	return redirect(base_url("dangnhap"));
	    }
    }

    // đăng xuất
    public function DangXuat() {
        $this->session->userdata = array();
        $this->session->sess_destroy();
        $this->input->set_cookie('', '', time()-36000);
        redirect(base_url());
        exit();
    }
}

