<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/1
 * Time: 14:33
 */
class Activity_Model extends CI_Model {

    public $userId = 'userid';
    public $head = 'head';
    public $phone = 'phone';
    public $time = 'time';
    public $body = 'body';
    private $sql_savePost = 'insert into activity(name, sponsor, phone, time, content) VALUES(?,?,?,?,?)';

    public function __construct() {
        $this->load->database();
    }

    // 保存新活动
    public function saveActivity($data){
//        $post = array($data[$this->body], $_SESSION[$this->userId], $data[$this->phone], $data[$this->time], $data[$this->content]);
        $post = array($data[$this->head], '2', $data[$this->phone], $data[$this->time], $data[$this->body]);
        $result = $this->db->query($this->sql_savePost, $post);
        return $result;
    }
}