<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='noname', $pass='unknown'){

        return <<< EOF

        <html>
        <head>
        <title>Hello/Index</title>
        <style>
        body {font-size:16px; color:#999;
            margin:-40px 0px -50px 0px;}
        </style>
        </head>
        <body>
            <h1>Index</h1>
            <p>これは、Helloコントローラのindexアクションです。</p>
            <ul>
                <li>ID: {$id}</li>
                <li>PASS: {$pass}</li>
            </ul>
        </body>
        </html>

        EOF;
    }
}
