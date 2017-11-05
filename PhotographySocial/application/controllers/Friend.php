<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/5
 * Time: 14:28
 */
class Friend extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Friend_Model');
        $this->load->helper('url_helper');
    }

    // 关注好友
    public function watch($friend){
        $result = $this->Friend_Model->add($friend);
        return $result;
    }

    // 取消关注
    public function unwatch($friend){
        $result = $this->Friend_Model->remove($friend);
        return $result;
    }

    // 获得所有朋友
    public function getFriends() {
        $friends = $this->Friend_Model->getFriends();
        $data = array('friends'=>$friends,'isFriend'=>true);
        $userInfo = array('userInfo'=>$_SESSION);
        $this->load->view('common/header',$userInfo);
        $this->load->view('friend/friend',$data);
    }

    // 获得所有用户
    public function getStrangers() {
        $strangers = $this->Friend_Model->getStrangers();
        $data = array('friends'=>$strangers,'isFriend'=>false);
        $userInfo = array('userInfo'=>$_SESSION);
        $this->load->view('common/header',$userInfo);
        $this->load->view('friend/friend',$data);
    }
}