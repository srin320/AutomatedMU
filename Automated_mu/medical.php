<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie9 ie8 ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie9 ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>

	<!-- CONFIGS -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>MEDICAL UNIT</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" media="all" href="assets1/css/reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="assets1/css/style.css" />

</head>

<body>

	<div id="container">

		<!-- Home -->
		<div id="home" class="home">

			<div class="wrap">

				<h1><font color="midnightblue">WELCOME</font></h1>
				<h2><font color="midnightblue">NIT DURGAPUR MEDICAL UNIT</font></h2>

				<ul class="options">
					<li>
						<a href="#download">
							<font color="midnightblue"><big>New Patient</big>
							Please Register</font>
						</a>
					</li>

					<li>
						<a href="patientlogin.php">
							<font color="midnightblue"><big>Existing User</big>
							Login</font>
						</a>
					</li>

					<li>
						<a href="doctorlogin.php">
							<font color="midnightblue"><big>Doctor's Login</big>
							</font>
						</a>
					</li>

				</ul>

			</div>

		</div>
		<!-- /Home -->

		<!-- Download -->
		<div id="download" class="download">

			<div class="wrap">

				<h2><font color="midnightblue">Register Here Now</font></h2>
				<h3><font color="midnightblue">You Are Just a One Click Ahead From Our Services</font></h3>
				<ul class="options big">
					

					<li>
						<a href="newpatient.php">
							<big>Click Here</big>
							Register
						</a>
					</li>

				</ul>

			</div>


		</div>
		<!-- /Download -->

		<!-- Documentation -->
		<div id="documentation" class="documentation scrollv">

			<div class="wrap">	

				<h2>Markup</h2>
				<code>
				&lt;div id=&quot;container&quot;&gt;<br/><br/>

			    &nbsp;   	&lt;div id=&quot;stage1&quot;&gt;<br/>
			    &nbsp;&nbsp;//The content of this page<br/>
			    &nbsp;    	&lt;/div&gt;<br/><br/>

			    &nbsp;   &lt;div id=&quot;stage2&quot;&gt;<br/>
			    &nbsp;&nbsp;//The content of this page<br/>
			    &nbsp;   &lt;/div&gt;<br/><br/>

				&lt;/div&gt;
				</code>

				<p>The id of stage is how you link</p>
				<code>&lt;a href=&quot;#stage2&quot;&gt;Go to stage2&lt;/a&gt;</code>

				<h2>Style</h2>

				<p>Don't show scroll bars</p>

				<code>body { overflow-x: hidden; overflow-y: hidden; }</code>

				<p>In case you need vertical scroll</p>

				<code>stage1 { overflow-y: auto; }</code>

				<h2>Javascript</h2>

				<p>Put Jquery, ScrollTo Plugin and Jquery.fullContent</p>

				<code>
				&lt;script src=&quot;js/jquery-1.x.x.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt; <br/>
				&lt;script src=&quot;js/jquery.easing.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt; <br/>
				&lt;script src=&quot;js/jquery.scrollTo.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt; <br/>
				&lt;script src=&quot;js/jquery.fullContent.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt; <br/>
				</code>

				<p>And you can configure this parameters:</p>

				<code>
				$('#container').fullContent({ <br/>
				&nbsp;    stages: 'div', <br/>
				&nbsp;    mapPosition: [{v: 1, h: 1}, {v: 1, h: 2}, {v: 2, h: 1}, {v: 2, h: 2}], <br/>
				&nbsp;    stageStart: 1, <br/>
				&nbsp;    speedTransition: 800, <br/>
				&nbsp;    idComplement: 'page_', <br/>
				&nbsp;    ease: 'easeOutQuad'
				});
				</code>

				<h2>The Map Position</h2>

				<p>This parameter you can configuring the position which want your stage. V - vertical position H - horizontal position. For example</p>

				<code>
					v1h1 | v1h2 <br/>
					v2h1 | v2h2
				</code>

				<ul class="options small">
						<li><a href="#home">
							<big>Back</big>
							to home
						</a>
						</li>
				</ul>

			</div>

		</div>
		<!-- /Documentation -->

		<!-- What -->
		<div id="what" class="what scrollv">

			<div class="wrap">

					<h2>What the plugin does</h2>
					<ul class="list">
						<li>Create fully containers with width and height of window</li>
						<li>Dynamic position: Each container could have vertical and horizontal position set</li>
						<li>History hash in URL</li>
						<li>Scroll animation between containers</li>
						<li>Simple configuration and easy use</li>
					</ul>

					<ul class="options small">
						<li><a href="#home">
							<big>Back</big>
							to home
						</a>
						</li>
					</ul>

			</div>

		</div>
		<!-- /What -->

	</div>


	


	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.1.min.js"><\/script>')</script>
	<script src="assets1/js/scrollTo.min.js"></script>
	<script src="assets1/js/jquery.easing.min.js"></script>
	<script src="assets1/js/jquery.fullContent.min.js"></script>
	<script type="text/javascript">
		$('#container').fullContent({
		    stages: 'div',
		    mapPosition: [{v: 1, h: 3}, {v: 1, h: 1}, {v: 1, h: 6}, {v: 3, h: 3}],
		    stageStart: 1,
		    idComplement: 'page_',
		    ease: 'easeOutQuad'
		});
	</script>
	</body>

</html>