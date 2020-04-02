<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
* MODEL nhà cung cấp
* Cdoimatkhau lấy phần retrieveStaff() 
*/
class Mnhacungcap extends MY_Model{
	protected $_table = 'tbl_nhacungcap';
    public function __construct()
	{

		parent::__construct();

		//Do your magic here
	}

	//thêm mới nhà cung cấp

	function them_nhacungcap($data=array()){

		$this->db->insert('tbl_nhacungcap', $data);

		if($this->db->affected_rows() > 0) {

			return $this->db->insert_id();

		}

		// return $this->db->affected_rows();

	}

	//danh sách nhà cung cấp
	
	function get_nhacungcap(){

		$this->db->select('*');

		$this->db->from('tbl_nhacungcap');

		$query = $this->db->get();

		return $query->result_array();	

	}

	//đổ dữ liệu nhà cung cấp để cập nhật
	function get_nhacungcap_id($ma_nhacungcap){

		$this->db->select('*');

		$this->db->from('tbl_nhacungcap');

		$this->db->where('ma_nhacungcap', $ma_nhacungcap);

		$query = $this->db->get();

		return $query->result_array();

	}


	//cập nhật nhà cung cấp
	function update_nhacungcap($ma_nhacungcap, $data=array()){

		$this->db->where('ma_nhacungcap', $ma_nhacungcap);

		$this->db->update('tbl_nhacungcap', $data);

		return $this->db->affected_rows();
		
	}

	/*Xóa nhà cung cấp*/
	public function xoanhacungcap($id) {
		$this->db->where('ma_nhacungcap', $id);
		$query = $this->db->get('tbl_nhacungcap');
		if($query->num_rows()){
			return notification('', 'alert-danger', 'Không thể xóa nhà cung cấp đang được sử dụng');
		}else{

			$this->db->where('ma_nhacungcap', $id);

			$this->db->delete($this->_table);

			if($this->db->affected_rows() > 0) {
				return notification('', 'alert-success', 'Xóa nhà cung cấp thành công');  
			}
				
			return notification('', 'alert-danger', 'Xóa nhà cung cấp thất bại'); 
		}
	}

}
?>