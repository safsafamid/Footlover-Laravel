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
                    <h1>Team Detail</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Teams</a></li>
                        <li>Team Detail</li>
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
                    <figure><img src="{{$team->logo_path}}" alt="" style="max-width: 80%;"></figure>
                    <div class="ritekhela-player-thumb-text">
                        <h3>{{$team->short_code}} <br><span> {{$team->name}}</span></h3>
                        <ul class="ritekhela-player-info">
                            <li>
                                <h5>Country:</h5>
                                <span>{{$team->country->name}}</span>
                            </li>
                            <li>
                                <h5>Founded:</h5>
                                <span>{{$team->founded}}</span>
                            </li>
                            <li>
                                <h5>League:</h5>
                                <span><a href="{{route('league.details',['slug'=>$team->league->slug])}}" class="color-grey">{{$team->league->name}}</a></span>
                            </li>
                            <li>
                                <h5>Manager:</h5>
                                <span><a href="#" class="color-grey">{{$team->manager}}</a></span>
                            </li>
                            <li>
                                <h5>Stadium:</h5>
                                <span>{{$team->stadium->name}}</span>
                            </li>
                            <li>
                                <h5>Stadium Capacity:</h5>
                                <span>{{$team->stadium->capacity}}</span>
                            </li>
                            {{-- <li>
                                <h5>Position:</h5>
                                <span>Left Back</span>
                            </li>
                            <li>
                                <h5>Weight:</h5>
                                <span>295 lbs</span>
                            </li>
                            <li>
                                <h5>Weight:</h5>
                                <span>295 lbs</span>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Full Section //-->

            <!--// Full Section //-->
            <div class="col-md-8">

                <div class="ritekhela-editor-detail">
                    <p>The story takes place in 19th century London, on the city’s famous Fleet Street. Despite the fact that present-day Fleet Street is a bustling financial hub, it was a pretty grim place in those days, and the barbering trade was very different to what it is now. There was no such thing as electric clippers back then, and barbers relied on straight razors to keep their customer’s beards in shape. There have been many different variations of the story over the years, but Sweeney Todd is said to have been a highly successful barber, before he was convicted.</p>
                    <p>This week has been trying for me, I have to find things that Jr. and I have in common and relate to him, motivate him and persuade him through that avenue. The human mind is a computer, it soaks up information from the hardrives of it's 5 senses and then bases it's reality off of what it has been exposed to. It is my job to figure out what Jr. had been exposed to that is causing him to be a rebel without a cause, a revolutionary with no system or dictator to overthrow.walk around like a</p>
                    <blockquote>I did study the art of being a barber because I wanted to figure out what my routine would be. Do you start in the front or back? Top or bottom? Swivel the chair or walk around? What I did</blockquote>
                    <p>You keep your eyes open during a shampoo and/or shave. Totally understandable that it can be uncomfortable to be making eye contact with the stranger whose hair you're lathering up, but shaving? Since there's a razor being pressed so close to things like jugular veins, it's a little more difficult to fight the impulse to keep your eyes open.Since you're not five years old, it should go without saying that you shouldn't cut your own hair, but even cleaning up your own neckline can be really frustrating. "I've seen crooked lines, chunks taken out and borders that have been taken up way too high, and they can be difficult to fix," says a barber from San.</p>
                </div>

                <div class="ritekhela-fancy-title-two">
                    <h2>Players</h2>
                </div>
                <table class="ritekhela-client-detail">
                    <tbody><tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Nationality</th>
                    </tr>
                    @foreach ($team->players as $item)
                        
                    <tr>
                        <td>{{$item->shirt_number}}</td>
                        <td>
                            <figure><img src="{{asset('extra-images/player-stats-img1.jpg')}}" alt=""></figure>
                            <div class="player-stats-text">
                                <h6>{{$item->fullname}}</h6>
                                <span>{{$item->display_name}}</span>
                            </div>
                        </td>
                        <td><span>({{$item->position->short_code}})</span></td>
                        <td>{{$item->nationality}}</td>
                    </tr>
                    @endforeach
                </tbody></table>

                <div class="ritekhela-fancy-title-two">
                    <h2>Staduim</h2>
                </div>
                <div class="authore-wrap">
                    <figure>
                        <a href="#"><img alt="" src="extra-images/about-match-1.jpg"></a>
                    </figure>
                    <div class="ritekhela-authore-info">
                        <h2><a href="#">{{$team->stadium->name}} Stadium</a></h2>
                        <p>{{$team->stadium->description}}</p>
                    </div>
                </div>
            </div>
            <!--// Full Section //-->

            <!--// SideBaar //-->
            <aside class="col-md-4">
                
                <!--// Widget Popular News //-->
                <div class="widget widget_categories">
                    <div class="ritekhela-fancy-title-two">
                        <h2>FIXTURES</h2>
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
                        <h3 class="color-white">TEAM RANKING — {{$team->league->short_code}}</h3>
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

                <!--// Widget Newsletter //-->
                <div class="widget widget_newsletter">
                    <div class="ritekhela-fancy-title-two">
                        <h2>Our Newsletter</h2>
                    </div>
                    <form>
                        <label>Subscribe Now</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante.</p>
                        <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                        <input type="text" value="Enter Your email" onblur="if(this.value == '') { this.value ='Enter Your email'; }" onfocus="if(this.value =='Enter Your email') { this.value = ''; }">
                        <input type="submit" value="Subscribe Now">
                    </form>
                </div>
                <!--// Widget Newsletter //-->
                
                <!--// Widget Gallery //-->
                <div class="widget widget_gallery">
                    <div class="ritekhela-fancy-title-two">
                        <h2>Flicker Photos</h2>
                    </div>
                    <ul>
                        <li><a data-fancybox-group="group" href="extra-images/widget-gallery-1.jpg" class="fancybox"><img src="extra-images/widget-gallery-1.jpg" alt=""></a></li>
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
