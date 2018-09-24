<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noah Telussa</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

</head>
<body>
<section id="particles-js" class="hidden-xs hidden-sm"></section>

    <div class="row">
        <div class="phone">
            <div class="hidden-md hidden-lg col-xs-12">
                <img src="{{asset('images/me/TuinNoahTelussa.jpg')}}" class="img-responsive" alt="Noah Telussa">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="phone">
            <div class="hidden-md hidden-lg col-xs-12">
                <div class="details">
                    <div class="row text">
                        <div class="col-xs-12">

                            <h2>Noah Telussa <br>
                                <span>Web and Application ontwikkelaar</span></h2>
                            <br>
                            <p>{{$age}} jarige developer die in Januari 2017 afgestudeerd is als Mediaontwikkelaar.
                                En momenteel een studie Software engineer op het Haagse Hoge School
                            </p>


                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/noah-telussa-a7a938b1" target="_blank"><i
                                            class=" fa fa-linkedin-square linked-in"
                                            aria-hidden="true"></i></a>
                                <a href="https://bitbucket.org/Noatel/" target="_blank"><i
                                            class=" fa fa-bitbucket bitbucket" aria-hidden="true"></i></a>
                                <a href="https://github.com/Noatel/" target="_blank"><i
                                            class=" fa fa-github github" aria-hidden="true"></i></a>
                                <a href="https://stackoverflow.com/users/4345254/noah-telussa" target="_blank"><i
                                            class="fa fa-stack-overflow stackoverflow" aria-hidden="true"></i></a>
                                <a href="https://www.facebook.com/noah.telussa" target="_blank"><i
                                            class=" fa fa-facebook-square facebook" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">


    <div class="row">
        <div class="hidden-xs hidden-sm col-md-2  hover-me">
            <img src="{{asset('images/hover-me.png')}}" class="img-responive" alt="Hover me">
        </div>
        <div class="hidden-xs hidden-sm col-md-4 col-md-offset-3 wrapper">

            <div class="card">
                <div class="front">
                    <img src="{{asset('images/me/TuinNoahTelussa.jpg')}}" class="img-responive" alt="Noah Telussa">
                </div>
                <div class="back">
                    <div class="details">
                        <h2>Noah Telussa <br>
                            <span>Web and Application ontwikkelaar</span></h2>
                        <br>
                        <p>{{$age}} jarige developer die in Januari 2017 afgestudeerd is als Mediaontwikkelaar.
                            En momenteel een studie Software engineer op het Haagse Hoge School
                        </p>


                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/noah-telussa-a7a938b1" target="_blank"><i
                                        class=" fa fa-linkedin-square linked-in"
                                        aria-hidden="true"></i></a>
                            <a href="https://bitbucket.org/Noatel/" target="_blank"><i
                                        class=" fa fa-bitbucket bitbucket" aria-hidden="true"></i></a>
                            <a href="https://github.com/Noatel/" target="_blank"><i
                                        class=" fa fa-github github" aria-hidden="true"></i></a>
                            <a href="https://stackoverflow.com/users/4345254/noah-telussa" target="_blank"><i
                                        class="fa fa-stack-overflow stackoverflow" aria-hidden="true"></i></a>
                            <a href="https://www.facebook.com/noah.telussa" target="_blank"><i
                                        class=" fa fa-facebook-square facebook" aria-hidden="true"></i></a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/particles.js')}}"></script>
<script type="text/javascript" src="{{asset('js/particlesMain.js')}}"></script>
</body>
</html>