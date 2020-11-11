<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shiftboard extends Model
{
    //
        protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'name' => 'required',
        'starttime' => 'required',
        'endtime' => 'required'
    );
}
