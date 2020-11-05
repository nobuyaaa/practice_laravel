<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

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
        
        //varidation
        $this->validate($request, News::$rules);
        
        $news = News;
        $form = $request->all();
        
        //フォームから画像が送信されてきたら、保存して、$news->image_pathに画像のパスを保存する。
        if(isset($form['image'])){
            $path = $request->file('image')->store('public/image');
            $news->image_path = basename($path);
        }else{
            $news->image_path = null;
        }
        
        //formから送信されてきたtokenを削除する
        unset($form['_token']);
        //formから送信されてきたimageを削除する
        unset($form['image']);
        
        //データベースに保存する
        $news->fill($form);
        $news->save();
        
        return redirect('admin/news/create');
    }
}
