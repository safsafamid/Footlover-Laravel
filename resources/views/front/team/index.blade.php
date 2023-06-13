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
                <div class="ritekhela-team ritekhela-team-view3">
                    <ul class="row">
                        @foreach ($teams as $item)
                        <li class="col-md-12">
                            <figure>
                                <a href="#"><img src="{{$item->logo_path}}" alt="" style="max-width: 72%;"></a>
                                <figcaption>
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-dribbble"></a>
                                </figcaption>
                            </figure>
                            <div class="ritekhela-team-view3-text">
                                <h2><a href="{{route('team.details',['slug'=>$item->slug])}}">{{$item->name}}</a></h2>
                                <span>{{$item->league->name}}</span>
                                <h5>MANAGER : {{$item->manager}}</h5>
                                <h5>FOUNDED : {{$item->founded}}</h5>
                                <h5>STADIUM : {{$item->stadium->name}}</h5>
                                <h5>STADIUM CAPACITY : {{$item->stadium->capacity}}</h5>
                            </div>
                        </li>
                        @endforeach
                        
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
