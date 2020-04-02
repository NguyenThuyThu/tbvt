<?php
/**
 * model đăng nhập
 */
class Mlogin extends MY_Model
{
    public function dangnhap($taikhoan,$matkhau){
        $this->db->where('ten_taikhoan',$taikhoan);
        $this->db->where('makhau_taikhoan',$matkhau);
        $this->db->select('*');
        $this->db->from('tbl_taikhoan');
        $this->db->join('tbl_thanhvien','tbl_thanhvien.ma_thanhvien = tbl_taikhoan.ma_thanhvien ','left');
        $this->db->join('tbl_quyen','tbl_quyen.ma_quyen = tbl_taikhoan.ma_quyen','left');
        return $this->db->get()->row_array();
    }

    public function changePassword($matkhau, $ma_taikhoan) {
        $this->db->where('ma_taikhoan', $ma_taikhoan);
        $this->db->set(array('matkhau_taikhoan' => sha1($matkhau)));
        $this->db->update('tbl_taikhoan');
        if($this->db->affected_rows() > 0) {
          return TRUE;
        }
        return FALSE;
    }
   
}
?>