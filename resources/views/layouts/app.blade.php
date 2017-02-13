<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body ng-app="bookingApp">

    <div class="main">
		@include('includes.header')
        @include('includes.nav')

        @include('partials.alerts.success')

        @yield('content')


    </div>

    <footer>
        @include('includes.footer')
    </footer>
    <!-- Scripts -->
   @include('includes.scripts')
   @yield('scripts')
</body>
</html>
