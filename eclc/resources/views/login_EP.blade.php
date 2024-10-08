<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - LSO</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Nunito.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/File-Manager.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Filter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Form-Select---Full-Date---Month-Day-Year-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Form-Select---Full-Date---Month-Day-Year.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Forum---Thread-listing-forum.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Forum---Thread-listing.css') }}">
</head>

<body class="bg-gradient-primary" style="background: rgb(141,0,0);">
    <div class="container">
        <div class="row justify-content-center" style="border-color: rgb(141,0,0);">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-flex">
                                    <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/clipboard-image.png&quot;);"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4"></h4><img src="assets/img/clipart708931.png" style="width: 100px;">
                                        </div>
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Welcome Back!</h4>
                                        </div>
                                        <form class="user">
                                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
                                            <div class="mb-3">
                                                <!-- Start: Form Select - Full Date - Month, Day, Year -->
                                                <div class="row">
                                                    <div class="col-sm-12 col-lg-12 col-xxl-12" style="padding: 0px;padding-left: 10px;width: 420px;"><select class="form-select display-inline-block" style="margin-right: 10px;width: 175px;">
                                                            <optgroup label="Birth Month">
                                                                <option value="January">January</option>
                                                                <option value="February">February</option>
                                                                <option value="March">March</option>
                                                                <option value="April">April</option>
                                                                <option value="May">May</option>
                                                                <option value="June">June</option>
                                                                <option value="July">July</option>
                                                                <option value="August">August</option>
                                                                <option value="September">September</option>
                                                                <option value="October">October</option>
                                                                <option value="November">November</option>
                                                                <option value="December">December</option>
                                                            </optgroup>
                                                        </select><select class="form-select display-inline-block" style="margin-right: 10px;width: 80px;">
                                                            <optgroup label="Birth Date">
                                                                <option value="1" selected="">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                            </optgroup>
                                                        </select><select class="form-select display-inline-block" style="width: 135px;">
                                                            <optgroup label="Birth Year">
                                                                <option value="2016" selected="">2016</option>
                                                                <option value="2017">2017</option>
                                                            </optgroup>
                                                        </select></div>
                                                </div><!-- End: Form Select - Full Date - Month, Day, Year -->
                                            </div>
                                            <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password"></div>
                                            <div class="mb-3">
                                                <div class="custom-control custom-checkbox small">
                                                    <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                                </div>
                                            </div>
                                        </form>
                                        <div><a class="btn btn-primary" role="button" href="user.html" style="width: 420px;background: rgb(141,0,0);border-color: rgb(141,0,0);">Login</a></div>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col" style="height: 20px;"></div>
                                            <div class="col-xxl-5" style="text-align: center;height: 20px;"><a class="small" href="Forgot_Password.html">Forgot Password?</a></div>
                                            <div class="col" style="height: 20px;"></div>
                                        </div>
                                        <div><span><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0.7);">By using this service, you understood and agree to the PUP Online Services&nbsp;</span><a href="https://www.pup.edu.ph/terms" target="_blank"><span style="color: rgb(0, 123, 255); background-color: rgba(255, 255, 255, 0.7);">Terms of Use</span></a><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0.7);">&nbsp;and&nbsp;</span><a href="https://www.pup.edu.ph/privacy" target="_blank"><span style="color: rgb(0, 123, 255); background-color: rgba(255, 255, 255, 0.7);">Privacy Statement</span></a></span>
                                            <div class="row">
                                                <div class="col" style="margin-top: 10px;">
                                                    <div class="row">
                                                        <div class="col" style="height: 20px;"></div>
                                                        <div class="col-xxl-6" style="text-align: center;height: 20px;"><a class="small" href="GUESS_CROS_Add_New_Daycare.html" style="margin-top: 10px;color: rgb(0,0,0);">Guest (Daycare Enrollment)</a></div>
                                                        <div class="col" style="height: 20px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center"></div>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Input-Image-With-Preview-input_image_preview.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/Toggle-Password-toggle-pass.js"></script>
</body>

</html>