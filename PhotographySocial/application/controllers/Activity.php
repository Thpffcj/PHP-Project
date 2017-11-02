<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/10/29
 * Time: 20:53
 */
class Activity extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Activity_Model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    // 发布新活动页面
    public function showNewActivity(){
        $this->load->view("common/header", array('userInfo'=>$_SESSION));
        $this->load->view('activity/new_activity');
    }

    // 保存新活动
    public function saveActivity(){
//        var_dump($_POST);
        $result = $this->Activity_Model->saveActivity($_POST);
        $this->showAllActivity();
        return $result;
    }

    public function showAllActivity(){
        $post = $this->Activity_Model->getActivity();
        $userInfo = array('userInfo'=>$_SESSION);
        $this->load->view("common/header",$userInfo);
        $this->load->view("activity/activity", array('post'=>$post));
    }
}