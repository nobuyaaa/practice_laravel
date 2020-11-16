<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shiftboard;

class ShiftController extends Controller
{
    //
      public function add()
  {
      return view('admin.shiftboard.create');
  }
  
    public function create(Request $request)
    {
        $this->validate($request, Shiftboard::$rules);
       
        $shiftboard = new Shiftboard;
        $form = $request->all();
        unset($form['_token']);
        
        $shiftboard->fill($form);
        $shiftboard->save();
       
    //   echo('aa'); 
        return redirect('admin/shiftboard/create');
    }
    
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        if($cond_name != ''){
            $posts=Shiftboard::where('name', $cond_name)->get();
        }else{
            $posts=Shiftboard::all();
        }
        return view('admin.shiftboard.index',['posts'=>$posts,'cond_name'=>$cond_name]);
    }

    public function edit(Request $request)
    {
        //News Modelからデータを取得する
        $shiftboard = Shiftboard::find($request->id);
        if(empty($shiftboard)){
            aboart(404);
        }
        
        return view('admin.shiftboard.edit',['shiftboard_form'=>$shiftboard]);
    }

    public function update(Request $request)
    {
        //validationをかける
        $this->validate($request, Shiftboard::$rules);
        //Shiftboard Modelからデータを取得する
        $shiftboard = Shiftboard::find($request->id);
        //送信されてきたフォームデータを格納する
        $shiftboard_form=$request->all();
        unset($shiftboard_form['remove']);
        unset($shiftboard_form['_token']);
        
        //該当するデータを上書きして保存する
        $shiftboard->fill($shiftboard_form)->save();
        return redirect('admin/shiftboard');
    }
    
    public function delete(Request $request)
    {
        //該当するShiftboard Modelを取得
        $shiftboard = Shiftboard::find($request->id);
        //削除する
        $shiftboard->delete();
        return redirect('admin/shiftboard/');
    }
    
//     public function sort($weekofday)
//     {
//         $shiftboard = Shiftboard::orderBy('weekofday','starttime')->get();
        
//         return view('admin/shiftboard');
//     }
}
