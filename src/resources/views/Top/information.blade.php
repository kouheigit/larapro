<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/informations.css')  }}" >
</head>
<body>
<h1>ニュースサイト</h1>
@foreach($News as $news)
    <div class="blog">
        <b>{{$news->title}}</b>
        <p>{{$news->text}}</p>
    </div>
@endforeach
</body>
</html>
