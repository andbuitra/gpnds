<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>
<div class="page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 wow fadeIn">
				<i class="fa fa-pencil"></i>
				<h1>Preguntas frecuentes /</h1>
				<p>Preguntas frecuentes que puedas tener sobre el tema de puericultura.</p>
			</div>
		</div>
	</div>
</div>

<div class="about-us-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 about-us-text wow fadeInLeft">
				<div class="wrapF">    
    <section class="question-section"> 
        <h1>¿Tienes alguna duda?</h1>
        
        <div class="cat-1">
            <input id="tab-1" type="radio" name="tabs" tabindex="1"> 
            <label for="tab-1" >Puericultura</label><!-- end of tab label -->

            <div class="question-wrap">
                <div class="question">
                    <input id="question-1" type="radio" name="questions-tab-one" tabindex="2">
                    <label for="question-1" >What exactly is a content accordion?</label><!-- end of question label -->
                    <p class="answer answer-1">A content accordion is a common UI pattern that allows you to provide extra content on demand when a trigger is clicked. The animation is usually a slide down or to the side like an accordion, hence the name.</p>
                </div>
                <div class="question"> 
                    <input id="question-2" type="radio" name="questions-tab-one" tabindex="3">
                    <label for="question-2" >I don't need JavaScript for this?</label><!-- end of question label -->
                    <p class="answer answer-2">Using hidden inputs and labels, you can create a Css-only accordion that will animate the content areas.</p>
                </div>
                <div class="question">
                    <input id="question-3" type="radio" name="questions-tab-one" tabindex="4">
                    <label for="question-3" >How hard is it to do?</label><!-- end of question label -->
                    <p class="answer answer-3">Easy peasy. With the use of child and sibling selectors you can target the content area that is either child or sibling to the input that has been selected.</p>
                </div>
                <div class="question">
                    <input id="question-4" type="radio" name="questions-tab-one" tabindex="5">
                    <label for="question-4" >Can I follow you on twitter?</label><!-- end of question label -->
                    <p class="answer answer-4">Yup, you sure can. Get cool tips on sass and what nots at <a href="https://twitter.com/Dave_Conner" tabindex="6">@Dave_Conner</a></p>
                </div>
            </div>
        </div><!-- end of Catagory -->
        
        <div class="cat-2">
            <input id="tab-2" type="radio" name="tabs" tabindex="7">
            <label for="tab-2" >SassBreak</label>

            <div class="question-wrap">
                <div class="question">
                    <input id="question-5" type="radio" name="questions-tab-two" tabindex="8">
                    <label for="question-5" >Poly – A Modular UI Kit Built with Sass</label><!-- end of question label -->
                    <p class="answer">Poly is a simple, responsive UI toolkit for everyone to share and enjoy! <a href="http://sassbreak.com/poly-ui-toolkit/" tabindex="9">Read More</a></p>
                </div>
                <div class="question">
                    <input id="question-6" type="radio" name="questions-tab-two" tabindex="10">
                    <label for="question-6" >Watch Yo' Sass</label><!-- end of question label -->
                    <p class="answer">I know the feeling: You just installed Sass, eager to dive into all of its awesome features and finally convert that stale CSS project over to Sass. You create your first .scss file, crack open Terminal, type a --watch command—everything comes to a hault. <a href="http://sassbreak.com/watch-your-sass/" tab-index="11">Read More</a></p>
                </div>
                <div class="question">
                    <input id="question-7" type="radio" name="questions-tab-two" tabindex="12">
                    <label for="question-7" >CSS Blend Modes with Sass</label><!-- end of question label -->
                    <p class="answer">CSS blend modes are a new feature that let us blend an element’s background layer with another layer. They’re commonly used for blending a background image with a background color. <a href="http://sassbreak.com/css-blend-modes-with-sass/" tab-index="13">Read More</a></p>
                </div>
                <div class="question">
                    <input id="question-8" type="radio" name="questions-tab-two" tabindex="14">
                    <label for="question-8" >Viewport-Relative Headings with Sass</label><!-- end of question label -->
                    <p class="answer">Viewport-relative units (vw, vh, vmin, vmax) are a new set of dynamic CSS units for sizing elements. They’re called “viewport-relative” because they eliminate dependency on parent elements and allow sizing based on the viewport size. <a href="http://sassbreak.com/viewport-relative-headings-with-sass/" tab-index="15">Read More</a> </p>
                </div>
            </div>
        </div>
        <div class="cat-3">
            <input id="tab-3" type="radio" name="tabs" tabindex="16">
            <label for="tab-3" >Other Pens</label>

            <div class="question-wrap">
                <div class="question">
                    <input id="question-9" type="radio" name="questions-tab-three" tabindex="17">
                    <label for="question-9" >Collection of Button Hover Effects</label><!-- end of question label -->
                    <p class="answer">A few button hover effects using a couple different methods. SVG and pseudo elements make for some nice pizazz! <a href="http://codepen.io/davidicus/full/emgQKJ/" tabindex="18">Go to pen.</a></p>
                </div>
                <div class="question">
                    <input id="question-10" type="radio" name="questions-tab-three" tabindex="19">
                    <label for="question-10" >Pure CSS Credit Cards</label><!-- end of question label -->
                    <p class="answer">Mulitple credit cards made entirely with CSS and fully responsive. <a href="http://codepen.io/davidicus/full/LEWReB/" tabindex="20">Go to pen.</a></p>
                </div>
                <div class="question">
                    <input id="question-11" type="radio" name="questions-tab-three" tabindex="21">          
                    <label for="question-11" >CSS Rocket and Animation</label><!-- end of question label -->
                    <p class="answer">Rocket built and animations all using CSS. <a href="http://codepen.io/davidicus/full/dPvQPM/" tabindex="22">Go to pen.</a></p>
                </div>
                <div class="question">
                    <input id="question-12" type="radio" name="questions-tab-three" tabindex="23">
                    <label for="question-12" >Pure CSS Devices and Animation</label><!-- end of question label -->
                    <p class="answer">Building for the modern web means building for all devices. Use of CSS to both form and morph one device into another. Oldie but goodie. <a href="http://codepen.io/davidicus/full/dDAqC/" tabindex="24">Go to pen.</a></p>
                </div>
            </div>
        </div>
        <div class="cat-4">
            <input id="tab-4" type="radio" name="tabs" tabindex="25">
            <label for="tab-4" >Lorem Ipsum</label>

            <div class="question-wrap">
                <div class="question">
                    <input id="question-13" type="radio" name="questions-tab-four" tabindex="26">
                    <label for="question-13" >Lorem ipsum dolor sit elit?</label><!-- end of question label -->
                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra.</p>
                </div>
                <div class="question">
                    <input id="question-14" type="radio" name="questions-tab-four" tabindex="27">
                    <label for="question-14" >Nunc vitae ultrices tortor?</label><!-- end of question label -->
                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. </p>
                </div>
                <div class="question">
                    <input id="question-15" type="radio" name="questions-tab-four" tabindex="28">
                    <label for="question-15" >Donec metus nibh, condimentum vehicula? </label><!-- end of question label -->
                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. </p>
                </div>
                <div class="question"> 
                    <input id="question-16" type="radio" name="questions-tab-four" tabindex="29">
                    <label for="question-16" >Condimentum nec vehicula?</label><!-- end of question label -->
                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. </p>
                </div> 
            </div>
        </div>
    </section><!-- End of Questions -->
</div>
			</div>
		</div>
	</div>
</div>
<!-- DISQUS ELIMINADO TEMPORALMENTE. AGREGARLO SI EN REALIDAD SE NECESITA -->

	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>