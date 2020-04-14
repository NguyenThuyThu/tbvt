<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
* MODEL cán bộ
* Cdoimatkhau lấy phần retrieveStaff() 
*/
class Mcanbo extends MY_Model{
    public function __construct() {
        parent::__construct();
        $this->_table       = "tbl_thanhvien";
        $this->_primary_key = "ma_thanhvien";
	}
	
	function get_diachi($matv){
		$this->db->from("tbl_diachi");
		$this->db->where("tbl_diachi.ma_thanhvien", $matv);
		$this->db->select("tbl_diachi.*, tbl_thanhvien.*");
		$this->db->join("tbl_thanhvien", "tbl_thanhvien.ma_thanhvien = tbl_diachi.ma_thanhvien","INNER");
		return $this->db->get()->result_array();
	}

	public function getdulieu($ma_thanhvien){
		$this->db->select('*');
		$this->db->where('ma_thanhvien',$ma_thanhvien);
		return $this->db->get('tbl_thanhvien')->row_array();
	}
}
?>