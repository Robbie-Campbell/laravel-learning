@extends("layout")

@section("content")
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{$article->title}}</h2>
                <p class="content">{{$article->body}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
