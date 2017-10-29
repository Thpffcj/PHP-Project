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
    private $sql_user_get = 'select * from user where username=? and password=?';
    private $sql_user_check_exist = 'select * from user where username=?';
    private $sql_user_register = 'insert into user(username,password)values(?,?)';
    private $sql_user_getOther = 'select * from user where userid=?';
    private $sql_user_up = 'update user set up=? where userid=?';
    private $sql_user_down = 'update user set down=? where userid=?';

    public function __construct() {
        $this->load->database();
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
}