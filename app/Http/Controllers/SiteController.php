<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function hello()
  {
    return 'hello';
  }
  public function dajen97()
  {
    return view('dashboard');
  }
  public function gallery()
  {
    return view('model');
  }
  public function demo()
  {
  }



  public function demo2(Request $request)
  {
    return $request->all();

    //第一種
    // return view('demo')->with(['name'=>'奕丞','age'=>'<b>18<b>']);
    //
    //第二種
    $data = [];
    $data['name'] = '奕丞';
    $data['age'] = '<b>18<b>';
    return view('demo', 'data');
    //第三種
    //$name = '奕丞';
    //$age = '<b>18<b>';
    //return view('demo',compact('name','age'));
  }
}
