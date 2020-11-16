<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Kyslik\ColumnSortable\Sortable;

class Shiftboard extends Model
{
    // use Sortable;//追記

    //
        protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'name' => 'required',
        'starttime' => 'required',
        'endtime' => 'required'
    );
    

// 		protected $fillable = ['name','starttime','endtime','weekofday'];
// 		protected $sortable = ['id','name','starttime','endtime','weekofday'];
}


