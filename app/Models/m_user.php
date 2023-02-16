<?php

namespace App\Models;

use CodeIgniter\Model;

class m_user extends Model{
    protected $table = 'admin';
    protected $primaryKey = 'id';

    public function getUser($username){
        $db = db_connect();
        $data = $db->query("SELECT * FROM admin WHERE username = '$username'");
        return $data->getRowArray();
    }
    
}

?>