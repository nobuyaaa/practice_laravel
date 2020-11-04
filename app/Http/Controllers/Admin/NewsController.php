<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function add()
    {
        return view('admin.news.create');
    }
    
    //22 ニュース投稿画面を作成
    public function create(Request $request){
        // admin/news/createにリダイレクトする
        return redirect('admin/news/create');
    }
}
