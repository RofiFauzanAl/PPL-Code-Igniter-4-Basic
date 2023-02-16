<?php
namespace App\Models;

use CodeIgniter\Model;

class m_pegawai extends Model{
    protected $table = 'pegawai';
    protected $primaryKey = 'NIM';
    protected $allowedFields = [
        'NIM',
        'Nama',
        'Gender',
        'Telp',
        'Email',
        'Pendidikan'
    ];


    public function storePegawai($data){
        $db = db_connect();
        $sql = "INSERT INTO {$this->table} (NIM, Nama, Gender, Telp, Email, Pendidikan) 
                VALUE ( '{$data['NIM']}',
                        '{$data['Nama']}',
                        '{$data['Gender']}',
                        '{$data['Telp']}',
                        '{$data['Email']}',
                        '{$data['Pendidikan']}')";
        return $db->query($sql);
    }
}


?>