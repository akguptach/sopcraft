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
            enctype="multipart/form-data" action="#">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <!-- order summary form 1 -->
                    <div id="osForm1" class="order-summary">
                        <h2 class="border-0">
                            Task Details <span><em>1</em> of 2</span>
                        </h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <div class="input-group">
                                        <input name="subject_name" id="subject_name" type="text"
                                            class="form-control text-start border-0"
                                            value="@if (app('request')->input('subject_name')) {{ app('request')->input('subject_name') }} @endif"
                                            required />
                                    </div>
                                    <span class="error-message" id="subject_name-error"
                                        style="display: none; color:red;">Please enter subject</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="taskTopic" class="form-label">Task topic</label>
                                    <div class="input-group">
                                        <input name="task_topic" id="task_topic" type="text"
                                            class="form-control text-start border-0"
                                            value="@if (app('request')->input('task_topic')) {{ app('request')->input('task_topic') }} @endif" />
                                    </div>
                                    <span class="error-message" id="task_topic-error"
                                        style="display: none; color:red;">Please enter task topic</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="taskType" class="form-label">Task type</label>
                                    <select class="form-select select2" id="task_type_id" name="task_type_id"
                                        aria-label="taskType">
                                        <option value="" selected>Select task type</option>
                                        @if (!empty($task_types))
                                        : @foreach ($task_types as $task_type)
                                        <option value="<?= $task_type['id'] ?>" @if (app('request')->
                                            input('task_type_id') == $task_type['id'])
                                            {{ 'selected' }}
                                            @endif ><?= $task_type['type_name'] ?></option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <span class="error-message" id="task_type_id-error"
                                    style="display: none; color:red;">Please select task type</span>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="studylabel_id" class="form-label">Level of study</label>
                                    <select class="form-select select2" id="studylabel_id" name="studylabel_id"
                                        aria-label="studylabel_id">
                                        {{-- <option selected>Select level of study</option> --}}
                                        <option value="" selected>Select level of study</option>
                                        @if (!empty($levels))
                                        :
                                        @foreach ($levels as $level)
                                        <option value="<?= $level['id'] ?>" @if (app('request')->input('studylabel_id')
                                            == $level['id'])
                                            {{ 'selected' }}
                                            @endif><?= $level['level_name'] ?></option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <span class="error-message" id="studylabel_id-error"
                                    style="display: none; color:red;">Please select the level of study</span>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="wordCount" class="form-label">Word count</label>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-secondary btn-minus" onclick="minus(this)"
                                            type="button">-</button>
                                        <input type="text" class="form-control" placeholder=""
                                            aria-label="taskDate text with button addon"
                                            aria-describedby="button-addon1"
                                            value="@if (app('request')->input('no_of_words')) {{ app('request')->input('no_of_words') }} @else {{ '1000' }} @endif"
                                            id="no_of_words" name="no_of_words">
                                        <button class="btn btn-outline-secondary btn-plus" onclick="add(this)"
                                            type="button">+</button>
                                    </div>
                                    <span class="error-message" id="no_of_words-error"
                                        style="display: none; color:red;">Please choose no of words</span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="title-task-box">
                                    <input id="title" name="title" type="text" class="form-control"
                                        placeholder="Add a title for your Task/Project" />
                                    <hr class="my-0" />
                                    <span class="error-message" id="title-error"
                                        style="display: none; color:red;">Please enter title for your
                                        task/project</span>
                                    <textarea class="form-control" id="task" name="task" rows="3"
                                        placeholder="Tell us more about your task.."></textarea>
                                    <span class="error-message" id="task-error" style="display: none; color:red;">Please
                                        enter more about your task</span>

                                    <div class="file-upload-box">
                                        <!--<label for="taskFile" class="form-label">Attach files</label>-->
                                        <!--<input class="form-control" id="taskFile" type="file" />-->
                                        <a for="taskFile" class="form-label" data-bs-toggle="modal"
                                            href="#fileuploadModal">Attach files</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p class="text-note">Upload your files here, if any. The file size limit is 100 Mb per
                                    file</p>
                            </div>
                            <span class="error-message" id="fileuploadrerror"
                                style="display: none; color:red;display: none;">Please select file</span>

                            <div class="col-md-12 mb-3">
                                {{-- <div class="row gy-3 hours-list mb-3"><div id="error_msg"></div></div> --}}

                                <input type="hidden" id="delivery_date" name="delivery_date" value="" /> <input
                                    type="hidden" id="delivery_price" name="delivery_price" value="0" />
                            </div>
                            <div class="col-md-12 mb-3">

                                <div class="calendar-body">



                                    <div id="datepicker" data-date="01/23/2024"></div>


                                </div>
                                <span class="error-message" id="delivery_date-error"
                                    style="display: none; color:red;">Please select date</span>

                            </div>
                        </div>

                    </div>

                    <!-- order summary form 2 -->
                    <div id="osForm2" class="order-summary d-none">
                        <a href="javascript:;" id="preForm">Previous</a>
                        <h2 class="border-0">
                            Task Details <span><em>2</em> of 2</span>
                        </h2>


                        <div class="row">
                            <div class="col-md-12">
                                <label for="task1" class="form-label mb-3">Why have you selected the particular
                                    course/field of study & how it will enhance your career.</label>
                                <div class="title-task-box ta-task">
                                    <textarea class="form-control" id="task1" rows="3"
                                        placeholder="Write your answer here" name="tasktitle[]"></textarea>
                                    <div class="text-end">
                                        <div class="file-upload-box">
                                            <label for="taskFile" class="form-label">Attach files</label>
                                            <input class="form-control" id="taskFile" type="file" name="taskfile[]" />
                                        </div>
                                    </div>
                                </div>
                                <span class="error-message" id="tasktitle-error"
                                    style="display: none; color:red;">Please enter subject</span>
                                <span class="error-message" id="taskFile-error" style="display: none; color:red;">Please
                                    enter subject</span>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="task1" class="form-label mb-3">Your Accomplishments in Academics,
                                    Extra-curricular & Sports Activities etc.</label>
                                <div class="title-task-box ta-task">
                                    <textarea class="form-control" id="task1" rows="3"
                                        placeholder="Write your answer here" name="tasktitle[]"></textarea>
                                    <div class="text-end">
                                        <div class="file-upload-box">
                                            <label for="taskFile" class="form-label">Attach files</label>
                                            <input class="form-control" id="taskFile" type="file" name="taskfile[]" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="task1" class="form-label mb-3">In case of relevant Work Experience,
                                    mention the connection with the course.</label>
                                <div class="title-task-box ta-task">
                                    <textarea class="form-control" id="task1" rows="3"
                                        placeholder="Write your answer here" name="tasktitle[]"></textarea>
                                    <div class="text-end">
                                        <div class="file-upload-box">
                                            <label for="taskFile" class="form-label">Attach files</label>
                                            <input class="form-control" id="taskFile" type="file" name="taskfile[]" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="task1" class="form-label mb-3">Your long term Career Goals & how will
                                    you achieve them.</label>
                                <div class="title-task-box ta-task">
                                    <textarea class="form-control" id="task1" rows="3"
                                        placeholder="Write your answer here" name="tasktitle[]"></textarea>
                                    <div class="text-end">
                                        <div class="file-upload-box">
                                            <label for="taskFile" class="form-label">Attach files</label>
                                            <input class="form-control" id="taskFile" type="file" name="taskfile[]" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="task1" class="form-label mb-3">Why are you applying to the particular
                                    institution & country?</label>
                                <div class="title-task-box ta-task">
                                    <textarea class="form-control" id="task1" rows="3"
                                        placeholder="Write your answer here" name="tasktitle[]"></textarea>
                                    <div class="text-end">
                                        <div class="file-upload-box">
                                            <label for="taskFile" class="form-label">Attach files</label>
                                            <input class="form-control" id="taskFile" type="file" name="taskfile[]" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

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

                            <p class="text-center text-tcnp">By proceeding to checkout you accept our <a href="#"
                                    class="link">Terms and Conditions</a> and <a href="#" class="link">Privacy
                                    Policy</a>.</p>

                            <button id="nextForm" type="button" class="btn btn-primary w-100">Next</button>

                            @guest
                            <div id="ordersubmit_div"><button type="button" id="checkOutBtn" data-bs-toggle="modal"
                                    href="#loginModal" class="btn btn-primary w-100 d-none"
                                    name="btn_checkout">Checkout</button></div>
                            @endguest
                            @auth <button type="submit" id="checkOutBtn" class="btn btn-primary w-100 d-none"
                                name="btn_checkout">Checkout</button> @endauth
                        </div>

                        <div class="whn-block">
                            <h3>What happens next?</h3>
                            <p>We will assign a tutor who's an expert in your subject. We'll keep you updated on the
                                progress.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<div class="modal fade" id="fileuploadModal" tabindex="-1" aria-labelledby="fileuploadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <form class="file-upload-form" id="file_upload_form" enctype="multipart/form-data" action="#"
            enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Your Files</h5>

                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email1">Upload Zip attachment</label>
                        <input type="file" class="form-control" name="fileupload" id="fileupload">
                        <small id="emailHelp" class="form-text text-muted" style="font-size: 12px;">You can upload
                            your attachment less then 100MB. Only Zip,Doc,Pdf</small>
                    </div>
                    <div class="text-center my-4 text-muted">OR</div>
                    <div class="form-group">
                        <label for="password1">Copy/Paste WeTransfer Url</label>
                        <input type="text" class="form-control" placeholder="" name="file_upload_url"
                            id="file_upload_url">
                        <small id="emailHelp" class="form-text text-muted" style="font-size: 12px;">More then 100MB
                            file go with wetransfer <a href="https://wetransfer.com/" target="_blank">click
                                here</a></small>

                    </div>

                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary w-100" name="Submit" value="Submit">
                    <a href="#" id="cancelBtn">Cancel</a>
                </div>

            </div>
        </form>
    </div>
