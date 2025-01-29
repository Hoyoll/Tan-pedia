<?php
namespace App\Controllers;

final class Dash extends BaseController
{
    public function index() {
        return view('page/admin');
    }
}
