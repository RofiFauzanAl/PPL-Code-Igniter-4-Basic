<?php

namespace App\Models;

use CodeIgniter\Model;

class m_mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'NIM';
    protected $allowedFields = [
        'NIM',
        'Nama',
        'Umur'
    ];

    public function getAll(){
        $sql = "SELECT * FROM {$this->table}";

        $db = db_connect();
        $data = $db->query($sql);

        return $data->getResultArray();
    }

    public function storeMahasiswa($data){
        $db = db_connect();
        $sql = "INSERT INTO {$this->table} (NIM, Nama, Umur) VALUES ('{$data['NIM']}', '{$data['Nama']}' ,{$data['Umur']} )";

        return $db->query($sql);
    }

    public function getMahasiswa($NIM){
        $db = db_connect();
        $sql = "SELECT * FROM {$this->table} WHERE NIM = '{$NIM}'";
        $data = $db->query($sql);
        
        return $data->getRowArray();
    }

    public function deleteMahasiswa($NIM){
        $db = db_connect();
        $sql = "DELETE FROM {$this->table} WHERE NIM = '{$NIM}'";
        $data = $db->query($sql);

        return $data;
    }

    public function updateDataMhs($data, $NIM){
        $db = db_connect();
        $sql = "UPDATE {$this->table} SET Nama = '{$data['Nama']}', Umur = '{$data['Umur']}' WHERE NIM = '{$NIM}'";
        $data = $db->query($sql);

        return $data;
    }  

    public function searchData($data){
        $db = db_connect();
        $sql = "SELECT * FROM {$this->table} WHERE NIM LIKE '%{$data}%' OR Nama LIKE '%{$data}%' OR Umur LIKE '%{$data}%'";
        $data = $db->query($sql);

        return $data->getResultArray();
    }
}
