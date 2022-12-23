@extends('layouts.main')

@section('content')
    <main>
        <div class="container cards">
            @foreach ($posts as $post)
                <a class="box-post" href="{{ route('post_detail', ['id' => $post['id']]) }}">
                    <div class="inner">
                        <h3>{{ $post['title'] }}</h3>
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
                        <p>{{ $post['date'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </main>
@endsection

@section('title')
    Post
@endsection
