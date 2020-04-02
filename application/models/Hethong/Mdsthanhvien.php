<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
* MODEL thành viên
* Cdoimatkhau lấy phần retrieveStaff() 
*/
class Mdsthanhvien extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->_table       = "tbl_thanhvien";
        $this->_primary_key = "ma_thanhvien";
    }

// list table
	public function listTable(){
        // echo $this->db->last_query();exit();
        // echo($kq);exit();
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
    	return $this->db->get()->result_array();
	}

// Staff list table
	public function StaffListtable($limit = null,$offset = null,$tenthanhvien=NULL){
    	if($tenthanhvien){
    	$this->db->like('tv.hoten_thanhvien',$tenthanhvien);    		
    	}
    	$this->db->select('tv.*,quyen.ten_quyen, tk.*');
    	$this->db->from('tbl_taikhoan as tk');
        $this->db->join('tbl_thanhvien as tv','tv.ma_thanhvien=tk.ma_thanhvien');
    	$this->db->join('tbl_quyen as quyen','quyen.ma_quyen=tk.ma_quyen');
    	if ($limit) {
			$this->db->limit($limit, $offset);
		}
    	return $this->db->get()->result_array();
	}
// count list Staff
	public function countListStaff($tenthanhvien=NULL){
    	if($tenthanhvien){
    	$this->db->like('hoten_thanhvien',$tenthanhvien);    		
    	}
    	return $this->db->get('tbl_thanhvien')->num_rows();
	}
// retrieve name Account
	public function retrieveNameAccount($nameAccount){
		$this->db->where('ten_taikhoan',$nameAccount);
		return $this->db->get('tbl_taikhoan')->num_rows();
	}
}
?>