@extends('home')

@section('title', 'CSS Clip Path Maker')

@section('content')

		 <link rel="stylesheet" type="text/css" href="{{ asset('public/dev/style.min.css')}}" />
		 	<div class="row">
				<div class="col-md-8 card">
				<div class="card-header">
                      <h3 class="card-title">CSS Clip Path Maker</h3>
                    </div>
					<div class="demo-container fade-content">
						<section class="demo">
							<div id="box" class="box">
								<div class="shadowboard" ></div>
								<div class="clipboard" style="background-image: url({{ asset('public/pics/pittsburgh.jpg') }})"></div>
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

					<section class="clip-path" tabindex="-1">
						<div class="css-code code fade-content">
							<code class="unprefixed block show">clip-path: <span class="functions">polygon(<code class="point" data-point="0">50% 0%</code>, <code class="point" data-point="1">0% 100%</code>, <code class="point" data-point="2">100% 100%</code>)</span>;</code>
						</div>
					</section>
				</div>

				<div class="col-md-4">

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
			</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		 <script src="{{ asset('public/dev/draggabilly.min.js')}}"></script>
		 <script src="{{ asset('public/dev/flickity.pkgd.min.js') }}"></script>
		 <script src="{{ asset('public/dev/clip.js')}}"></script>
		 <script src="{{ asset('public/dev/clip.min.js')}}"></script>
    </body>
 </html>
 
@endsection