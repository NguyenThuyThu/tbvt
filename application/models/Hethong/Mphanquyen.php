<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Models xử lý phân quyền
**/
class Mphanquyen extends MY_Model {
	
	public function __construct() {
		parent::__construct();
	}

	/*Thêm quyền*/
	public function ThemQuyen($data = array()){
		// Kiểm tra sự tồn tại
		$this->db->where('ten_quyen', $data['ten_quyen']);
		$query = $this->db->get($this->_table);
		if($query->num_rows() > 0) {
			return notification('', 'alert-danger', 'Quyền này đã tồn tại');
		}else {
			$this->db->insert($this->_table, $data);
			if($this->db->affected_rows() > 0) {
				return notification('', 'alert-info', 'Thêm quyền thành công'); 
			}
			return notification('', 'alert-danger', 'Thêm quyền thất bại'); 
		}
	}

	/*Lấy danh sách quyền*/
	public function LayDanhSachQuyen($id = NULL){
		// Lấy 1 bản ghi để sửa nếu không có $id -> lấy toàn bộ bản ghi
		if($id){
			$this->db->where('ma_quyen', $id);
		}
		$this->db->select('ma_quyen, ten_quyen');
		return $this->db->get('tbl_quyen')->result_array();
	}

	/*Cập nhật quyền*/
	public function CapNhatQuyen($id, $data = array()) {
	// Kiểm tra dữ liệu nhập đã tồn tại trong CSDL hay chưa?
		$this->db->where('ma_quyen', $id);
		$this->db->update($this->_table, $data);

		if($this->db->affected_rows() > 0) {
			return notification('', 'alert-success', 'Cập nhật quyền thành công'); 
		}
			
		return notification('', 'alert-info', 'Cập nhật quyền thành công');	
	}

	/*Xóa quyền*/
	public function XoaQuyen($id) {
		// Kiểm tra xem quyền đã có quyền nào liên kết tới hay chưa!
		$this->db->where('ma_quyen', $id);
		$query = $this->db->get('tbl_taikhoan');
		if($query->num_rows()){
			return notification('', 'alert-danger', 'Không thể xóa quyền đang được sử dụng');
		}else{

			$this->db->where('ma_quyen', $id);

			$this->db->delete($this->_table);

			if($this->db->affected_rows() > 0) {
				return notification('', 'alert-success', 'Xóa quyền thành công');  
			}
				
			return notification('', 'alert-danger', 'Xóa quyền thất bại'); 
		}
	}
	
} /*End Model*/

/* End of file Mphanquyen.php */
/* Location: ./application/models/danhmuc/Mphanquyen.php */ ?>