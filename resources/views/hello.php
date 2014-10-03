<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel 5 Directory Changes</title>

	<link type="text/css" href="/bootstrap-twit/css/bootstrap-theme.min.css" rel="stylesheet">
	<link type="text/css" href="/bootstrap-twit/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<h1>Laravel 5 Directory structure</h1>
		<ul>
			<li>app (Now contains only the core code of your application)
			<ul>
				<li>Console (This directory will contain all the console based entry points into your application.)</li>
				<li>Http (This directory will contain all the web based entry points into your application.)</li>
				<ul>
					<li>Controllers (This directory will contain the controller classes within your application. Controllers provide a place to put some logic, interact with your models, and load views.)</li>
					<li>Filters (This directory will contain the various filters used within your application. Filters ‘filter’ actions before or after they happen to allow more control - for example they provide XSS and CSRF protection.)</li>
					<li>Requests</li>
				</ul>
				</li>
				<li>Providers (This directory will contain all the service providers in the application.)</li>
			</ul>
			</li><br/>




			<li>bootstrap (This directory contains the files that bootstrap the framework, configure the generator paths, and perform environment detection.)</li>

			<br/>

			<li>config (This directory contains the application’s configuration files.)</li>

			<br/>

			<li>database (This directory contains your database interactions - seeds and migrations.)
			<ul>
				<li>migrations (This directory will contain your migrations. Migrations are used to update the schema of your applications database while also providing a form of version control.)</li>
				<li>seeds (This directory will contain your seeds. Sees are used to quickly populate database tables.)</li>
			</ul>
			</li>

			<br/>


			<li>public (This directory that you will point your web server to. It also contains your assets - images, js, css, etc.)</li>

			<br/>

			<li>resources (This directory contains your views, and language files.)
			<ul>
				<li>lang (This is the localization directory for the application. It will contain most of the templates responses from the application to the user. For example all validation feedback is located here.)</li>
				<li>views (This directory will contain your HTML templates commonly known as views.)</li>
			</ul>
			</li>

			<br/>

			<li>storage (This directory contains the compiled Blade templates, file caches, and other storage files generated in your application. You want be doing much with this directory as its maintained automatically by Laravel.)
			<ul>
				<li>app</li>
				<li>framework
				<ul>
					<li>cache</li>
					<li>sessions</li>
					<li>views</li>
				</ul>
				</li>
			</ul>
			</li>

			<br/>

			<li>tests (This directory contains your application’s tests.)</li>

			<br/>

			<li>vendor (This will of course contain your application’s third-party dependencies.)</li>

	</div>
</body>
</html>
