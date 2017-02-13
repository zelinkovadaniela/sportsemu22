<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SportsEmu') }}</title>

    <!-- Styles -->
    {!! Html::style('/css/app.css') !!}
    <!--<link href="/css/main.css" rel="stylesheet">-->
    {!! Html::style('/css/main.css') !!}
    {!! Html::style('css/datepicker.css') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') !!}
    {!! Html::style('http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css') !!}
    <!--lightslider-->
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css') !!}
    {!! Html::script('https://code.jquery.com/jquery-3.1.1.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js') !!}

    <!-- Scripts -->
 <style>
 .slider-wrap{width:100%;}
.content-slider{
  background-color: black;
  color: white;
  padding: 20px;
  text-align: center;
}
.slider-item{margin-top: 50px;}

</style>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]);?>
    </script>
   
  

</head>