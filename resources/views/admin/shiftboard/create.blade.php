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
                    <div class="form-group row">
                        <label class="col-md-2" for="dayofweek">曜日</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="dayofweek" rows="20" value = "{{ old('dayofweek') }}">
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