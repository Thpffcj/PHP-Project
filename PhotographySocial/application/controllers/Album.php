<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/3
 * Time: 9:05
 */
class Album extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Album_Model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    // 新建相册页面
    public function showNewAlbum(){
        $this->load->view("common/header", array('userInfo'=>$_SESSION));
        $this->load->view('photo/new_album');
    }

    // 保存新相册
    public function saveAlbum(){
        $result = $this->Album_Model->saveAlbum($_POST);
        $this->showAllAlbum();
    }

    // 展示我的所有相册
    public function showAllAlbum(){
        $post = $this->Album_Model->getAlbum();
        $userInfo = array('userInfo'=>$_SESSION);
        $this->load->view("common/header",$userInfo);
        $this->load->view("photo/album", array('post'=>$post));
    }

}