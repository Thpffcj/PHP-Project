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
    public $photo_name = 'photo_name';
    public $description = 'description';

    private $sql_getAllAlbum = 'select * from album where user_id = ?';
    private $sql_savePhoto = 'insert into photo(user_id, album_name, photo_path, photo_name, description) VALUES(?,?,?,?,?)';
    private $sql_getPhoto_path = 'select * from photo where user_id = ?';
    private $sql_getAllPhoto_path = 'select * from photo';

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    /**
     * 获得网站所有照片
     * @return mixed
     */
    public function getAllPhoto(){
        $result = $this->db->query($this->sql_getAllPhoto_path)->result_array();
        return $result;
    }

    // 获取当前用户所有照片
    public function getAllAlbum(){
        $result = $this->db->query($this->sql_getAllAlbum, array($this->session->userdata('userId')))->result_array();
        return $result;
    }

    // 保存新照片
    public function savePhoto($data, $name){
        $post = array($this->session->userdata('userId'), $data[$this->album_name], $name,
            $data[$this->photo_name], $data[$this->description]);
        $result = $this->db->query($this->sql_savePhoto, $post);
        return $result;
    }

    // 获取当前用户所有照片
    public function getPhoto(){
        $result = $this->db->query($this->sql_getPhoto_path, array($this->session->userdata('userId')))->result_array();
        return $result;
    }

}