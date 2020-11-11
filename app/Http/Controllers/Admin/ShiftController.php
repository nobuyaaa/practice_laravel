<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        
        return redirect('admin/shiftboard/create');
    }

    public function edit()
    {
        return view('admin.shiftboard.edit');
    }

    public function update()
    {
        return redirect('admin/shiftboard/edit');
    }
}
