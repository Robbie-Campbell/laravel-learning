@extends("layout")

@section("content")
    <div class="wrapper">
        <div class="container">
            <div id="content" style="background: white;">
                <ul class="style1" style="margin-top: 20px;">
                    @foreach($articles as $article)
                        <li class="first">
                            <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
                            <a href="/articles/{{$article->id}}"><h3>{{$article->title}}</h3></a>
                            <p><a href="#">{{$article->excerpt}}</a></p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
