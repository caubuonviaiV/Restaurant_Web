@extends('user.layout/main')

@section('content')
<main>

    <div class="pattern_2">
        <div class="container margin_120_100 pb-0">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center d-none d-lg-block" data-cue="slideInUp">
                    <img src="img/chef.png" width="400" height="733" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-8" data-cue="slideInUp">
                    <div class="main_title">
                        <span><em></em></span>
                        <h2>Reserve a table</h2>
                        <p>or Call us at 0344 32423453</p>
                    </div>
                    <div id="wizard_container">
                        <form id="wrapped" method="POST">
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div class="step">
                                    <h3 class="main_question"><strong>1/3</strong> Please Select a date</h3>
                                    <div class="form-group">
                                        <input type="hidden" name="datepicker_field" id="datepicker_field" class="required">
                                    </div>
                                    <div id="DatePicker"></div>
                                </div>
                                <!-- /step-->
                                <div class="step">
                                    <h3 class="main_question"><strong>2/3</strong> Select time and guests</h3>
                                    <div class="step_wrapper">
                                        <h4>Time</h4>
                                        <div class="radio_select add_bottom_15">
                                            <ul>
                                                <li>
                                                    <input type="radio" id="time_1" name="time" value="12.00am" class="required">
                                                    <label for="time_1">12.00</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_2" name="time" value="12.30pm" class="required">
                                                    <label for="time_2">12.30</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_3" name="time" value="1.00pm" class="required">
                                                    <label for="time_3">1.00</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_4" name="time" value="1.30pm" class="required">
                                                    <label for="time_4">1.30</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_5" name="time" value="08.00pm" class="required">
                                                    <label for="time_5">8.00</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_6" name="time" value="08.30pm" class="required">
                                                    <label for="time_6">8.30</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_7" name="time" value="09.00pm" class="required">
                                                    <label for="time_7">9.00</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_8" name="time" value="09.30pm" class="required">
                                                    <label for="time_8">9.30</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /time_select -->
                                    </div>
                                    <!-- /step_wrapper -->
                                    <div class="step_wrapper">
                                        <h4>How many people?</h4>
                                        <div class="radio_select">
                                            <ul>
                                                <li>
                                                    <input type="radio" id="people_1" name="people" value="1" class="required">
                                                    <label for="people_1">1</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="people_2" name="people" value="2" class="required">
                                                    <label for="people_2">2</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="people_3" name="people" value="3" class="required">
                                                    <label for="people_3">3</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="people_4" name="people" value="4" class="required">
                                                    <label for="people_4">4</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /people_select -->
                                    </div>
                                    <!-- /step_wrapper -->
                                </div>
                                <!-- /step-->
                                <div class="submit step">
                                    <h3 class="main_question"><strong>3/3</strong> Please fill with your details</h3>
                                    <div class="form-group">
                                        <input type="text" name="name_reserve" class="form-control required" placeholder="First and Last Name">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email_reserve" class="form-control required" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="telephone_reserve" class="form-control required" placeholder="Your Telephone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="opt_message_reserve" placeholder="Please provide any additional info"></textarea>
                                    </div>
                                    <div class="form-group terms">
                                        <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
                                            <input type="checkbox" name="terms" value="Yes" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Prev</button>
                                <button type="button" name="forward" class="forward">Next</button>
                                <button type="submit" name="process" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /pattern_2 -->

</main>
<!-- /main -->
@endsection

@section('script')
<script src="teamplate/js/wizard/wizard_scripts.min.js"></script>
<script src="teamplate/js/wizard/wizard_func.js"></script>
@endsection

