<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Models xử lý đăng ký tài khoản
**/
class Mdangky extends MY_Model {
	

    public function dangnhap($taikhoan,$password){
        $this->db->select('*');
        $this->db->where('ten_taikhoan',$taikhoan);
        $this->db->where('makhau_taikhoan',$password);
        $this->db->from('tbl_taikhoan');
        $this->db->join('tbl_thanhvien','tbl_thanhvien.ma_thanhvien = tbl_taikhoan.ma_thanhvien ','left');
        $this->db->join('tbl_quyen','tbl_quyen.ma_quyen = tbl_taikhoan.ma_quyen','left');
        return $this->db->get()->row_array();
    }
	
} /*End Model*/
?>