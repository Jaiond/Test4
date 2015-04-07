
@extends('layouts.master') 

@section('content')
	<h1> Var = {{$var}}</h1>
	<h2> Var = <?php echo $var; ?> </h2>
	
	<h1> Var1 = {{$var1}}</h1>
	<h2> Var1 = <?php echo $var1; ?> </h2>

@stop