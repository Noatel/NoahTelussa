<div class="space-30"></div>
@for($i = 0; $i < count($projects); $i++)
                    <div class="col-md-6 col-sm-6 col-xs-12 no-padding project">
                        <div class="space-30"></div>

                        <a href="{{$projects[$i]->url}}" target="_blank">

                            <img src="{{asset($projects[$i]->image)}}" class="project-image img-responsive"
                                 alt="{{$projects[$i]->url}}">
                                <div class="img-title">
                                    <h5>{!! $projects[$i]->description !!}</h5>
                                </div>
                        </a>
                    </div>
@endfor
