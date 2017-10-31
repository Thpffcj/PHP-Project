<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/10/29
 * Time: 20:53
 */
class Activity extends CI_Controller {

    public function showDynamicList(){
//        if (!array_key_exists('userid',$_SESSION)){
//            redirect('user/showLogin');
//        }
//        $userId = $_SESSION['userid'];
//        $basicInfo = $this->personal_basic_model->getBasicInfo($userId);
//        if (sizeof($basicInfo) == 0){
//            $this->showModifyBasic();
//        }else{
//            $physical = $this->personal_data_model->getData();
//            $data = array('basic'=>$basicInfo,'data'=>$physical);
//            $userInfo = array('userInfo'=>$_SESSION);
//            $this->load->view('template/header',$userInfo);
//            $this->load->view("personal/personal",$data);
//        }
        $this->load->view('index');
    }
}