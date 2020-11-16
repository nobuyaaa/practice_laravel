@extends('layouts.admin')
@section('title', 'シフトの提出')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>シフト提出</h2>
                <form action="{{ action('Admin\ShiftController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <!--<div class="form-group row">-->
                    <!--    <label class="col-md-2"  for="dayofweek">曜日</label>-->
                    <!--    <div class="col-md-10">-->
                            <!--<input type="number" class="form-control" name="dayofweek" min="0" max="6" step="1" rows="20" value = "">-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                           <div class="form-group row">
                        <label class="col-md-2"  for="dayofweek">曜日</label>
                        <div class="col-md-10">
                            <select name="dayofweek" value = "{{ old('dayofweek') }}" size="1">
                                <option value="monday">月曜日</option>
                                <option value="tuesday">火曜日</option>
                                <option value="wednesday">水曜日</option>
                                <option value="thursday">木曜日</option>
                                <option value="friday">金曜日</option>
                                <option value="saturday">土曜日</option>
                                <option value="sunday">日曜日</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">始まる時間</label>
                        <div class="col-md-10">
                            <input type = "time"class="form-control" name="starttime" rows="20" value={{ old('starttime') }}>
                        </div>
                        </div>
                         <div class="form-group row">
                        <label class="col-md-2">終わる時間</label>
                        <div class="col-md-10">
                            <input type="time" class="form-control" name="endtime" rows="20" value={{ old('endtime') }}>
                        </div>
                        </div>
                         {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="提出">
                    
                </form>
                    </div>
                </div>
        </div>
@endsection