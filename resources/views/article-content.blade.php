@extends('layouts.site')
@section('content')
<main>
    <div class="wrapper">
        <h1 class="red"> {{ $header }} </h1>
        <p>{{ $message }}</p>

        @if($article)
            <div class="fullArticle">
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->text }}</p>
            </div>

        @endif
        
    </div>
</main>
@endsection