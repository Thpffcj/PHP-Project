<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/1
 * Time: 14:33
 */
class Activity_Model extends CI_Model {

    public $userId = 'userId';
    public $name = 'name';
    public $phone = 'phone';
    public $time = 'time';
    public $content = 'content';
    private $sql_saveActivity = 'insert into activity(name, sponsor, username, phone, time, content) VALUES(?,?,?,?,?,?)';
    private $sql_findUsernameByid = 'select username from user where id = ?';
    private $sql_getActivity = 'select * from activity where sponsor = ?';
    private $sql_getAllActivity = 'select * from activity ';
    private $sql_getAvatar = 'select * from user where id = ? ';

    public function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    // 保存新活动
    public function saveActivity($data){
        $username = $this->db->query($this->sql_findUsernameByid, $this->session->userdata('userId'))->result_array();
//        var_dump($username);
        $post = array($data[$this->name], $this->session->userdata('userId'), $username[0], $data[$this->phone], $data[$this->time], $data[$this->content]);
        $result = $this->db->query($this->sql_saveActivity, $post);
        return $result;
    }

    // 获取当前用户所有活动
    public function getActivity(){
        $result = $this->db->query($this->sql_getActivity, array($this->session->userdata('userId')))->result_array();
        return $result;
    }

    // 获取所有用户所有活动
    public function getAllActivity(){
        $result = $this->db->query($this->sql_getAllActivity)->result_array();
        $i = 0;
        foreach ($result as $row) {
            $id = $row['sponsor'];
            $user = $this->db->query($this->sql_getAvatar, $id)->result_array();
//            var_dump($user);
            $result[$i]['avatar'] = $user[0]['avatar'];
            $i = $i + 1;
//            var_dump($row);
        }
//        var_dump($result);
        return $result;
    }
}