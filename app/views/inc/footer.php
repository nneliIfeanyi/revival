<footer id="footer" role="contentinfo" class="pb-0 px-0">
    <div class="container">

        <div class="col-md-6 offset-md-3 text-center pb-5">
            <img src="<?php echo URLROOT; ?>/images/rev2.jpg" alt="logo img" class="rounded-circle mb-2" style="width:140px; height: 140px;">
            <h5 class="fst-italic fw-bold text-light"><?= SITENAME; ?></h5>
            <p><?= $data['core']->address; ?></p>
            <ul class="social-icons">
                <li><a href="#"><i class="bi bi-telephone"></i></a></li> <?= $data['core']->phone1; ?>
                <li><a href="#"><i class="bi bi-whatsapp"></i></a></li> <?= $data['core']->phone2; ?>
            </ul>
            <!-- <ul class="social-icons">
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
            </ul> -->
        </div>
    </div>

    <div class="text-center border-top py-3">
        <small class="block">&copy; <?= date('Y'); ?> <?= SITENAME; ?>. All Rights Reserved.</small>
    </div>
</footer>
<!-- Bootstrap -->
<script src="<?= URLROOT; ?>/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="<?= URLROOT; ?>/js/jquery.js"></script>
<script src="<?= URLROOT; ?>/js/jquery.dataTables.mim.js"></script>
<script src="<?= URLROOT; ?>/js/dataTables.bootstrap5.min.js"></script>
<!-- jQuery Easing -->
<script src="<?= URLROOT; ?>/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?= URLROOT; ?>/js/bootstrap.bundle.min.js"></script>
<!-- Waypoints -->
<script src="<?= URLROOT; ?>/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="<?= URLROOT; ?>/js/jquery.flexslider-min.js"></script>
<!-- Carousel -->
<script src="<?= URLROOT; ?>/js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="<?= URLROOT; ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= URLROOT; ?>/js/magnific-popup-options.js"></script>
<script src="<?= URLROOT; ?>/js/parsley.min.js"></script>
<!-- Main -->
<script src="<?= URLROOT; ?>/js/main.js"></script>
<script>
    var button = document.getElementById('printBtn');
    button.addEventListener('click', () => {
        print();
    })
</script>
</body>

</html>