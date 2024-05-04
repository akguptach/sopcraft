@extends('layout.app')
@section('content')
    <div class="container-fluid dashboard-sec">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-body d-md-flex flex-column overflow-y-auto">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>All Tasks</option>
                            <option value="1">Unread</option>
                            <option value="2">Starred</option>
                            <option value="3">Completed Tasks</option>
                        </select>

                        <div class="sidebar-nav">
                            <ul class="nav flex-column row gy-2">
                            <li class="nav-item active">
                                <div class="user-photo">
                                    <img src="assets/images/photo-01.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how a...</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark active">Star</div>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <div class="user-photo">
                                    <img src="assets/images/photo-02.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, illum.</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark">Star</div>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <div class="user-photo">
                                    <img src="assets/images/photo-03.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, illum.</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark">Star</div>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <div class="user-photo">
                                    <img src="assets/images/photo-04.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, illum.</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark">Star</div>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <div class="user-photo">
                                    <img src="assets/images/photo-default.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, illum.</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark">Star</div>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <div class="user-photo">
                                    <img src="assets/images/photo-01.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how a...</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark active">Star</div>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <div class="user-photo">
                                    <img src="assets/images/photo-02.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, illum.</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark">Star</div>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <div class="user-photo">
                                    <img src="assets/images/photo-03.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, illum.</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark">Star</div>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <div class="user-photo">
                                    <img src="assets/images/photo-04.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, illum.</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark">Star</div>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <div class="user-photo">
                                    <img src="assets/images/photo-default.png" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy"
                                        width="46" height="46">
                                </div>
                                <div class="user-name">
                                    <h5 class="text-truncate">Andrew Simons</h5>
                                    <p class="text-truncate">Me: Hello, how Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, illum.</p>
                                </div>
                                <div class="user-flag">
                                    <div class="user-rank">2d</div>
                                    <div class="flag-mark">Star</div>
                                </div>
                            </li>						</ul>
                        </div>
                    </div>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="dashboard-content">
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
                                within Essay Help.</p>
                            <div class="chat-group-box">
                                <div class="user-chat-name">
                                    <div class="user-photo">
                                        <img src="assets/images/photo-05.png" class="img-fluid" alt="Essay Help" title="Essay Hel"
                                            loading="lazy" width="32" height="32">
                                    </div>
                                    <div class="user-name">
                                        <h5 class="text-truncate mb-0">Me <span>05 Jan 2024, 20:50</span></h5>									
                                    </div>
                                </div>
                                <div class="chat-replied">
                                    <p class="card-text mb-2">My Essay Order</p>

                                    <div class="card w-50">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-9">
                                                    <p>Medical Sciences - Covid - Essay</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="text-end">Task ID: 123</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Write an Essay for the COVID-19 pandemic has touched every aspect of human life. Discuss and analyse the most significant long-term impacts on society, both globally and in your specific region.</p>
                                        </div>
                                        <div class="card-footer bg-white border-0 text-body-secondary">
                                            <div class="row">
                                                <div class="col-9">
                                                    <p class="mb-0">Delivery in 15 days</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="text-end mb-0"><b>$190</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>		

                            <div class="chat-group-box mt-4">
                                <div class="user-chat-name">
                                    <div class="user-photo">
                                        <img src="assets/images/photo-06.png" class="img-fluid" alt="Essay Help" title="Essay Hel"
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
                                        <img src="assets/images/photo-05.png" class="img-fluid" alt="Essay Help" title="Essay Hel"
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
                                        <img src="assets/images/basil_attach-solid.svg" class="img-fluid" loading="lazy" alt="Essay Help"
                                            title="Essay Help" width="24" height="24">
                                    </label>
                                    <input type="file" class="form-control d-none" id="inputGroupFile01">
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection