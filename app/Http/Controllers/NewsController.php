<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index($news) {
        echo "Berita terkini $news
        <p><a href='https://www.educastudio.com/news'>
        Klik disini untuk berita 1</p>
        <p><a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'>
        Klik disini untuk berita 2</p>";
    }
}
