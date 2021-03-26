@extends('layout')
@section('title', 'Главная')
@section('content')
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Posts</h1>

            @foreach($posts as $post)
            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="{{$post->image}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{mb_substr($post->body, 0, 150)}} ...</p>
                    <a href="{{route('single_post', $post->id)}}" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{$post->created_at}} by
                    <a href={{route('post_by_author',$post->author->key)}}>{{$post->author->name}}</a>
                </div>
                <div class="card-footer text-muted">
                    Categories:<br>
                    @foreach($post->category as $category)
                    <a href={{route('post_by_category',$category->key)}}>{{$category->category}} </a>
                    @endforeach
                </div>
            </div>
            @endforeach
            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                @if($posts->currentPage()!=1)
                <li class="page-item"><a class="page-link" href="?page=1">First</a></li>
                <li class="page-item"><a class="page-link" href={{$posts->previousPageUrl()}}><=</a></li>
                @endif
                @if($posts->count()>1)
                    @for($count=1; $count<=$posts->lastPage(); $count++)
                            @if($count>$posts->currentPage()-3 and $count<$posts->currentPage()+3)
                                <li class="page-item @if($count==$posts->currentPage())active @endif">
                                    <a class="page-link" href="?page={{$count}}">{{$count}}</a></li>
                                    @endif
                            @endfor
                    @endif
                    @if($posts->currentPage()!=$posts->lastPage())
                        <li class="page-item"><a class="page-link" href="{{$posts->nextPageUrl()}}">=></a></li>
                        <li class="page-item"><a class="page-link" href="?page={{$posts->lastPage()}}">Last</a></li>
                    @endif
            </ul>

        </div>
      @endsection
