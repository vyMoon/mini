@extends('layouts.site')
@section('content')
<main>
    <div class="wrapper">
        <h1 class="red"> {{$header}} </h1>
        <p>{{$message}}</p>

        <div class="container">
            <form method="POST" action="{{ route('articleStore') }}">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Short Description</label>
                    <textarea name="description" id="description" cols="20" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea name="text" id="text" cols="20" rows="10"></textarea>
                </div>
                <!-- <input type="submit">Submit</input> -->
                <input type="submit">
                <!-- защита -->
                <!-- {{ csrf_field() }} -->
                @csrf
            </form>
        </div>
    </div>
</main>
@endsection