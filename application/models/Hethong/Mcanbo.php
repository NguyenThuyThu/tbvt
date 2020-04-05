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
// insert account
	public function insertSaff($data_Staff=array()){
		$this->db->insert($this->_table,$data_Staff);
		if($this->db->affected_rows() > 0) {
			return $this->db->insert_id();
		}
		return notification('', 'alert-danger', 'Thêm thông tin cán bộ thất bại');
	}
// insert staff
	public function insertAccount($account=array()){
		$this->db->insert('tbl_taikhoan',$account);
		if($this->db->affected_rows() > 0) {
			return notification('', 'alert-info', 'Thêm tài khoản cán bộ thành công'); 
		}
		return notification('', 'alert-danger', 'Thêm tài khoản cán bộ thất bại');
	}
// list table
	public function listTable(){
		return $this->db->get('tbl_thanhvien')->result_array();
	}
// retrieve staff info
	public function retrieveStaff($idStaff=NULL,$idAccount=NULL){
    	if($idStaff){
    	$this->db->where('tv.ma_thanhvien',$idStaff);
    	}
    	if($idAccount){
    	$this->db->where('tk.ma_taikhoan',$idAccount);    		
    	}
    	$this->db->select('tk.*,tv.*');
    	$this->db->from('tbl_thanhvien as tv');
    	$this->db->join('tbl_taikhoan as tk','tk.ma_thanhvien=tv.ma_thanhvien','left');
    	// echo $this->db->last_query();exit();
    	return $this->db->get()->result_array();
	}
	
// Update Staff info
	public function updateSaff($idStaff,$data_Staff=array()){
		$this->db->where('ma_thanhvien',$idStaff);
		$this->db->update('tbl_thanhvien',$data_Staff);
		if($this->db->affected_rows()>0){
    		return notification('', 'alert-info', 'Cập nhật cán bộ thành công'); 
		}
		return notification('', 'alert-info', 'Cập nhật cán bộ không đổi');
	}
// Update Account info
	public function updateAccount($idAccount,$account=array()){
		$this->db->where('ma_thanhvien',$idAccount);
		$this->db->update('tbl_taikhoan',$account);
	}
// Staff list table
	public function StaffListtable($limit = null,$offset = null,$tencanbo=NULL){
    	if($tencanbo){
    	$this->db->like('tv.hoten_thanhvien',$tencanbo);    		
    	}
    	$this->db->select('tv.*');
    	$this->db->from('tbl_taikhoan as tk');
    	$this->db->join('tbl_thanhvien as tv','tv.ma_thanhvien=tk.ma_thanhvien');
    	if ($limit) {
			$this->db->limit($limit, $offset);
		}
    	return $this->db->get()->result_array();
	}
// count list Staff
	public function countListStaff($tencanbo=NULL){
    	if($tencanbo){
    	$this->db->like('Hoten_tv',$tencanbo);    		
    	}
    	return $this->db->get('tbl_thanhvien')->num_rows();
	}
// retrieve name Account
	public function retrieveNameAccount($nameAccount){
		$this->db->where('Taikhoan_tv',$nameAccount);
		return $this->db->get('tbl_taikhoan')->num_rows();
	}
}
?>