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


}