<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css" />

<body>
    <div class="wrapper overflow-hidden">
        <header>
            <div class="netflixLogo">
                <a id="logo">
                    <img src="/img/logo.png" alt="Logo Image">
                </a>
            </div>
            <nav class="main-nav">
                <a href="{{route('initial')}}">Home</a>
                <a href="#">Film</a>

            </nav>
        </header>
        <section class="main-container ">
            <div class="location" id="home">
                <h1 id="home">Film su FakeFlix</h1>
                <div class="box">
                @foreach ($filmList as $item)
                    <a  class="box-links" href="{{route('def',['id'=>$item['id']])}}">
                        <img src="{{$item['cover']}}" alt="">
                        <p style="color:white; text-decoration:none; text-align:center">{{$item['filmName']}}</p>
                    </a>
                @endforeach


                </div>
            </div>

        </section>

        <footer>
s
        </footer>
    </div>
</body>

</html>
