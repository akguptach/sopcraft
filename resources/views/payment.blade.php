@extends('layout.app')
@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
			 <div class="order-summary os-theme my-5">
				<p>Dear Student,</p>

				<p>Thank you for your order. To proceed with payment, please transfer the funds to the following bank account in GBP (£). Kindly include your full name or order number as reference.</p>

				<p>Here are my GBP account details.</p>

				<p>Account holder: ASFA JAVED</p>

				<p>Sort code: 23-14-70</p>

				<p>Account number: 47600337</p>

				<p>IBAN: GB59 TRWI 2314 7047 6003 37</p>

				<p>Wise's address: 56 Shoreditch High Street</p>
				<p>London, E1 6JJ, United Kingdom</p>



				<p>Once the payment is completed, please share the payment proof with us as on WhatsApp as well.</p> 

				<p>If you encounter any difficulties, please don't hesitate to contact us via WhatsApp!</p>

				<p>Thank you.</p>

				<p>Best regards,</p>
				<a href="{{ route('order') }}" class="btn btn-primary w-100" id="btn_checkout" name="btn_checkout">Go To Home</a>
			</div>
                <form action="{{ route('pay') }}" role="form" method="POST" style="display:none;">
                    {{ csrf_field() }}
                    <div class="order-summary os-theme my-5">
                        <input type="hidden" name="order_id" value="{{ $order_id }}">
                        <h2>Order summary</h2>
                        <div class="row">
                            <div class="col-6">
                                <p>Subject</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end subject_div">
                                    {{ $order->subject_name }}
                                </p>
                            </div>
                        </div>
    					<div class="row align-items-end">
                            <div class="col-6">
                                <p>Task Topic</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end referencing_style_div">
                                    {{ $order->task_topic }}
                                </p>
                            </div>
                        </div>
    					<div class="row align-items-end">
                            <div class="col-6">
                                <p>Task type</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end task_type_div">
                                    {{ $order->taskType->type_name }}
                                </p>
                            </div>
                        </div>
    					<div class="row align-items-end">
                            <div class="col-6">
                                <p>Word count</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end no_of_words_div">
                                    {{ $order->no_of_words }}
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-6">
                                <p>Level of study</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end studylabel_div">
                                    {{ $order->studyLevel->label_name }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="row align-items-end">
                            <div class="col-6">
                                <p>Delivery At</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end delivery_at_div">
                                    {{ $order->delivery_date }}
                                </p>
                            </div>
                        </div>
                        <hr class="opacity-25">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="text-tp">Total Price:</p>
                            </div>
                            <div class="col-6">
                                <p class="text-ta text-end total_price">
                                    {{ $order->price }} {{ $order->currency_code }}
                                </p>
                            </div>
                        </div>
                        <hr class="opacity-25">
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
    					<button type="submit" data-bs-toggle="modal" class="btn btn-primary w-100" id="btn_checkout" name="btn_checkout">Pay Now
    					</button>
				    </div>
                </form>
                <script src="https://js.stripe.com/v3/"></script>
            </div>
        </div>
    </div>
</main>
@endsection
@push('js')
    <script src="https://js.stripe.com/v3/"></script>
@endpush