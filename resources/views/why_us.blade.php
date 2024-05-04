@extends('layout.app')
@section('content')
<div class="masthead wcu-masthead">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="masthead-left">
                    <h1>Why Choose <br class="d-none d-sm-block"> <span>SOP Craft</span></h1>
                    <p>Welcome aboard! Let's initiate the creation of your SoP writings. Our professional team is poised to secure the best results for you.</p>

                    <p><b>Our writers are graduates of <span>top universities.</span></b></p>

                    <div class="overflow-hidden tu-marquee">
                        <div class="horizontal-marquee">
                            <img src="{{ asset('images/universities-logo.jpg')}}" class="img-fluid" alt="Essay Help" title="Essay Help" width="520" height="78">
                            <img src="{{ asset('images/universities-logo.jpg')}}" class="img-fluid" alt="Essay Help" title="Essay Help" width="520" height="78">
                        </div>
                    </div>				</div>
            </div>
            <div class="col-lg-6 text-center text-md-end">
                <div class="wcu-hero-img">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/hero-image-01.webp')}}" type="image/webp">
                        <source media="(min-width:768px)" srcset="{{ asset('images/hero-image-01.png')}}" type="image/png">
                        <source srcset="{{ asset('images/hero-image-mobile-01.webp')}}" type="image/webp">
                        <img src="{{ asset('images/hero-image-mobile-01.png')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="458" height="559">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="wcu-2-sec">
    <div class="container">
        <div class="row align-items-center">			
            <div class="col-md-6 order-md-2">
                <div class="row mb-4">
                    <div class="col">
                        <picture>													
                            <img src="{{ asset('images/rocket-icon.svg')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="50" height="50">
                        </picture>
                    </div>
                    <div class="col-10">
                        <h5>On time delivery</h5>
                        <p>Timely submissions ensure you can proofread your paper before presenting it to your tutor</p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <picture>													
                            <img src="{{ asset('images/rocket-icon.svg')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="50" height="50">
                        </picture>
                    </div>
                    <div class="col-10">
                        <h5>100% plagiarism free!</h5>
                        <p>Every Essay Help paper is scanned for duplicate content, guaranteeing plagiarism-free work.</p>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col">
                        <picture>													
                            <img src="{{ asset('images/rocket-icon.svg')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="50" height="50">
                        </picture>
                    </div>
                    <div class="col-10">
                        <h5>Privacy First</h5>
                        <p>Your privacy is our top priority, ensuring smooth, trouble-free cooperation with HTTPS data transmission for added security.</p>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col">
                        <picture>													
                            <img src="{{ asset('images/rocket-icon.svg')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="50" height="50">
                        </picture>
                    </div>
                    <div class="col-10">
                        <h5>Free amendments</h5>
                        <p>We provide unlimited free revisions until you are satisfied with the work.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <picture>													
                            <img src="{{ asset('images/rocket-icon.svg')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="50" height="50">
                        </picture>
                    </div>
                    <div class="col-10">
                        <h5>100% Confidentiality Guaranteed</h5>
                        <p>Our aim is your complete confidentiality.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <picture>
                    <source media="(min-width:768px)" srcset="{{ asset('images/img-02.webp')}}" type="image/webp">
                    <source media="(min-width:768px)" srcset="{{ asset('images/img-02.png')}}" type="image/png">
                    <source srcset="{{ asset('images/img-mobile-02.webp')}}" type="image/webp">
                    <img src="{{ asset('images/img-mobile-02.png')}}" class="img-fluid" alt="SOP Craft" title="SOP Craft" width="694" height="904">
                </picture>
            </div>
        </div>
    </div>
</section>

<div class="wcu-3-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 border-end">
                <div class="py-sm-5 pe-sm-5">
                    <p>Ordering an SOP on our platform requires receiving a paper with a creative yet well-structured flow of thoughts that adheres to all specified requirements and instructions. We take pride in our team of high-class writers, known for their reliability and professionalism.</p>

                    <p>Explore numerous positive reviews on our website for insights into the quality of our service. Additionally, delve deeper into various aspects discussed in the previous paragraphs. If you have any questions or uncertainties, feel free to reach out to a platform representative for clarification at any time.</p>

                    <a class="btn btn-primary mt-3" href="{{ route('order') }}" role="link">Order Now</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row gy-4 mt-4 p-sm-5">
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <h2>400</h2>
                            <p>Qualified <br class="d-none d-sm-block"> Experts</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <h2>98%</h2>
                            <p>Satisfaction <br class="d-none d-sm-block"> Rate</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <h2>80%</h2>
                            <p>Returning <br class="d-none d-sm-block"> Customers</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <h2>5</h2>
                            <p>Years of <br class="d-none d-sm-block"> experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>		
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
</section>		<br><br>

@endsection