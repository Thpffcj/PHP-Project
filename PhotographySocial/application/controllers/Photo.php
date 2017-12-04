<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/3
 * Time: 21:59
 */
class Photo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Photo_Model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    /**
     *  展示所有图片
     */
    public function showAllPhoto() {
        $post = $this->Photo_Model->getAllPhoto();
        $userInfo = array('userInfo'=>$_SESSION);
        $this->load->view("common/header",$userInfo);
        $this->load->view("photo/all_photo", array('post'=>$post));
    }

    // 新建照片页面
    public function showNewPhoto(){
        $post = $this->Photo_Model->getAllAlbum();
        $this->load->view("common/header", array('userInfo'=>$_SESSION));
        $this->load->view('photo/new_photo', array('post'=>$post));
    }

    // 保存新照片
    public function savePhoto(){

        // 上传目录需要手工创建
        $config['upload_path'] = './uploads/';
        // 允许扩展名
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        // 生成新文件名
        $config['file_name'] = uniqid();

        // 装载文件上传类
        $this->load->library('upload', $config);
        $this->upload->do_upload('pic');

        // 获取上传之后的数据
        $data = $this->upload->data();
//        $name = "../../uploads/".$data['file_name'];
        $name = $data['file_name'];

        $result = $this->Photo_Model->savePhoto($_POST, $name);
        $this->showPhoto();
    }

    // 展示我的所有照片
    public function showPhoto(){
        $post = $this->Photo_Model->getPhoto();
//        var_dump($post);
        $userInfo = array('userInfo'=>$_SESSION);
        $this->load->view("common/header",$userInfo);
        $this->load->view("photo/photo", array('post'=>$post));
    }
}