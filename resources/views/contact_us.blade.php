@extends('layout.app') 
@section('content')

<style>
.select2-container .select2-selection--single {height: 52px !important;}
.select2-container--default .select2-selection--single {    background-color: #fff;    border: 1px solid #868685;    border-radius: 30px;}
.select2-container--default .select2-selection--single .select2-selection__rendered {    color: #444;    line-height: 52px;}
.select2-container--default .select2-selection--single .select2-selection__arrow {    height: 48px;    position: absolute;    top: 1px;    right: 1px;    width: 20px;}
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
	    <form class="order-form" id="contact_form" name="contact_form" enctype="multipart/form-data" method="POST" action="#">
    		@csrf
            <div class="row">
                <div class="col-md-8">
                    <!-- order summary form 1 -->
                    <div id="osForm1" class="order-summary">
                        <h2 class="border-0">
                            Enquery Form
                        </h2>
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="c_name" class="form-label">Your Name</label>
                                        <div class="input-group">
                                            <input name="c_name" id="c_name" type="text" class="form-control text-start" value=""  /> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="c_email_id" class="form-label">Your Email Id</label>
                                        <div class="input-group">
                                            <input name="c_email_id" id="c_email_id" type="text" class="form-control text-start" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="c_mobile_no" class="form-label">Your Mobile No./Whatapp No.</label>
                                        <input name="c_mobile_no" id="c_mobile_no" type="text" class="form-control text-start" value="" />
                                    </div>
                                </div>
    							<div class="col-md-6">
                                        <div class="mb-3">
                                                <label for="studylabel_id" class="form-label">Service</label>
                                                <select class="form-select select2" id="studylabel_id" name="studylabel_id" aria-label="studylabel_id">
												    <option value="">Select</option>
                                                    <option value="SOP Writing">SOP Writing</option>
													<option value="Admission Essay">Admission Essay</option>
													<option value="CV or Resume writing">CV or Resume writing</option>
													<option value="Letter of recommendation">Letter of recommendation</option>
													<option value="Personal Statement">Personal Statement</option>
													<option value="Scholarship Essay Writing">Scholarship Essay Writing</option>
													
                                                </select>
                                        </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <div class="title-task-box">
                                        
                                        
                                        <textarea class="form-control" id="c_message" name="c_message" rows="3" placeholder="Write Us.."></textarea>

                                        
                                    </div>
                                </div>
								<div class="col-md-12">
								<button type="submit" id="checkOutBtn" class="btn btn-primary w-100" name="btn_checkout">Submit</button>
								</div>
								
                                
    							
                            </div>
                       
                    </div>

                    
				</div>

                <div class="col-md-4">
                    <div class="sticky-top">
                        <div class="order-summary os-theme">
                            <h2>GET IN TOUCH</h2>
                            <div class="row">
                                <div class="col-12">
                                    <p>Office Email Id info@sopcraft.com</p>
                                </div>
								<div class="col-12">
                                    <p>Office Whatapp No. +44 7845 411128</p>
                                </div>
								<div class="col-12">
                                    <p>Office Call No. +44 7845 411128</p>
                                </div>
                                
                            </div>
                            

    						
                        </div>

                        <div class="whn-block">
                            <h3>What happens next?</h3>
                            <p>We will assign a tutor who's an expert in your subject. We'll keep you updated on the progress.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
	</div>
</section>

@endsection
