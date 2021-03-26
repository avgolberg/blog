@extends('layout')
@section('title', 'Главная')
@section('content')
    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="my-4">Author: {{$author->name}}
        </h1>

    @foreach($author->post as $post)
        <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="{{$post->image}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{mb_substr($post->body, 0, 150)}} ...</p>
                    <a href="#" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{$post->created_at}}
                </div>
                <div class="card-footer text-muted">
                    Categories:<br>
                    @foreach($post->category as $category)
                        <a href={{route('post_by_category',$category->key)}}>{{$category->category}} </a>
                    @endforeach
                </div>
            </div>
    @endforeach
    </div>
@endsection
