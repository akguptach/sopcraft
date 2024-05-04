@extends('layout.app')
@section('content')
    <section class="common-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-pills-new nav-fill mb-3" id="mainTab" role="tablist">
                        <li class="nav-item" role="presentation">
						       <button class="nav-link active" id="new-order-tab" data-bs-toggle="tab" data-bs-target="#new-order-tab-pane"
                                type="button" role="tab" aria-controls="new-order-tab-pane" aria-selected="false">New Orders</button>
                            
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="exiting-order-tab" data-bs-toggle="tab" data-bs-target="#exiting-order-tab-pane"
                                type="button" role="tab" aria-controls="exiting-order-tab-pane" aria-selected="false">Exiting Orders</button>
                        </li>								
                    </ul>
                    <div class="tab-content" id="mainTabContent">
                        <div class="tab-pane fade show active" id="new-order-tab-pane" role="tabpanel" aria-labelledby="new-order-tab" tabindex="0">									
                            <div class="common-theme">
                                <div class="row gx-0">
                                    <div class="col-md-8 col-lg-9">
                                        <ul class="nav nav-tabs" id="newOrderTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="inprocess-tab" data-bs-toggle="tab"
                                                    data-bs-target="#inprocess-tab-pane" type="button" role="tab" aria-controls="inprocess-tab-pane"
                                                    aria-selected="true">In-process (<?php echo count($orders);?>)</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="enquiries-tab" data-bs-toggle="tab"
                                                    data-bs-target="#enquiries-tab-pane" type="button" role="tab" aria-controls="enquiries-tab-pane"
                                                    aria-selected="false">Enquiries (0)</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-lg-3 col-search">
                                        <div class="input-group input-group-sm input-group-custom">
                                            <input type="text" class="form-control" placeholder="Search"
                                                aria-label="Search" aria-describedby="button-search">
                                            <button class="btn btn-outline-secondary" type="button" id="button-search">
                                                <img src="{{ asset('images/search-icon-grey.svg')}}" alt="SOP Craft" title="SOP Craft">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="tab-content" id="newOrderTabContent">
                                    <div class="tab-pane fade show active" id="inprocess-tab-pane" role="tabpanel" aria-labelledby="inprocess-tab"
                                        tabindex="0">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order Code / Lead ID</th>
                                                        <th scope="col">Subject</th>				
                                                        <th scope="col">Deadline</th>
                                                        <th scope="col">Word Count</th>		
                                                        <th scope="col">Total / Paid Amount</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												    @foreach($orders as $arrR)
                                                    <tr>
                                                        <th scope="row">
                                                            <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#orderMessageModal">
                                                                <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#orderMessageModal">MAS{{$arrR['id']}}</a>
                                                            </a>
                                                        </th>
                                                        <td>{{$arrR['subject_name']}}</td>
                                                        <td>{{date('jS F, Y',strtotime($arrR['delivery_date']))}}</td>
                                                        <td>{{$arrR['no_of_words']}}</td>
                                                        <td>{{$arrR['currency_code']}} {{$arrR['price']}} / {{$arrR['price']}}</td>	
                                                        <td class="text-center">
                                                            <a class="link" href="{{url('vieworder/'.$arrR['id'])}}">View</a>
                                                        </td>
                                                    </tr>
													@endforeach													
                                                </tbody>
                                            </table>
                                        </div>
                                        <p>Showing 1 to 1 of 1 entries</p>        </div>
                                    <div class="tab-pane fade" id="enquiries-tab-pane" role="tabpanel" aria-labelledby="enquiries-tab" tabindex="0">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order Code / Lead ID</th>
                                                        <th scope="col">Subject</th>				
                                                        <th scope="col">Deadline</th>
                                                        <th scope="col">Word Count</th>		
                                                        <th scope="col">Total / Paid Amount</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" colspan="6" class="text-center"> No data available</th>
                                                    </tr>	
                                                </tbody>
                                            </table>
                                        </div>
                                        <p>Showing 0 to 0 of 0 entries</p>        </div>
                                </div>
                            </div>							</div>
                        <div class="tab-pane fade" id="exiting-order-tab-pane" role="tabpanel" aria-labelledby="exiting-order-tab" tabindex="0">
                            <div class="common-theme">	
                                <div class="row gx-0">
                                    <div class="col-md-8 col-lg-9">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="delivered-tab" data-bs-toggle="tab"
                                                    data-bs-target="#delivered-tab-pane" type="button" role="tab" aria-controls="delivered-tab-pane"
                                                    aria-selected="true">On-delivered (<?php echo count($orders);?>)</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="refund-tab" data-bs-toggle="tab" data-bs-target="#refund-tab-pane"
                                                    type="button" role="tab" aria-controls="refund-tab-pane" aria-selected="false">Delivered (0)</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="expired-tab" data-bs-toggle="tab" data-bs-target="#expired-tab-pane"
                                                    type="button" role="tab" aria-controls="expired-tab-pane" aria-selected="false">Refund (0)</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-lg-3 col-search">
                                        <div class="input-group input-group-sm input-group-custom">
                                            <input type="text" class="form-control" placeholder="Search"
                                                aria-label="Search" aria-describedby="button-search">
                                            <button class="btn btn-outline-secondary" type="button" id="button-search">
                                                <img src="{{ asset('images/search-icon-grey.svg')}}" alt="SOP Craft" title="SOP Craft">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="delivered-tab-pane" role="tabpanel"
                                        aria-labelledby="delivered-tab" tabindex="0">									
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order Code / Lead ID</th>
                                                        <th scope="col">Subject</th>
                                                        
                                                        <th scope="col">Deadline</th>
                                                        <th scope="col">Word Count</th>
                                                        <th scope="col">Total / Paid Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                                   												    @foreach($orders as $arrR)
                                                    <tr>
                                                        <th scope="row">
                                                            <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#orderMessageModal">
                                                                <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#orderMessageModal">MAS{{$arrR['id']}}</a>
                                                            </a>
                                                        </th>
                                                        <td>{{$arrR['subject_name']}}</td>
                                                        <td>{{$arrR['delivery_date']}}</td>
                                                        <td>{{$arrR['no_of_words']}}</td>
                                                        <td>
                                                            <div class="d-flex flex-column">
                                                                <p class="mb-0">{{$arrR['currency_code']}} {{$arrR['price']}} / {{$arrR['price']}}</p>
                                                                <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#assignmentSolutionModal">View Solution</a>
                                                                <a href="#" class="link">Download and Share on Email</a>
                                                            </div>
                                                        </td>
                                                    </tr>
													@endforeach 
                                                </tbody>
                                            </table>
                                        </div>
                                        <p>Showing 1 to 8 of 8 entries</p>        </div>
                                    <div class="tab-pane fade" id="refund-tab-pane" role="tabpanel" aria-labelledby="refund-tab"
                                        tabindex="0">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order Code / Lead ID</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Deadline</th>
                                                        <th scope="col">Word Count</th>				
                                                        <th scope="col">Total / Paid Amount</th>
                                                        <th scope="col">Refund Amount</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">MAS62197</th>
                                                        <td>Process</td>
                                                        <td>IT Computer Science</td>
                                                        <td>24 Aug 2023 03:30 AM AEST</td>
                                                        <td>1000</td>				
                                                        <td>GBP 273.00 / 273.00</td>
                                                        <td>GBP 273.00</td>
                                                        <td class="text-center">
                                                            <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#assignmentSolutionModal">View Details</a>
                                                        </td>
                                                    </tr>			
                                                    <tr>
                                                        <th scope="row">MAS62197</th>
                                                        <td>Process</td>
                                                        <td>IT Computer Science</td>
                                                        <td>24 Aug 2023 03:30 AM AEST</td>
                                                        <td>1000</td>				
                                                        <td>GBP 273.00 / 273.00</td>
                                                        <td>GBP 273.00</td>
                                                        <td class="text-center">
                                                            <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#assignmentSolutionModal">View Details</a>
                                                        </td>
                                                    </tr>			
                                                    <tr>
                                                        <th scope="row">MAS62197</th>
                                                        <td>Process</td>
                                                        <td>IT Computer Science</td>
                                                        <td>24 Aug 2023 03:30 AM AEST</td>
                                                        <td>1000</td>				
                                                        <td>GBP 273.00 / 273.00</td>
                                                        <td>GBP 273.00</td>
                                                        <td class="text-center">
                                                            <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#assignmentSolutionModal">View Details</a>
                                                        </td>
                                                    </tr>			
                                                    <tr>
                                                        <th scope="row">MAS62197</th>
                                                        <td>Process</td>
                                                        <td>IT Computer Science</td>
                                                        <td>24 Aug 2023 03:30 AM AEST</td>
                                                        <td>1000</td>				
                                                        <td>GBP 273.00 / 273.00</td>
                                                        <td>GBP 273.00</td>
                                                        <td class="text-center">
                                                            <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#assignmentSolutionModal">View Details</a>
                                                        </td>
                                                    </tr>			
                                                    <tr>
                                                        <th scope="row">MAS62197</th>
                                                        <td>Process</td>
                                                        <td>IT Computer Science</td>
                                                        <td>24 Aug 2023 03:30 AM AEST</td>
                                                        <td>1000</td>				
                                                        <td>GBP 273.00 / 273.00</td>
                                                        <td>GBP 273.00</td>
                                                        <td class="text-center">
                                                            <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#assignmentSolutionModal">View Details</a>
                                                        </td>
                                                    </tr>			
                                                </tbody>
                                            </table>
                                        </div>
                                        <p>Showing 1 to 5 of 5 entries</p>        </div>
                                    <div class="tab-pane fade" id="expired-tab-pane" role="tabpanel" aria-labelledby="expired-tab"
                                        tabindex="0">
                                        <p class="text-muted fs-7 mb-0 text-center">No data available</p>									
                                    </div>
                                    
                                </div>
                            </div>							</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Order Message Modal -->
    <div class="modal fade" id="orderMessageModal" tabindex="-1" aria-labelledby="orderMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
            <h1 class="modal-title fs-5" id="orderMessageModalLabel">MAS62197</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="chat-group-box message-box">
                            <div class="user-chat-item">
                                    <div class="user-photo">
                                        <img src="{{ asset('images/photo-05.png')}}" onerror="this.src='assets/images/photo-default.png'" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy" width="32" height="32">
                                    </div>
                                    <div class="card">								
                                        <div class="card-body">
                                            <p class="card-text">Please check the video</p>
                                            <div class="download-option mb-3">											
                                                <div class="text-center d-flex flex-column align-items-center mb-3">
                                                            <div class="download-file mb-3">
                                                                <img src="{{ asset('images/icons/zip-svgrepo-com.svg')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="80" height="80">
                                                        </div>
                                                        <a href="#" class="btn btn-sm btn-danger">Download Solution</a>
                                                </div>
                                                <p class="text-muted fs-7 mb-0">Disclaimer - Kindly preview the solution before downloading <br> and provide your honest feedback.</p>
                                            </div>

                                            <p class="fs-7 text-muted mb-0">[Jacksen - Manager]: 11/02/2024 02:30PM AEM</p>
                                        </div>								
                                    </div>
                            </div>
                            <div class="user-chat-item">
                                <div class="user-photo">
                                    <img src="{{ asset('images/photo-05.png')}}" onerror="this.src='{{ asset('images/photo-default.png')}}'" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy" width="32" height="32">
                                </div>
                                <div class="card">								
                                    <div class="card-body">
                                        <p class="card-text">Write an Essay for the COVID-19 pandemic has touched every aspect of human life. Discuss and analyse the most significant long-term impacts on society, both globally and in your specific region.</p>
                                        <p class="fs-7 text-muted mb-0">[Jacksen - Manager]: 11/02/2024 02:30PM AEM</p>
                                    </div>								
                                </div>
                            </div>	
                            <div class="user-chat-item user-replied">							
                                <div class="card">								
                                    <div class="card-body">
                                        <p class="card-text">Write an Essay for the COVID-19 pandemic has touched every aspect of human life. Discuss and analyse the most significant long-term impacts on society, both globally and in your specific region.</p>
                                        <p class="card-text">Write an Essay for the COVID-19 pandemic has touched every aspect of human life. Discuss and analyse the most significant long-term impacts on society, both globally and in your specific region.</p>
                                        <p class="card-text">Regards,  <br> Emily</p>
                                        <p class="fs-7 text-muted mb-0">[You]: 11/02/2024 02:30PM AEM</p>
                                    </div>								
                                </div>
                                <div class="user-photo">
                                    <img src="{{ asset('images/photo-04.png')}}" onerror="this.src='{{ asset('images/photo-default.png')}}'"  class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy" width="32" height="32">
                                </div>
                            </div>							
                        </div>
            </div>
        </div>
        </div>
    </div>		<!-- Assignment Solution Modal -->
    <div class="modal fade" id="assignmentSolutionModal" tabindex="-1" aria-labelledby="assignmentSolutionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="assignmentSolutionModalLabel">Assignment Solution</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h6>PFA</h6>
            <div class="row">
                <div class="col-3">
                    <div class="download-file">
                        <img src="{{ asset('images/icons/word-svgrepo-com.svg')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="80" height="80">
                    </div>
                </div>
                <div class="col-3">
                    <div class="download-file">
                        <img src="{{ asset('images/icons/file-pdf-svgrepo-com.svg')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="80" height="80">
                        </div>
                </div>
            </div>       
            <hr>
            <div class="text-center mb-3">
                <a href="#" class="btn btn-danger">Download Solution</a>
            </div>
            <p class="text-muted fs-7 mb-0">Disclaimer - Kindly preview the solution before downloading and provide your honest feedback.</p>
            </div>
            <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>	
@endsection