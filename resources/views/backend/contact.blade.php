@extends('frontend.layouts.main')
@section('main-section')
<div class="impx-page-heading uk-position-relative about">
    <div class="impx-overlay dark"></div>
    <div class="uk-container">
        <div class="uk-width-1-1">
            <div class="uk-flex uk-flex-left">
                <div class="uk-light uk-position-relative uk-text-left page-title">
                    <h1 class="uk-margin-remove">Contact us</h1><!-- page title -->
                    <p class="impx-text-large uk-margin-remove">    You can contact us using this page</p><!-- page subtitle -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE HEADING END -->


<div class="uk-container uk-flex uk-flex-center uk-margin-medium-top">
    <div class="uk-width-3-4 ">
            <h3 class="uk-margin-margin-bottom">Enquiry Now</h3>
    <form class="uk-grid-small uk-grid uk-grid-stack" uk-grid="" method="POST">
        <div class="uk-width-1-2@s uk-first-column">
        <input class="uk-input" type="text" placeholder="Full name*" required="">
        </div>
        <div class="uk-width-1-2@s uk-grid-margin uk-first-column">
        <input class="uk-input" type="text" placeholder="Email*" required="">
        </div>
        <div class="uk-width-1-2@s uk-grid-margin uk-first-column">
        <input class="uk-input" type="text" placeholder="Subject*" required="">
        </div>
        <div class="uk-width-1-2@s uk-grid-margin uk-first-column">
        <input class="uk-input" type="number" placeholder="Mobile number*" required="">
        </div>
        <div class="uk-width-1 uk-grid-margin uk-first-column">
        <textarea class="uk-textarea" rows="5" placeholder="Message*" required=""></textarea>
        </div>

    <button class="uk-button uk-button-primary uk-margin-small-top uk-margin-bottom" type="submit">Send</button>
    </div>
    </div>
</form>
<div class="uk-padding uk-padding-remove-horizontal uk-padding-remove-bottom about-highlight">
        <div class="uk-container">
            <div class="uk-grid">

                <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-2@m uk-margin-medium-top">
                    <img src="{{url('frontend/images/happy-girl.png')}}" alt="Happy Family" class="">
                </div>

                <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-2@m">
                    <h3 class="uk-margin-remove-bottom uk-margin-small-top">The Reason Why Choose Us?</h3><!-- title -->
                    <p class="impx-text-large uk-margin-medium-bottom uk-margin-small-top">Quo modo autem optimum, si bonum praeterea nullum est? Sed eum qui audiebant, quoad poterant, defendebant sententiam suam. Quod si ita se habeat, non possit beatam praestare vitam sapientia</p>
                    <!-- highlight items -->
                    <ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-2@s impx-features-hl uk-margin-top uk-grid-match uk-flex-center uk-margin-medium-bottom uk-grid" data-uk-grid=""><!-- reason items  -->
                        <li class="uk-first-column"><!-- reason item #1 -->
                            <div class="uk-grid-medium uk-grid" data-uk-grid="">
                                <div class="uk-width-auto@xl uk-width-auto@l uk-width-auto@s uk-first-column">
                                    <i class="fa fa-group fa-2x impx-text-aqua"></i>
                                </div>
                                <div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@l uk-width-auto@s impx-margin-top-remove">
                                    <h5 class="uk-margin-remove">Best Value for Family</h5>
                                    <p class="uk-margin-small-top"> Si autem id non concedatur, non continuo vita beata tollitur. Ab his oratores, ab his dolore esse, alterum cum voluptate.</p>
                                </div>
                            </div>
                        </li><!-- reason item #1 end -->
                        <li><!-- reason item #2 -->
                            <div class="uk-grid-medium uk-grid" data-uk-grid="">
                                <div class="uk-width-auto@xl uk-width-auto@l uk-width-auto@s uk-first-column">
                                    <i class="fa fa-image fa-2x impx-text-aqua"></i>
                                </div>
                                <div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@l uk-width-auto@s impx-margin-top-remove">
                                    <h5 class="uk-margin-remove">Beatiful Panorama</h5>
                                    <p class="uk-margin-small-top"> Si autem id non concedatur, non continuo vita beata tollitur. Ab his oratores, ab his dolore esse, alterum cum voluptate.</p>
                                </div>
                            </div>
                        </li><!-- reason item #2 end -->
                        <li class="uk-grid-margin uk-first-column"><!-- reason item #3 -->
                            <div class="uk-grid-medium uk-grid" data-uk-grid="">
                                <div class="uk-width-auto@xl uk-width-auto@l uk-width-auto@s uk-first-column">
                                    <i class="fa fa-star-o fa-2x impx-text-aqua"></i>
                                </div>
                                <div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@l uk-width-1-1@s impx-margin-top-remove">
                                    <h5 class="uk-margin-remove">Best Services &amp; Facilities</h5>
                                    <p class="uk-margin-small-top"> Si autem id non concedatur, non continuo vita beata tollitur. Ab his oratores, ab his dolore esse, alterum cum voluptate.</p>
                                </div>
                            </div>
                        </li><!-- reason item #3 end -->
                        <li class="uk-grid-margin"><!-- reason item #4 -->
                            <div class="uk-grid-medium uk-grid" data-uk-grid="">
                                <div class="uk-width-auto@xl uk-width-auto@l uk-width-1-1@s uk-first-column">
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
    <div class="uk-padding bg-img2 uk-position-relative">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">

				<div data-uk-grid="" class="uk-padding-remove-bottom uk-position-relative uk-grid">
					<div class="uk-light uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-3@s uk-first-column"><!-- address -->
						<h5 class="uk-heading-line uk-margin-remove-bottom"><span>Address</span></h5>
						<p class="impx-text-large uk-margin-top">Vill sumaropa Po jari Teh bhunter Distt kullu<br>Near sada barrier kasol manikaran</p>
					</div>
					<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-3@s"><!-- phone -->
						<h5 class="uk-heading-line uk-margin-bottom"><span>Phone</span></h5>
						<p class="impx-text-large uk-margin-remove">+62 123456789<br>+62 987456123</p>
					</div>
					<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-3@s"><!-- email -->
						<h5 class="uk-heading-line uk-margin-bottom"><span>Email</span></h5>
						<a href="mailt:#" class="impx-text-large">cs@sativa-html.com</a><br>
						<a href="mailt:#" class="impx-text-large">info@sativa-html.com</a>
					</div>
				</div>

			</div>
		</div>
@endsection
