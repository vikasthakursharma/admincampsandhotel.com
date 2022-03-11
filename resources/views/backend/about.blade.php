@extends('frontend.layouts.main')
@section('main-section')

		<!-- PAGE HEADING -->
		<div class="impx-page-heading uk-position-relative about">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">
				<div class="uk-width-1-1">
					<div class="uk-flex uk-flex-left">
						<div class="uk-light uk-position-relative uk-text-left page-title">
							<h1 class="uk-margin-remove">About</h1><!-- page title -->
							<p class="impx-text-large uk-margin-remove">The Story About &amp; Who We Are</p><!-- page subtitle -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- PAGE HEADING END -->

		<!-- CONTENT -->
		<div class="uk-padding impx-page-content uk-padding-remove-horizontal">
			<div class="uk-container">

				<div class="" data-uk-grid>
					<div class="uk-width-3-5@xl uk-width-3-5@l uk-width-1-1@m">
						<!-- text content -->
						<h2 class="uk-margin-remove">Sativa Network</h2>
                        <p class="uk-text-muted impx-text-large uk-margin-remove">We're in the business of Hotel & Resort.</p>
                        <p class="impx-text-large">Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt in reprehenderit in voluptate velit esse dolore eu At quicum ioca seria, ut dicitur, quicum arcana, quicum occulta omnia? Quae fere omnia.</p>
                        <p class="uk-margin-bottom data-uk-dropcap">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum.</p>

					</div>

					<div class="uk-width-2-5@xl uk-width-2-5@l uk-width-1-1@m">
						<div class="uk-card uk-card-default uk-card-small uk-margin-bottom">
							<div class="uk-card-body"><!-- image content -->
								<img src="images/about-img-2.jpg" alt="">
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- CONTENT -->



		<!-- HIGHLIGT -->
		<div class="uk-padding uk-padding-remove-horizontal uk-padding-remove-bottom about-highlight">
			<div class="uk-container">
				<div class="uk-grid">

					<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-2@m uk-margin-medium-top">
						<img src="{{ url('frontend/images/happy-girl.png')}}" alt="Happy Family" class="">
					</div>

					<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-2@m">
						<h3 class="uk-margin-remove-bottom uk-margin-small-top">The Reason Why Choose Us?</h3><!-- title -->
						<p class="impx-text-large uk-margin-medium-bottom uk-margin-small-top">Quo modo autem optimum, si bonum praeterea nullum est? Sed eum qui audiebant, quoad poterant, defendebant sententiam suam. Quod si ita se habeat, non possit beatam praestare vitam sapientia</p>
						<!-- highlight items -->
						<ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-2@s impx-features-hl uk-margin-top uk-grid-match uk-flex-center uk-margin-medium-bottom" data-uk-grid ><!-- reason items  -->
							<li><!-- reason item #1 -->
								<div class="uk-grid-medium" data-uk-grid>
									<div class="uk-width-auto@xl uk-width-auto@l uk-width-auto@l uk-width-auto@s">
										<i class="fa fa-group fa-2x impx-text-aqua"></i>
									</div>
									<div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@l uk-width-auto@s impx-margin-top-remove">
										<h5 class="uk-margin-remove">Best Value for Family</h5>
										<p class="uk-margin-small-top"> Si autem id non concedatur, non continuo vita beata tollitur. Ab his oratores, ab his dolore esse, alterum cum voluptate.</p>
									</div>
								</div>
							</li><!-- reason item #1 end -->
							<li><!-- reason item #2 -->
								<div class="uk-grid-medium" data-uk-grid>
									<div class="uk-width-auto@xl uk-width-auto@l uk-width-auto@l uk-width-auto@s">
										<i class="fa fa-image fa-2x impx-text-aqua"></i>
									</div>
									<div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@l uk-width-auto@s impx-margin-top-remove">
										<h5 class="uk-margin-remove">Beatiful Panorama</h5>
										<p class="uk-margin-small-top"> Si autem id non concedatur, non continuo vita beata tollitur. Ab his oratores, ab his dolore esse, alterum cum voluptate.</p>
									</div>
								</div>
							</li><!-- reason item #2 end -->
							<li><!-- reason item #3 -->
								<div class="uk-grid-medium" data-uk-grid>
									<div class="uk-width-auto@xl uk-width-auto@l uk-width-auto@l uk-width-auto@s">
										<i class="fa fa-star-o fa-2x impx-text-aqua"></i>
									</div>
									<div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@l uk-width-1-1@s impx-margin-top-remove">
										<h5 class="uk-margin-remove">Best Services &amp; Facilities</h5>
										<p class="uk-margin-small-top"> Si autem id non concedatur, non continuo vita beata tollitur. Ab his oratores, ab his dolore esse, alterum cum voluptate.</p>
									</div>
								</div>
							</li><!-- reason item #3 end -->
							<li><!-- reason item #4 -->
								<div class="uk-grid-medium" data-uk-grid>
									<div class="uk-width-auto@xl uk-width-auto@l uk-width-auto@l uk-width-1-1@s">
										<i class="fa fa-smile-o fa-2x impx-text-aqua"></i>
									</div>
									<div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@l uk-width-auto@s impx-margin-top-remove">
										<h5 class="uk-margin-remove">Enjoy Your Time</h5>
										<p class="uk-margin-small-top"> Si autem id non concedatur, non continuo vita beata tollitur. Ab his oratores, ab his dolore esse, alterum cum voluptate.</p>
									</div>
								</div>
							</li><!-- reason item #4 end -->
						</ul><!-- reason items end -->
					</div>

				</div>
			</div>
		</div>
		<!-- HIGHLIGT END -->

		<!-- BOOKING FORM -->
		<div class="uk-padding bg-color-aqua pattern-1">
			<div class="uk-container">

				<div class="uk-flex uk-flex-center" data-uk-grid>
					<div class="uk-width-1-1">
						<div class="impx-hp-booking-form hp2 no-margin">
							<h6 class="uk-heading-line uk-text-center impx-text-white uk-text-uppercase"><span>Booking Form</span></h6>
							<form class="uk-grid-margin-small uk-child-width-1-6@xl uk-child-width-1-6@l uk-child-width-1-6@m uk-child-width-1-3@s" data-uk-grid>
								<div class="uk-form-controls">
								    <div class="uk-inline">
								    	<label class="uk-form-label">Email</label>
								    	<span class="uk-form-icon" data-uk-icon="icon: mail"></span>
								        <input class="uk-input booking-email uk-border-rounded" type="text" placeholder="your e-mail">
								    </div>
							    </div>
							    <div class="uk-form-controls">
								    <div class="uk-inline">
								    	<label class="uk-form-label">Arrival</label>
								    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
								        <input class="uk-input booking-arrival uk-border-rounded" type="text" placeholder="m/dd/yyyy">
								    </div>
								</div>
							    <div class="uk-form-controls">
								    <div class="uk-inline">
								    	<label class="uk-form-label">Departure</label>
								    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
								        <input class="uk-input booking-departure uk-border-rounded" type="text" placeholder="m/dd/yyyy">
								    </div>
							    </div>
							    <div class="uk-form-controls uk-position-relative">
							    	<label class="uk-form-label" for="form-guest-select">Guest</label>
							    	<span class="uk-form-icon select-icon" data-uk-icon="icon: users"></span>
						            <select class="uk-select uk-border-rounded" id="form-guest-select">
						                <option value="">Please select...</option>
						                <option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
						            </select>
							    </div>
							   <div class="uk-form-controls uk-position-relative">
							    	<label class="uk-form-label" for="form-rooms-select">Rooms</label>
							    	<span class="uk-form-icon select-icon" data-uk-icon="icon: album"></span>
						            <select class="uk-select uk-border-rounded" id="form-rooms-select">
						                <option value="">Please select...</option>
						                <option value="room_1">Single</option>
										<option value="room_2">Double</option>
										<option value="room_3">Primier</option>
										<option value="room_4">Deluxe</option>
						            </select>
							    </div>
							    <div>
							    	<label class="uk-form-label empty-label">&nbsp;</label>
							        <button class="uk-button uk-width-1-1">Book Now!</button>
							    </div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- BOOKING FORM END -->
@endsection
