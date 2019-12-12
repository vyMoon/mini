@extends('layouts.site')
@section('content')
<main>
    <div class="wrapper">
        <h1 class="red"> {{$header}} </h1>
        <p>{{$message}}</p>

        <div class="container">
            <div class="articles">
                @foreach($articles as $article)

                    <div class="article">
                        <h2>{{ $article->title }}</h2>
                        <p>{!! $article->description !!}</p>
                        <p><a href="{{ route('articleShow', ['id'=>$article->id]) }}">Read</a></p>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection