<?php
    namespace App\Controllers;

    use App\Controllers\BaseController;

    class c_Info extends BaseController{
        public function informasi(){
            $title = "Info";
            return view('v_info', compact('title'));
        }
    }