</div>
<!--/ Login Pop-up -->
@if (session()->has('payment_status') && session('payment_status') == 'Success')
<script>
Swal.fire({
    title: "Thank You",
    text: "Your order has been added successfully.",
    icon: "success"
});
</script>
@endif @if (session()->has('payment_status') && session('payment_status') == 'Failed')
<script>
Swal.fire({
    title: "Failed",
    text: "Your order has been failed.",
    icon: "error"
});
</script>
@endif
<script>
$(function() {
    $('.select2').select2({
        placeholder: 'Select an option'
    });
    pricecal();
    $("#subject_name").on("keyup", function() {
        var end = this.value;
        $('.subject_div').text(end);
    });
    $("#no_of_words").on("keyup", function() {
        var end = this.value;
        $('.no_of_words_div').text(end);
        pricecal();
    });

    $("#task_topic").on("keyup", function() {

        var end = this.value;
        $('.task_topic_div').text(end);
    });

    $("#task_type_id").change(function() {

        var end = $("#task_type_id option:selected").text();
        $('.task_type_div').text(end);
        pricecal();
    });
    $("#studylabel_id").change(function() {
        var end = $("#studylabel_id option:selected").text();
        $('.studylabel_div').text(end);
        pricecal();

    });


    add = function(obj) {
        var count = $(obj).siblings('input').val();
        $(obj).siblings('input').val(parseInt(++count));
        $('.no_of_words_div').text(parseInt(count));
        pricecal();
    }
    minus = function(obj) {
        var count = $(obj).siblings('input').val();
        if (count > 0) {
            $(obj).siblings('input').val(parseInt(count - 1))
            $('.no_of_words_div').text(parseInt(count - 1));
            pricecal();
        }
    }


    $("#order_form").validate({
        rules: {
            title: {
                required: true
            },
            task: {
                required: true
            },
            subject_name: {
                required: true
            },
            task_topic: {
                required: true
            },
        },
        submitHandler: function(form) {
            var formData = new FormData(form);

            // Include values from the file upload modal
            var fileUploadForm = $("#file_upload_form")[0];
            formData.append('fileupload', fileUploadForm.fileupload.files[0]);
            formData.append('file_upload_url', fileUploadForm.file_upload_url.value);



            $.ajax({
                type: 'POST',
                url: "{{ route('neworder') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status === 'order added successfully.' && response
                        .order_id) {
                        window.location.href = 'payment?id=' + response.order_id;
                    } else {
                        window.location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors
                }
            });

            // Close the modal
            $(form).closest('.modal').modal('hide');

            return false;
        }
    });

});

