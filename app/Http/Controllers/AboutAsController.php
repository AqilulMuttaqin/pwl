<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutAsController extends Controller
{
    function index() {
        echo "<p><a href='https://www.educastudio.com/about-us'>
        Tentang Kami</p>";
    }
}
