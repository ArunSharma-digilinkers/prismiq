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
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <h3>Get Your Personalized Energy Plan</h3>
             
                        <p>
                            Fill out the quick form below with your details and monthly electricity usage. Our team will
                            review your information and provide the most suitable plan designed to help you reduce
                            energy costs and improve efficiency.
                        </p>
                        <img src="img/calculator-img.jpg" class="img-fluid br15">

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
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
                                    <input type="text" name="name" class="form-control">

                                    <label>WhatsApp number *</label>
                                    <input type="tel" name="phone" class="form-control">

                                    <label>Pin code *</label>
                                    <input type="text" name="pincode" class="form-control">

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
                            <form id="society" class="form-section" method="post" action="send-society-lead.php">
                                <label>Full Name *</label>
                                <input type="text" name="name" required class="form-control">

                                <label>Company Name *</label>
                                <input type="text" name="company_name" class="form-control" required>

                                <label>Pin code *</label>
                                <input type="text" name="pincode" class="form-control">

                                <div class="field">
                                    <label>WhatsApp number *</label>
                                    <input type="tel" name="whatsapp_number" placeholder="Enter WhatsApp number" class="form-control" required>
                                </div>

                                <div class="field">
                                    <label>Monthly Electricity Bill *</label>
                                    <select name="monthly_bill" required class="form-control">
                                        <option value="0 - 50000">0 - 50000</option>
                                        <option value="50000 - 1 Lakh">50000 - 1 Lakh</option>
                                        <option value="1 Lakh - 2 Lakh">1 Lakh - 2 Lakh</option>
                                        <option value="2 Lakh +">2 Lakh +</option>
                                    </select>
                                </div>

                                <div class="designation">

                                    <label>What is your designation in Housing Society? *</label>

                                    <div class="designation-buttons">
                                        <button type="button" data-value="Management committee member">Management committee member</button>
                                        <button type="button" data-value="Resident">Resident</button>
                                        <button type="button" data-value="Builder">Builder</button>
                                        <button type="button" data-value="Facility Manager">Facility Manager</button>
                                    </div>
                                 <input type="hidden" name="designation">
                                </div>

                                <!-- AGM STATUS -->

                                <div class="field">
                                    <label>AGM approval status *</label>

                                    <select required class="form-control">
                                        <option disabled selected>Select Approval Status</option>
                                        <option value="We already have AGM approval">We already have AGM approval</option>
                                        <option value="We don't have an AGM approval yet">We don't have an AGM approval yet</option>
                                        <option value="We want help in preparing for our AGM">We want help in preparing for our AGM</option>
                                    </select>

                                </div>

                                <button class="submit-btn">Submit Details</button>
                            </form>

                            <!-- COMMERCIAL FORM -->
                            <form id="commercial" class="form-section" method="post" action="send-commercial-lead.php">
                                <label>Full Name *</label>
                                <input type="text" name="name"  class="form-control" required>

                                <label>Company Name *</label>
                                <input type="text" name="company_name" class="form-control" required>

                                <div class="row">
                                    <div class="field">
                                        <label>City *</label>
                                        <input type="text" name="city" class="form-control" required>
                                    </div>

                                    <div class="field">
                                        <label>Pin code</label>
                                        <input type="text" name="pincode" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="field">
                                        <label>WhatsApp number *</label>
                                        <input type="tel" name="whatsapp_number" placeholder="Enter WhatsApp number" class="form-control" required>
                                    </div>

                                    <div class="field">
                                        <label>Average Monthly Bill *</label>
                                        <input type="text" name="monthly_bill" placeholder="Enter monthly bill" class="form-control" required>
                                    </div>

                                </div>

                                <div class="checkbox">
                                    <input type="checkbox" name="agree" required >
                                    <span>I agree to privacy policy</span>
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