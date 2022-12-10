<!DOCTYPE html>
 <!-- prettier-ignore -->
 <html class="insetting">
	 <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <meta charset="UTF-8" />
		 <title>Clippy — CSS clip-path _____ </title>
		 <link rel="stylesheet" type="text/css" href="{{ asset('public/dev/style.min.css')}}" />
		 <link rel="shortcut icon" href="pics/favicon.png" />
		 <link rel="apple-touch-icon" sizes="120x120" href="pics/apple-touch-icon-120x120.png" />
		 <link rel="apple-touch-icon" sizes="152x152" href="pics/apple-touch-icon-152x152.png" />
		 <link rel="icon" sizes="196x196" href="homescreen-196x196.png" />
		 <meta name="viewport" content="width=device-width" />
	</head>
	 <body>
		 <div class="main">
			 <header class="fade-content">
				 <a href="http://bennettfeely.com/clippy">CSS clip-path maker </a>

				 {{-- <a href="https://twitter.com/share" class="twitter-share-button" data-via="bennettfeely">Tweet </a>
				 <script>!function(t,e,r){var n,s=t.getElementsByTagName(e)[0],i=/^http:/.test(t.location)?"http":"https";t.getElementById(r)||((n=t.createElement(e)).id=r,n.src=i+"://platform.twitter.com/widgets.js",s.parentNode.insertBefore(n,s))}(document,"script","twitter-wjs");</script> --}}
			 </header>
			 <div class="demo-container fade-content">
				 <section class="demo">
					 <div id="box" class="box">
						 <div class="shadowboard"></div>
						 <div class="clipboard"></div>
						 <div class="handles"></div>
					 </div>
					 <div class="custom-notice">
						 <div>
							 <span class="touchy"></span> to add points <br />to
							custom polygon.
						 </div>
					 </div>
				 </section>
			 </div>
			 <section class="dark-panel custom">
				 <h2>Custom shape </h2>
				 <button class="finish"></button>
			 </section>
			 <section class="dark-panel inset">
				 <div class="flex">
					 <h2>Round edges </h2>
					 <input value="5% 20% 0 10%" class="inset-round" type="text" />
				 </div>
				 <p>
					The  <code>inset() </code> shape optionally allows ______
					_______ to  <code>border-radius </code> for rounded edges.
					This ___ feature may be buggy __
					 <span class="your-browser">your browser </span>.
				 </p>
			 </section>
			 <section id="flickity" class="shapes horizontal gallery">
				 <ul></ul>
			 </section>
			 <section class="clip-path" tabindex="-1">
				 <div class="css-code code fade-content">
					 <!--
					<code class="webkit block"
						>-webkit-clip-path:
						<span class="functions"></span>;</code
					>
					-->
					 <code class="unprefixed block show">clip-path:  <span class="functions"></span>; </code>
				 </div>
				 <!-- <button class="edit-in-codepen code"></button> -->
			 </section>
		 </div>
		 <div class="side">
			 {{-- <section class="grid panel ad-box">
				 <div class="beg">
					 <div>This ad keeps this ____ running. </div>
					 <div>Consider whitelisting this page. </div>
					 <div>Thank you for visiting ______ way! </div>
				 </div>
				 <script async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYIL27N&placement=bennettfeelycom" id="_carbonads_js"></script>
			 </section> --}}
			 <section class="dark-panel inset">
				 <div class="flex">
					 <h2>Round edges </h2>
					 <input value="5% 20% 0 10%" class="inset-round" type="text" />
				 </div>
				 <p>
					The  <code>inset() </code> shape optionally allows ______
					_______ to  <code>border-radius </code> for rounded edges.
					This ___ feature may be buggy __
					 <span class="your-browser">your browser </span>.
				 </p>
			 </section>
			 <section class="dark-panel custom">
				 <h2>Custom shape </h2>
				 <button class="finish"></button>
			 </section>
			 <section class="shapes vertical" tabindex="-1">
				 <ul></ul>
			 </section>
			 <section class="options">
			
				 <div class="grid panel flex fade-content">
					 <h2>Demo Size </h2>
					 <input id="demo_width" value="280" type="number" />
					 <h2>&times; </h2>
					 <input id="demo_height" value="280" type="number" />
				 </div>
				 <div class="grid panel fade-content">
					 <h2>Demo Background </h2>
					 <div class="backgrounds">
						 <img src="{{ asset('public/pics/pittsburgh.jpg')}}" />
						 <img src="{{ asset('public/pics/fierenze.jpg')}}" />
						 <img src="{{ asset('public/pics/sparkler.jpg')}}" />
						 <img src="{{ asset('public/pics/miami.jpg')}}" />
					 </div>
					 <input placeholder="Custom URL..." id="custom_url" type="url" name="background" />
					 <style id="custom_background"></style>
					 <div class="flex shadowboard-toggle">
						 <h2>Show outside clip-path </h2>
						 <input name="prefix" type="checkbox" id="shadowboard-toggle" />
						 <label class="joined" for="shadowboard-toggle"></label>
					 </div>
				 </div>
				 {{-- <div class="grid panel fade-content">
					 <h2>About Clip Paths </h2>
					 <p>The  <code>clip-path </code> property allows you __ make complex shapes in ___ by clipping an element __ a basic shape (circle, _______, polygon, or inset), or __ an SVG source. </p>
					 <p>CSS Animations and transitions ___ possible with two or ____ clip-path shapes with the ____ number of points. </p>
				 </div> --}}
				 {{-- <div class="grid panel fade-content">
					 <h2>Browser Support </h2>
					 <p>Check out the current _______ support for the  <code>clip-path </code> property on  <a href="http://caniuse.com/#search=clip-path">Can I Use </a>. </p>
				 </div> --}}

				
				 {{-- <div class="grid panel cite fade-content">
					 <h2 class="block">Brought to you by _______ Feely </h2>
					 <div class="twitter">
						 <a href="https://twitter.com/bennettfeely" class="twitter-follow-button" data-show-count="true">Follow @bennettfeely </a>
					 </div>
					 <p>Find this project on  <a href="https://github.com/bennettfeely/Clippy">Github </a>. </p>
					 <p>Want a list of ___ name of every polygon? _____ out my new site,  <a href="https://copypastelist.com/math/list-of-polygons/">Copy Paste List </a>. </p>
				 </div> --}}
			 </section>
		 </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		 <script src="{{ asset('public/dev/draggabilly.min.js')}}"></script>
		 <script src="{{ asset('public/dev/flickity.pkgd.min.js') }}"></script>
		 <script src="{{ asset('public/dev/clip.js')}}"></script>
		 <script src="{{ asset('public/dev/clip.min.js')}}"></script>
    </body>
 </html>
 