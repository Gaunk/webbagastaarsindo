<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Bagasta Arsindo',
            'bagas' => 'adm_home'
        ];
        
        return view('temp_users/u_wrapp', $data);
        
    }
}
