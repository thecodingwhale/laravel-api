<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show() {
        return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }

    public function create() {
        return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }
}