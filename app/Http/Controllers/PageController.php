<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view ('home', ['name' => 'Hello, Selamat Datang Mellitya Silviandro Hening']);
    }

    public function product() {
        return view ('product', ['product' => 'List Product
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/category/marbel-edu-games">Edu Games</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Kids Games</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/riri-story-books">Story Books</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/kolak-kids-songs">Kids Songs</a>
            </li>
        </ul>']);
    }

    public function news() {
        return view ('news', ['news' => 'List News
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/news">Berita 1</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Berita 2</a>
            </li>
        </ul>']);
    }

    public function program() {
        return view ('program', ['program' => 'List Program
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/program/karir">Program Karir</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/program/magang">Program Magang</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/program/kunjungan-industri">Program Kunjungan Industri</a>
            </li>
        </ul>']);
    }

    public function aboutus() {
        return view ('about-us', ['aboutus' => 'Saya Mellitya Silviandro Hening seorang mahasiswa Politeknik Negeri Malang.']);
    }

    public function index() {
        return view ('contact-us', ['contact' => 'KONTAK KAMI
        <br>
        <ul>
            <li>
                Telp  : 081230917607
            </li>
            <li>
                Email : educastudio@gmail.com
            </li>
        </ul>
        <label>Kontak</label>
        <br>
        <input placeholder="Masukkan kontak">
        <button>Submit</button>
        ']);
    }
}