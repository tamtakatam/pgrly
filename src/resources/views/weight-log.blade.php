@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/weight-log.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="title">PiGLy</h1>

        {{-- 目標・体重データ --}}
        <div class="goal-section">
            <div class="goal-card">
                <p>目標体重</p>
                <h2>45.0 <span>kg</span></h2>
            </div>
            <div class="goal-card">
                <p>目標まで</p>
                <h2>-1.5 <span>kg</span></h2>
            </div>
            <div class="goal-card">
                <p>最新体重</p>
                <h2>46.5 <span>kg</span></h2>
            </div>
        </div>

        {{-- 検索フォーム --}}
        <div class="search-section">
            <input type="date" placeholder="年/月/日">
            <span>〜</span>
            <input type="date" placeholder="年/月/日">
            <button class="search-btn">検索</button>
            <button class="add-btn">データ追加</button>
        </div>

        {{-- データ一覧 --}}
        <table class="data-table">
            <thead>
                <tr>
                    <th>日付</th>
                    <th>体重</th>
                    <th>食事摂取カロリー</th>
                    <th>運動時間</th>
                    <th>編集</th>
                </tr>
            </thead>
            <tbody>
                @foreach($weightLogs as $log)
                    <tr>
                        <td>{{ $log->date }}</td>
                        <td>{{ $log->weight }}kg</td>
                        <td>{{ $log->calories }}cal</td>
                        <td>{{ $log->exercise_time }}</td>
                        <td>
                            <a href="" class="edit-icon">✎</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- ページネーション --}}
        <div class="pagination">
            {{ $weightLogs->links() }}
        </div>
    </div>
@endsection