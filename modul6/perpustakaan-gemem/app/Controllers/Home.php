<?php 
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Portal Perpustakaan Gemem'
        ];

        return view('home', $data);
    }
}