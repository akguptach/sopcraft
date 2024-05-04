@extends('layout.app')
@section('content')
<div class="masthead raf-masthead">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12">
                <div class="masthead-left">
                    <h1>Refer friends <br> and earn upto <span>$50,000</span></h1>
                    <p>They get 10% OFF their first assignment, and you earn 10% commission from their task <br> when their task is complete...amazing, right?!</p>

                    <div class="raf-form-share">
                        <form action="">
                            <div class="input-group refer-email mb-3">
                                <input type="text" class="form-control" placeholder="Your friend’s email ID"
                                    aria-label="Your friend’s email ID" aria-describedby="refer-mail">
                                <button class="btn" type="submit" id="refer-mail">
                                    <img src="{{ asset('images/iconoir_send-solid.svg')}}" class="img-fluid" alt="SOP Craft"
                                        title="SOP Craft" width="32" height="32">
                                </button>
                            </div>
                        </form>

                        <div class="share-block">
                            <button type="button" href="#" class="btn btn-copy-link">Copy link</button>
                            <button type="button" href="#" class="btn btn-share d-md-none">Share</button>
                            <div class="social-share d-none d-md-flex">
                                <a href="#" class="btn">
                                    <img src="{{ asset('images/whatsaap-icon-black.svg')}}" class="img-fluid" alt="SOP Craft"
                                        title="SOP Craft" width="30" height="30">
                                </a>
                                <a href="#" class="btn">
                                    <img src="{{ asset('images/fb-icon-black.svg')}}" class="img-fluid" alt="SOP Craft"
                                        title="SOP Craft" width="30" height="30">
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
                </div>
            </div>
        </div>
    </div>
</div>

<section class="how-it-works-sec raf-hiw-sec">
    <div class="container">
        <div class="raf-hiw-wrapper">
            <div class="row d-none d-md-block">
                <div class="col-12">
                    <div class="hiw-head">
                        <h2 class="head-title">How it <span>works</span>?</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-md-5 raf-hiw-row">
                <div class="col-md-6 gp-div">
                    <div class="hiw-img">						
                        <picture>							
                            <source  media="(min-width:768px)" srcset="{{ asset('images/group-girl.png')}}">
                            <img src="{{ asset('images/group-girl-mobile.png')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="465" height="543">
                        </picture>
                        <div class="sop-copy-box">
                            <h4>https://sopcraft.com</h4>
                            <button type="button" class="btn btn-primary w-100">Copy</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="hiw-right">
                        <div class="hiw-head d-md-none">
                            <h2 class="head-title">How it <span>works</span>?</h2>
                        </div>
                        <ul class="step-list mt-4">
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('images/sop-logo.svg')}}" class="img-fluid" alt="SOP Craft"
                                        title="SOP Craft" width="90" height="90">
                                </div>
                                <div class="step-content">
                                    <h6 class="">Step 1</h6>
                                    <p class="mb-0">Login to SOP Craft and go to <b>My Account</b></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('images/link-icon.svg')}}" class="img-fluid" alt="SOP Craft"
                                        title="SOP Craft" width="90" height="90">
                                </div>
                                <div class="step-content">
                                    <h6 class="">Step 2</h6>
                                    <p class="mb-0">Share the <b>unique referral</b> link with friends</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('images/dollar-icon.svg')}}" class="img-fluid" alt="SOP Craft"
                                        title="SOP Craft" width="90" height="90">
                                </div>
                                <div class="step-content">
                                    <h6 class="">Step 3</h6>
                                    <p class="mb-0"><b>Earn 10% commission once your friends complete a task</b></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="helping-hand-sec mb-md-5">
    <div class="container">
        <h2>Lend a <span>helping</span> hand!</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="hh-content mb-5 mb-md-0">
                    <h3 class="mb-5">Help your friends, and earn <b>Earn 10% commission</b> It’s a no-brainer!</h3>
                    <a class="btn btn-primary" href="#" role="link">Refer a Friend</a>

                    <p class="mt-5 d-none d-md-block">Questions? Contact our <a href="#" class="link">support team</a></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row gy-3 gy-md-0 gx-1">
                    <div class="col-md-4">
                        <div class="card helping-card first">
                            <h3>$250</h3>
                            <p>For</p>
                            <h4>3 friends</h4>
                            <img src="{{ asset('images/crowd-1.png')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft"
                                width="170" height="160">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card helping-card">
                            <h3>$500</h3>
                            <p>For</p>
                            <h4>6 friends</h4>
                            <img src="{{ asset('images/crowd-2.png')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft"
                                width="170" height="160">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card helping-card last">
                            <h3>$1000</h3>
                            <p>For</p>
                            <h4>12 friends</h4>
                            <img src="{{ asset('images/crowd-3.png')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft"
                                width="170" height="160">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="mt-4 text-center d-md-none">Questions? Contact our <a href="#" class="link">support team</a></p>
    </div>
</section>

