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
        <div class="col-md-6 col-sm-12 col-xs-12 no-padding leftColumn">
            <div class="macboek hidden-sm hidden-xs"></div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 text-wrapper menu">
            <div class="text-center ">
                <h1 class="title">
                    Noah Telussa
                </h1>

                <div class="intro m-b-md">
                    <span>Portfolio</span>
                </div>
                <div class="links m-b-md">
                    <a onclick="loadContent('over')">Over</a>
                    <a onclick="loadProjects(event)">Projecten</a>
                    <a href="#social-media">Social media</a>
                </div>
                <div class="loadContent"></div>

            </div>
        </div>
    </div>
</div>
<script>
    var currentPage = "";
    var projects = false;
    var loaded = false;
    var leftColumn = $(".leftColumn").offset();
    var leftColumnLeft = leftColumn.left;

    var menuColumn = $(".menu").offset();
    var menuLeft = menuColumn.left;
    var menuTop = menuColumn.top;


    function loadContent(page) {
        console.log(loaded + "-" + page);

        if (page !== currentPage) {
            if(currentPage !== "projects"){

                $('.menu').animate({
                    top: '200'
                }, 800);}
            $.when(getContent(page)).then(openLeftColumn());
            //Open Left image in case it is closed
            //Get the part with ajax
        }
        if (page === currentPage || currentPage === "projects") {
            openLeftColumn();
            returnMenu();
            currentPage = "";
        }
    }


    function getContent(page) {
        //Fade out if there is any old content
        $('.loadContent').fadeOut();

        $.get("/get/" + page, function (data, status) {
                $('.loadContent').html(data.html);
                $('.loadContent').fadeIn();
                $('.loadContent')
                    .css({top: 1000, position: 'absolute'})
                    .animate({top: 200}, 800, function () {
                        //callback
                    });

                currentPage = page;
                loaded = true;
                projects = false;
            }
        );
    }

    function loadProjects(e) {
        e.preventDefault();
        if (projects) {
            openLeftColumn();
            returnMenu();
            currentPage = "";
            projects = false;
            loaded = true;
            //Open
        } else {

            //CloseLeftColum
            console.log("close");
            checkLeftColumn();

            $(".menu")
                .animate({top: 100, left: $(window).width() / 2}, 800, function () {
                    //callback
                });

            $('.loadContent').fadeOut();
            $.get("/get/projects", function (data, status) {

                $('.loadContent').html(data.html);
                $('.loadContent').fadeIn()
                    .css({top: 1000, position: 'absolute'})
                    .animate({top: 200}, 800, function () {
                        //callback
                    });
            });
            currentPage = "projects";
            projects = true;
        }
    }


    $(window).on('resize', function () {
        if (projects) {
            $(".menu")
                .animate({top: 100, left: $(window).width() / 2}, 100, function () {
                    //callback
                });
        }

    });

    function returnMenu() {
        $('.loadContent').fadeOut(function () {
            $('.menu').animate({
                left: '75%',
                top: '50%'
            }, 800, function () {
                $(".loadContent").css("-moz-user-select", "left");
                $(".loadContent").css("-moz-user-select", "top");
            });
        });
    }


    function checkLeftColumn() {
        if ($(".leftColumn").css("right") === "1000px") {
            openLeftColumn();

        } else {
            closeLeftColumn();
        }
    }

    function closeLeftColumn() {
        $(".leftColumn")
            .animate({right: 1000}, 800, function () {
                //callback
            });
        $('.leftColumn').removeAttr('style');

    }

    function openLeftColumn() {

        $(".leftColumn")
            .animate({left: leftColumnLeft}, 1200, function () {
                $('.leftColumn').removeAttr('style');
            });

        //Return orignal position

    }
</script>


</body>
</html>
