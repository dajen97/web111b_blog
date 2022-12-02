<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControll extends Controller
{
    public function show($id)
    {
      return'User' . $id;
    }
}