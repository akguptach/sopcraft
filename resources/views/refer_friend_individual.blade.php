@extends('layout.app_order')
@section('content')
    <section class="common-sec">
        <div class="container">
            <ul class="nav nav-pills nav-fill pill-cust mt-3 py-1 rounded-lg" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                <a class="nav-link active d-flex align-items-center" id="pills-st1-tab" data-toggle="pill" href="#pills-st1" role="tab" aria-controls="pills-st1" aria-selected="true">
                    <span class="border fa-cust shadow-sm rounded-circle p-2 d-flex align-items-center justify-content-center">
                    1
                    </span>
                    <p class="mb-0 pl-3">
                    <span class="d-flex text-dark small">Share Referral URL with</span>
                    <span class="d-flex mt-n1 text-primary text-capitalize">Friend</span>
                    </p>
                </a>
                </li>
                <li class="nav-item" role="presentation">
                <a class="nav-link d-flex align-items-center" id="pills-st2-tab" data-toggle="pill" href="#pills-st2" role="tab" aria-controls="pills-st2" aria-selected="false">
                    <span class="border fa-cust shadow-sm rounded-circle p-2 d-flex align-items-center justify-content-center">
                    2
                    </span>
                    <p class="mb-0 pl-3">
                    <span class="d-flex text-dark small">Your Friends</span>
                    <span class="d-flex mt-n1 text-primary text-capitalize">Place an Order</span>
                    </p>
                </a>
                </li>
                <li class="nav-item" role="presentation">
                <a class="nav-link d-flex align-items-center" id="pills-st3-tab" data-toggle="pill" href="#pills-st3" role="tab" aria-controls="pills-st3" aria-selected="false">
                    <span class="border fa-cust shadow-sm rounded-circle p-2 d-flex align-items-center justify-content-center">
                    3
                    </span>
                    <p class="mb-0 pl-3">
                    <span class="d-flex text-dark small">You Earn</span>
                    <span class="d-flex mt-n1 text-primary text-capitalize">$50</span>
                    </p>
                </a>
                </li>          
            </ul>
            <div class="row">
                <div class="col-md-12">
                    <div class="common-theme raf-individual">
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <h5 class="text-center"><b><u>Invite Friends, Earn Unlimited!</u></b></h5>
                            </div>
                        </div>

                        <div class="raf-form-share mb-5">
                            <form action="" class="text-center my-4">
                                <div class="mb-3">
                                    <label for="referralUrl" class="form-label"><b>Referral URL</b></label>
                                    <input id="referralUrl" type="text" class="form-control" value="https://www.sopcraft.com/refer/sop64565654" placeholder="Referral URL" aria-label="Referral URL" aria-describedby="refer-mail" readonly>
                                </div>

                                <button type="button" href="#" class="btn btn-copy-link">Copy URL</button>
                            </form>

                            <h4 class="text-center">OR</h4>
                            <p class="text-center mt-4">Directly share the referral link via</p>
                            <div class="share-block text-center">									
                                <button type="button" href="#" class="btn btn-share d-md-none">Share</button>
                                <div class="social-share d-none d-md-flex">
                                    <a href="#" class="btn">
                                        <img src="{{ asset('images/whatsaap-icon-black.svg')}}" class="img-fluid" alt="SOP Craft"
                                            title="SOP Craft" width="30" height="30">
                                    </a>
                                    <a href="#" class="btn">
                                        <img src="{{ asset('images/fb-icon-black.svg')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft"
                                            width="30" height="30">
                                    </a>
                                    <a href="#" class="btn">
                                        <img src="{{ asset('images/twitter-icon-black.svg')}}" class="img-fluid" alt="SOP Craft"
                                            title="SOP Craft" width="30" height="30">
                                    </a>
                                    <a href="#" class="btn">
                                        <img src="{{ asset('images/linkedin-icon-black.svg')}}" class="img-fluid" alt="SOP Craft"
                                            title="SOP Craft" width="30" height="30">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">Total Lead</th>
                                        <th scope="col">Total Order</th>
                                        <th scope="col">Total Earned</th>
                                        <th scope="col">Action</th>				
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Referrals</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>AUD 0.00</td>
                                        <td>
                                            <a href="#" class="link">Transaction Details</a>
                                        </td>				
                                    </tr>
                                </tbody>
                            </table>
                        </div>						
                    </div>
                </div>
            </div>
            <p class="text-end fs-7 mt-2 mb-0 px-4"><a href="#" class="link">Terms & Conditions</a> | <a href="#" class="link">How It Works</a></p>
        </div>
    </section>
@endsection