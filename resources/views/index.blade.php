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

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery.fullpage.min.css')}}" type="text/css">
</head>
<body>
<div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 no-padding">
                        <div class="macboek hidden-sm hidden-xs"></div>
                    </div>
                    <div class="col-md-6 text-wrapper loadContent">
                        <div class="text-center ">
                            <h1 class="title">
                                Noah Telussa
                            </h1>

                            <div class="intro m-b-md">
                                <span>Portfolio</span>
                            </div>
                            <div class="links m-b-md">
                                <a onclick="loadContent('over')">Over</a>
                                <a onclick="loadContent('projects')">Projecten</a>
                                <a href="#social-media">Social media</a>
                            </div>
                        </div>
            </div>
</div>
</div>

<script>
        function loadContent(page){
            $.get("/get/"+ page, function(data, status){
                $('.loadContent').html(data.html);
            });
        }

        $(document).ready(function(){

    });
</script>


</body>
</html>
