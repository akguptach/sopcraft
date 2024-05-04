@extends('layout.app')
@section('content')

    <style>
        .select2-container .select2-selection--single {
            height: 52px !important;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #868685;
            border-radius: 30px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 52px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 48px;
            position: absolute;
            top: 1px;
            right: 1px;
            width: 20px;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            padding-left: 20px;
            padding-right: 20px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
    <section class="order-sec">
        <div class="container">
            {{-- <div id="errorMessages"></div> --}}
            <form class="order-form" id="order_form" name="order_form" enctype="multipart/form-data" method="POST"
                action="#">
                @csrf
                <div class="row">
				    <div class="col-md-4">
                        <div class="sticky-top">
                            <div class="order-summary os-theme">
                                <h2>Order summary</h2>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Subject</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end subject_div">NA</p>
                                    </div>
                                </div>
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <p>Task Topic</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end task_topic_div">NA</p>
                                    </div>
                                </div>
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <p>Task type</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end task_type_div">NA</p>
                                    </div>
                                </div>
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <p>Word count</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end no_of_words_div">200</p>
                                    </div>
                                </div>
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <p>Level of study</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end studylabel_div">NA</p>
                                    </div>
                                </div>

                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <p>Delivery At</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end delivery_at_div">NA</p>
                                    </div>
                                </div>
                                <hr class="opacity-25" />
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p class="text-tp">Total Price:</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-ta text-end total_price">0</p>
                                    </div>
                                </div>

                            </div>

                            <div class="whn-block">
                                <h3>What happens next?</h3>
                                <p>We will assign a tutor who's an expert in your subject. We'll keep you updated on the
                                    progress.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- order summary form 1 -->
                        <div id="osForm1" class="dashboard-content">
                            

                            
                               <div class="card h-100">
								<div class="card-header">
									<div class="row">
										<div class="col-md-8">
											<h4>Andrew Simons</h4>
											<p>Medical Science - Essay <span>|</span> 05 Jan 2024 <span>|</span> Delivery 18 Jan
											</p>
										</div>
										<div class="col-md-4 d-flex flex-column align-items-end text-end">
											<div class="text-track">Task ID: 123</div>
											<div class="flag-mark">Star</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<p class="text-muted text-center">For added safety and your protection, keep communications and payments
										within SOP Craft.</p>
									
									<div class="chat-group-box mt-4">
										<div class="user-chat-name">
											<div class="user-photo">
												<img src="{{ asset('images/photo-06.png')}}" class="img-fluid" alt="Essay Help" title="Essay Hel"
													loading="lazy" width="32" height="32">
											</div>
											<div class="user-name">
												<h5 class="text-truncate mb-0">Andrew Simons <span>05 Jan 2024, 20:50</span></h5>									
											</div>
										</div>
										<div class="chat-replied">
											<p class="card-text mb-2">Hi John, Hope you’re doing well. I have gone through the subject and  essay topic. really cool topic, now sit back and relax while I start work on it. will meet soon. bye</p>
										</div>
									</div>	

									<div class="chat-group-box mt-4">
										<div class="user-chat-name">
											<div class="user-photo">
												<img src="{{ asset('images/photo-05.png')}}" class="img-fluid" alt="Essay Help" title="Essay Hel"
													loading="lazy" width="32" height="32">
											</div>
											<div class="user-name">
												<h5 class="text-truncate mb-0">Me <span>05 Jan 2024, 20:50</span></h5>									
											</div>
										</div>
										<div class="chat-replied">
											<p class="card-text mb-2">Hey Andrew. thanks for confirming. Bye</p>
										</div>
									</div>						
									

								</div>
								<div class="card-footer text-body-secondary">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Send Message...." aria-label="Send Message...."
											aria-describedby="button-addon2">
										<button class="btn btn-outline-secondary border-0" type="button" id="button-addon2">
											<label class="input-group-text" for="inputGroupFile01">
												<img src="{{ asset('images/basil_attach-solid.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help"
													title="Essay Help" width="24" height="24">
											</label>
											<input type="file" class="form-control d-none" id="inputGroupFile01">
										</button>
									</div>

								</div>
							</div>
                            
                        </div>

                       
					</div>

                    
                </div>
            </form>
        </div>
    </section>
    
   @endsection
