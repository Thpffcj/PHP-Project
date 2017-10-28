<?php
/**
 * Created by PhpStorm.
 * User: Thpffcj
 * Date: 2017/10/19
 * Time: 16:24
 */

class SQLiteDB extends SQLite3 {
    function __construct(){
        try {
            $this->open('F:/SQLite/database/photography.db');
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
}

$db = new SQLiteDB();
if(!$db){
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";
}