<section class="students-referring-sec">
    <div class="container">
        <h2>Students like you are referring their friends</h2>

        <div class="sr-slider">
            <div class="col-md-4">
                <div class="card student-reveiw-card h-100">
                    <div class="d-flex sr-group">
                        <div class="student-photo">
                            <picture>
                                <source media="(min-width:768px)" srcset="{{ asset('images/benjamin.png')}}">
                                <img src="{{ asset('images/benjamin.png')}}" class="img-fluid" loading="lazy" alt="SOP Craft"
                                    title="SOP Craft" width="65" height="65">
                            </picture>
                        </div>
                        <div class="student-name">
                            <h5 class="card-title">Benjamin B.</h5>
                            <p class="text-muted mb-0">Apr 12, 2023</p>
                        </div>

                    </div>
                    <div class="card-body p-0">
                        <div class="sr-list">
                            <ul class="student-rating" data-rate="5">
                                <li>Start 1</li>
                                <li>Start 2</li>
                                <li>Start 3</li>
                                <li>Start 4</li>
                                <li>Start 5</li>
                            </ul>
                        </div>
                        <p class="card-text text-center">“I referred my friend, and they were so happy with the service,
                            they’ve started referring their friends too.”.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card student-reveiw-card h-100">
                    <div class="d-flex sr-group">
                        <div class="student-photo">
                            <picture>
                                <source media="(min-width:768px)" srcset="{{ asset('images/olivia.png')}}">
                                <img src="{{ asset('images/olivia.png')}}" class="img-fluid" loading="lazy" alt="SOP Craft"
                                    title="SOP Craft" width="65" height="65">
                            </picture>
                        </div>
                        <div class="student-name">
                            <h5 class="card-title">Olivia</h5>
                            <p class="text-muted mb-0">Apr 12, 2023</p>
                        </div>

                    </div>
                    <div class="card-body p-0">
                        <div class="sr-list">
                            <ul class="student-rating" data-rate="5">
                                <li>Start 1</li>
                                <li>Start 2</li>
                                <li>Start 3</li>
                                <li>Start 4</li>
                                <li>Start 5</li>
                            </ul>
                        </div>
                        <p class="card-text text-center">“I referred my friend, and they were so happy with the service,
                            they’ve started referring their friends too.”.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card student-reveiw-card h-100">
                    <div class="d-flex sr-group">
                        <div class="student-photo">
                            <picture>
                                <source media="(min-width:768px)" srcset="{{ asset('images/ethan.png')}}">
                                <img src="{{ asset('images/ethan.png')}}" class="img-fluid" loading="lazy" alt="SOP Craft"
                                    title="SOP Craft" width="65" height="65">
                            </picture>
                        </div>
                        <div class="student-name">
                            <h5 class="card-title">Ethan B.</h5>
                            <p class="text-muted mb-0">Apr 12, 2023</p>
                        </div>

                    </div>
                    <div class="card-body p-0">
                        <div class="sr-list">
                            <ul class="student-rating" data-rate="5">
                                <li>Start 1</li>
                                <li>Start 2</li>
                                <li>Start 3</li>
                                <li>Start 4</li>
                                <li>Start 5</li>
                            </ul>
                        </div>
                        <p class="card-text text-center">“I referred my friend, and they were so happy with the service,
                            they’ve started referring their friends too.”.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card student-reveiw-card h-100">
                    <div class="d-flex sr-group">
                        <div class="student-photo">
                            <picture>
                                <source media="(min-width:768px)" srcset="{{ asset('images/stundent-1.png')}}">
                                <img src="{{ asset('images/stundent-1.png')}}" class="img-fluid" loading="lazy"
                                    alt="SOP Craft" title="SOP Craft" width="65" height="65">
                            </picture>
                        </div>
                        <div class="student-name">
                            <h5 class="card-title">Benjamin B.</h5>
                            <p class="text-muted mb-0">Apr 12, 2023</p>
                        </div>

                    </div>
                    <div class="card-body p-0">
                        <div class="sr-list">
                            <ul class="student-rating" data-rate="5">
                                <li>Start 1</li>
                                <li>Start 2</li>
                                <li>Start 3</li>
                                <li>Start 4</li>
                                <li>Start 5</li>
                            </ul>
                        </div>
                        <p class="card-text text-center">“I referred my friend, and they were so happy with the service,
                            they’ve started referring their friends too.”.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="assignments-sec unique-refer-sec mt-md-5 mb-3">
    <div class="container">
        <div class="assign-box">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-end">
                    <div class="assign-content">
                        <h2 class="mb-3">Start sharing your unique Referral link with friends!</h2>

                        <a class="btn btn-primary" href="#" role="button">Refer Friends</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <picture>
                        <img src="{{ asset('images/group-boy-2.png')}}" class="img-fluid" alt="SOP Craft"
                            title="SOP Craft" loading="lazy" width="426" height="430">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>    
        <x-layout.faq />	
@endsection