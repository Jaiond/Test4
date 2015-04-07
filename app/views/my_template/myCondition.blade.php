
@extends('layouts.master') 

@section('content')
	@if($Tao==1)
		<h1 style="color:green;">
			It's True!
		</h1>
	@else 
		<h1 style="color:red;">
			It's False!!
		</h1>
	@endif
@stop