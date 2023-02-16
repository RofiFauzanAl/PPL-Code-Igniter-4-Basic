<?php
    namespace App\Controllers;

use App\Models\m_mahasiswa;
use CodeIgniter\View\View as ViewView;
use Config\View;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

    class c_mahasiswa extends BaseController{

        public function display(){
            $title = "Data Mahasiswa";
            $model = new m_mahasiswa();

            return view('v_mahasiswa_display', ["mahasiswa"=>$model->getAll()], compact('title'));
        }

        public function form_display(){
            $title = "Form Mahasiswa";
            return view('form_insert_mahasiswa', compact('title'));
        }

        public function form_update_mahasiswa($NIM){
            $model = new m_mahasiswa();
            $data = [
                'data' => $model->getMahasiswa($NIM),
                'title' => 'Form Update Mahasiswa'
            ];
            // dd($data);

            return view('v_form_update_mahasiswa', $data);
        }

        public function postData(){
            $mahasiswa = new m_mahasiswa();
            $data = [
                'NIM' => $this->request->getPost('NIM'),
                'Nama'=> $this->request->getPost('Nama'),
                'Umur'=> $this->request->getPost('Umur')
            ];
            $mahasiswa->storeMahasiswa($data);
            return redirect()->to('mahasiswa_display');
        }

        public function detailMahasiswa($NIM){
            $model = new m_mahasiswa();

            $data = [
                'mahasiswa' => $model->getMahasiswa($NIM),
                'title' => 'Detail Mahasiswa'
            ];
            // dd($data);
            return view('v_detail_mahasiswa', $data);
        }

        public function deleteMhs($NIM){
            $model = new m_mahasiswa();
            $model->deleteMahasiswa($NIM);
            return redirect()->to('mahasiswa_display');
        }

        public function updateMhs($NIM){
            $model = new m_mahasiswa();
            $data = [
                'Nama' => $this->request->getPost('Nama'),
                'Umur' => $this->request->getPost('Umur'),
            ];

            $model->updateDataMhs($data, $NIM);
            return redirect()->to('/mahasiswa_display');
        }

        public function keywordSearch(){
            $keyword = $this->request->getPost('keyword');
            $model = new m_mahasiswa();
            $data = [
                'mahasiswa' => $model->searchData($keyword),
                'title' => 'Search Result'
            ];
            // dd($data);
            return view('v_mahasiswa_display', $data);
        }
    }
?>