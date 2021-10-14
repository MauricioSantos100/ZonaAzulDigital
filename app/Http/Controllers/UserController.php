<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller {
    private $user;

    public function __construct() {
        $this -> user = new UserModel();
    }

    public function index() {
        $user = $this -> user -> all();
        return view('listUser', compact('user'));
    }

    public function show($id) {
        $user = $this -> user -> find($id);
        return view('showUser', compact('user'));
    }

    public function newUser() {
        return view('newUser');
    }
}