function pricecal() {
    $('.subject_div').text($("#subject_name").val());
    $('.task_topic_div').text($("#task_topic").val());
    $('.task_type_div').text($("#task_type_id option:selected").text());
    $('.studylabel_div').text($("#studylabel_id option:selected").text());
    $('.no_of_words_div').text($("#no_of_words").val());


    var data = $('#order_form').serialize();
    $.ajax({
        type: 'post',
        url: "{{ route('price') }}",
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function() {
            //before sending the request            
        },
        success: function(response) {
            $('#error_msg').html('');
            if (response.success == 'false') {
                let error = response.message;
                $.each(error, function(index, value) {
                    $('#error_msg').append('<div class="alert alert-danger">' + value +
                        '<div>');
                });
            } else {

                $('#delivery_price').val(response.price1);
                $('.total_price').text(response.price);

            }
        },
        complete: function(response) {
            //the request is completed            
        }
    });
}

$("#file_upload_form").submit(function(e) {
    e.preventDefault(); // Prevent the default form submission
    // Your form submission logic here

    // Close the modal
    $("#fileuploadModal").modal("hide");
});

$("#cancelBtn").click(function() {
    // Close the modal on cancel button click
    $("#fileuploadModal").modal("hide");
});
</script>

{{-- <script>
    $(document).ready(function() {
        $('#nextForm').click(function() {
            var errorMessages = '';
            $('#order_form [required]').each(function() {
                if (!$(this).val()) {
                    var fieldName = $(this).attr('name');
                    errorMessages += 'Please enter ' + fieldName + '.<br>';
                }
            });

            if (errorMessages) {
                $('#errorMessages').html(errorMessages).addClass('text-danger');
            } else {
                // Form is valid, you can proceed with form submission or other actions
                $('#errorMessages').empty().removeClass('text-danger');
                $('#order_form').submit(); // For example, submit the form
            }
        });
    });
</script> --}}
{{-- <script>
    $(document).ready(function() {
        $('#nextForm').click(function() {
            var isValid = true;
            var fields = ['subject_name', 'task_topic', 'task_type_id', 'studylabel_id', 'no_of_words', 'title','task', 'delivery_date', 'fileupload'];

            $.each(fields, function(index, fieldName) {
                var fieldValue = $('#order_form [name="' + fieldName + '"]').val();
                if (!fieldValue) {
                    isValid = false;
                    $('#'+ fieldName +'-error').show();
                    

                } else {
                    $('#'+ fieldName +'-error').hide();
                }
            });

            if (isValid) {
                $('#errorMessages').hide();
                $('#order_form').submit(); // Submit the form if all fields are filled out
            } else {
                $('#errorMessages').show();
                $('#osForm1').show();
                $('#osForm2').hide();
            }
        });
    });
</script> --}}

