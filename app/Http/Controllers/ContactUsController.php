<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function index() {
        echo "<p>Hubungi Kami 
        <a href='https://www.educastudio.com/contact-us'>Di Sini</p>";
    }
}
