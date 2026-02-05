<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<div class="banner-wrap">
    <img src="img/contact-us-banner.jpg" class="img-fluid">
</div>

<main class="s1">
    <div class="main-wrapper">

        <div class="main-cover">

            <section class="contact-page-section section-entry">
                <div class="container">

                    <div class="row">
                        <div class="contact-wrapper">
                            <div class="col-lg-10 offset-md-1 col-md-12">
                                <div class="contact-form-wrap">
                                    <div class="section-title">
                                        <h1>Get in Touch</h1>
                                    </div>
                                    <div class="mrb30">
                                        <p>
                                            Please fill out this quick form and we will be in touch with you.
                                        </p>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <form class="contact-form" action="mail/mail.php" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group mrb-small contact-form__group">
                                                            <label class="contact-form__label" for="inputName">First
                                                                Name</label>
                                                            <input type="text" class="form-control contact-form__input"
                                                                id="inputName" name="name"
                                                                placeholder="Enter your first name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group mrb-small contact-form__group">
                                                            <label class="contact-form__label" for="inputMail">Last
                                                                Name</label>
                                                            <input type="email" class="form-control contact-form__input"
                                                                id="inputMail" name="name"
                                                                placeholder="Enter your last name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group mrb-small contact-form__group">
                                                            <label class="contact-form__label" for="inputPhone">Mobile
                                                                Number</label>
                                                            <input type="text" class="form-control contact-form__input"
                                                                id="inputPhone" name="phone"
                                                                placeholder="Enter your mobile">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group mrb-small contact-form__group">
                                                            <label class="contact-form__label" for="inputPhone">Your
                                                                Email</label>
                                                            <input type="text" class="form-control contact-form__input"
                                                                id="inputPhone" name="email" placeholder="Enter email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group mrb-small contact-form__group">
                                                            <label class="contact-form__label" for="inputMsg">Your
                                                                Message</label>
                                                            <textarea class="form-control contact-form__textarea"
                                                                id="inputMsg" name="message"
                                                                placeholder="Write your message" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contact-form__button">
                                                    <button type="submit" class="btn c-btn"
                                                        name="contact_submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <div class="cont-info-wrapper section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                            <div class="cont-info-card-1">
                                <h3>Talk to us:</h3>
                                <p>
                                    <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a href="tel:+91 7428466522">+91
                                        7428466522</a>
                                </p>
                                <p>
                                    <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a href="tel:+91 9599568529">+91
                                        9599568529</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                            <div class="cont-info-card-2">
                                <h3>Address</h3>
                                <p>
                                    <i class="fa-solid fa-location-dot"></i> <span>Surajpur Industrial Area, Gr. Noida,
                                        UP</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                            <div class="cont-info-card-3">
                                <h3>Email us:</h3>
                                <p>
                                    <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a
                                        href="mailto:business@prismiqind.com">business@prismiqind.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.987158467062!2d77.49380451047863!3d28.479933375647278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cebcec0c53b17%3A0x1f00ba008d4c6566!2sPrismiq%20Industries%20Pvt.%20Ltd.%20-%20Battery%20Manufacturers%20in%20Greater%20Noida!5e0!3m2!1sen!2sin!4v1747803045367!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>

        </div>

        <div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>