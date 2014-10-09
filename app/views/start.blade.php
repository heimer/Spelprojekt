@extends('layouts.master')

@section('main')

<div class="col-md-12">

<div class="panel centrera-fint">

	<div class="panel-heading">Logga in</div>

		<div class="panel-body">

<!--Anvnamn kalle, lösen: kula. Mycket hemligt. -->		

		{{ Form::open(array('route' => 'sessions.store', 'class'=>'form-signin form-group')) }}
 		{{ Form::text('username', $value = null, array('placeholder' => 'Användarnamn', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
 		{{ Form::password('password', array('placeholder' => 'Lösenord', 'class' => 'form-control', 'required' => 'required')) }}
 		{{ Form::submit('Logga in', array('class' => 'btn btn-default form-control ')) }}
		{{ Form::close() }}

	</div> 

</div> <!-- panel end -->

</div> <!-- column end -->

@stop