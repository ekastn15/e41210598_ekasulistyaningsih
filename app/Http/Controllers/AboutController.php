<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function indexAbout()
    {
        return view('about',[
            "judul" => "About",
            "nama" => "Eka Sulistyaningsih",
            "Nim" => "E41210598",
            "image" => "yoona.jpg"
        ]);
    }
}
?>