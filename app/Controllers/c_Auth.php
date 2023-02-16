<?php

namespace App\Controllers;

use App\Models\m_user;
use App\Controllers\BaseController;

class c_Auth extends BaseController{
    public function index(){
        return view('v_login');
    }

    public function login(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $model = new m_user();
        $session = session();
        $data = $model->getUser($username);
        $encrypt_pass = md5((string) $password);
        
        if (!empty($data)) {
            if($data['password'] == $encrypt_pass){
                $session->start();
                session()->set('isLoggedIn', true);
                return redirect()->to('mahasiswa_display');
            }else{
                echo "<script>alert('Password Salah')</script>";
                return redirect()->to('login');
            }
        } else {
            session()->setFlashdata('gagal', 'Username atau Password Tidak Ditemukan');
            return redirect()->to('login');
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('login');
    }
}

?>