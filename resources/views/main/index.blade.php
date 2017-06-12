@extends('layouts.master')

	<!-- Custom css files goes here -->
@section('myStyle')

 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="/css/agency.min.css" rel="stylesheet">


@endsection
	<!-- navigation bar goes here -->
@section('navigation')

@include('layouts.nav')

@endsection

	<!-- body of the page is here -->
@section('body')


<div class="aler alert-success" style="text-align: center;" id="success">
    @if($flash = session('message'))
    {{ $flash }}
    @endif
</div>

@include('main.body')

@endsection


	<!-- footer section goes here -->
@section('footer')

@include('layouts.footer')

@endsection


	<!-- Modal section goes here -->
@section('modal')

@endsection

	<!-- Custom Scripting files goes here -->
@section('myScript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

   
    <!-- Theme JavaScript -->
    <script src="/js/agency.min.js"></script>

 @endsection


 @section('JsCode')

<script>
    
    if(response = 'success')
    {
        $('#success').delay(3000).fadeOut();
    }



</script>

 @endsection