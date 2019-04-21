<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noah Telussa</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

{{--<div class="row">--}}
{{--<div class="col-md-12 background"></div>--}}
{{--</div>--}}
<section class="intro">
    <div class="inner">
        <div class="content">
            <section class="animated  bounceInUp delay-0s">
                <h1>Noah Telussa</h1>
            </section>

            <section class="animated  bounceInUp delay-0s">
                <div class="space-20"></div>
                <a href="#introduction" class="btn">
                   Introduction
                </a>
                <a href="#projects" class="btn">
                    Projects
                </a>
            </section>

        </div>
    </div>
</section>


<section class="introduction" id="introduction">
    <div class="row">
        <div class="space-40"></div>
        <div class="col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <h2>Introduction</h2>
            <p>
                Mijn naam is Noah Telussa, {{$age}} jarige developer die in Januari 2017 afgestudeerd is als
                Mediaontwikkelaar.
                Deze opleiding heb ik afgerond in drie en een half jaar en heb hierdoor bij verschillende
                bedrijven stage gelopen, &#233;&#233;n
                van die bedrijven was het bedrijf Persc. Na mijn opleiding ben ik van Januari 2017 tot September
                2017 full-time aan de slag gegaan bij
                het bedijf Persc, hier heb ik aan verschillende websites gewerkt.
            </p>
            <p>
                Van September 2017 tot heden ben ik begonnen aan de opleiding HBO-ICT in Den Haag, mijn doel van
                deze opleiding is
                mijn programmeer skills (vooral back-end) uit te breiden zodat ik niet alleen websites kan maken
                maar ook programma's en apps.
            </p>
            <div class="social-media row">
                <div class="space-40"></div>
                <div class="col-md-2 col-md-offset-3 col-sm-offset-2 col-sm-2 col-xs-offset-0 col-xs-3"><a href="https://www.linkedin.com/in/noah-telussa-a7a938b1"
                                                         target="_blank"><i
                                class="fa-5x fa fa-linkedin-square linked-in" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-3"><a href="https://github.com/Noatel/" target="_blank"><i
                                class="fa-5x     fa fa-github github" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-3"><a href="https://stackoverflow.com/users/4345254/noah-telussa" target="_blank"><i
                                class="fa-5x fa fa-stack-overflow stackoverflow" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="space-20  hidden-md hidden-lg"></div>
        <div class="col-md-4 col-sm-5 col-xs-10 col-xs-offset-1">
            <div class="me "></div>
        </div>
        <div class="space-40"></div>
    </div>
</section>
<section class="projects" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Projects</h2>
            </div>
        </div>
        <div class="row ">
            @for($i = 0; $i < count($projects); $i++)
                <div class="col-md-4 col-sm-6 col-xs-6 box project-box">
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
</section>

<script>
$(".project-box").on('mouseenter mouseleave', function () {
    $(this).find('.box-hover').fadeToggle(100);
    $(this).find(".box-text").fadeToggle(100);

});
</script>
</body>

