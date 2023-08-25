<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/informations.css')  }}" >
</head>
<body>
<h1>information start</h1>
<h1>ニュースサイト</h1>
@foreach($News as $news)
    <div class="container">
        <h1>{{$news->title}}</h1>
        <p>{{$news->text}}</p>
    </div>
@endforeach
</body>
</html>
