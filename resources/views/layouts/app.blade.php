<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>	
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<header>
		<nav>
			<ul style="display:flex" class="header_nav_list">
				<li><a href="/">HOME</a></li>
				<li><a href="/areas">Areas</a></li>
				<li><a href="/competitions">Competitions</a></li>
				<li><a href="/seasons">Seasons</a></li>
				<li><a href="/rounds">Rounds</a></li>
				<li><a href="/teams">Teams</a></li>
			</ul>
		</nav>
	</header>
	<div class="app_content">
		@yield('content')
	</div>
	
</body>
</html>