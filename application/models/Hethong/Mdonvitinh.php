<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Models xử lý Đơn vị tính
**/
class Mdonvitinh extends CI_Model {
	protected $_table = 'tbl_donvitinh_sanpham';
	public function __construct() {
		parent::__construct();
	}

	/*Thêm Đơn vị tính*/
	public function Themdonvitinh($data = array()){
		// Kiểm tra sự tồn tại
		$this->db->where('ten_donvitinh', $data['ten_donvitinh']);
		$query = $this->db->get($this->_table);
		if($query->num_rows() > 0) {
			return notification('', 'alert-danger', 'Đơn vị tính này đã tồn tại');
		}else {
			$this->db->insert($this->_table, $data);
			if($this->db->affected_rows() > 0) {
				return notification('', 'alert-info', 'Thêm Đơn vị tính thành công'); 
			}
			return notification('', 'alert-danger', 'Thêm Đơn vị tính thất bại'); 
		}
	}

	/*Lấy danh sách Đơn vị tính*/
	public function LayDanhSachdonvitinh($id = NULL){
		// Lấy 1 bản ghi để sửa nếu không có $id -> lấy toàn bộ bản ghi
		if($id){
			$this->db->where('ma_donvitinh', $id);
		}
		$this->db->select('ma_donvitinh, ten_donvitinh');
		return $this->db->get('tbl_donvitinh_sanpham')->result_array();
	}

	/*Cập nhật Đơn vị tính*/
	public function CapNhatdonvitinh($id, $data = array()) {
	// Kiểm tra dữ liệu nhập đã tồn tại trong CSDL hay chưa?
		$this->db->where('ma_donvitinh', $id);
		$this->db->update($this->_table, $data);

		if($this->db->affected_rows() > 0) {
			return notification('', 'alert-success', 'Cập nhật Đơn vị tính thành công'); 
		}
			
		return notification('', 'alert-info', 'Cập nhật Đơn vị tính thành công');	
	}

	/*Xóa Đơn vị tính*/
	public function Xoadonvitinh($id) {
		// Kiểm tra xem Đơn vị tính đã có Đơn vị tính nào liên kết tới hay chưa!
		$this->db->where('ma_donvitinh', $id);
		$query = $this->db->get('tbl_sanpham');
		if($query->num_rows()){
			return notification('', 'alert-danger', 'Không thể xóa Đơn vị tính đang được sử dụng');
		}else{

			$this->db->where('ma_donvitinh', $id);

			$this->db->delete($this->_table);

			if($this->db->affected_rows() > 0) {
				return notification('', 'alert-success', 'Xóa Đơn vị tính thành công');  
			}
				
			return notification('', 'alert-danger', 'Xóa Đơn vị tính thất bại'); 
		}
	}
	
} /*End Model*/
?>