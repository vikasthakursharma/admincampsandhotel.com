@extends('frontend.layouts.main')
@section('main-section')

		<!-- PAGE HEADING -->
		<div class="impx-page-heading uk-position-relative gallery">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">
				<div class="uk-width-1-1">
					<div class="uk-flex uk-flex-left">
						<div class="uk-light uk-position-relative uk-text-left page-title">
							<h1 class="uk-margin-remove">Gallery</h1><!-- page title -->
							<p class="impx-text-large uk-margin-remove">Our Story in Pictures</p><!-- page subtitle -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- PAGE HEADING END -->

		<!-- GALLERY CONTENT -->
		<div class="uk-padding uk-padding-remove-horizontal">
			<div class="uk-container">

				<div data-uk-filter="target: .js-filter">
					<!-- gallery filter -->
				    <ul class="uk-subnav uk-subnav-pill uk-flex-center uk-margin-medium-bottom impx-gallery-filter uk-margin-small-top impx-margin-bottom">
				    	<li data-uk-filter-control=".all"><a href="#">All</a></li>
				        <li data-uk-filter-control=".hotel"><a href="#">Hotel</a></li>
				        <li data-uk-filter-control=".restaurant"><a href="#">Restaurant</a></li>
				        <li data-uk-filter-control=".spa"><a href="#">Spa</a></li>
				    </ul><!-- gallery filter end -->

				    <!-- gallery items -->
					<div class="js-filter uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-medium uk-margin-small-bottom" data-uk-grid="masonry : true" data-uk-lightbox>
	                    <div class="restaurant all"><!-- gallery item #1 -->
	                    	<a class="uk-inline-clip uk-transition-toggle" href="images/resto-gal-2.html" data-caption="Caption 1">
		                        <img src="{{ url('frontend/images/gallery/resto-gal-2.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
	                                <h5>Image 1</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #1 end -->
	                    <div class="spa all" data-uk-lightbox><!-- gallery item #2 -->
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/spa-service-2.jpg"  data-caption="Caption 4">
		                        <img src="{{ url('frontend/images/spa-service-2.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 4</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #2 end -->
	                    <div class="hotel all" data-uk-lightbox><!-- gallery item #3 -->
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/service-4.jpg" data-caption="Caption 8">
		                        <img src="{{ url('frontend/images/service-4.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 8</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #3 end -->
	                    <div class="restaurant all" data-uk-lightbox><!-- gallery item #4 -->
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/resto-square.jpg"  data-caption="Caption 6">
		                        <img src=" {{ url('frontend/images/resto-square.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 6</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #4 end -->
	                    <div class="hotel all" data-uk-lightbox><!-- gallery item #5 -->
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/about-img-2.jpg" data-caption="Caption 7">
		                        <img src=" {{ url('frontend/images/about-img-2.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 7</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #5 end -->
	                    <div class="restaurant all" data-uk-lightbox><!-- gallery item #5 -->
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/resto-gal-3.html" data-caption="Caption 2">
		                        <img src=" {{url('frontend/images/gallery/resto-gal-3.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 2</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #5 end -->
	                    <div class="hotel all" data-uk-lightbox><!-- gallery item #6 -->
	                        <a class="uk-inline-clip uk-transition-toggle" href=" {{url('images/activities/family-fun-1.jpg')}}"  data-caption="Caption 3">
		                        <img src="{{ url('frontend/images/activities/family-fun-1.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 3</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #6 end -->
	                    <div class="spa all" data-uk-lightbox>
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/spa-gal.html" data-caption="Caption 8">
		                        <img src="{{ url('frontend/images/gallery/spa-gal.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 8</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #6 end -->
	                    <div class="hotel all" data-uk-lightbox><!-- gallery item #7 -->
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/rooms/room-square-4.jpg" data-caption="Caption 8">
		                        <img src=" {{ url('frontend/images/rooms/room-square-4.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 8</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #7 end -->
	                     <div class="spa all" data-uk-lightbox><!-- gallery item #8 -->
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/spa.jpg"  data-caption="Caption 5">
		                        <img src="{{ url('frontend/images/spa.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 5</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #8 end -->
	                    <div class="restaurant all" data-uk-lightbox><!-- gallery item #9 -->
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/resto-gal-7.html"  data-caption="Caption 6">
		                        <img src="{{ url('frontend/images/gallery/resto-gal-7.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 6</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #9 end -->
	                    <div class="spa all" data-uk-lightbox>
	                        <a class="uk-inline-clip uk-transition-toggle" href="images/spa-feature-2.jpg"  data-caption="Caption 6">
		                        <img src=" {{ url('frontend/images/spa-feature-2.jpg')}}" alt="">
		                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
									<h5>Image 6</h5>
	                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
		                        </div>
		                    </a>
	                    </div><!-- gallery item #9 end -->
	                </div>
	                <!-- gallery items end -->
	            </div>
	            
    		</div>
		</div>
		<!-- GALLERY CONTENT END -->

		<!-- CONTACT INFO -->
		<div class="uk-padding bg-img2 uk-position-relative">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">

				<div data-uk-grid class="uk-padding-remove-bottom uk-position-relative">				
					<div class="uk-light uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-3@s"><!-- address -->
						<h5 class="uk-heading-line uk-margin-remove-bottom"><span>Address</span></h5>
						<p class="impx-text-large uk-margin-top">Jln. Raya Kemerderkaan RI No. 17<br/>Indonesia Raya</p>
					</div>
					<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-3@s"><!-- phone -->
						<h5 class="uk-heading-line uk-margin-bottom"><span>Phone</span></h5>
						<p class="impx-text-large uk-margin-remove">+62 123456789<br/>+62 987456123</p>
					</div>
					<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-3@s"><!-- email -->
						<h5 class="uk-heading-line uk-margin-bottom"><span>Email</span></h5>
						<a href="mailt:#" class="impx-text-large">cs@sativa-html.com</a><br/>
						<a href="mailt:#" class="impx-text-large">info@sativa-html.com</a>
					</div>
				</div>

			</div>
		</div>
		<!-- CONTACT INFO END -->
@endsection