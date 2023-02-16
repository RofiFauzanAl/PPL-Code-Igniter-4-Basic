<?php
namespace App\Controllers;

use App\Models\m_pegawai;
use CodeIgniter\View\View as ViewView;
use Config\View;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

    class c_Pegawai extends BaseController{
        public function formPegawai(){
            $title = "Form Pegawai";
            return view('v_form_pegawai', compact('title'));
        }
        
        public function postPegawai(){
            $validation = \Config\Services::validation();
            $pegawai = new m_pegawai();
            $data = [
                'NIM' => $this->request->getPost('NIM'),
                'Nama' => $this->request->getPost('Nama'),
                'Gender' => $this->request->getPost('Gender'),
                'Telp' => $this->request->getPost('Telp'),
                'Email' => $this->request->getPost('Email'),
                'Pendidikan' => $this->request->getPost('Pendidikan'),
            ];
            $validation->setRules([
                'NIM' => [
                    'label'=>'NIM',
                    'rules'=>'required|is_unique[pegawai.NIM]|numeric|exact_length[9]',
                    'errors'=>[
                        'required'=>'NIM harus diisi',
                        'is_unique'=>'NIM sudah terdaftar',
                        'numeric'=>'NIM harus berupa angka',
                        'exact_length'=>'NIM harus berjumlah 9 digit'
                    ]
                ],
                'Nama' => [
                    'label'=>'Nama',
                    'rules'=>'required|alpha',
                    'errors'=>[
                        'required'=>'Nama harus diisi',
                        'alpha'=>'Nama harus berupa huruf'
                    ]
                ],
                'Gender' => [
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Gender harus diisi'
                    ]
                ],
                'Telp' => [
                    'rules'=>'required',
                    'errors'=>[
                        'numeric'=>'Telp harus berupa angka'
                    ]
                ],
                'Email' => [
                    'rules'=>'required|valid_email',
                    'errors'=>[
                        'required'=>'Email harus diisi',
                        'valid_email'=>'Email tidak valid'
                    ]
                ],
            ]);
            if($validation->withRequest($this->request)->run() == false){
                return redirect()->to('form_pegawai')->withInput();
            }
            else{
                $pegawai->storePegawai($data);
                return redirect()->to('mahasiswa_display');
            }
        }
    }

?>