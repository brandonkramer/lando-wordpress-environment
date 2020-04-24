<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lando WordPress setup</title>
	<style>
		html {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%
		}

		body {
			margin: 0;
			color: #1e3064;
			font-family: "proxima nova", helvetica, arial, sans-serif;
			-moz-text-size-adjust: 100%;
			-ms-text-size-adjust: 100%;
			text-size-adjust: 100%;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
			display: block
		}

		abbr[title] {
			border-bottom: 1px dotted
		}

		b, strong {
			font-weight: 700
		}

		h1 {
			font-size: 2em;
			margin: .67em 0
		}

		a {
			color: #03da94;
		}

		small {
			font-size: 80%
		}
		mark {
			background: #fbf4c1;
			border-radius: 2px;
			display: inline-block;
			padding: 0 5px;
		}
		sub, sup {
			font-size: 75%;
			line-height: 0;
			position: relative;
			vertical-align: baseline
		}

		sup {
			top: -.5em
		}

		sub {
			bottom: -.25em
		}

		hr {
			-webkit-box-sizing: content-box;
			box-sizing: content-box;
			height: 0;
			border: 0.5px solid #dfe7fd;
		}
		.lead {
			font-size: 20px;
			opacity: 0.5;
		}
		pre {
			overflow: auto
		}

		code {
			font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
			width: 95%;
			background: #1e3064;
			display: block;
			color: white;
			padding: 15px;
			border-radius: 10px;
			margin: 10px 0;
			font-size: 14px;
		}

		main {
			max-width: 800px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
<main>
	<header>
		<h1>Lando WordPress Environment</h1>
		<hr>
	</header>
	<section>
		<h2>Getting started</h2>
		<p>Before you get started with this setup I assume that you have:</p>
		<ol>
			<li><a href="https://docs.lando.dev//basics/installation.html" class="">Installed Lando</a> and gotten familiar with
				<a href="https://docs.lando.dev//basics/" class="">its basics</a></li>
			<li>Got familiar with Lando's <a href="https://docs.lando.dev/config/wordpress.html">WordPress recipe</a>
			</li>
			<li>Read about the various <a href="https://docs.lando.dev//config/services.html" class="">services</a>,
				<a href=https://docs.lando.dev/"/config/tooling.html" class="">tooling</a>,
				<a href="https://docs.lando.dev//config/events.html" class="">events</a> and
				<a href="https://docs.lando.dev//config/proxy.html" class="">routing</a> Lando offers.
			</li>
		</ol>
		<h2>Usage</h2>
		<ol>
			<li>Configure <mark>.lando.yml</mark>  and replace <mark>{project}</mark> with project name
			<li>Specify the desired PHP version, web server and database server</li>
			<li>Follow below command lines</li>
			<li>Then visit the <a href="/wordpress/">WordPress</a> and go through install steps</li>
		</ol>
		<h3>Command lines</h3>
		<code>
			lando start<BR>
			mkdir wordpress<BR>
			cd wordpress<BR>
			lando wp core download
		</code>
		<h2>Browsersync</h2>
		<p>Add following options to your Browsersync script:</p>
		<code>
			#browserSync.init(files, {<BR>
			proxy: 'http://appserver', // could be http://appserver.nginx if you're running nginx<BR>
			port: 3000,<BR>
			open: false,<BR>
			});
		</code>
	</section>
</main>
</body>
</html>