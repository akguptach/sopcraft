<!-- Login Pop-up -->
<div class="modal fade" id="forgetPasswordModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="signup-form">
                            <div class="d-flex justify-content-between px-3">
                                <img src="{{ asset('images/sop-craft-logo.svg')}}" alt="Essay Help" title="Essay Help" width="150" height="22">
                                <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            @livewire('reset-password')
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <div class="popup-content">
                            <div class="pc-wrapper">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                <h2>Your Essay Help account</h2>
                                <ul class="tickmark-list">
                                    <li>Access to online tutors 24/7</li>
                                    <li>Organize and manage your tasks</li>
                                    <li>Homework help in any subject</li>
                                </ul>
                            </div>

                            <img src="{{ asset('images/graduate-girl-small.png') }}" class="img-fluid" alt="Essay Help" title="Essay Help"
                                width="312" height="679">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Login Pop-up -->
<style>
.error{
    color:red;
    padding:5px;
}
.success{
    color:green;
    padding:5px;
}
.form-common .input-group-text{
    height: 62px;
}
</style>