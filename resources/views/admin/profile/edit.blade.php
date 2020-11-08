
@extends('layouts.admin');
@section('content')
@section('title','プロフィールの編集')
    <div class="container">
                <div class="row">
                                <div class="col-md-8 mx-auto">

                         <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名(name)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別(gender)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ $profile_form->gender}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味(hobby)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-md-2">自己紹介(introduction)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20" value="{{ $profile_form->introduction }}"></textarea>
                        </div>
                     </div>
                     <div class="form-group row">
                                                <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                                            {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                    </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($profile_form->profilehistories !=NULL)
                            @foreach($profile_form->profilehistories as $history)
                            <li class="list-group-item">{{ $history->edited_at }}</li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
@endsection

