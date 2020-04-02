<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**

**/
class Mloaisanpham extends CI_Model {
	protected $_table = 'tbl_loaisanpham';
	public function __construct() {
		parent::__construct();
	}

	/*Thêm Loại sản phẩm*/
	public function ThemLoaiSP($data = array()){
		// Kiểm tra sự tồn tại
		$this->db->where('ten_loaisanpham', $data['ten_loaisanpham']);
		$query = $this->db->get($this->_table);
		if($query->num_rows() > 0) {
			return notification('', 'alert-danger', 'Loại sản phẩm này này đã tồn tại');
		}else {
			$this->db->insert($this->_table, $data);
			if($this->db->affected_rows() > 0) {
				return notification('', 'alert-info', 'Thêm loại sản phẩm thành công'); 
			}
			return notification('', 'alert-danger', 'Thêm loại sản phẩm thất bại'); 
		}
	}

	/*Lấy danh sách loại sản phẩm theo danh mục sản phẩm*/
	public function LayDanhSachLoaiSP($id = NULL){
		// Lấy 1 bản ghi để sửa
		if($id){
			$this->db->where('ma_loaisanpham', $id);
		}
		$this->db->select('ma_loaisanpham, ten_loaisanpham, dmsp.ten_dmsanpham, dmsp.ma_dmsanpham');
		$this->db->from('tbl_loaisanpham as loaisp');
		$this->db->join('tbl_danhmuc_sanpham as dmsp','dmsp.ma_dmsanpham=loaisp.ma_dmsanpham');
		return $this->db->get()->result_array();
	}

	/*Cập nhật loại sản phẩm*/
	public function CapNhatLoaiSP($id, $data = array()) {
			// Kiểm tra dữ liệu nhập đã tồn tại trong CSDL hay chưa?
			$this->db->where('ten_loaisanpham', $data['ten_loaisanpham']);
			$this->db->where('ma_dmsanpham', $data['ma_dmsanpham']);

			$query = $this->db->get($this->_table);
			if($query->num_rows()) {
				return notification('', 'alert-info', 'Không thay đổi');
			}else {

				$this->db->where('ma_loaisanpham', $id);
				$this->db->update($this->_table, $data);

				if($this->db->affected_rows() > 0) {
					return notification('', 'alert-success', 'Cập nhật loại sản phẩm thành công'); 
				}
					
				return notification('', 'alert-info', 'Cập nhật loại sản phẩm thành công');
			}	
	}

	/*Xóa loại sản phẩm*/
	public function XoaLoaiSP($id) {
		// Kiểm tra tính ràng bộc
		$this->db->where('ma_loaisanpham', $id);
		$query = $this->db->get('tbl_sanpham');
		if($query->num_rows()){
			return notification('', 'alert-danger', 'Không thể xóa loại sản phẩm đang được sử dụng');
		}else{

			$this->db->where('ma_loaisanpham', $id);

			$this->db->delete($this->_table);

			if($this->db->affected_rows() > 0) {
				return notification('', 'alert-success', 'Xóa loại sản phẩm thành công');  
			}
				
			return notification('', 'alert-danger', 'Xóa loại sản phẩm thất bại'); 
		}
	}

	/*Lấy danh mục sản phẩm ngoại trừ thể loại của loại sản phẩm hiện tại*/
	public function GetSelectMenu($id = NULL){
		if(!$id){
			$id = 1;
		}
		$this->db->where_not_in('ma_dmsanpham', $id);
		$this->db->select('ma_dmsanpham, ten_dmsanpham');
		return $this->db->get('tbl_danhmuc_sanpham')->result_array();
	}
	
}?>