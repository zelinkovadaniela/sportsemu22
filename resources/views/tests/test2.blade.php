@extends('layouts.app')

@section('content')
<div class="fullcontainer">
    <div class="grid">
        <div class="cell p-left">
            <div class="p-cell-avatar">
                <div class="p-avatar"> 
                    <div class="p-welcome">Welcome </div>
                    <img src="/uploads/avatars/" class="img-profile">
                    <div class=""> 
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <label>Update profile image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit">
                        </form>
                    </div>  
                </div>
                <!--Angular form-->
              <div ng-controller="profileController" layout="column" ng-cloak="" class="md-inline-form inputdemoBasicUsage" ng-app="MyApp">

              <div ng-app="app" ng-controller="HttpGetController">
                <p>First Name: <input type="text" name="firstName" ng-model="firstName" required /></p>
                <p>First Name: <input type="text" name="lastName" ng-model="lastName" required /></p>
                <button ng-click="SendData()">Submit</button>
                <hr />
                {{ PostDataResponse }}
            </div>

            </div>

                <!--<md-content md-theme="docs-dark" layout-gt-sm="row" layout-padding="">
                    <div ng-repeat="profile in profiles">
   <pre><span class="md-headline">@{{ profile.user_id }}</span></pre>
                     <md-input-container class="md-block">
                        <label>Biography</label>
                        <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus=""></textarea>
                    </md-input-container>

                    <md-input-container>
                        <label>Username</label>
                        <input ng-model="user.title">
                    </md-input-container>

                    <md-input-container>
                        <label>Email</label>
                        <input ng-model="user.email" type="email">
                    </md-input-container>
                    </div>
                </md-content>

                <md-content layout-padding="">
                    <div>
                    <form name="userForm">

                        <div layout-gt-xs="row">
                        <md-input-container class="md-block" flex-gt-xs="">
                            <label>Company (Disabled)</label>
                            <input ng-model="user.company" disabled="">
                        </md-input-container>

                        <md-input-container>
                            <label>Enter date</label>
                            <md-datepicker ng-model="user.submissionDate"></md-datepicker>
                        </md-input-container>
                        </div>

                        <div layout-gt-sm="row">
                        <md-input-container class="md-block" flex-gt-sm="">
                            <label>First name</label>
                            <input ng-model="">
                        </md-input-container>

                        <md-input-container class="md-block" flex-gt-sm="">
                            <label>Long Last Name That Will Be Truncated And 3 Dots (Ellipsis) Will Appear At The End</label>
                            <input ng-model="theMax">
                        </md-input-container>
                        </div>

                        <md-input-container class="md-block">
                        <label>Address</label>
                        <input ng-model="user.address">
                        </md-input-container>

                        <md-input-container md-no-float="" class="md-block">
                        <input ng-model="user.address2" placeholder="">
                        </md-input-container>

                        <div layout-gt-sm="row">
                        <md-input-container class="md-block" flex-gt-sm="">
                            <label>City</label>
                            <input ng-model="user.city">
                        </md-input-container>

                        <md-input-container class="md-block" flex-gt-sm="">
                            <label>State</label>
                            <md-select ng-model="user.state">
                            <md-option ng-repeat="state in states" value="@{{state.abbrev}}">
                                @{{state.abbrev}}
                            </md-option>
                            </md-select>
                        </md-input-container>

                        <md-input-container class="md-block" flex-gt-sm="">
                            <label>Postal Code</label>
                            <input name="postalCode" ng-model="user.postalCode" placeholder="12345" required="" ng-pattern="/^[0-9]{5}$/" md-maxlength="5">

                            <div ng-messages="userForm.postalCode.$error" role="alert" multiple="">
                            <div ng-message="required" class="my-message">You must supply a postal code.</div>
                            <div ng-message="pattern" class="my-message">That doesn't look like a valid postal
                                code.
                            </div>
                            <div ng-message="md-maxlength" class="my-message">
                                Don't use the long version silly...we don't need to be that specific...
                            </div>
                            </div>
                        </md-input-container>
                        </div>
                    </form>
                    </div>
                </md-content>-->

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
                                <div class="cell u-1of4">
                                <h3>Tennis</h3>
                                </div>
                                <div class="cell">
                                    <div id="year-slider" class="no-ui-slider">
                                    <div class="slider"></div>
                                    <ul class="slider-labels eleven-columns">
                                    <li>0</li>
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li class="active">8</li>
                                    <li>9</li>
                                    <li>10</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-cell-row">
                            <div class="grid gridsm--1of2 gridmd--1of2 gridlg--1of2 gridxl--1of2">
                                <div class="cell u-1of4">
                                <h3>Badminton</h3>
                                </div>
                                <div class="cell">
                                    <div id="year-slider" class="no-ui-slider">
                                    <div class="slider"></div>
                                    <ul class="slider-labels eleven-columns">
                                    <li>0</li>
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li class="active">8</li>
                                    <li>9</li>
                                    <li>10</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-cell-row">
                            <div class="grid gridsm--1of2 gridmd--1of2 gridlg--1of2 gridxl--1of2">
                                <div class="cell u-1of4">
                                <h3>Squash</h3>
                                </div>
                                <div class="cell">
                                    <div id="year-slider" class="no-ui-slider">
                                    <div class="slider"></div>
                                    <ul class="slider-labels eleven-columns">
                                    <li>0</li>
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li class="active">8</li>
                                    <li>9</li>
                                    <li>10</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-cell-row">
                            <div class="grid gridsm--1of2 gridmd--1of2 gridlg--1of2 gridxl--1of2">
                                <div class="cell u-1of4">
                                <h3>Football</h3>
                                </div>
                                <div class="cell">
                                    <div id="year-slider" class="no-ui-slider">
                                    <div class="slider"></div>
                                    <ul class="slider-labels eleven-columns">
                                    <li>0</li>
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li class="active">8</li>
                                    <li>9</li>
                                    <li>10</li>
                                    </ul>
                                
                                </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection 


  
                
                