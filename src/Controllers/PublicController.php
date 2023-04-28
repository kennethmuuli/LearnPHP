<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use PDO;
use PDOException;

class PublicController {
    public function index() {
      
      $result = Post::all();
      dd($result);
      
      $name = 'Kenneth';
      view('index', compact('name'));
    }

    public function about() {
        view('about');
    }
};