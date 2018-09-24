<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Noah Telussa</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/jquery.fullpage.min.js')}}"></script>
    <script src="{{asset('js/jquery.fullpage.extensions.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#fullpage').fullpage({
                anchors: ['home', 'over', 'projecten', 'social-media'],
                sectionsColor: ['#76aae9', '#ffffff', '#76aae9'],
                scrollBar: true
            });
        });
    </script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery.fullpage.min.css')}}" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">

    <div id="fullpage">

        <div class="content">
            <div class="section " id="section0">
                <h1 class="title">
                    Noah Telussa
                </h1>

                <div class="intro m-b-md">
                    <span>Portfolio</span>
                </div>
                <div class="links m-b-md">
                    <a href="#over">Over</a>
                    <a href="#projecten">Projecten</a>
                    <a href="#social-media">Social media</a>
                </div>
                <a href="#over">
                    <div id="arrow-down">
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </a>

            </div>
            <div class="section section-blue" id="section1">

                <div class="intro container">
                    <h2>Over:</h2>
                    <p>
                        Mijn naam is Noah Telussa, {{$age}} jarige developer die in Januari 2017 afgestudeerd is als
                        Mediaontwikkelaar.
                        Deze opleiding heb ik afgerond in drie en een half jaar en heb hierdoor bij verschillende
                        bedrijven stage gelopen, &#232;&#232;n
                        van die bedrijven was het bedrijf Persc. Na mijn opleiding ben ik van Januari 2017 tot September
                        2017 full-time aan de slag gegaan bij
                        het bedijf Persc, hier heb ik aan verschillende websites gewerkt.
                    </p>
                    <hr>
                    <p>
                        Van September 2017 tot heden ben ik begonnen aan de opleiding HBO-ICT in den haag, mijn doel van
                        deze opleiding is
                        mijn programmeer skills (vooral back-end) uit te breiden zodat ik niet alleen websites kan maken
                        maar ook programma's en apps.
                    </p>
                </div>

            </div>
            <div class="section" id="section2">
                @for($i = 0; $i < count($projects); $i++)
                    <div class="slide" id="slide1">
                        <div class="intro">
                            <h2>Projecten</h2>
                            <div class="space-40"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-5 col-sm-push-1 col-md-push-0">
                                        <a href="{{$projects[$i]->url}}" target="_blank">
                                            <img src="{{asset($projects[$i]->image)}}" class="img-responsive"
                                                 alt="{{$projects[$i]->url}}">
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-5 col-sm-push-1 col-md-push-0">
                                        <div class="space-60"></div>
                                        <a href="{{$projects[$i]->url}}" class="project-link" target="_blank">
                                            <h2>{{$projects[$i]->name}}</h2>
                                        </a>
                                        <p>
                                            {!! $projects[$i]->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="section section-blue" id="section3">
                <div class="intro">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Social media:</h2>
                                    <div class="social-media">
                                        <a href="https://www.linkedin.com/in/noah-telussa-a7a938b1" target="_blank"><i class="fa-5x fa fa-linkedin-square linked-in" aria-hidden="true"></i></a>
                                        <a href="https://bitbucket.org/Noatel/" target="_blank"><i class="fa-5x fa fa-bitbucket bitbucket" aria-hidden="true"></i></a>
                                        <a href="https://stackoverflow.com/users/4345254/noah-telussa" target="_blank"><i class="fa-5x fa fa-stack-overflow stackoverflow" aria-hidden="true"></i></a>
                                        <a href="https://www.facebook.com/noah.telussa" target="_blank"><i class="fa-5x fa fa-facebook-square facebook" aria-hidden="true"></i></a>

                                    </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
</body>
</html>
