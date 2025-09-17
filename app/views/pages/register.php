<?php
require_once('inc/header.html');
?>

<body class="registeration-page">
    <?php
    require 'inc/navigation.php';
    ?>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container">
                <h2>REGISTRATION FORM</h2>
                <p>Register for any of our programmes</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li class="current">Register</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="info-wrap">
                            <!-- Ajax form submit response -->
                            <!-- <div id="ajaxRes"></div> -->
                            <h2 class="fw-semibold h3"></h2>
                            <p class="lead m-0">Please fill the form below to register and get your <span class="text-success fst-italic"><strong>RL-Code,</strong></span>
                                If you already registered previously, kindly click <a class="text-success fst-italic" href="login.php"><strong>here</strong></a> to download registration tag.</p>
                            <hr />
                            <form id="register">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>Title &nbsp;<span style="font-size: xx-small;">mr | mrs | etc</span></label>
                                            <input type="text" name="title" class="form-control form-control-lg">
                                        </div>
                                        <div class="col-8">
                                            <label>Surname</label>
                                            <input type="text" name="surname" required class="form-control form-control-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Others Names</label>
                                    <input type="text" name="othernames" required class="form-control form-control-lg">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Gender</label>
                                    <div class=" border  p-2">
                                        <input type="radio" required name="gender" value="Male" class="form-check-input fs-5" id="Male">
                                        <label for="Male" class="form-check-label me-2">Male</label>

                                        <input type="radio" required name="gender" value="Female" class="form-check-input fs-5" id="Female">
                                        <label for="Female" class="form-check-label me-2">Female</label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Email Address</label>
                                    <input type="email" name="email" data-parsley-type="email" data-parsley-trigger="keyup" class="form-control form-control-lg">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone" required data-parsley-type='number' maxlength="11" data-parsley-length="[11, 11]" data-parsley-trigger="keyup" pattern="\d{11}" class=" form-control form-control-lg">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Age Bracket</label>
                                    <select class="form-control form-control-lg" name="age" required>
                                        <option value="">--Please Select--</option>
                                        <option value="13-18">13 - 18 years</option>
                                        <option value="19-25">19 - 25 years</option>
                                        <option value="26-35">26 - 35 years</option>
                                        <option value="36-45">36 - 45 years</option>
                                        <option value="46-69">46 - 59 years</option>
                                        <option value="60upwards">60 and Above</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Marital Status</label>
                                    <select class="form-control form-control-lg" name="m_status" required>
                                        <option value="">--Please Select--</option>
                                        <option value="Single">Single</option>
                                        <option value="Engaged">Engaged</option>
                                        <option value="Married">Married</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widow">Widow(er)</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Residential Address</label>
                                    <input type="text" name="residence" required class="form-control form-control-lg">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label>L.G.A of Residence</label>
                                        <input type="text" name="lga" required class="form-control form-control-lg">
                                    </div>
                                    <div class="col-6">
                                        <label>State of Residence</label>
                                        <input type="text" name="r_state" required class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Occupation</label>
                                    <input type="text" name="work" class="form-control form-control-lg">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Trained As&nbsp;&nbsp;<span style="font-size: x-small;">(optional)</span></label>
                                    <input type="text" name="trainedAs" class="form-control form-control-lg">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Church Name And Address</label>
                                    <input type="text" name="l_assembly" class="form-control form-control-lg">
                                </div>
                                <div id="ajaxRes"></div>
                                <div class="d-grid mt-4">
                                    <input type="submit" id="submit" class="btn btn-success" value="Register Now">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
    </main>
    <?php
    require 'inc/footer.php';
    ?>

</body>

</html>