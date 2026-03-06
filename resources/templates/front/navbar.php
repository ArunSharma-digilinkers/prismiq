<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $path; ?>">
            <img src="<?php echo $path; ?>img/logo.png" alt="" class="img-fluid logo-img">
            <!-- <img src="<?php echo $path; ?>img/logo-white.png" alt="" class="img-fluid logo-img dark-mode"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img src="<?php echo $path; ?>img/toggler.png" alt="" class="img-fluid">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item myNav-item">
                    <div class="dropdown">
                        <a
                            class="nav-link myNav-link dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About us
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="company-profile">Company profile</a></li>
                            <li><a class="dropdown-item" href="leadership">Leadership</a></li>
                            <li><a class="dropdown-item" href="certificates">Certificates</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item myNav-item">
                    <div class="dropdown">
                        <a
                            class="nav-link myNav-link dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Product Range
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="energy-generation">Energy Generation</a></li>
                            <li><a class="dropdown-item" href="energy-storage-solutions">Energy Storage Solutions</a></li>
                            <li><a class="dropdown-item" href="e-rickshaw-batteries">E-rickshaw Batteries</a></li>
                            <li><a class="dropdown-item" href="solar-batteries">Solar Batteries</a></li>
                            <li><a class="dropdown-item" href="truck-batteries">Tractor Batteries</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item myNav-item">
                    <div class="dropdown">
                        <a
                            class="nav-link myNav-link dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Our Brands
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="prismiq">Prismiq</a></li>
                            <li><a class="dropdown-item" href="ecolight">Ecolight</a></li>
                            <li><a class="dropdown-item" href="extreme">Extreme</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>contact-us">Contact Us</a>
                </li>
                <li class="nav-item">
                    <div class="calculator-btn">
                        <a href="hm-calculator">Connect with us</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="scroll-point"></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Connect with Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="contact-form" action="mail/mail.php" method="POST">
                    <div class="form-group mrb-small contact-form__group">
                        <label class="contact-form__label" for="inputName">Your Name</label>
                        <input type="text" class="form-control contact-form__input" id="inputName" name="name"
                            placeholder="Enter your name">
                    </div>
                    <div class="form-group mrb-small contact-form__group">
                        <label class="contact-form__label" for="inputMail">Your Email</label>
                        <input type="email" class="form-control contact-form__input" id="inputMail" name="email"
                            placeholder="Enter email">
                    </div>
                    <div class="form-group mrb-small contact-form__group">
                        <label class="contact-form__label" for="inputPhone">Mobile Number</label>
                        <input type="text" class="form-control contact-form__input" id="inputPhone" name="phone"
                            placeholder="Enter your mobile">
                    </div>
                    <div class="form-group mrb-small contact-form__group">
                        <label class="contact-form__label" for="inputMsg">Your Message</label>
                        <textarea class="form-control contact-form__textarea" id="inputMsg" name="message"
                            placeholder="Write your message" rows="5"></textarea>
                    </div>
                    <div class="contact-form__button">
                        <button type="submit" class="btn c-btn" name="contact_submit">Submit</button>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary">Submit</button>
            </div> -->
        </div>
    </div>
</div>