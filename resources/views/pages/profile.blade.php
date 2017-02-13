@extends('layouts.app')

@section('content')
<div class="fullcontainer">
    <div class="contain-1200 ">
        <div class="p-welcome-wrap ">
            <div class="p-welcome"> Welcome {{ $user->username }}</div>
        </div>
        <div class="p-bg  grid grid--full gridsm--1of2 gridmd--1of2 gridlg--1of2 gridxl--1of2">
            <div class="cell u-med-1of3 u-large-1of3 u-xl-1of3">
                 <div class="p-avatar"> 
                    <img src="/uploads/avatars/{{ $user->avatar }}" class="img-profile">
                </div>
                <div class="p-upload"> 
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <label>Update profile image</label>
                            <div class="p-avatar-field">
                                <input type="file" name="avatar">
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="p-btn-submit" type="submit" value="Upload Image">
                        </form>
                </div>  
            </div>
            <div class="cell u-med-2of3 u-large-2of3 u-xl-2of3">
                {{ Form::model($details, array('action' => array('UserController@update', $details->id), 'method' => 'PUT')) }}
               
                <div class="p-userdetails">
                    <div class="grid gridsm--1of2 gridmd--1of2 gridlg--1of2 gridxl--1of2">
                        <div class="cell u-med-1of4 u-large-1of4 u-xl-1of4">
                            <div class="p-about-me">About me</div>
                            <div class="p-userinfo-row">Name:</div>
                            <div class="p-userinfo-row">Address: </div>
                            <div class="p-userinfo-row">Phone: </div>
                            <div class="p-userinfo-row">Date of Birth:</div>
                            <div class="p-userinfo-row"></div>
                        </div>
                        <div class="cell u-med-3of4 u-large-3of4 u-xl-3of4">
                            <div class="p-about-me"><input type="text" class="p-about-me-field" name="personal_info" value="{{ $details->personal_info }}"></div>
                            <div class="p-userinfo-row"><input type="text" class="p-input" name="name" value="{{ $details->name }}"></div> 
                            <div class="p-userinfo-row"><input type="text" class="p-input" name="address" value="{{ $details->address }}"></div> 
                            <div class="p-userinfo-row"><input type="text" class="p-input" name="phone" value="{{ $details->phone }}"></div> 
                            <div class="p-userinfo-row"><input type="date" class="p-input" name="date_of_birth" value="{{ $details->date_of_birth }}"></div> 
                            <div class="p-userinfo-row"> 
                                <button class="p-btn-submit" value="Submit">Update Details</button>
                            {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fullcontainer">
    <div class="contain">

        <section class="wrapper ">
            <ul class="tabs">
                <li class="active">My Bookings</li>
                <li>My Messages</li>
                <li>My Skills</li>
            </ul>

            <ul class="tab__content">
                <li class="active">
                    <div class="content__wrapper">
                        <h2 class="text-color">My Bookings</h2>
                        <div class="p.bookings">Tuesday 18th December - 17:00 @ <a href="listings/hotel-chechie">hotel chechie</a></div>
                    </div>
                </li>
                <li>
                    <div class="content__wrapper">
                        <h2 class="text-color">My Messages</h2>
                        <div class="p.messages">New Message from John: Hey Let's play badminton at <a href="listings/hotel-chechie">hotel chechie</a></div>
                    </div>
                </li>
                <li>
                    <div class="content__wrapper">
                        <h2 class="text-color">My Skills</h2>
                        
                      
                    </div>
                </li>
            </ul>
        </section>

    </div>
</div>
<!--<div class="fullcontainer">
    <div class="grid">
        <div class="cell p-left">
            <div class="p-cell-avatar">
                <div class="p-avatar"> 
                    <div class="p-welcome">Welcome {{ $user->username }}</div>
                    <img src="/uploads/avatars/{{ $user->avatar }}" class="img-profile">
                    <div class=""> 
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <label>Update profile image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit">
                        </form>
                    </div>  
                </div>
     
                {{ Form::model($details, array('action' => array('UserController@update', $details->id), 'method' => 'PUT')) }}
                <div class="p-blurb">
                    <div class=""><input type="text" name="personal_info" value="{{ $details->personal_info }}"></div>
                </div>
                <div class="p-userdetails">
                    <div class="grid gridsm--1of2 gridmd--1of2 gridlg--1of2 gridxl--1of2">
                        <div class="cell u-1of3">
                            <div class="p-userinfo-row">Name:</div>
                            <div class="p-userinfo-row">Address: </div>
                            <div class="p-userinfo-row">Phone: </div>
                            <div class="p-userinfo-row">Date of Birth:</div>
                        </div>
                          
                        <div class="cell">
                            
                           
                            <div class="p-userinfo-row"><input type="text" class="p-input" name="name" value="{{ $details->name }}"></div> 
                            <div class="p-userinfo-row"><input type="text" class="p-input" name="address" value="{{ $details->address }}"></div> 
                            <div class="p-userinfo-row"><input type="text" class="p-input" name="phone" value="{{ $details->phone }}"></div> 
                            <div class="p-userinfo-row"><input type="date" class="p-input" name="date_of_birth" value="{{ $details->date_of_birth }}"></div> 
                        </div>
                    </div>
                </div>
                <div class="p-submit">  
                    <button class="p-btn-submit" value="Submit">Submit</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="cell p-right-bg">
            <div class="grid grid--gutters gridsm--full gridmd--1of2 gridlg--1of2 gridxl--1of2">
                <div class="cell">
                    <div class="p-cell-wrap">
                        <div class="p-cell-header">
                            My Bookings
                        </div>
                        <div class="p-cell-row">
                            dnads
                        </div>
                    </div>

                </div>
                <div class="cell">
                    <div class="p-cell-wrap">
                        <div class="p-cell-header">
                            My Skills
                        </div>
                        <div class="p-cell-row">
                            <div class="grid gridsm--1of2 gridmd--1of2 gridlg--1of2 gridxl--1of2">
                                <div class="cell">
                                    <div ng-controller="profileController" ng-cloak="" class="sliderdemoBasicUsage" ng-app="MyApp">
                                        <md-content style="margin: 16px; padding:16px">
                                            <div style="margin-top: 50px;"></div>

                                            <h3>Rating: @{{rating}}/5 - demo of theming classes</h3>
                                            <div layout="">
                                            <div flex="10" layout="" layout-align="center center">
                                                <span class="md-body-1">default</span>
                                            </div>
                                            <md-slider flex="" md-discrete="" ng-model="rating1" step="1" min="1" max="5" aria-label="rating">
                                            </md-slider>
                                            </div>
                                            <div layout="">
                                            <div flex="10" layout="" layout-align="center center">
                                                <span class="md-body-1">md-warn</span>
                                            </div>
                                            <md-slider flex="" class="md-warn" md-discrete="" ng-model="rating2" step="1" min="1" max="5" aria-label="rating">
                                            </md-slider>
   
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->


@endsection 


  
                
                