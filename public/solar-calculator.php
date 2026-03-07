<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
    <div class="main-wrapper">


        <div class="form-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>Get Your Personalized Energy Plan</h3>
                        <h4>Tell us a little about your home or business so we can recommend the best energy solution
                            for you.</h4>
                        <p>
                            Fill out the quick form below with your details and monthly electricity usage. Our team will
                            review your information and provide the most suitable plan designed to help you reduce
                            energy costs and improve efficiency.
                        </p>

                        <img src="img/calculator-img.jpg" class="img-fluid br15">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="calculator-form-container">

                            <!-- CATEGORY BUTTONS -->
                            <div class="tabs">
                                <button class="tab active" data-tab="residential">Residential</button>
                                <button class="tab" data-tab="society">Housing Society</button>
                                <button class="tab" data-tab="commercial">Commercial</button>
                            </div>

                            <form id="residential" method="post" action="send-residential-lead.php">

                                <!-- STEP 0 -->
                                <div class="step active" id="step0">

                                    <label>Full Name *</label>
                                    <input type="text" name="name" class="form-control" required>

                                    <label>WhatsApp number *</label>
                                    <input type="tel" name="phone" class="form-control" required>

                                    <label>Pin code *</label>
                                    <input type="text" name="pincode" class="form-control" required>

                                    <label>What is your average monthly bill?</label>

                                    <div class="bill-options">

                                        <button type="button" class="bill-btn" data-value="1200">Less than
                                            ₹1500</button>
                                        <button type="button" class="bill-btn" data-value="2000">₹1500 – ₹2500</button>
                                        <button type="button" class="bill-btn" data-value="3500">₹2500 – ₹4000</button>
                                        <button type="button" class="bill-btn" data-value="6000">₹4000 – ₹8000</button>
                                        <button type="button" class="bill-btn" data-value="9000">More than
                                            ₹8000</button>

                                    </div>

                                    <input type="hidden" name="monthly_bill" id="monthly_bill">

                                    <input type="hidden" name="roof_owner">
                                    <input type="hidden" name="constructed">
                                    <input type="hidden" name="roof_type">
                                    <input type="hidden" name="terrace">
                                    <input type="hidden" name="power_cut">
                                    <input type="hidden" name="timeline">

                                    <div class="checkbox">
                                        <input type="checkbox" name="agree" required>
                                        <span>I agree to terms & privacy policy</span>
                                    </div>

                                    <button type="button" class="submit-btn" id="next1">Next</button>

                                </div>


                                <!-- STEP 1 -->
                                <div class="step" id="step1">

                                    <h4 class="question">Do you own the roof?</h4>

                                    <div class="option-group">
                                        <button type="button" class="option-btn" data-name="roof_owner"
                                            data-value="Yes">Yes</button>
                                        <button type="button" class="option-btn" data-name="roof_owner"
                                            data-value="No">No</button>
                                    </div>

                                    <input type="hidden" name="roof_owner">

                                    <h4 class="question">Is your house fully constructed?</h4>

                                    <div class="option-group">
                                        <button type="button" class="option-btn" data-name="constructed"
                                            data-value="Yes">Yes</button>
                                        <button type="button" class="option-btn" data-name="constructed"
                                            data-value="No">No</button>
                                    </div>

                                    <input type="hidden" name="constructed">

                                    <h4 class="question">Roof Type</h4>

                                    <div class="option-group">
                                        <button type="button" class="option-btn" data-name="roof_type"
                                            data-value="Concrete">Concrete</button>
                                        <button type="button" class="option-btn" data-name="roof_type"
                                            data-value="Metal">Metal</button>
                                        <button type="button" class="option-btn" data-name="roof_type"
                                            data-value="Other">Other</button>
                                    </div>

                                    <input type="hidden" name="roof_type">

                                    <button type="button" class="submit-btn" id="next2">Next</button>

                                </div>


                                <!-- STEP 2 -->
                                <div class="step" id="step2">

                                    <label>Terrace Size (sq ft)</label>
                                    <input type="number" name="terrace">

                                    <h4>Do you face power cuts?</h4>

                                    <button type="button" class="option-btn" data-name="power_cut"
                                        data-value="Yes">Yes</button>
                                    <button type="button" class="option-btn" data-name="power_cut"
                                        data-value="No">No</button>

                                    <input type="hidden" name="power_cut">

                                    <h4>When do you want solar installed?</h4>

                                    <button type="button" class="option-btn" data-name="timeline"
                                        data-value="Immediately">Immediately</button>
                                    <button type="button" class="option-btn" data-name="timeline"
                                        data-value="3 Months">3 Months</button>
                                    <button type="button" class="option-btn" data-name="timeline"
                                        data-value="6 Months">6 Months</button>

                                    <input type="hidden" name="timeline">

                                    <br><br>

                                    <button type="button" class="submit-btn" id="next3">Next</button>

                                </div>


                                <!-- STEP 3 -->
                                <div class="step" id="step3">

                                    <label>Address</label>
                                    <textarea name="address"></textarea>

                                    <label>City</label>
                                    <input type="text" name="city">

                                    <label>State</label>
                                    <input type="text" name="state">

                                    <br><br>

                                    <button type="submit" class="submit-btn">Get Estimate</button>

                                </div>

                            </form>


                            <!-- HOUSING SOCIETY FORM -->
                            <form id="society" class="form-section">
                                <label>Full Name *</label>
                                <input type="text" required>

                                <label>Company Name *</label>
                                <input type="text" required>

                                <label>Pin code *</label>
                                <input type="text">

                                <div class="field">
                                    <label>WhatsApp number *</label>
                                    <input type="tel" placeholder="Enter WhatsApp number" required>
                                </div>

                                <div class="field">
                                    <label>Monthly Electricity Bill *</label>
                                    <select required>
                                        <option>0 - 50000</option>
                                        <option>50000 - 1 Lakh</option>
                                        <option>1 Lakh - 2 Lakh</option>
                                        <option>2 Lakh +</option>
                                    </select>
                                </div>

                                <div class="designation">

                                    <label>What is your designation in Housing Society? *</label>

                                    <div class="designation-buttons">
                                        <button type="button">Management committee member</button>
                                        <button type="button">Resident</button>
                                        <button type="button">Builder</button>
                                        <button type="button">Facility Manager</button>
                                    </div>

                                </div>

                                <!-- AGM STATUS -->

                                <div class="field">
                                    <label>AGM approval status *</label>

                                    <select required>
                                        <option disabled selected>Select Approval Status</option>
                                        <option>We already have AGM approval</option>
                                        <option>We don't have an AGM approval yet</option>
                                        <option>We want help in preparing for our AGM</option>
                                    </select>

                                </div>

                                <button class="submit-btn">Submit Details</button>
                            </form>


                            <!-- COMMERCIAL FORM -->
                            <form id="commercial" class="form-section">
                                <label>Full Name *</label>
                                <input type="text" required>

                                <label>Company Name *</label>
                                <input type="text" required>

                                <div class="row">
                                    <div class="field">
                                        <label>City *</label>
                                        <input type="text" required>
                                    </div>

                                    <div class="field">
                                        <label>Pin code</label>
                                        <input type="text">
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="field">
                                        <label>WhatsApp number *</label>
                                        <input type="tel" placeholder="Enter WhatsApp number">
                                    </div>

                                    <div class="field">
                                        <label>Average Monthly Bill *</label>
                                        <input type="text" placeholder="Enter monthly bill">
                                    </div>

                                </div>

                                <div class="checkbox">
                                    <input type="checkbox" required>
                                    <span>I agree to SolarSquare's terms of service & privacy policy</span>
                                </div>

                                <button class="submit-btn">Submit Details</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>