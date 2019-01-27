{{dd($projects)}}
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