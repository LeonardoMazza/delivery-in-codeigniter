<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home da área restrita',
            'subtitle' => 'Bem vindo ao sistema de gerenciamento de delivery',
        ];
        return view('admin/home', $data);
    }
}
