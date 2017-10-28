<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/10/28
 * Time: 22:30
 */

class User extends CI_Controller {

    public function index(){

//        echo 'User---index';
        $this->load->view("user/user_index");
    }

    public function showLogin(){
//        $this->load->helper('url');
        $this->load->view('user/login');
    }
}