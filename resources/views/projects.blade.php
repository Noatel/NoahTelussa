<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noah Telussa</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/n.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/n.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/n.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/n.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/n.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/n.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/n.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/n.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/n.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/n.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/n.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/n.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/n.png')}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('images/n.png')}}">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
<section class="projects" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>All Projects</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 all-projects">
                <div class="row ">
            @for($i = 0; $i < count($projects); $i++)
                <div class="col-md-6 col-sm-6 col-xs-6 box project-box">
                    <a href="{{$projects[$i]->url}}" class="project-image" target="_blank">
                        <div class="box-hover"></div>
                        <img src="{{asset($projects[$i]->image)}}" class="img-responsive"
                             alt="{{$projects[$i]->url}}">
                    </a>
                    <div class="box-text">
                        <a href="{{$projects[$i]->url}}" class="project-link" target="_blank">
                            <h2>{{$projects[$i]->name}}</h2>
                        </a>
                        <p>
                            {!! $projects[$i]->description !!}
                        </p>
                    </div>
                    <div class="space-20"></div>
                </div>

            @endfor
                </div>
            </div>
        </div>

    </div>
</section>
<footer>
    <div class="bottom section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright">
                        <p><a href="#" class="transition">Noah Telussa</a> <a class="mail"
                                                                              href="mailto:noahtelussa@gmail.com">Noahtelussa@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    $(".project-box").on('mouseenter mouseleave', function () {
        $(this).find('.box-hover').fadeToggle(100);
        $(this).find(".box-text").fadeToggle(100);

    });

    $(".skill-box").hover(function(){
        $(this).addClass('animated shake');
    });
    $(".skill-box").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
        $(this).removeClass('animated shake');
    });
</script>
</body>

