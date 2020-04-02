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
		if($this->input->post('xoaDVT')){
			$this->xoaDVT();
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
			)
		);
		$this->load->view('layout/content',$temp);
	}

	public function themloaisp(){
		$session = $this->session->userdata('user');
		$data = $this->input->post('data');
		$data['nguoidang_sp'] = $session['ma_taikhoan'];
		$data['trangthai_dang_sanpham'] = 1;
		$data['trangthai_hot_sanpham']  = 1;
		// $id = $this->Msanpham->add_sanpham($data);
		if (!empty($_FILES['anhsanpham']['name'])) {
			$config['upload_path'] = 'public/images/anhsanpham'.$_FILES['anhsanpham']['name'];
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name'] = $_FILES['anhsanpham']['name'];
			$this->load->library("upload", $config);
			$this->upload->initialize($config);
			// if(file_exists($name)){
			// 	setMessages('error',"Tên File đã tồn tại xin vui lòng chọn file khác!", 'Thông báo');
			// 	return redirect('sanpham');
			// }
			if ($this->upload->do_upload("anhsanpham")) {
				$uploadData				= $this->upload->data();
				// $data_image = array(
				// 	'linkanh_sanpham' 	=> $config['file_name'],
				// 	'ghichu_anh'		=> "",
				// 	'douutien'			=> "",
				// 	'ma_sanpham'		=> $data['ma_sanpham'],
				// );
				// $this->Msanpham->insert("tbl_anhsanpham", $data);
				// pr($data_image);
			}
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

}