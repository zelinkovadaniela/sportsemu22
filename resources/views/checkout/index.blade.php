
@extends ('layouts.app')

@section('content')

    <h2 class="text-center">Your Booking was created succesfully</h2>
    {{ Form::model($user,['url'=>'checkout/payment']) }}

    <div class="control-group">
        <label for="payment" class="control-label">Pay here</label>
        <div class="controls">
            <script
                    src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
                    data-key="pk_test_l3RxMgTwSx4TBdbqXhvCkP0F"
                    data-amount="500"
                    data-name="Myshop"
                    data-description="Quadcopter"
                    data-image="{{url('img/stripe-128x128.png')}}">
            </script>
        </div>
    </div>
    {{ Form::close() }}
@stop
