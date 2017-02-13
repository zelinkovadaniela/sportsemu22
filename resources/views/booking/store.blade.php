@extends ('layouts.app')

@section('content')

	<md-content class="md-no-momentum">
  <md-input-container class="md-icon-float md-block">
	<!-- Use floating label instead of placeholder -->
	<label>Name</label>
	<input ng-model="user.name" type="text">
  </md-input-container>

  <md-input-container md-no-float class="md-block">
	<input ng-model="user.phone" type="text" placeholder="Phone Number">
  </md-input-container>

  <md-input-container class="md-block">
	<!-- Use floating placeholder instead of label -->
	<input ng-model="user.email" type="email" placeholder="Email (required)" ng-required="true">
  </md-input-container>

  <md-input-container md-no-float class="md-block">
	<input ng-model="user.address" type="text" placeholder="Address" >
  </md-input-container>

  <md-input-container class="md-icon-float md-icon-right md-block">
	<label>Comment to the court owner</label>
	<input ng-model="user.donation" type="number" step="0.01">
  </md-input-container>

</md-content>

<md-button href="{{ route('checkout.index') }}" class="md-raised md-primary md-whiteframe-3dp">PAY 100CZK NOW</md-button>

@stop