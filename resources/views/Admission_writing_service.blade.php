@extends('layout.app')
<style>
    .we-work-content h3{
        color:blue;
        font-size:18px;
    }
    .we-work-content p{
        font-size:15px !impportant;
        font-weight:500 !important;
    }
</style>
@section('content')
	<div class="masthead">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="masthead-left">
						<h1> From Topic Selection To <span>Perfect Dissertation Service</span></h1>
						<p>Place your order for SOP writing assistance with us today and observe how we elevate your academic performance to new heights.</p>
						<a href="{{ route('order') }}" class="btn btn-primary mb-4 w-100 d-md-none">Order Now</a>
		
						<p class="tu-text">Our SOPs were accepted by <br class="d-md-none"> <span>Top Colleges & Universities</span></p>

						<div class="overflow-hidden tu-marquee">
							<div class="horizontal-marquee">
								<img src="{{ asset('images/universities-logo.jpg') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="520" height="78">
								<img src="{{ asset('images/universities-logo.jpg') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="520" height="78">
							</div>
						</div>	
					</div>
				</div>
				<div class="col-lg-6">
					<div class="task-form">
						<h2>Whats Your Task?</h2>
						<form action="">
							<div class="row">
								<div class="col-md-6 mb-4">
									<select class="form-select" aria-label="Default select example">
										<option selected>Your subject?</option>
										@if(!empty($subjects)):
											@foreach ($subjects as $subject1)
												<option value="<?= $subject1['id'];?>"><?= $subject1['subject_name'];?></option>
											@endforeach
										@endif
									</select>
								</div>
								<div class="col-md-6 mb-4">
									<select class="form-select" aria-label="Default select example">
										<option selected>Your task topic</option>
										@if(!empty($topics)):
											@foreach ($topics as $topic1)
												<option value="<?= $topic1['id'];?>"><?= $topic1['label_name'];?></option>
											@endforeach
										@endif
									</select>
								</div>
								<div class="col-md-6 mb-4">
									<select class="form-select" aria-label="Default select example">
										<option selected>Task Type</option>
										@if(!empty($task_types)):
											@foreach ($task_types as $task_type)
												<option value="<?= $task_type['id'];?>"><?= $task_type['type_name'];?></option>
											@endforeach
										@endif
									</select>
								</div>
								<div class="col-md-6 mb-4">
									<input type="text" class="form-control" placeholder="Word Count? " aria-label="Word Count? ">
								</div>
								<div class="col-12 mb-2">
									<p class="mb-0">Deadline Date: <span>7 days away</span></p>
								</div>
								<div class="col-12 mb-3">
									<select class="form-select" aria-label="Default select example">
										<option selected>10 Jan, 7:00PM, 120$</option>
										<option value="1">10 Jan, 7:00PM, 120$</option>
										<option value="2">10 Jan, 7:00PM, 120$</option>
										<option value="3">10 Jan, 7:00PM, 120$</option>
									</select>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-primary w-100">Proceed</button>
								</div>
							</div>
						</form>
						<ul class="task-list mt-4">
							<li>SOP <span>(statement of purpose)</span></li>
							<li>Admission essay</li>
							<li>CV or Resume writing</li>
							<li>Personal statement</li>
							<li>LOR <span>(letter of recommendation)</span></li>
						</ul>
					</div>
				</div>
			</div>		

			<div class="row">
				<div class="col-12">
				<div class="row">
					<div class="col-12">
						<div class="review-block">
							<h2><b>15,000+</b> students trust Paperial</h2>
							<div class="review-logo-list">
								<div class="review-logo">
									<picture>
										<source media="(min-width:768px)" srcset="{{ asset('images/trustpilot-logo.svg')}}">
										<img src="{{ asset('images/trustpilot-logo.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="150" height="30">
									</picture>
									<p class="review-rating"><span>4.6</span> 257 Reviews</p>
								</div>
								<div class="review-logo">
									<picture>
										<source media="(min-width:768px)" srcset="{{ asset('images/sitejabber-logo.jpg')}}">
										<img src="{{ asset('images/sitejabber-logo.jpg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="150" height="30">
									</picture>
									<p class="review-rating"><span>4.7</span> 653 Reviews</p>
								</div>
								<div class="review-logo">
									<picture>
										<source media="(min-width:768px)" srcset="{{ asset('images/reviews-logo.svg')}}">
										<img src="{{ asset('images/reviews-logo.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="150" height="30">
									</picture>
									<p class="review-rating"><span>4.6</span> 489 Reviews</p>
								</div>
							</div>					
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<section class="how-it-works-sec">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="hiw-head">
						<h2 class="head-title">Services <br class="d-sm-none"> <span>We Offer</span>?</h2>
					</div>
				</div>
			</div>
	
			<div class="row gy-4 mt-2 mt-md-3">
				<div class="col-md-6 col-lg-4">
					<div class="work-card h-100">
						<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg')}}">
							<img src="{{ asset('images/rocket-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help"
								width="90" height="90">
						</picture>
						<div class="card-body text-center">
							<h3 class="card-title">SOP Writing</h3>
							<p>Crafting a compelling 500-1000 word SoP is challenging. Many students struggle due to unfamiliarity with requirements. Gain expert assistance at Sopcraft.com.</p>
						</div>
					</div>
				</div>
	
				<div class="col-md-6 col-lg-4">
					<div class="work-card h-100">
						<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg')}}">
							<img src="{{ asset('images/setting-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help"
								width="90" height="90">
						</picture>
						<div class="card-body text-center">
							<h3 class="card-title">Admission Essay</h3>
							<p>Crafting compelling narratives to secure your spot in academic institutions, weaving experiences into persuasive admissions essays for success.</p>
						</div>
					</div>
				</div>
	
				<div class="col-md-6 col-lg-4">
					<div class="work-card h-100">
						<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg')}}">
							<img src="{{ asset('images/rocket-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help"
								width="90" height="90">
						</picture>
						<div class="card-body text-center">
							<h3 class="card-title">CV or Resume writing</h3>
							<p>Tailored CVs and resumes, strategically presenting your skills and achievements for professional opportunities and career advancement.</p>
						</div>
					</div>
				</div>
	
				<div class="col-md-6 col-lg-4">
					<div class="work-card h-100">
						<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg')}}">
							<img src="{{ asset('images/setting-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help"
								width="90" height="90">
						</picture>
						<div class="card-body text-center">
							<h3 class="card-title">Letter of recommendation</h3>
							<p>Expertly written letters endorsing your capabilities and character, providing impactful recommendations to bolster your academic or professional pursuits.</p>
						</div>
					</div>
				</div>
	
				<div class="col-md-6 col-lg-4">
					<div class="work-card h-100">
						<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg')}}">
							<img src="{{ asset('images/rocket-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help"
								width="90" height="90">
						</picture>
						<div class="card-body text-center">
							<h3 class="card-title">Personal Statement</h3>
							<p>Distinctive personal statements articulating your goals and achievements, aligning aspirations with academic or professional endeavors for compelling narratives.</p>
						</div>
					</div>
				</div>
	
				<div class="col-md-6 col-lg-4">
					<div class="work-card h-100">
						<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg')}}">
							<img src="{{ asset('images/setting-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help"
								width="90" height="90">
						</picture>
						<div class="card-body text-center">
							<h3 class="card-title">Scholarship Essay Writing</h3>
							<p>Strategically composed essays showcasing your merit, achievements, and aspirations to secure scholarships and propel your educational journey forward.</p>
						</div>
					</div>
				</div>
	
			</div>
	
			<div class="text-center mt-4 mt-md-5">
				<a class="btn btn-primary" href="{{ route('order') }}" role="link">Order Now</a>
			</div>
		</div>
	</section>		
	<section class="wcuh-sec">
		<div class="container">
			<div class="">
				<div class="row">
					<div class="col-md-6 col-lg-5 order-md-2">
						<div class="wcuh-content">
							<h3>WHY CHOOSE US</h3>
	
							<div class="wcu-slider">
								<div class="wcuh-item">
									<h2>We Have 99% Success Rate</h2>
									<p>Our team of seasoned SoP writers showcases a 99% success rate. Explore their profiles and watch video reviews on our essay help platform, making writer selection seamless for your order.</p>
								</div>
								<div class="wcuh-item">
									<h2>We Have 99% Success Rate 2</h2>
									<p>Our team of seasoned SoP writers showcases a 99% success rate. Explore their profiles and watch video reviews on our essay help platform, making writer selection seamless for your order.</p>
								</div>
								<div class="wcuh-item">
									<h2>We Have 99% Success Rate 3</h2>
									<p>Our team of seasoned SoP writers showcases a 99% success rate. Explore their profiles and watch video reviews on our essay help platform, making writer selection seamless for your order.</p>
								</div>
								<div class="wcuh-item">
									<h2>We Have 99% Success Rate 4</h2>
									<p>Our team of seasoned SoP writers showcases a 99% success rate. Explore their profiles and watch video reviews on our essay help platform, making writer selection seamless for your order.</p>
								</div>
							</div>
	
							<div class="text-center">
								<a class="btn btn-primary mt-4" href="{{ route('order') }}" role="link">Order Now</a>
							</div>
						</div>
					</div>  
					<div class="col-md-6 col-lg-7 order-md-1">
						<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/lady.webp')}}" type="image/webp">
							<img src="{{ asset('images/lady.png')}}" class="img-fluid card-img" alt="Essay Help" title="Essay Help" loading="lazy" width="572" height="457">
						</picture>
					</div>                              
				</div>	
			</div>
		</div>
	</section>		
	<section class="assignments-sec">
		<div class="container">
			<div class="assign-box">
				<div class="row">
					<div class="col-md-6 d-flex flex-column justify-content-end">
						<div class="assign-content">
							<h2>We Make your Dream Come True.</h2>
							<p>Enjoy plagiarism-free, 100% original content meticulously crafted by our team of professional writers</p>
							<a class="btn btn-primary" href="#" role="button">Get help with SOP</a>
						</div>
					</div>
					<div class="col-md-6">
						<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/lady-blue.webp')}}" type="image/webp">
							<source media="(min-width:768px)" srcset="{{ asset('images/lady-blue.png')}}" type="image/png">
							<source srcset="{{ asset('images/lady-blue-mobile.webp')}}" type="image/webp">
							<img src="{{ asset('images/lady-blue-mobile.png')}}" class="img-fluid card-img" alt="Essay Help" title="Essay Help" loading="lazy" width="572" height="457">
						</picture>
					</div>
				</div>	
			</div>
		</div>
	</section>		
	<section class="hwdi-sec my-5">
		<div class="container">
			<h2 class="head-title">Here’s <span>How We Do It</span></h2>
	
			<div class="hwdi-wrapper">
				<div class="row align-items-center">
					<div class="col-md-6">
							<div class="hwdi-content">
									<h3>Step 1: Price Estimator</h3>
									<p>Want to know how much it'll cost to take your content to the next level? Look no further than Sop Craft's trusty price estimator! With just a few clicks, you'll get a quote that won't make you want to run for the hills.</p>
							</div>
					</div>
					<div class="col-md-6 text-end">
							<div class="step-img step-1-img">
								<picture>
										<source media="(min-width:768px)" srcset="{{ asset('images/step-1-img.webp')}}" type="image/webp">
										<img src="{{ asset('images/step-1-img.png')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="499" height="319">
								</picture>
							</div>
					</div>
				</div>	
				<div class="row align-items-center row-step">
					<div class="col-md-6 order-2 order-md-1">
						<div class="step-img step-2-img">
							<picture>
									<source media="(min-width:768px)" srcset="{{ asset('images/step-2-img.webp')}}" type="image/webp">
									<img src="{{ asset('images/step-2-img.png')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="499" height="319">
							</picture>
						</div>
					</div>
					<div class="col-md-6 order-1 order-md-2">
							<div class="hwdi-content">
									<h3>Step 2: Price Estimator</h3>
									<p>Want to know how much it'll cost to take your content to the next level? Look no further than Sop Craft's trusty price estimator! With just a few clicks, you'll get a quote that won't make you want to run for the hills.</p>
							</div>
					</div>		
				</div>
	
				<div class="row align-items-center row-step">
					<div class="col-md-6">
							<div class="hwdi-content">
									<h3>Step 3: Price Estimator</h3>
									<p>Want to know how much it'll cost to take your content to the next level? Look no further than Sop Craft's trusty price estimator! With just a few clicks, you'll get a quote that won't make you want to run for the hills.</p>
							</div>
					</div>
					<div class="col-md-6 text-end">
						<div class="step-img">
							<picture>
									<source media="(min-width:768px)" srcset="{{ asset('images/step-3-img.webp')}}" type="image/webp">
									<img src="{{ asset('images/step-3-img.png')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="499" height="319">
							</picture>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</section>		
	<section class="wcu-sec">
		<div class="container">
			<div class="wcu-wrapper">
				<div class="row">
					<div class="col-12">
						<div class="hiw-head">
							<h2 class="head-title">Why Choose Us As <span>Your SOP Writing Assistance </span></h2>
						</div>
					</div>
				</div>
	
				<div class="row row-wcu gx-0 mt-2 mt-md-3">
					<div class="col-md-6 col-lg-4">
						<div class="work-card h-100">
							<picture>
								<source media="(min-width:768px)" srcset="{{ asset('images/customer-support-icon.svg')}}">
								<img src="{{ asset('images/customer-support-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help"
									title="Essay Help" width="45" height="45">
							</picture>
							<div class="card-body text-center">
								<h3 class="card-title">24/7 Customer support</h3>
								<p>Our customer support agents are available 24/7 over phone</p>
							</div>
						</div>
					</div>
	
					<div class="col-md-6 col-lg-4">
						<div class="work-card h-100">
							<picture>
								<source media="(min-width:768px)" srcset="{{ asset('images/brush-icon.svg')}}">
								<img src="{{ asset('images/brush-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help"
									title="Essay Help" width="45" height="45">
							</picture>
							<div class="card-body text-center">
								<h3 class="card-title">Experienced writers</h3>
								<p>All of our experts hold at least Bachelor's degree, and have years of experience in writing</p>
							</div>
						</div>
					</div>
	
					<div class="col-md-6 col-lg-4">
						<div class="work-card h-100">
							<picture>
								<source media="(min-width:768px)" srcset="{{ asset('images/user-icon-green.svg')}}">
								<img src="{{ asset('images/user-icon-green.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help"
									title="Essay Help" width="45" height="45">
							</picture>
							<div class="card-body text-center">
								<h3 class="card-title">Individual approach</h3>
								<p>We tailor our services for the needs of each and every customer</p>
							</div>
						</div>
					</div>
	
					<div class="col-md-6 col-lg-4">
						<div class="work-card h-100">
							<picture>
								<source media="(min-width:768px)" srcset="{{ asset('images/dollor-icon.svg')}}">
								<img src="{{ asset('images/dollor-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help"
									title="Essay Help" width="45" height="45">
							</picture>
							<div class="card-body text-center">
								<h3 class="card-title"> 99% Acceptance Rate</h3>
								<p>Our Sops were accepted at top colleges & universities</p>
							</div>
						</div>
					</div>
	
					<div class="col-md-6 col-lg-4">
						<div class="work-card h-100">
							<picture>
								<source media="(min-width:768px)" srcset="{{ asset('images/clock-icon.svg')}}">
								<img src="{{ asset('images/clock-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help"
									title="Essay Help" width="45" height="45">
							</picture>
							<div class="card-body text-center">
								<h3 class="card-title">Timely delivery</h3>
								<p>Most of the time we complete orders even before the due date, delays are out of question</p>
							</div>
						</div>
					</div>
	
					<div class="col-md-6 col-lg-4">
						<div class="work-card h-100">
							<picture>
								<source media="(min-width:768px)" srcset="{{ asset('images/shield-tick-icon.svg')}}">
								<img src="{{ asset('images/shield-tick-icon.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help"
									title="Essay Help" width="45" height="45">
							</picture>
							<div class="card-body text-center">
								<h3 class="card-title">Money-back guarantee</h3>
								<p>We guarantee your money will be back if we fail to meet your expectations</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<section class="mt-3">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
				<div class="wm-right">
					<h2>Our<br> <span>Happy Student</span></h2>
					<h3 class="mb-0">Still undecided? </h3>
					<h3>  Our satisfied students are the proof!</h3>
					<p>With SOP Craft, it has never been easier to get the grades you've always wanted. Our world-class academics are ready to help.</p>
					<a class="btn btn-primary d-none d-md-inline-flex" href="#" role="link">Get started</a>
				</div>

				</div>
				<div class="col-md-6">
				<div class="row sh-list gy-4">         
					<div class="col-10 col-md-6">
					<div class="card student-reveiw-card h-100">
						<div class="d-flex sr-block">
						<div class="student-photo">
							<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/stundent-1.png') }}">
							<img src="{{ asset('images/stundent-1.png') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="65" height="65">
							</picture>
						</div>

						<div class="sr-list">
							<ul class="student-rating" data-rate="5">
							<li>Start 1</li>
							<li>Start 2</li>
							<li>Start 3</li>
							<li>Start 4</li>
							<li>Start 5</li>
							</ul>
						</div>
						</div>
						<div class="card-body p-0">
						<p class="card-text">I was impressed by the level of professionalism exhibited by SOP Craft. They not only helped me with my thesis but also provided valuable insights that enhanced its quality. Truly grateful for their support!"</p>
						<div class="student-name"> Laura, Brown University, Rhode Island</div>
						</div>              
					</div>
					</div>
					<div class="col-10 col-md-6">
					<div class="card student-reveiw-card h-100">
						<div class="d-flex sr-block">
						<div class="student-photo">
							<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/student-2.png') }}">
							<img src="{{ asset('images/student-2.png') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="65" height="65">
							</picture>
						</div>

						<div class="sr-list">
							<ul class="student-rating" data-rate="3">
							<li>Start 1</li>
							<li>Start 2</li>
							<li>Start 3</li>
							<li>Start 4</li>
							<li>Start 5</li>
							</ul>
						</div>
						</div>
						<div class="card-body p-0">
						<p class="card-text">I was struggling with my thesis deadline, but thanks to SOP Craft, I not only submitted on time but also received exceptional grades! Highly recommended!</p>
						<div class="student-name">Sarah , Regents University, London</div>
						</div>              
					</div>
					</div>
					
					<div class="col-10 col-md-6">
					<div class="card student-reveiw-card h-100">
						<div class="d-flex sr-block">
						<div class="student-photo">
							<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/student-3.png') }}">
							<img src="{{ asset('images/student-3.png') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="65" height="65">
							</picture>
						</div>

						<div class="sr-list">
							<ul class="student-rating" data-rate="4">
							<li>Start 1</li>
							<li>Start 2</li>
							<li>Start 3</li>
							<li>Start 4</li>
							<li>Start 5</li>
							</ul>
						</div>
						</div>
						<div class="card-body p-0">
						<p class="card-text">The essay assistance I received was beyond my expectations. The team at SOP Craft truly knows how to deliver quality work promptly. Will definitely use their services again!</p>
						<div class="student-name">John, Kings College, London</div>
						</div>              
					</div>
					</div>

					<div class="col-10 col-md-6">
					<div class="card student-reveiw-card h-100">
						<div class="d-flex sr-block">
						<div class="student-photo">
							<picture>
							<source media="(min-width:768px)" srcset="{{ asset('images/student-4.png') }}">
							<img src="{{ asset('images/student-4.png') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="65" height="65">
							</picture>
						</div>

						<div class="sr-list">
							<ul class="student-rating" data-rate="2">
							<li>Start 1</li>
							<li>Start 2</li>
							<li>Start 3</li>
							<li>Start 4</li>
							<li>Start 5</li>
							</ul>
						</div>
						</div>
						<div class="card-body p-0">
						<p class="card-text">My dissertation was a daunting task, but with the expertise and guidance from SOP Craft, I managed to excel in my academic pursuits. Thank you for your professionalism!</p>
						<div class="student-name">Sophia, Imperial College, London </div>
						</div>              
					</div>
					</div>
				</div>

				<a class="btn btn-primary w-100 mt-4 d-md-none" href="#" role="link">Get started</a>
				</div>
			</div>
		</div>
	</section>	
	<section class="mb-5 mt-5">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                            <picture>
                                <img src="{{ asset('images/Admission_essay_writing_service.png') }}" class="card-img-top" alt="Essay Help" title="Essay Hel"
                                    loading="lazy" width="374" height="374">
                            </picture>
                    </div>
                    <div class="col-md-6">
                        <div class="we-work-content">
                            <h3 class="text-header">Admission essay writing service</h3>
                            <p>An admissions or application essay, sometimes also called a personal statement or a statement of purpose, is an essay or other written statement written by an applicant, often a prospective student applying to some college, university, or graduate school.</p>
        
                            <p>Direct Admission is when colleges send acceptance letters, along with comprehensive financial aid packages, to students who haven't applied but meet the college's basic criteria for admission.</p>
        
                    </div>
                </div>
            </div>
        </section>
		

@endsection