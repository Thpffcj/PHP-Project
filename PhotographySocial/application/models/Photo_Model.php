<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/11/3
 * Time: 21:59
 */
class Photo_Model extends CI_Model
{

    public $name = 'name';
    public $album_name = 'album_name';

    private $sql_getAllAlbum = 'select * from album where user_id = ?';
    private $sql_savePhoto = 'insert into photo(user_id, album_name, photo_path) VALUES(?,?,?)';
    private $sql_getPhoto = 'select * from photo where user_id = ?';

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    // 获取当前用户所有相册
    public function getAllAlbum(){
        $result = $this->db->query($this->sql_getAllAlbum, array($this->session->userdata('userId')))->result_array();
        return $result;
    }

    // 保存新照片
    public function savePhoto($data, $name){
        $post = array($this->session->userdata('userId'), $data[$this->album_name], $name);
        $result = $this->db->query($this->sql_savePhoto, $post);
        return $result;
    }

    // 获取当前用户所有照片
    public function getPhoto(){
        $result = $this->db->query($this->sql_getPhoto, array($this->session->userdata('userId')))->result_array();
        return $result;
    }

}