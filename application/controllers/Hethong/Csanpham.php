<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csanpham extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hethong/Msanpham');

	}

	public function index()
	{
		$session = $this->session->userdata('user');
		if($this->input->post('themDVT')){
			$this->themDVT();
		}
		if($this->input->post('capnhatDVT')){
			$this->capnhatDVT();
		}

		if($this->input->post('capnhatsanpham')){
			$this->capnhatsanpham();
		}
		if($this->input->post('xoaDVT')){
			$this->xoaDVT();
		}
		$trangthai = "";
		if($this->input->get("hienthi")){
			$trangthai = "hienthi";
		}

		if($id = $this->input->post('xoasanpham')){
			$this->xoasanpham($id);
		}

		$dmsp = $this->Msanpham->get('tbl_danhmuc_sanpham');
		foreach ($dmsp as $key => $value) {
			$tendm[$value['ma_dmsanpham']] = $value['ten_dmsanpham'];
		}
		$sanpham  = $this->Msanpham->getSanPham();
		if($this->input->post('themloaisp')){
			$this->themloaisp();
		}

		$temp = array(
			'template' => 'Hethong/Vsanpham',
			'data' => array(
				'loaiSP' 	=> $this->Msanpham->get("tbl_loaisanpham"),
				'tendm'	    => $tendm,
				'donvitinh' => $this->Msanpham->get('tbl_donvitinh_sanpham'),
				'nhacc' 	=> $this->Msanpham->get('tbl_nhacungcap'),
				'sanpham' 	=> $sanpham,
				'trangthai' => $trangthai,
			)
		);
		$this->load->view('layout/content',$temp);
	}

	public function xoasanpham($ma){
		$success  = 'Xóa thành công';
        $error    = 'Xóa thất bại!';
        $redirect = base_url().'sanpham?hienthi=danhsachsanpham'; 
    	$this->Msanpham->delete("tbl_anhsanpham","ma_sanpham",$ma);
    	$this->delete("tbl_sanpham","ma_sanpham",$ma, $success, $error, $redirect);
	}

	public function themloaisp(){
		$session = $this->session->userdata('user');
		$data = $this->input->post('data');
		$data['dongia_sanpham'] = str_replace(",","",$data['dongia_sanpham']);
		$data['ngaydang']  		= date("d/m/Y");
		$data['ma_sanpham']  	= "SP".preg_replace("/[^a-zA-Z0-9]+/", "", $data['ten_sanpham']).time();
		$data['nguoidang_sp'] 	= $session['ma_taikhoan'];
		$data['trangthai_dang_sanpham'] = 1;
		$data['trangthai_hot_sanpham']  = 1;
		$row = $this->Msanpham->insert("tbl_sanpham", $data); /*Thêm data vào bảng sản phầm sau đó insert ảnh vào bảng ảnh sản phẩm*/
		if($row > 0){
			if (!empty($_FILES['anhsanpham']['name'])) {
				$config['upload_path'] = 'public/images/anhsanpham/'.$_FILES['anhsanpham']['name'];
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['file_name'] = $_FILES['anhsanpham']['name'];
				$this->load->library("upload", $config);
				$this->upload->initialize($config);
				$row1 = move_uploaded_file($_FILES['anhsanpham']['tmp_name'], $config['upload_path']);
				if ($row1 > 0) {
					$data_image = array(
						'linkanh_sanpham' 	=> $config['file_name'],
						'ma_sanpham'		=> $data['ma_sanpham'],
					);
					$row2 = $this->Msanpham->insert("tbl_anhsanpham", $data_image);
				}
				else{
					setMessages("error", "Thêm ảnh bị lỗi", "Thông báo");
				}
		    }
		}else{
			setMessages("error", "Thêm thất bại", "Thông báo");
		}
	    if($row > 0 && $row1 >0 && $row2 >0 ){
	    	setMessages("success", "Thêm sản phẩm thành công", "Thông báo");
	    }
	    return redirect('sanpham');
		
	}

	/*Thêm Đơn vị tính*/
	public function themDVT(){
		$data 	  = $this->input->post('data');
		$success  = 'Thêm thành công';
        $error    = 'Thêm thất bại';
        $redirect = base_url().'sanpham'; 
        $this->insert("tbl_donvitinh_sanpham", $data, $success, $error, $redirect);
	}

	/*Lấy dữ liệu*/
	public function capnhatDVT() {
		$ma 	  = $this->input->post('capnhatDVT');
		$data 	  = $this->input->post('data');
		$success  = 'Cập nhật thành công';
        $error    = 'Cập nhật';
        $redirect = base_url().'sanpham'; 
        $this->update("tbl_donvitinh_sanpham", "ma_donvitinh", $ma, $data, $success, $error, $redirect);
	}

	public function xoaDVT() {
		$ma 	  = $this->input->post('xoaDVT');
		$success  = 'Xóa thành công';
        $error    = 'Xóa thất bại!';
        $redirect = base_url().'sanpham'; 
    	$this->delete("tbl_donvitinh_sanpham","ma_donvitinh",$ma, $success, $error, $redirect);
	}

	public function capnhatsanpham() {
		$session  = $this->session->userdata('user');
		$ma 	  = $this->input->post('capnhatsanpham');
		$data 	  = $this->input->post('data');
		$data['nguoidang_sp'] 	= $session['ma_taikhoan'];
		$success  = 'Cập nhật thành công';
        $error    = 'Cập nhật';
        $row = $this->Msanpham->update("tbl_sanpham", "ma_sanpham",$ma, $data);
        if (!empty($_FILES['anhsanpham']['name'])) {
				$config['upload_path'] = 'public/images/anhsanpham/'.$_FILES['anhsanpham']['name'];
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['file_name'] = $_FILES['anhsanpham']['name'];
				$this->load->library("upload", $config);
				$this->upload->initialize($config);
				$row1 = move_uploaded_file($_FILES['anhsanpham']['tmp_name'], $config['upload_path']);
				$data_image = array(
					'linkanh_sanpham' 	=> $config['file_name'],
				);
				$row2 = $this->Msanpham->update("tbl_anhsanpham", "ma_sanpham",$ma, $data_image);
		}
		if($row >= 0){
	    	setMessages("success", $success, "Thông báo");
	    }else{
	    	setMessages("error", $error, "Thông báo");
	    }
	    return redirect('sanpham?hienthi=danhsachsanpham');
	}


}