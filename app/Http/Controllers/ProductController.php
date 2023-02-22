<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {
        echo "Daftar Produk";
        echo "<ul>
                <li>
                    <a href='https://www.educastudio.com/category/marbel-edu-games'>
                    Produk 1
                </li>
                <li>
                    <a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>
                    Produk 2
                </li>
                <li>
                    <a href='https://www.educastudio.com/category/riri-story-books'>
                    Produk 3
                </li>
                <li>
                    <a href='https://www.educastudio.com/category/kolak-kids-songs'>
                    Produk 4
                </li>
                </ul>";
    }
}
