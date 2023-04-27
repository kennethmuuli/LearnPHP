<?php

namespace App\Controllers;

class PublicController {
    public function index() {
        $name = 'Kenneth';
        view('index', compact('name'));
    }

    public function about() {
        view('about');
    }
};