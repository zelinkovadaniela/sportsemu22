@extends('layouts.app')

@section('content')
<!-- hero Container-->
<div class="fullcontainer-home">
    <div class="hero-form-fullcontainer">
        <div class="hero-form-container md-whiteframe-3dp">
                {{ Form::open(['route' => 'listings', 'method' => 'GET', 'class' => 'h-form-wrap'])}}
                    <div class="form-field-wrap ">
                        <div ng-controller="HomeController" class="md-padding selectdemoOptionGroups" ng-cloak="">
                            <div>
                                <div layout="row">
                                <md-input-container style="margin-right: 10px;">
                                    <label>Sports</label>
                                    <md-select ng-model="size">
                                    <md-option ng-repeat="size in sizes" value="@{{size}}">@{{size}}</md-option>
                                    </md-select>
                                </md-input-container>
                                </div>
                            </div>
                        </div>
                        <!--{{ Form::select('sport', ['Badminton','Tennis', 'Pilates', 'Squash'], null, ['placeholder' => 'Choose a Sport','class' => 'form-field']) }}-->
                    </div>
                    <div class="form-field-wrap">
                        <div ng-controller="HomeController" md-theme="default" class="md-padding selectdemoOptionGroups" ng-cloak="">
                            <div>
                                <div layout="row">
                                <md-input-container style="margin-right: 10px;">
                                    <label>Select location</label>
                                    <md-select ng-model="location">
                                    <md-option ng-repeat="location in locations" value="@{{location}}">@{{location}}</md-option>
                                    </md-select>
                                </md-input-container>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-field-wrap">
						<md-datepicker ng-model="myDate" md-placeholder="Enter date"></md-datepicker>
					</div>
                    <div class="form-field-wrap">
                        <div><button class="h-btn-submit">Submit</button></div>
                    </div>
                {{ Form::close() }}
            
        </div>
    </div>
</div>
<!-- blurb -->
<div class="fullcontainer-home">
    <div class="contain">
        <div class="grid grid--gutters grid--full gridsm--1of3 gridmd--1of3 gridlg--1of3 gridxl--1of3">
            <div class="cell">
                <div class="h-s-bg md-whiteframe-3dp">
                    <div class="h-s-title"><h3>Find a court</h3></div>
                    <div class="h-img">
                        <img src="https://maxcdn.icons8.com/iOS7/PNG/100/Sports/badminton-100.png" title="Badminton" width="100">
                    </div>
                    <!--<div class="home-img">{{ Html::image("img/icons/badminton-100.png", "Logo") }}</div>-->
                    <div class="h-s-text">Search for a time and place, and we will provide you a list of courts from which to choose.</div>
                </div>
            </div>
            <div class="cell">
                <div class="h-s-bg md-whiteframe-3dp">
                <div class="h-s-title"><h3>Reserve</h3></div>
                <div class="h-img">
                    <img src="https://maxcdn.icons8.com/iOS7/PNG/100/Time_And_Date/calendar-100.png" title="Calendar" width="100">
                </div>
                <div class="h-s-text">FInd an avilable timeslot and instantly book your court in as little as 30 seconds!</div>
                </div>
            </div>
            <div class="cell">
                <div class="h-s-bg md-whiteframe-3dp">
                <div class="h-s-title"><h3>Play!</h3></div>
                <div class="h-img">
                    <img src="https://maxcdn.icons8.com/Color/PNG/96/Sports/badminton_2-96.png" title="Badminton 2" width="96">
                </div>
                <div class="h-s-text">Just show up at your chosen Sports center and start playing!</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fullcontainer-home">
    <div class="contain">
         <div class="grid grid--gutters grid--full gridsm--full gridmd--1of3 gridlg--1of3 gridxl--1of3">
            <div class="cell center">
                <div class="h-icon"> <i class="fa fa fa-home fa-4x" aria-hidden="true"></i></div>
                <div class="h-title"><h3> Find the closest sports center to you </h3></div>
                <div class="h-text">Search for your favourite sport and find a sports center nearby with avialability</div>
            </div>
            <div class="cell center">
                <div class="h-icon"> <i class="fa fa-address-book fa-4x" aria-hidden="true"></i></div>
                <div class="h-title"><h3>Find new players for your favourite sports</h3></div>
                <div class="h-text">Our service allows you to search for players at a similar level to yourself and match with them </div>
            </div>
            <div class="cell center">
                <div class="h-icon"> <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i></div>
                <div class="h-title"><h3>Split the costs automaticlly</h3></div>
                <div class="h-text">With our service you have the option of splitting the costs with another person meaning if they don't show up then you don't lose out </div>
            </div>
        </div>
    </div>
</div>



<div class="fullcontainer-home">

        <div class="grid  grid--1of2 gridsm--1of2 gridmd--1of2 gridlg--1of4 gridxl--1of4">

            <div class="cell">
                <a href="searchresults/badminton"><div class="cell-text"><h3>Badminton</h3></div></a>
            </div>
            <div class="cell">
                <a href="searchresults/badminton"><div class="cell-text"><h3>Tennis</h3></div></a>
            </div>
            <div class="cell">
                <a href="searchresults/badminton"><div class="cell-text"><h3>Squash</h3></div></a>
            </div>
             <div class="cell">
                <a href="searchresults/badminton"><div class="cell-text"><h3>Yoga</h3></div></a>
            </div>

             <div class="cell">
                <a href="searchresults/badminton"><div class="cell-text"><h3>Swimming</h3></div></a>
            </div>
            <div class="cell">
                <a href="searchresults/badminton"><div class="cell-text"><h3>Dance</h3></div></a>
            </div>
            <div class="cell">
                <a href="searchresults/badminton"><div class="cell-text"><h3>Gym</h3></div></a>
            </div>
             <div class="cell">
               <a href="searchresults/badminton"><div class="cell-text"><h3>Football</h3></div></a>
            </div>

        </div>
</div>
@endsection
