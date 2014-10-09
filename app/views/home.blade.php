@extends('layouts.master')

@section('main')

<div class="col-md-12">

<div class="panel centrera-fint">

	<div class="panel-heading">Välkommen {{ Auth::user()->username }}</div>

		<div class="panel-body">


		</div> 

</div> <!-- panel end -->

</div> <!-- column end -->

@stop