<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/3
 * Time: 21:59
 */
class Photo_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

}