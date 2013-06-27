<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free themes for Twitter Bootstrap.">
	<title>Bootswatch: Free themes for Twitter Bootstrap</title>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link href="<?php echo(osc_current_web_theme_url()) ?>default/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo(osc_current_web_theme_url()) ?>default/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo(osc_current_web_theme_url()) ?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo(osc_current_web_theme_url()) ?>css/bootswatch.css" rel="stylesheet">
	<link href="<?php echo(osc_current_web_theme_url()) ?>http://feeds.feedburner.com/bootswatch" rel="alternate" type="application/rss+xml" title="Bootswatch">

	
</head>

<body class="index" id="top">
	<script src="<?php echo(osc_current_web_theme_url()) ?>js/bsa.js"></script>
	
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="./">Bootswatch</a>
				<div class="nav-collapse collapse" id="main-menu">
					<ul class="nav" id="main-menu-left">
						<li><a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">News</a></li>
						<li><a id="swatch-link" href="#gallery">Gallery</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Preview <b class="caret"></b></a>
							<ul class="dropdown-menu" id="swatch-menu">
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>default/">Default</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>amelia/">Amelia</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>cerulean/">Cerulean</a></li>
					            <li><a href="<?php echo(osc_current_web_theme_url()) ?>cosmo/">Cosmo</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>cyborg/">Cyborg</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>journal/">Journal</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>readable/">Readable</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>simplex/">Simplex</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>slate"/>Slate</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>spacelab/">Spacelab</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>spruce/">Spruce</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>superhero/">Superhero</a></li>
								<li><a href="<?php echo(osc_current_web_theme_url()) ?>united/">United</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav pull-right" id="main-menu-right">
						<li><a rel="tooltip" target="_blank" href="http://builtwithbootstrap.com/" title="Showcase of Bootstrap sites &amp; apps" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'builtwithbootstrap']);">Built With Bootstrap <i class="icon-share-alt"></i></a></li>
						<li><a rel="tooltip" target="_blank" href="https://wrapbootstrap.com/?ref=bsw" title="Marketplace for premium Bootstrap templates" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'wrapbootstrap']);">WrapBootstrap <i class="icon-share-alt"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="hero-unit">
		<h1>Bootswatch</h1>
		<p id="tagline">&nbsp;</p>

		<div id="social">
			<span>
				<iframe id="gh-fork" src="http://ghbtns.com/github-btn.html?user=thomaspark&repo=bootswatch&type=fork" allowtransparency="true" frameborder="0" scrolling="0" width="53px" height="20px"></iframe>
				<iframe id="gh-star" src="http://ghbtns.com/github-btn.html?user=thomaspark&repo=bootswatch&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110px" height="20px"></iframe>
			</span>
			<span>
				<a href="https://twitter.com/thomashpark" class="twitter-follow-button" data-show-count="false" data-show-screen-name="true">Follow @thomashpark</a>
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bootswatch.com" data-via="thomashpark">Tweet</a>
			</span>
			<span>
				<a class="btn rss-button" href="http://feeds.feedburner.com/bootswatch"><i class="icon-rss"></i> RSS</a>
			</span>
		</div>

		<div id="ticker">
		</div>
	</div>

	<div class="container">


		<div class="row about">
			<div class="span4">
				<h3><i class="icon-file-alt"></i> Easy to Install</h3>
				<p>Simply download a CSS file and replace the one in Bootstrap. No messing around with hex values.</p>
		 	</div>
			<div class="span4">
				<h3><i class="icon-github"></i> Open Source</h3>
				<p>Bootstrap themes are licensed under Apache 2.0 and maintained by the community on <a target="_blank" href="https://github.com/thomaspark/bootswatch">GitHub</a>.</p>
			</div>
		 	<div class="span4">
				<h3><i class="icon-wrench"></i> Tuned for 2.3.1</h3>
				<p>Swatches are built for and tested with the latest version of Bootstrap. <a target="_blank" href="https://github.com/thomaspark/bootswatch/tags">Older versions</a> are also available for download.</p>
		 	</div>
			<div class="span4">
				<h3><i class="icon-cogs"></i> Modular</h3>
				 <p>Changes are contained in just two LESS files, enabling modification and ensuring forward compatibility.</p>
			</div>
			<div class="span4">
				<h3><i class="icon-cloud"></i> Get Plugged In</h3>
				<p>An <a href="http://news.bootswatch.com/post/22193315172/bootswatch-api" onclick="pageTracker._link(this.href); return false;">API</a> is available for integrating with your platform. In use by <a href="http://320press.com/wpbs/" target="_blank">WPBS</a>, <a href="http://www.fusionleaf.com/" target="_blank">FusionLeaf</a>, <a href="http://yabdab.com/stacks/snaps/bootsnap/" target="_blank">BootSnap</a>, and others.</p>
			</div>
			<div class="span4">
				<h3><i class="icon-bullhorn"></i> Stay Updated</h3>
				<p>Be notified about updates by subscribing via <a href="http://feeds.feedburner.com/bootswatch">RSS feed</a>, <a href="http://feedburner.google.com/fb/a/mailverify?uri=bootswatch&loc=en_US">email</a>, or <a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">Tumblr</a>.</p>
			</div>
		</div>

		<div class="row">
			<div class="span6 offset3">
				<div class="thumbnail"><div id="bsap_1277971" class="bsarocks bsap_c466df00a3cd5ee8568b5c4983b6bb19"></div></div>
			</div>
		</div>

		<div class="row" id="gallery">

			<div class="span4">
				<div class="thumbnail">
					<a href="amelia"><img src="<?php echo(osc_current_web_theme_url()) ?>amelia/thumbnail.png" alt="Amelia"></a>
					<div class="caption">
						<h3>Amelia</h3>
						<p>Sweet and cheery.</p>
						<div class="btn-toolbar">
							<div class="btn-group"><a class="btn btn-large" href="<?php echo(osc_current_web_theme_url()) ?>amelia/">Preview</a></div>
							<div class="btn-group">
								<a class="btn btn-large btn-primary" target="_blank" href="amelia/bootstrap.min.css" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'amelia', 'bootstrap.min.css']);">Download</a>
								<a class="btn btn-large btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>amelia/bootstrap.min.css"
										onClick="_gaq.push(['_trackEvent', 'bootswatch', 'amelia', 'bootstrap.min.css']);">bootstrap.min.css</a></li>
									<li><a target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>amelia/bootstrap.css"
										onClick="_gaq.push(['_trackEvent', 'bootswatch', 'amelia', 'bootstrap.css']);">bootstrap.css</a></li>
									<li class="divider"></li>
									<li><a target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>amelia/variables.less"
										onClick="_gaq.push(['_trackEvent', 'bootswatch', 'amelia', 'variables.less']);">variables.less</a></li>
									<li><a target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>amelia/bootswatch.less"
										onClick="_gaq.push(['_trackEvent', 'bootswatch', 'amelia', 'bootswatch.less']);">bootswatch.less</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="thumbnail">
					<a href="cerulean"><img src="<?php echo(osc_current_web_theme_url()) ?>cerulean/thumbnail.png" alt="Cerulean"></a>
					<div class="caption">
						<h3>Cerulean</h3>
						<p>A calm, blue sky.</p>
						<div class="btn-toolbar">
							<div class="btn-group"><a class="btn btn-large" href="<?php echo(osc_current_web_theme_url()) ?>cerulean/">Preview</a></div>
							<div class="btn-group">
								<a class="btn btn-large btn-primary" target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>cerulean/bootstrap.min.css" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cerulean', 'bootstrap.min.css']);">Download</a>
								<a class="btn btn-large btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a target="_blank" href="cerulean/bootstrap.min.css" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cerulean', 'bootstrap.min.css']);">bootstrap.min.css</a></li>
									<li><a target="_blank" href="cerulean/bootstrap.css" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cerulean', 'bootstrap.css']);">bootstrap.css</a></li>
									<li class="divider"></li>
									<li><a target="_blank" href="cerulean/variables.less" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cerulean', 'variables.less']);">variables.less</a></li>
									<li><a target="_blank" href="cerulean/bootswatch.less" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cerulean', 'bootswatch.less']);">bootswatch.less</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="thumbnail">
					<a href="cosmo"><img src="<?php echo(osc_current_web_theme_url()) ?>cosmo/thumbnail.png" alt="Cosmo"></a>
					<div class="caption">
						<h3>Cosmo</h3>
						<p>An ode to Metro.</p>
						<div class="btn-toolbar">
							<div class="btn-group"><a class="btn btn-large" href="<?php echo(osc_current_web_theme_url()) ?>cosmo/">Preview</a></div>
							<div class="btn-group">
								<a class="btn btn-large btn-primary" target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>cosmo/bootstrap.min.css" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cosmo', 'bootstrap.min.css']);">Download</a>
								<a class="btn btn-large btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>cosmo/bootstrap.min.css" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cosmo', 'bootstrap.min.css']);">bootstrap.min.css</a></li>
									<li><a target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>cosmo/bootstrap.css" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cosmo', 'bootstrap.css']);">bootstrap.css</a></li>
									<li class="divider"></li>
									<li><a target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>cosmo/variables.less" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cosmo', 'variables.less']);">variables.less</a></li>
									<li><a target="_blank" href="<?php echo(osc_current_web_theme_url()) ?>cosmo/bootswatch.less" onClick="_gaq.push(['_trackEvent', 'bootswatch', 'cosmo', 'bootswatch.less']);">bootswatch.less</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- end row-->

		<hr>

		<div class="row" id="more">
			<div class="span12">
				<h4>Still searching?</h4>
				<p>Check out my personal faves from the paid templates at <a target="_blank" href="https://wrapbootstrap.com/?ref=bsw" title="Marketplace for premium Bootstrap templates" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'wrapbootstrap']);">WrapBootstrap</a>.</p> 
			</div>
		</div>

		<div class="row">
			
			<div class="span4">
				<div class="thumbnail">
					<a target="_blank" href="http://wrapbootstrap.com/preview/WB02634G3?ref=bsw"><img src="https://s3.amazonaws.com/wrapbootstrap/live/products/600x375/WB02634G3.png" alt="Clean Canvas"></a>
					<div class="caption">
						<h3>Clean Canvas</h3>
						<p>A beautiful template for showcasing your works.</p>
						<div class="btn-toolbar">
							<div class="btn-group"><a class="btn btn-large" target="_blank" href="http://wrapbootstrap.com/preview/WB02634G3?ref=bsw">Preview</a></div>
							<div class="btn-group">
								<a class="btn btn-large btn-info" target="_blank" href="https://wrapbootstrap.com/theme/clean-canvas-business-theme-WB02634G3?ref=bsw"
								onClick="_gaq.push(['_trackEvent', 'click', 'outbound', 'wrapbootstrap-cleancanvas']);">Info</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			<div class="span4">
				<div class="thumbnail">
					<a target="_blank" href="http://wrapbootstrap.com/preview/WB0F7FH2P?ref=bsw"><img src="https://s3.amazonaws.com/wrapbootstrap/live/products/600x375/WB0F7FH2P.png" alt="Crisp"></a>
					<div class="caption">
						<h3>Crisp</h3>
						<p>A versatile template that comes in cool and warm.</p>
						<div class="btn-toolbar">
							<div class="btn-group"><a class="btn btn-large" target="_blank" href="http://wrapbootstrap.com/preview/WB0F7FH2P?ref=bsw">Preview</a></div>
							<div class="btn-group">
								<a class="btn btn-large btn-info" target="_blank" href="https://wrapbootstrap.com/theme/crisp-responsive-fluid-business-template-WB0F7FH2P?ref=bsw"
								onClick="_gaq.push(['_trackEvent', 'click', 'outbound', 'wrapbootstrap-crisp']);">Info</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			<div class="span4">
				<div class="thumbnail">
					<a target="_blank" href="http://wrapbootstrap.com/preview/WB00U99JJ?ref=bsw"><img src="https://s3.amazonaws.com/wrapbootstrap/live/products/600x375/WB00U99JJ.png" alt="Clean Canvas"></a>
					<div class="caption">
						<h3>Base Admin</h3>
						<p>A polished template for an admin dashboard.</p>
						<div class="btn-toolbar">
							<div class="btn-group"><a class="btn btn-large" target="_blank" href="http://wrapbootstrap.com/preview/WB00U99JJ?ref=bsw">Preview</a></div>
							<div class="btn-group">
								<a class="btn btn-large btn-info" target="_blank" href="https://wrapbootstrap.com/theme/base-admin-WB00U99JJ?ref=bsw"
								onClick="_gaq.push(['_trackEvent', 'click', 'outbound', 'wrapbootstrap-baseadmin']);">Info</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<hr>

		<footer id="footer">
		  <p class="pull-right"><a href="#top">Back to top</a></p>
		  <div class="links">
		    <a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">Blog</a>
		    <a href="http://feeds.feedburner.com/bootswatch">RSS</a>
		    <a href="https://twitter.com/thomashpark">Twitter</a>
		    <a href="https://github.com/thomaspark/bootswatch/">GitHub</a>
		    <a rel="tooltip" href="javascript:(function(e,a,g,h,f,c,b,d)%7Bif(!(f%3De.jQuery)%7C%7Cg%3Ef.fn.jquery%7C%7Ch(f))%7Bc%3Da.createElement(%22script%22)%3Bc.type%3D%22text/javascript%22%3Bc.src%3D%22http://ajax.googleapis.com/ajax/libs/jquery/%22%2Bg%2B%22/jquery.min.js%22%3Bc.onload%3Dc.onreadystatechange%3Dfunction()%7Bif(!b%26%26(!(d%3Dthis.readyState)%7C%7Cd%3D%3D%22loaded%22%7C%7Cd%3D%3D%22complete%22))%7Bh((f%3De.jQuery).noConflict(1),b%3D1)%3Bf(c).remove()%7D%7D%3Ba.documentElement.childNodes%5B0%5D.appendChild(c)%7D%7D)(window,document,%221.3.2%22,function(%24,L)%7Bif(%24(%22.bootswatcher%22)%5B0%5D)%7B%24(%22.bootswatcher%22).remove()%7Delse%7Bvar%20%24e%3D%24(%27%3Cselect%20class%3D%22bootswatcher%22%3E%3Coption%3EAmelia%3C/option%3E%3Coption%3ECerulean%3C/option%3E%3Coption%3ECosmo%3C/option%3E%3Coption%3ECyborg%3C/option%3E%3Coption%3EJournal%3C/option%3E%3Coption%3EReadable%3C/option%3E%3Coption%3ESimplex%3C/option%3E%3Coption%3ESlate%3C/option%3E%3Coption%3ESpacelab%3C/option%3E%3Coption%3ESpruce%3C/option%3E%3Coption%3ESuperhero%3C/option%3E%3Coption%3EUnited%3C/option%3E%3C/select%3E%27)%3Bvar%20l%3D1%2BMath.floor(Math.random()*%24e.children().length)%3Bvar%20r%3D%27%3Clink%20rel%3D%22stylesheet%22%20href%3D%22http://bootswatch.com/default/bootstrap-responsive.min.css%22%3E%27%3B%24e.css(%7B%22z-index%22:%2299999%22,position:%22fixed%22,top:%225px%22,right:%225px%22,opacity:%220.5%22%7D).hover(function()%7B%24(this).css(%22opacity%22,%221%22)%7D,function()%7B%24(this).css(%22opacity%22,%220.5%22)%7D).change(function()%7Bif(!%24(%22link.bootswatcher%22)%5B0%5D)%7B%24(%22head%22).append(%27%3Clink%20rel%3D%22stylesheet%22%20class%3D%22bootswatcher%22%3E%27%2Br)%7D%24(%22link.bootswatcher%22).attr(%22href%22,%22http://bootswatch.com/%22%2B%24(this).find(%22:selected%22).text().toLowerCase()%2B%22/bootstrap.min.css%22)%7D).find(%22option:nth-child(%22%2Bl%2B%22)%22).attr(%22selected%22,%22selected%22).end().trigger(%22change%22)%3B%24(%22body%22).append(%24e)%7D%3B%7D)%3B" title="Drag to your bookmarks bar">Bookmarklet</a>
		    <a href="https://github.com/thomaspark/bootswatch/tree/gh-pages/swatchmaker">Swatchmaker</a>
			<a href="http://news.bootswatch.com/post/22193315172/bootswatch-api" onclick="pageTracker._link(this.href); return false;">API</a>
		    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F22JEM3Q78JC2">Donate</a>
		  </div>
		  Made by <a href="http://thomaspark.me">Thomas Park</a>. Contact him <a href="mailto:hello@thomaspark.me">hello@thomaspark.me</a>.<br/>
		  Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.<br/>
		  Based on <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>. Hosted on <a href="http://pages.github.com/">GitHub</a>. Icons from <a href="http://fortawesome.github.com/Font-Awesome/">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald Hiller</a>.</p>
		</footer>

	</div>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?php echo(osc_current_web_theme_url()) ?>js/jquery.smooth-scroll.min.js"></script>
	<script src="<?php echo(osc_current_web_theme_url()) ?>js/bootstrap.min.js"></script>
	<script src="<?php echo(osc_current_web_theme_url()) ?>js/bootswatch.js"></script>
	<script type="text/javascript">
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script>
	<script type="text/javascript">

		var taglines = [
			'Free themes for <a target="_blank" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>',
			'Add color to your <a target="_blank" href="http://twitter.github.com/bootstrap/">Bootstrap</a> site without touching a color picker',
			'Saving the web from default <a target="_blank" href="http://twitter.github.com/bootstrap/">Bootstrap</a>'
		];

		var line = Math.floor((taglines.length) * Math.random());
		$('#tagline').html(taglines[line]);

		parseRSS('http://feeds.feedburner.com/bootswatch', function(d){
			var h ='<strong>Recent news:</strong> ';
			for (var i = 0; i < 3; i++){
				h = h + '<a href="' + d.entries[i].link + '" onclick="pageTracker._link(this.href); return false;">' + d.entries[i].title + '...</a>&nbsp;&nbsp;';
			}
			document.getElementById('ticker').innerHTML = h;
		})

		function parseRSS(url, callback) {
		  $.ajax({
		    url: 'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(url),
		    dataType: 'json',
		    success: function(data) {
		      callback(data.responseData.feed);
		    }
		  });
		}
		
	</script>

</body>
</html>
