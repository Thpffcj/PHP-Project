<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/3
 * Time: 9:05
 */
class Album_Model extends CI_Model {

    public $name = 'name';
    public $description = 'description';

    private $sql_saveAlbum = 'insert into album(album_name, user_id, description) VALUES(?,?,?)';
    private $sql_getAlbum = 'select * from album where user_id = ?';

    public function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    // 保存新相册
    public function saveAlbum($data){
        $post = array($data[$this->name], $this->session->userdata('userId'), $data[$this->description]);
        $result = $this->db->query($this->sql_saveAlbum, $post);
        return $result;
    }

    // 获取当前用户所有相册
    public function getAlbum(){
        $result = $this->db->query($this->sql_getAlbum, array($this->session->userdata('userId')))->result_array();
        return $result;
    }

}