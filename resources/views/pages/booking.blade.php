@extends('layouts.app')
@section('content')
    <table class="table" ng-controller="bookingController">
    <thead>
        <tr>
            <th>Court/Hour</th>
            <th ng-repeat="court in courts">
                <span class="label label-default">
                    @{{court.name}}
                </span>
            </th>
        </tr>
    </thead>
    <tr ng-repeat="hour in hours">
        <th>@{{hour.hour}}</th>
        <th ng-repeat="court in courts" class="slot">
            <a href="#" class="slot-link">Slot</a>
        </th>
    </tr>
    </table>
@endsection