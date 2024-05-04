@extends('layout.app',['title'=>$title])
<style>
    .we-work-content h3 {
        color: blue;
        font-size: 18px;
    }

    .we-work-content p {
        font-size: 15px !impportant;
        font-weight: 500 !important;
    }
</style>
@section('content')
<main class="flex-shrink-0">
    <div class="masthead wcu-masthead">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="masthead-left">
                        <h1>Get Academic Success with Our <span>Expert Dissertation Assistance Services</span></h1>
                        <p>Stop stressing over tight deadlines and constant revisions with our premium class dissertation service.</p>

                        <p>Our writers are graduates of <span>top universities.</span></p>

                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/universities-logo.jpg') }}">
                            <img src="{{ asset('images/universities-logo.jpg') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="520" height="78">
                        </picture>
                    </div>
                </div>
                <div class="col-lg-6">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/hero-girl.png') }}">
                        <img src="{{ asset('images/hero-girl-mobile.png') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="543" height="680">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    Description: {{@$seo->service->service_description}}

    <h4>FAQ</h4>
    @if($seo && $seo->service && $seo->service->faq)
    @foreach(@$seo->service->faq as $faq)
    <p>Question: {{$faq->question}}</p>
    <p>Anser: {{$faq->answer}}</p>
    <br>
    @endforeach
    @endif
    <section class="mt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="wm-right">
                        <h2>Our<br> <span>Happy Student</span></h2>
                        <h3 class="mb-0">Still Unsure?</h3>
                        <h3> Our Happy Students Are The Proof!</h3>
                        <p>With Essay Help, it has never been easier to get the grades you've always wanted. Our world-class academics are ready to help.</p>
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
                                    <p class="card-text">I was impressed by the level of professionalism exhibited by Essay Help. They not only helped me with my thesis but also provided valuable insights that enhanced its quality. Truly grateful for their support!"</p>
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
                                    <p class="card-text">I was struggling with my thesis deadline, but thanks to Essay Help, I not only submitted on time but also received exceptional grades! Highly recommended!</p>
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
                                    <p class="card-text">The essay assistance I received was beyond my expectations. The team at Essay Help truly knows how to deliver quality work promptly. Will definitely use their services again!</p>
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
                                    <p class="card-text">My dissertation was a daunting task, but with the expertise and guidance from Essay Help, I managed to excel in my academic pursuits. Thank you for your professionalism!</p>
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

    <section class="task-details-sec">
        <div class="container">
            <div class="row gy-4 mt-5">
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">On time delivery</h3>
                            <p>Our writers make sure that all orders are submitted prior to the deadline so that you can proofread your
                                paper before handing it over to your tutor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card box-shadow h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">Verified Tutors</h3>
                            <p>All tutor profiles are meticulously checked: diplomas, identity and background. ony profiles demostrating
                                academic excellence are retained. Also, all reviews visible on tutor accounts are purely authentic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">100% plagiarism free!</h3>
                            <p>All Essay Help papers are scanned for duplicate content and are guaranteed plagiarism free.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card box-shadow h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">World's top essay provider</h3>
                            <p>We are widely recognised as being the best provider of student writing services in the World</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">Free amendments</h3>
                            <p>We provide unlimited free revisions until you are satisfied with the work.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card box-shadow h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">100% Confidentiality Guaranteed</h3>
                            <p>Our aim is your complete confidentiality.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mb-5 mt-5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="card tu-card we-work card h-100">

                        <picture>
                            <img src="{{ asset('images/Coursework_writing_service.jpg') }}" class="card-img-top" alt="Essay Help" title="Essay Hel" loading="lazy" width="374" height="374">
                        </picture>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="we-work-content">
                        <h3 class="text-header">Dissertation writing service</h3>
                        <p>The booming essay support market hides a dark secret: offshore mills churning out plagiarism and vanishing
                            with your cash. Don't gamble your grades! Choose <b>Essay Help</b> for ethical, expert guidance. We walk you
                            through every step, delivering reliable, original work that builds your confidence and earns your trust.
                            Invest in your success, not an academic nightmare. Choose <b>Essay Help</b>.</p>

                        <p>This condensed version retains the key message while emphasising your ethical approach and reliable
                            results. Choose this or mix elements from both versions to create your ideal paragraph!</p>

                        <!--<p>Therefore, when you ask yourself “Why Choose Essay Help?”, you can feel safe that we offer incomparable-->
                        <!--    customer service and delivers only top quality guaranteed work. In the unlikely event that you aren’t-->
                        <!--    entirely happy with the work we produce for you, you can be confident we’ll put it right – fast.</p>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection