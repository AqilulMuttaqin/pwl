<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index() {
        echo "Daftar Program";
        echo "<ol>
                <li>
                    <a href='https://www.educastudio.com/program/karir'>
                    Program 1
                </li>
                <li>
                    <a href='https://www.educastudio.com/program/magang'>
                    Program 2
                </li>
                <li>
                    <a href='https://www.educastudio.com/program/kunjungan-industri'>
                    Program 3
                </li>
                </ol>";
    }
}
