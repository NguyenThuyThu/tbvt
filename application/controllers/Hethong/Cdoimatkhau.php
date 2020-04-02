<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   Đổi mật khẩu
*
**/
class Cdoimatkhau extends MY_Controller {
    protected $_title     = "Đổi mật khẩu";
    protected $_tinnhan   = array('hd' => 'hidden="true"', 'class' => '', 'info' => '');
    protected $_luugiatri = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Hethong/Mcanbo');
        $this->load->model('Hethong/Mlogin');
    }
    
    public function index() {
        //pr($this->_session);
        $this->_tinnhan = $this->input->post('doimatkhau') ? $this->changePassword() : $this->_tinnhan;
        
        $data['title']     = $this->_title;
        $data['tinnhan']   = $this->_tinnhan;
        $data['luugiatri'] = $this->_luugiatri;
        $data['taikhoan'] = $this->retrieveData();
        $temp['data']      = $data;
        $temp['template']  = 'Hethong/Vdoimatkhau';
        $this->load->view('layout/content',$temp);
    }

    public function retrieveData() {
        if($this->input->get('matk')){
            $idAccount=$this->input->get('matk');
            return $this->Mcanbo->retrieveStaff(NULL,$idAccount);
        }
        return $this->Mcanbo->retrieveStaff(NULL,$this->_session['ma_taikhoan']);
    }

/* ---------------------------------------- Đổi mật khẩu ------------------------------------------ */
    public function changePassword() {
        $idAccount=$this->input->get('matk');
        $data_account = $this->retrieveData();
        $post_data = array(
            'matkhau_taikhoan'      => $this->input->post('matkhauhientai'),
            'smkmoi'        => $this->input->post('matkhaumoi'),
            'xacnhanmkmoi' => $this->input->post('xacnhanmatkhaumoi')
        );

        if($data_account[0]['matkhau_taikhoan'] != sha1($post_data['matkhau_taikhoan'])) {
            $this->_luugiatri = $post_data;
            return notification('', 'alert-danger', 'Mật khẩu hiện tại không đúng'); 
        }

        if($this->Mlogin->changePassword($post_data['smkmoi'], $idAccount) == FALSE) {
            $this->_luugiatri = $post_data;
            return notification('', 'alert-info', 'Mật khẩu không thay đổi');
        }else {
            $this->_luugiatri = array();
            return notification('', 'alert-info', 'Cập nhật mật khẩu thành công');
        }

        if($this->Mlogin->changePassword($post_data['smkmoi'], $this->_session['ma_taikhoan']) == FALSE) {
            $this->_luugiatri = $post_data;
            return notification('', 'alert-info', 'Mật khẩu không thay đổi');
        }else {
            $this->_luugiatri = array();
            return notification('', 'alert-info', 'Cập nhật mật khẩu thành công');
        }
        
    }           
} // End class

