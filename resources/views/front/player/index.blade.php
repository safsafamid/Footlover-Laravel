@extends('front.layouts.app')

@section('title', 'Vacation')

@section('style')
@endsection

@section('subheader')
    <!--// SubHeader //-->
    <div class="ritekhela-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Player Grid</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Player</a></li>
                        <li>Player Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// SubHeader //-->
@endsection

@section('content')
<div class="ritekhela-main-section ritekhela-fixture-list-full">
    <div class="container">
        <div class="row">
            
            <!--// Full Section //-->
            <div class="col-md-12">
                <!--// Player //-->
                <div class="ritekhela-team ritekhela-team-view1">
                    <ul class="row">
                        @foreach ($players as $item)
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="{{$item->image_path}}" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="{{route('player.details',['slug'=>$item->slug])}}">{{$item->fullname}}</a></h2>
                                <span>{{$item->league}}</span>
                                <p>{{$item->team->name}}</p>
                            </div>
                        </li>
                        @endforeach
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="{{asset('extra-images/team-view1-1.jpg')}}" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">Jecy Deoko</a></h2>
                                <span>Forword</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="{{asset('extra-images/team-view1-2.jpg')}}" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">John Smith</a></h2>
                                <span>Defensive</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="{{asset('extra-images/team-view1-3.jpg')}}" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">Jessica</a></h2>
                                <span>Attacker</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="{{asset('extra-images/team-view1-4.jpg')}}" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">Jessica</a></h2>
                                <span>Attacker</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="extra-images/team-view1-5.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">Jessica</a></h2>
                                <span>Attacker</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="extra-images/team-view1-6.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">Jessica</a></h2>
                                <span>Attacker</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="extra-images/team-view1-1.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">Jecy Deoko</a></h2>
                                <span>Forword</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="extra-images/team-view1-2.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">John Smith</a></h2>
                                <span>Defensive</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="extra-images/team-view1-2.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">John Smith</a></h2>
                                <span>Defensive</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="extra-images/team-view1-3.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">Jessica</a></h2>
                                <span>Attacker</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="extra-images/team-view1-4.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">Jessica</a></h2>
                                <span>Attacker</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="#"><img src="extra-images/team-view1-5.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view1-text">
                                <h2><a href="#">Jessica</a></h2>
                                <span>Attacker</span>
                                <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--// Player //-->
                <!--// Pagination //-->
                <div class="ritekhela-pagination">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!--// Pagination //-->
            </div>
            <!--// Full Section //-->
        </div>
    </div>
</div>
@endsection
