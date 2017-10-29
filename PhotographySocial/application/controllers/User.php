<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/10/28
 * Time: 22:30
 */

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->helper('url_helper');
    }

    public function index(){

//        echo 'User---index';
//        $this->load->view("user/user_index");
        $this->load->model('User_Model');
        $list = $this->User_Model->getAll();

        $this->load->view('user/index', array(
            'list'=>$list
        ));
    }

    public function showLogin(){
        $this->load->helper('url');
        $this->load->view('user/login');
    }

    public function showRegister(){
        $this->load->helper('url');
        $this->load->view('user/register');
    }

    public function login()
    {
        $db = $this->User_Model;

        $user = $_POST[$db->c_username];
        $pass = $_POST[$db->c_password];
        $data = array($db->c_username=>$user,$db->c_password=>$pass);

        $result = $db->checkUser($data);
        if ($result) {
            $this->load->helper('url');
            session_start();
//            $_SESSION['userid'] = $result['userid'];
            $_SESSION['username'] = $result['username'];
//            $_SESSION['up'] = $result['up'];
//            $_SESSION['down'] = $result['down'];
            redirect("/activity/showDynamicList");
            //获取展示的数据
        } else {
            $this->load->view('user/login');
        }
    }


    public function register(){
        $db = $this->User_Model;

        $user = $_POST[$db->c_username];
        $pass = $_POST[$db->c_password];
        $data = array($db->c_username=>$user,$db->c_password=>$pass);

        $result = $db->registerUser($data);
        if ($result){
            $this->load->view('user/register_success');
        }else {
            $this->load->view('user/register_fail');
        }
    }

    public function showUsers(){

        // 装载数据库操作类
        $this->load->database();
        // 装载成功后，会放入超级对象的属性中，默认属性名是db

        $sql = 'SELECT * FROM test';
        $res = $this->db->query($sql);

        // 返回值是一个对象
        var_dump($res);
        $list = $res->result();
        var_dump($list);
    }

    public function test() {

        $this->load->libaray('pagination');
        $this->load->helper('url');

        $page_size = 10;

        $config['base_url'] = site_url('user/test');
        $config['total_rows'] = 100;
        $config['per_page'] = $page_size;
        $config['first_page'] = '首页';

        $this->pagination->initialize($config);

        $offset = $this->url->segment(3);
        $sql = 'select * from test limit $offset, $page_size';

        $data['links'] = $this->pagination->create_links();
        $this->load->view('user/test', $data);
    }
}