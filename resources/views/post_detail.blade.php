@extends('layouts.main')

@section('content')
    <main>
        <div class="detail-box">
            <h2>{{ $post['title'] }}</h2>
            <p>{{ $post['date'] }}</p>
            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
            <p>{!! $post['description'] !!}</p>
        </div>
    </main>
@endsection

@section('title')
    {{ $post['title'] }}
@endsection
