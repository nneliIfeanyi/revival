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
                <h2>Login</h2>
                <p>Print Registration Tag</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li class="current">Login</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 col-md-9 mx-auto">
                        <div class="info-wrap">
                            <p class="text-muted lead">
                                If you have registered online previously for any of our programmes, kindly enter your <span class="text-success">RL-Code</span> to print or download registration tag.
                            </p>
                            <hr />
                            <form action="script.php" method="post">
                                <div class="form-group mb-3">
                                    <label>RL-Code:</label>
                                    <input type="text" name="rlcode" class="form-control form-control-lg" value="">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn btn-success px-5" value="Continue">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    require 'inc/footer.php';
    ?>

</body>

</html>