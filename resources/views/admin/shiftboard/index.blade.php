@extends('layouts.admin')
@section('title', 'シフト一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>提出済みシフト一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ShiftController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\ShiftController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">氏名</th>
                                <th width="20%">曜日</th>
                                <th width="20%">始まる時間</th>
                                <th width="20%">終わる時間</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $shiftboard)
                                <tr>
                                    <th>{{ $shiftboard->name }}</th>
                                    <td>{{ \Str::limit($shiftboard->dayofweek, 100) }}</td>
                                    <td>{{ \Str::limit($shiftboard->starttime, 100) }}</td>
                                    <td>{{ \Str::limit($shiftboard->endtime, 100) }}</td>
                                     <td>
                                        <div>
                                            <a href="{{ action('Admin\ShiftController@edit', ['id' => $shiftboard->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href = "{{ action('Admin\ShiftController@delete',['id' => $shiftboard->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection