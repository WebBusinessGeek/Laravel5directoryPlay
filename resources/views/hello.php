<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<ul>
			<li>app (Now contains only the core code of your application)
				<li>Console (This directory will contain all the console based entry points into your application.)</li>
				<li>Http (This directory will contain all the web based entry points into your application.)</li>
					<li>Controllers (This directory will contain the controller classes within your application. Controllers provide a place to put some logic, interact with your models, and load views.)</li>
					<li>Filters (This directory will contain the various filters used within your application. Filters ‘filter’ actions before or after they happen to allow more control - for example they provide XSS and CSRF protection.)</li>
					<li>Requests</li>
				</li>
				<li>Providers (This directory will contain all the service providers in the application.)</li>
			</li>




bootstrap (This directory contains the files that bootstrap the framework, configure the generator paths, and perform environment detection.)


config (This directory contains the application’s configuration files.)


database (This directory contains your database interactions - seeds and migrations.)
migrations (This directory will contain your migrations. Migrations are used to update the schema of your applications database while also providing a form of version control.)
seeds (This directory will contain your seeds. Sees are used to quickly populate database tables.)



public (This directory that you will point your web server to. It also contains your assets - images, js, css, etc.)



resources (This directory contains your views, and language files.)
lang (This is the localization directory for the application. It will contain most of the templates responses from the application to the user. For example all validation feedback is located here.)
views (This directory will contain your HTML templates commonly known as views.)



storage (This directory contains the compiled Blade templates, file caches, and other storage files generated in your application. You want be doing much with this directory as its maintained automatically by Laravel.)
app
framework
cache
sessions
views


tests (This directory contains your application’s tests.)


vendor (This will of course contain your application’s third-party dependencies.)

	</div>
</body>
</html>
