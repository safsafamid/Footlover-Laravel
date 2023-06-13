<header id="ritekhela-header" class="ritekhela-header-one">
            
    <!--// TopStrip //-->
    <div class="ritekhela-topstrip">
        <div class="container">
            <div class="row">
                
                <aside class="col-md-6">
                    <strong>{{ __('header.Latest_News') }} :</strong>
                    <div class="ritekhela-latest-news-slider">
                        <div class="ritekhela-latest-news-slider-layer">Welcome visitor you can Login or Create an Account </div>
                        <div class="ritekhela-latest-news-slider-layer">While familiar with fellow European nation France Hareide. </div>
                    </div>
                </aside>
                <aside class="col-md-6">
                    <ul class="ritekhela-user-strip">
                        <li><a href="#"><i class="fa fa-globe-asia"></i> Support</a></li>
                        <li><a href="#"><i class="fa fa-dollar-sign"></i> Currency : USD</a></li>
                        <li>
                            <select class="form-control Langchange">
                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>Francais</option>                    
                            </select>
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#ritekhelamodalcenter"><i class="fa fa-user-alt"></i> Login</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#ritekhelamodalrg"><i class="fa fa-sign-in-alt"></i> Signup</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    <!--// TopStrip //-->
    
    <!--// Main Header //-->
    <div class="ritekhela-main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index-2.html" class="ritekhela-logo"><img src="{{asset('images/logo.png')}}" alt=""></a>
                    <div class="ritekhela-right-section">
                        <div class="ritekhela-navigation">
                            <span class="ritekhela-menu-link">
                                <span class="menu-bar"></span>
                                <span class="menu-bar"></span>
                                <span class="menu-bar"></span>
                            </span>
                            <nav id="main-nav">
                                <ul id="main-menu" class="sm sm-blue">
                                    <li class="active"><a href="{{route('main')}}">{{ __('header.home') }}</a></li>
                                    {{-- <li class="megamenu-wrap"><a href="#">Features</a>
                                        <ul class="ritekhela-megamenu">
                                           <li class="row">
                                              <div class="col-md-3">
                                                 <h4>Link 1</h4>
                                                 <div class="ritekhela-megalist">
                                                    <div class="list"><a href="all-fixture.html">All Matches</a></div>
                                                    <div class="list"><a href="fixture-list.html">Fixture List</a></div>
                                                    <div class="list"><a href="fixture-grid.html">Fixture Grid</a></div>
                                                    <div class="list"><a href="fullstanding.html">Full Standing</a></div>
                                                    <div class="list"><a href="fixture-detail.html">Fixture Detail</a></div>
                                                    <div class="list"><a href="gallery-classic.html">Gallery Classic 4Column</a></div>
                                                 </div>
                                              </div>
                                              <div class="col-md-3">
                                                 <h4>Link 2</h4>
                                                 <div class="ritekhela-megalist">
                                                    <div class="list"><a href="gallery-classic-3column.html">Gallery Classic 3Column</a></div>
                                                    <div class="list"><a href="gallery-simple.html">Gallery Simple 4Column</a></div>
                                                    <div class="list"><a href="gallery-simple-3column.html">Gallery Simple 3Column</a></div>
                                                    <div class="list"><a href="search-result.html">Search Result</a></div>
                                                    <div class="list"><a href="404.html">404 Page</a></div>
                                                    <div class="list"><a href="contact-us.html">Contact Us</a></div>
                                                 </div>
                                              </div>
                                              <div class="col-md-6 ritekhela-megamenu-thumb">
                                                 <img src="{{asset('extra-images/megamenu-frame.jpg')}}" alt="">
                                              </div>
                                           </li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{route('players.index')}}">{{ __('header.players') }}</a></li>
                                    <li><a href="{{route('teams.index')}}">{{ __('header.teams') }}</a></li>
                                    <li><a href="{{route('stadium.index')}}">{{ __('header.stadium') }}</a></li>
                                    {{-- <li><a href="#">Our News</a>
                                        <ul>
                                            <li><a href="#">Blog Grid</a>
                                                <ul>
                                                    <li><a href="blog-grid.html">Blog Grid W/O/S</a></li>
                                                    <li><a href="blog-grid-wlsb.html">Blog Grid W/L/S</a></li>
                                                    <li><a href="blog-grid-wrsb.html">Blog Grid W/R/S</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog Large</a>
                                                <ul>
                                                    <li><a href="blog-large.html">Blog Large W/O/S</a></li>
                                                    <li><a href="blog-large-wlsb.html">Blog Large W/L/S</a></li>
                                                    <li><a href="blog-large-wrsb.html">Blog Large W/R/S</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog Detail</a>
                                                <ul>
                                                    <li><a href="blog-detail.html">Blog Detail W/Thumb</a></li>
                                                    <li><a href="blog-detail-waudio.html">Blog W/SounCloud</a></li>
                                                    <li><a href="blog-detail-wvideo.html">Blog Detail W/Video</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Our Shop</a>
                                        <ul>
                                            <li><a href="shop-grid.html">Shop Grid W/O/S</a></li>
                                            <li><a href="shop-grid-wlsb.html">Shop Grid W/L/S</a></li>
                                            <li><a href="shop-grid-wrsb.html">Shop Grid W/R/S</a></li>
                                            <li><a href="shop-detail.html">Shop Detail</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <ul class="ritekhela-navsearch">
                            <li><a href="#" class="ritekhela-open-cart"><i class="fab fa-opencart"></i></a>
                                <div class="ritekhela-cart-box">
                                    <h2>You have 3 items in the cart</h2>
                                    <ul>
                                        <li>
                                            <figure><a href="#"><img src="{{asset('extra-images/cartbox-1.png')}}" alt=""></a></figure>
                                            <div class="ritekhela-cartbox-text">
                                                <h6><a href="#">Key Management Model The 60+ Models</a></h6>
                                                <div class="ritekhela-rating"><span class="ritekhela-rating-box half-width"></span></div>
                                                <span class="ritekhela-cartbox-price ritekhela-color-two">$35.99 <small>$43.00</small></span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="#"><img src="{{asset('extra-images/cartbox-2.png')}}" alt=""></a></figure>
                                            <div class="ritekhela-cartbox-text">
                                                <h6><a href="#">Pyramid Principle: Logic Writing &amp; Thinking</a></h6>
                                                <div class="ritekhela-rating"><span class="ritekhela-rating-box half-width"></span></div>
                                                <span class="ritekhela-cartbox-price ritekhela-color-two">$21.00</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <h5>Subtotal <span class="ritekhela-color-two">$1343</span></h5>
                                    <div class="ritekhela-cart-link"><a href="#" class="ritekhela-cartbox-btn">Go to Checkout</a></div>
                                </div>
                            </li>
                            <li><a href="#" data-toggle="modal" data-target="#ritekhelamodalsearch"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Header //-->

</header>