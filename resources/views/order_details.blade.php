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
        <form class="order-form" id="order_form" name="order_form" enctype="multipart/form-data" method="POST" action="#">
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
                                    <p class="text-end subject_div">{{$data->subject_name}}</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Task Topic</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end task_topic_div">{{$data->task_topic}}</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Task type</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end task_type_div">{{$data->taskType->type_name}}</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Word count</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end no_of_words_div">{{$data->no_of_words}}</p>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Level of study</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end studylabel_div">{{$data->studyLevel->level_name}}</p>
                                </div>
                            </div>

                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p>Delivery At</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-end delivery_at_div">{{$data->delivery_date}}</p>
                                </div>
                            </div>
                            <hr class="opacity-25" />
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <p class="text-tp">Total Price:</p>
                                </div>
                                <div class="col-6">
                                    <p class="text-ta text-end total_price">{{$data->currency_code}}{{$data->price}}</p>
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
                                        <h4>{{$data->student->first_name}} {{$data->student->last_name}}</h4>
                                        <p>{{$data->subject_name}} - {{$data->taskType->type_name}}
                                            <span>|</span> {{date('d-M-Y ', strtotime($data['created_at']))}}
                                            <span>|</span> Delivery
                                            {{date('d-M-Y ', strtotime($data['delivery_date']))}}
                                        </p>
                                    </div>
                                    <div class="col-md-4 d-flex flex-column align-items-end text-end">
                                        <div class="text-track">Task ID: {{$data->id}}</div>
                                        <div class="flag-mark">Star</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted text-center">For added safety and your protection, keep
                                    communications and payments
                                    within SOP Craft.</p>



                                @foreach($studentMessages as $item)
                                <div class="chat-group-box mt-4">
                                    <div class="user-chat-name">
                                        <div class="user-photo">
                                            @if ($item['sendertable_type']== 'App\Models\Student')
                                            <img src="{{ asset('images/avatar5.png')}}" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy" width="32" height="32">
                                            @else
                                            <img src="{{ asset('images/avatar.png')}}" class="img-fluid" alt="Essay Help" title="Essay Hel" loading="lazy" width="32" height="32">
                                            @endif
                                        </div>
                                        <div class="user-name">
                                            @if ($item['sendertable_type']== 'App\Models\Student')
                                            <h5 class="text-truncate mb-0">Me
                                                <span>{{date('m-d-Y h:i A', strtotime($item['created_at']))}}</span>
                                                @else
                                                <h5 class="text-truncate mb-0">{{$item['sendertable']['name']}}
                                                    <span>{{date('m-d-Y h:i A', strtotime($item['created_at']))}}</span>
                                                    @endif
                                                </h5>
                                        </div>
                                    </div>
                                    <div class="chat-replied">
                                        <p class="card-text mb-2">{{$item['message']}}</p>
                                        @if($item['attachment'])
                                        <p>
                                            <a href="{{$item['attachment']}}" target="_blank">{{$item['attachment']}}</a>
                                        </p>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="card-footer text-body-secondary">
                                <form action="{{route('order.vieworder',['oid'=>$order_id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @error('message')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                    <div class="input-group">

                                        <input type="text" name="message" class="form-control" placeholder="Send Message...." aria-label="Send Message...." aria-describedby="button-addon2">


                                        <button class="btn btn-outline-secondary border-0" type="button" id="button-addon2">
                                            <label class="input-group-text" for="inputGroupFile01">
                                                <img src="{{ asset('images/basil_attach-solid.svg')}}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="24" height="24">
                                            </label>
                                            <input type="file" name="attachment" class="form-control d-none" id="inputGroupFile01">
                                        </button>
                                        <button type="submit" class="btn btn-primary" style="border-top-right-radius: 12px;border-bottom-right-radius: 12px;">Send</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>


                </div>


            </div>
        </form>
    </div>
</section>

@endsection