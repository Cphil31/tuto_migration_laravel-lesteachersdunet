<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Events</title>
</head>
<body>
	<h1>Events</h1>
	<h1>{{count($events)}} Events</h1>
	@foreach ($events as $event): 
		<article>
			<h1>{{$event->name}}</h1>
			<p>{{$event->description}} </p>
			<p>{{$event->price}} Euros </p>
			<p>Lieu: {{$event->location}}</p>
		</article>
		<!-- Si ce n'est pas le dernier element alors tu m'affiche hr -->

		@if(! $loop->last)
		<hr>
		@endif

		
	@endforeach
</body>
</html>