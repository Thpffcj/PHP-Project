<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/10/29
 * Time: 11:37
 */
class User_Model extends CI_Model {

    public $userId = 'userId';
    public $username = 'username';
    public $password = 'password';
    public $birthday = 'birthday';
    public $phone = 'phone';
    public $avatar = 'avatar';
    private $sql_user_get = 'select * from user where username=? and password=?';
    private $sql_user_check_exist = 'select * from user where username=?';
    private $sql_user_register = 'insert into user(username,password,avatar)values(?,?,?)';
    private $sql_user_detail = 'select * from user where id=?';
    private $sql_user_up = 'update user set up=? where userid=?';
    private $sql_user_down = 'update user set down=? where userid=?';

    private $sql_user_detail_update = "update user set username=?, password=?, birthday=?, phone=?, avatar=? where id=?";
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
        $user = $data[$this->username];
        $pass = $data[$this->password];
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
        $user = $data[$this->username];
        $pass = $data[$this->password];
        $avatar = 'image.jpg';
        $exist = $this->db->query($this->sql_user_check_exist,array($user));
        if ($exist->num_rows() == 0) {
            $result1 = $this->db->query($this->sql_user_register,array($user,$pass,$avatar));
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

    // 获取用户账户信息
    public function getUserInfo($userId){
        $userInfo = $this->db->query($this->sql_user_detail, array($userId))->row_array();
        unset($userInfo['password']);
        $userInfo['userId'] = $userInfo['id'];
        return $userInfo;
    }

    // 更新用户账户信息
    public function updateInfo($basicInfo){
        $result = $this->db->query($this->sql_user_detail_update,
                array($basicInfo[$this->username], $basicInfo[$this->password], $basicInfo[$this->birthday],
                    $basicInfo[$this->phone], $basicInfo[$this->avatar], $basicInfo[$this->userId]));
        return $result;
    }

    /**
     * 点赞
     * @param $userid
     * @return mixed
     */
    public function up($userid){
        $other = $this->db->query($this->sql_user_detail,array($userid))->row_array();
        $data = array('up'=>($other['up']+1));
        $where = 'id='.$userid;
        $update = $this->db->update_string('user',$data,$where);
        $result = $this->db->query($update);
        return $result;
    }

    /**
     * 踩
     * @param $userid
     * @return mixed
     */
    public function down($userid){
        $other = $this->db->query($this->sql_user_detail,array($userid))->row_array();
        $data = array('down'=>($other['down']+1));
        $where = 'id='.$userid;
        $update = $this->db->update_string('user',$data,$where);
        $result = $this->db->query($update);
        return $result;
    }

}