<script>
$(document).ready(function() {
    $('#nextForm').click(function(event) {
        event.preventDefault();
        var isValid = true;
        var fields = ['subject_name', 'task_topic', 'task_type_id', 'studylabel_id', 'no_of_words',
            'title', 'task', 'delivery_date'
        ];
        var filup = $('#fileupload').val();
        $.each(fields, function(index, fieldName) {
            var fieldValue = $('#order_form [name="' + fieldName + '"]').val();
            if (!fieldValue) {
                isValid = false;
                $('#' + fieldName + '-error').show();
            } else {
                $('#' + fieldName + '-error').hide();
            }
        });

        if (isValid) {
            $('#errorMessages').hide();
            $("#osForm2").removeClass("d-none");
            $("#osForm1").addClass("d-none");
            $("#checkOutBtn").removeClass("d-none");
            $("#nextForm").addClass("d-none");
        } else {
            $('#errorMessages').show();
            $("#osForm2").addClass("d-none");
            $("#osForm1").removeClass("d-none");
            $("#checkOutBtn").addClass("d-none");
            $("#nextForm").removeClass("d-none");
        }

        if (filup !== null && filup !== undefined && filup !== "" && filup.length !== 0) {
            $('#fileuploadrerror').hide();
        } else {
            $('#fileuploadrerror').show();
            $("#osForm2").addClass("d-none");
            $("#osForm1").removeClass("d-none");
            $("#checkOutBtn").addClass("d-none");
            $("#nextForm").removeClass("d-none");
        }
    });
});
</script>


{{-- form 2 validation
<script>
    $(document).ready(function() {
    $('#checkOutBtn').click(function(event) {
        event.preventDefault(); // Prevent the default form submission behavior
        
        var isValid = true;
        var fields = ['subject_name', 'task_topic', 'task_type_id', 'studylabel_id', 'no_of_words', 'title', 'task', 'delivery_date'];

        $.each(fields, function(index, fieldName) {
            var fieldValue = $('#order_form [name="' + fieldName + '"]').val();
            if (!fieldValue) {
                isValid = false;
                $('#'+ fieldName +'-error').show();
            } else {
                $('#'+ fieldName +'-error').hide();
            }
        });

        if (isValid) {
            $('#errorMessages').hide();
        } else {

            $('#errorMessages').show();
        }
    });
});
</script> --}}
@endsection