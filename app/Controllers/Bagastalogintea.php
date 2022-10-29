<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Bagastalogintea extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard::BagastaArsindo',

        ];
        
        return view('adm_login', $data);
    }
}
