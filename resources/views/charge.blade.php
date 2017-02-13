@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-10">

            @if(session('msg'))
                <div class="alert alert-success" role="alert">
                    {{ session('msg') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row">
                @foreach ($listings as $listing)
                    <form action="{{ route('pay', $listing->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="col-sm-5 col-md-5">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>{{ $listing->name }}</h3>
                                    <p>{{ $listing->description }}</p>
                                    <p>Buy for ${{ substr_replace($listing->price, '.', 2, 0) }}</p>
                                    <p>
                                        <script
                                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                data-key="{{ env('STRIPE_KEY') }}"
                                                data-amount="{{ $listing->price }}"
                                                data-name="Stripe.com"
                                                data-description="Widget"
                                                data-locale="auto"
                                                data-currency="usd">
                                        </script>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>

        </div>
    </div>

@endsection