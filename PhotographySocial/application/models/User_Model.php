<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/10/29
 * Time: 11:37
 */
class User_Model extends CI_Model {

    public $c_username = 'username';
    public $c_password = 'password';
    public $birthday = 'birthday';
    public $phone = 'phone';
    private $sql_user_get = 'select * from user where username=? and password=?';
    private $sql_user_check_exist = 'select * from user where username=?';
    private $sql_user_register = 'insert into user(username,password)values(?,?)';
    private $sql_user_detail = 'select * from user where id=?';
    private $sql_user_up = 'update user set up=? where userid=?';
    private $sql_user_down = 'update user set down=? where userid=?';

    private $sql_basic_update = "update basicinfo set birthday=?,sex=?,height=?,weight=?,breath=?";
    private $sql_basic_insert = "insert into basicinfo(userid,sex,birthday,height,weight,breath) values(?,?,?,?,?,?)";

    public function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    // 返回所有用户
    public function getAll(){
        $this->load->database();
        $res = $this->db->get('test');
        return $res->result();
    }

    //登录
    public function checkUser($data) {
        $user = $data[$this->c_username];
        $pass = $data[$this->c_password];
        $result = $this->db->query($this->sql_user_get, array($user, $pass));
        if ($result->num_rows() > 0) {
            $row =  $result->row_array();
            unset($row['password']);
            return $row;
        } else {
            return false;
        }
    }

    // 注册用户
    public function registerUser($data){
        $user = $data[$this->c_username];
        $pass = $data[$this->c_password];
        $exist = $this->db->query($this->sql_user_check_exist,array($user));
        if ($exist->num_rows() == 0) {
            $result1 = $this->db->query($this->sql_user_register,array($user,$pass));
            if ($result1){
                $info = true;
            }else {
                $info = false;
            }
        }else{
            $info = false;
        }
        return $info;
    }

    public function getInfo($userId) {
        $result = $this->db->query($this->sql_user_detail, array($userId))->row_array();
        return $result;
    }

    public function updateInfo($basicInfo){
        $basic = $this->getBasicInfo($basicInfo[$this->userId]);
        if (count($basic)){
            //update
            $result = $this->db->query($this->sql_basic_update,
                array($basicInfo[$this->birthday],$basicInfo[$this->sex],$basicInfo[$this->height],$basicInfo[$this->weight],$basicInfo[$this->breath]));
        }else {
            //insert
            $result = $this->db->query($this->sql_basic_insert,
                array($basicInfo[$this->userId],$basicInfo[$this->sex],$basicInfo[$this->birthday],$basicInfo[$this->height],$basicInfo[$this->weight],$basicInfo[$this->breath]));
        }
        return $result;
    }

}