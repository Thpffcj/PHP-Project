<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/13
 * Time: 21:11
 */
class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_Model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

}