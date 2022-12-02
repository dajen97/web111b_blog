<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Validator;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function store(PostRequest $request)
  {
    if ($request->hasFile('pic')) {
      $file = $request->file('pic'); //獲取UploadFile例項
      if ($file->isValid()) { //判斷檔案是否有效
        //filename = $file->getClientOriginalName(); //檔案原名稱
        $extension = $file->getClientOriginalExtension(); //副檔名
        $fileName = time() . "." . $extension; //重新命名
        //$data['pic'] = $fileName;
        $path = $file->storeAs('public/pic', $fileName); //儲存至指定目錄
      }
    }




    // }
    //驗證示範
    // $validator = Validator::make($request->all(), [
    //   'title' => 'required | max:10',
    // ]);

    // if ($validator->fails()) {
    //   return 'fail';
    // } else {
    //   return $request->all();
    // }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  //

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
  public function create()
  {

    $modes =  ['recommend' => '編輯精選', 'season' => '當季商品', 'cp' => '超值商品'];
    $mode = 'cp';
    return view('posts.create', compact('modes', 'mode'));
  }
}
