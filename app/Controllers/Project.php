<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Project extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Bagasta Arsindo',
            'bagas' => 'u_project'
        ];
        return view('temp_users/u_wrapp', $data);
    }
}
