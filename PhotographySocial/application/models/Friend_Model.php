<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/5
 * Time: 14:28
 */
class Friend_Model extends CI_Model {

    public $userId = 'userId';
    public $friendId= 'friendid';
    private $sql_friend_add = 'insert into friend(user_id, following_id) values(?,?)';
    private $sql_friend_remove = 'delete from friend where user_id = ? and following_id = ?';
    private $sql_get_friends = 'select * from user where id in (select following_id from friend where user_id = ?)';
    private $sql_get_strangers = 'select * from user where id != ? and id not in(select following_id from friend where user_id = ?)';

    public function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    // 添加关注关系
    public function add($friendId){
        $result = $this->db->query($this->sql_friend_add, array($this->session->userdata('userId'), $friendId));
        return $result;
    }

    // 取消关注关系
    public function remove($friendId){
        $result = $this->db->query($this->sql_friend_remove,array($this->session->userdata('userId'),$friendId));
        return $result;
    }

    // 获得所有朋友
    public function getFriends(){
        $result = $this->db->query($this->sql_get_friends,array($this->session->userdata('userId')));
        $friends = $result->result_array();
        return $friends;
    }

    // 获得所有用户
    public function getStrangers(){
        $result = $this->db->query($this->sql_get_strangers,array($this->session->userdata('userId'),$this->session->userdata('userId')));
        $strangers = $result->result_array();
        return $strangers;
    }
}