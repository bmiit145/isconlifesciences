<style>
    /* Form */

    .nice-select.open .list {
        width: 100% !important;
    }


    .contactform__input_select {
        width: 100% !important;
        height: 60px !important;
        padding: 0 20px !important;
        border-radius: 4px !important;
        border: 1px solid var(--tp-border-primary) !important;
        color: #9294aa !important;
        font-size: 16px !important;
        outline: 0 !important;
        box-shadow: 0px 16px 24px rgba(189, 196, 205, 0.13) !important;
        display: flex;
        align-items: center;
    }

    .nice-select .option:hover {
        cursor: pointer;
        font-weight: 400;
        line-height: 40px;
        list-style: none;
        min-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 29px;
        text-align: left;
        -webkit-transition: all 0.2s;
        transition: all 0.2s;
        background-color: #0D5496;
        color: #fff;
        transition: 0.7s;
    }

    .contactform input,
    .contactform select {
        width: 100% !important;
        height: 60px !important;
        padding: 0 20px !important;
        border-radius: 4px !important;
        border: 1px solid var(--tp-border-primary) !important;
        color: var(--tp-heading-primary) !important;
        font-size: 16px !important;
        outline: 0 !important;
        box-shadow: 0 16px 24px rgba(189, 196, 205, .13) !important;
    }

    .contactform {
        position: sticky;
        top: 50px;
    }

    /* Form */

    @media screen and (max-width:375px) {
        .g-recaptcha iframe {
            width: 215px !important;
        }

        iframe .rc-anchor-normal {
            width: auto !important;
        }

        html .rc-anchor-normal {
            width: auto !important;
        }

        .g-recaptcha div {
            width: 250px !important;
        }
    }
</style>

<div class="contactform wow fadeInRight" data-wow-delay=".4s">
    <div class="contactform__list mb-30">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_submitted'])) {
            $surname = $_POST["surname"];
            $city = $_POST["city"];
            $phone = $_POST["phone"];
            $company_name = $_POST["company_name"];
            $pcd_pharma_franchise = $_POST["select"];

            // Email details
            $to = "isconlifesciences2019@gmail.com";
            $subject = "New Form Submission";
            $message = "Surname: $surname\nCity: $city\nPhone: $phone\nCompany Name: $company_name\nSelected Option: $pcd_pharma_franchise";


            // Send email
            if (mail($to, $subject, $message)) {
                // Email sent successfully
                http_response_code(200);
                echo '<script>window.location.href = "https://www.isconlifesciences.com/contact";</script>';
                exit;
            } else {
                // Error sending email
                http_response_code(500);
            }
        }
        ?>



        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_submitted'])) {
            $surname = $_POST["surname"];
            $city = $_POST["city"];
            $phone = $_POST["phone"];
            $company_name = $_POST["company_name"];
            $pcd_pharma_franchise = $_POST["select"];

            // Email details
            $to = "isconlifesciences2019@gmail.com";
            $subject = "New Form Submission";
            $message = "Surname: $surname\nCity: $city\nPhone: $phone\nCompany Name: $company_name\nSelected Option: $pcd_pharma_franchise";


            // Send email
            if (mail($to, $subject, $message)) {
                // Email sent successfully
                http_response_code(200);
                echo '<script>window.location.href = "https://www.isconlifesciences.com/contact";</script>';
                exit;
            } else {
                // Error sending email
                http_response_code(500);
            }
        }
        ?>


        <form id="bro_form" action="#" method="POST">
            <input type="hidden" name="_next" value="https://www.isconlifesciences.com/contact">
            <input type="hidden" name="form_submitted" value="1">
            <div class="row">
                <div class="contactform__title mb-30 fs-4 fw-bold">Send us a Message :</div>
                <div class="col-lg-12">
                    <div class="contactform__input mb-30">
                        <input id="form_lastname" type="text" name="surname" placeholder="Enter Your Name" required>
                        <span class="error-message" id="name-error"></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contactform__input mb-30">
                        <input id="form_email" type="text" name="city" placeholder="Enter Your City" required>
                        <span class="error-message" id="city-error"></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contactform__input mb-30">
                        <input id="form_phone" type="text" name="phone" placeholder="Enter Your Number" minlength="10"
                            maxlength="10" required>
                        <span class="error-message" id="phone-error"></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contactform__input mb-30">
                        <input name="company_name" type="text" placeholder="Enter Your Company Name" required>
                        <span class="error-message" id="company-error"></span>
                    </div>
                </div>
                <div class="col-lg-12 mb-30">
                    <select name="select" id="lang" class="w-100 contactform__input_select" required>
                        <option value="" disabled selected>Select an Option</option>
                        <option value="PCD Pharma Franchise">PCD Pharma Franchise</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Human Resource">Human Resource</option>
                        <option value="Others">Others</option>
                    </select>
                    <span class="error-message" id="select-error"></span>
                </div>
                <div class="col-lg-12 g-recaptcha mb-30" data-sitekey="6LcSPbIpAAAAALm5GrGa9HprQyIa8NAK7Q_hw6p-"
                    data-action="LOGIN">
                </div>
                <div class="col-lg-12">
                    <div class="contactform__input mb-30-btn">
                        <button type="submit" class="tp-btn">Send Message</button>
                        <p id="success-message" style="display: none;">Form submitted
                            successfully!
                        </p>
                    </div>
                    <p class="ajax-response"></p>
                </div>
            </div>
        </form>

        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var form = document.getElementById('bro_form');

                form.addEventListener('submit', function (event) {
                    event.preventDefault();

                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'contact', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            if (window.location.href.includes('contact?1')) {
                                window.location.href = 'https://www.isconlifesciences.com/PRODUCT-CARD.pdf';
                            } else if (window.location.href.includes('contact')) {
                                document.getElementById('success-message').style.display = 'block';   // Redirect without reloading
                            }
                        } else {
                            console.error('Request failed. Status: ' + xhr.status);
                        }
                    };

                    var formData = new FormData(form);
                    var encodedFormData = new URLSearchParams(formData).toString();

                    xhr.send(encodedFormData);
                });
            });
        </script>


    </div>
</div>