<!doctype html>

<!-- master-fil med navigering, assets (css, js) mm. -->

<html>
	<head>

{{ HTML::script('js/jquery-1.11.0.min.js')}}  <!-- jQuery -->
{{ HTML::style('css/bootstrap.min.css')}} <!-- Bootstrap -->

{{ HTML::style('css/spel.css')}} <!-- egen css -->

	
	</head>
<body>
<div class="container">

@yield('main')

</div> <!-- end container -->


<!-- Sessionsmeddelanden -->

			@if (Session::has('message'))
				<div class="alert-blackgloss notifications top-right flash" style="margin-top:80px">
  				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif

</body>

</html>