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
                    <h1>Player Detail</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Player</a></li>
                        <li>Player Detail</li>
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
                <div class="ritekhela-player-thumb-wrap">
                    <figure><img src="{{$player->image_path}}" alt="" style="max-width: 80%;"></figure>
                    <div class="ritekhela-player-thumb-text">
                        <h2>{{$player->shirt_number}}</h2>
                        <h3>{{$player->lastname}} <br><span> {{$player->firstname}}</span></h3>
                        <ul class="ritekhela-player-info">
                            <li>
                                <h5>Nationality:</h5>
                                <span>{{$player->nationality}}</span>
                            </li>
                            <li>
                                <h5>Date Of Birth:</h5>
                                <span>{{$player->birthdate}}</span>
                            </li>
                            <li>
                                <h5>Points Per Game:</h5>
                                <span>17.25 Avg</span>
                            </li>
                            <li>
                                <h5>Playing For:</h5>
                                <span><a href="{{route('team.details',['slug'=>$player->team->slug])}}" class="color-grey">{{$player->team->name}}</a></span>
                            </li>
                            <li>
                                <h5>Height:</h5>
                                <span>6’10”</span>
                            </li>
                            <li>
                                <h5>Rebounds:</h5>
                                <span>5.45 Avg</span>
                            </li>
                            <li>
                                <h5>Position:</h5>
                                <span>{{$player->position->name}} ({{$player->position->short_code}})</span>
                            </li>
                            <li>
                                <h5>Weight:</h5>
                                <span>295 lbs</span>
                            </li>
                            <li>
                                <h5>Weight:</h5>
                                <span>295 lbs</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Full Section //-->

            <!--// Full Section //-->
            <div class="col-md-8">

                <div class="ritekhela-fancy-title-two">
                    <h2>Player Stats</h2>
                </div>
                <table class="ritekhela-client-detail">
                    <tbody><tr>
                        <th>Date</th>
                        <th>Versus</th>
                        <th>Final Score</th>
                        <th>BLK</th>
                        <th>STL</th>
                        <th>PF</th>
                        <th>PTS</th>
                    </tr>
                    <tr>
                        <td>Mar 24, 2017</td>
                        <td>
                            <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                            <div class="player-stats-text">
                                <h6>Ocean Kings</h6>
                                <span>Patrick’s Institute</span>
                            </div>
                        </td>
                        <td>113 - 110  <span>W</span></td>
                        <td>01</td>
                        <td>02</td>
                        <td>00</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>Mar 16, 2017</td>
                        <td>
                            <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                            <div class="player-stats-text">
                                <h6>Bloody Wave</h6>
                                <span>Marine College</span>
                            </div>
                        </td>
                        <td>106 - 124<span> L</span></td>
                        <td>01</td>
                        <td>02</td>
                        <td>00</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2017</td>
                        <td>
                            <figure><img src="extra-images/player-stats-img3.jpg" alt=""></figure>
                            <div class="player-stats-text">
                                <h6>L.A Pirates</h6>
                                <span>Bebop Institute</span>
                            </div>
                        </td>
                        <td>95 - 102<span> L</span></td>
                        <td>03</td>
                        <td>05</td>
                        <td>06</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Mar 4, 2017</td>
                        <td>
                            <figure><img src="extra-images/player-stats-img4.jpg" alt=""></figure>
                            <div class="player-stats-text">
                                <h6>Ocean Kings</h6>
                                <span>Icarus College</span>
                            </div>
                        </td>
                        <td>110 - 104  <span>W</span></td>
                        <td>02</td>
                        <td>00</td>
                        <td>01</td>
                        <td>08</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2017</td>
                        <td>
                            <figure><img src="extra-images/player-stats-img5.jpg" alt=""></figure>
                            <div class="player-stats-text">
                                <h6>Red Wings</h6>
                                <span>Marine College</span>
                            </div>
                        </td>
                        <td>113 - 107  <span>W</span></td>
                        <td>01</td>
                        <td>01</td>
                        <td>04</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>Feb 9, 2017</td>
                        <td>
                            <figure><img src="extra-images/player-stats-img6.jpg" alt=""></figure>
                            <div class="player-stats-text">
                                <h6>Lucky Clovers</h6>
                                <span>Elric Bros School</span>
                            </div>
                        </td>
                        <td>116 - 100  <span>W</span></td>
                        <td>03</td>
                        <td>05</td>
                        <td>02</td>
                        <td>13</td>
                    </tr>
                </tbody></table>


            </div>
            <!--// Full Section //-->

            <!--// SideBaar //-->
            <aside class="col-md-4">
                
                <!--// Widget Popular News //-->
                <div class="widget widget_categories">
                    <div class="ritekhela-fancy-title-two">
                        <h2>categories</h2>
                    </div>
                    <ul>
                        <li><a href="#">Boxing</a> 03</li>
                        <li><a href="#">Championship</a> 05</li>
                        <li><a href="#">Cycling</a> 03</li>
                        <li><a href="#">Football</a> 19</li>
                        <li><a href="#">NFL</a> 02</li>
                        <li><a href="#">Golf</a> 11</li>
                        <li><a href="#">Premier League</a> 12</li>
                        <li><a href="#">Tennis</a> 04</li>
                        <li><a href="#">Super Ball</a> 03</li>
                    </ul>
                </div>
                <!--// Widget Popular News //-->

                <!--// Widget Social Media //-->
                <div class="widget widget_social_media">
                    <div class="ritekhela-fancy-title-two">
                        <h2>Social Media</h2>
                    </div>
                    <ul>
                        <li>
                            <a href="#" class="rss">
                                <i class="fa fa-rss"></i>
                                <span>2,035</span>
                                <small>Subscribers</small>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="fb">
                                <i class="fab fa-facebook-f"></i>
                                <span>3,794</span>
                                <small>Fans</small>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="g_plus">
                                <i class="fab fa-google-plus-g"></i>
                                <span>941</span>
                                <small>Followers</small>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="you_tube">
                                <i class="fab fa-youtube"></i>
                                <span>7,820</span>
                                <small>Subscribers</small>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter">
                                <i class="fab fa-twitter"></i>
                                <span>1,562</span>
                                <small>Followers</small>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pint">
                                <i class="fab fa-pinterest-p"></i>
                                <span>1,310</span>
                                <small>Followers</small>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--// Widget Social Media //-->
                
                <!--// Widget Gallery //-->
                <div class="widget widget_gallery">
                    <div class="ritekhela-fancy-title-two">
                        <h2>Flicker Photos</h2>
                    </div>
                    <ul>
                        <li><a data-fancybox-group="group" href="{{asset('extra-images/widget-gallery-1.jpg')}}" class="fancybox"><img src="{{asset('extra-images/widget-gallery-1.jpg')}}" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-2.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-3.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-4.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-5.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-6.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-7.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-8.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-1.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-2.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-3.jpg" alt=""></a></li>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-4.jpg" alt=""></a></li>
                    </ul>
                </div>
                <!--// Widget Gallery //-->

            </aside>
            <!--// SideBaar //-->

        </div>
    </div>
</div>
@endsection
