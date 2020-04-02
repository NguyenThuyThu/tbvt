<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*/
class Mphieunhap extends MY_Model{
	
	public function get_tenSP(){
		$this->db->select('sp.ma_sanpham, sp.ten_sanpham, sp.trangthai_dang_sanpham');
		$this->db->from('tbl_sanpham as sp');
		$this->db->order_by("ten_sanpham", "ASC");
		$query = $this->db->get()->result_array();
		return $query;	
	}
}
?>