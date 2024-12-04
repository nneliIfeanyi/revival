<footer id="footer" role="contentinfo" class="pb-0 px-0">
    <div class="container">

        <div class="col-md-6 offset-md-3 text-center pb-5">
            <h2><?= SITENAME; ?></h2>
            <p><?= $data['core']->address; ?></p>
            <ul class="social-icons">
                <li><a href="#"><i class="icon-phone2"></i></a></li> <?= $data['core']->phone1; ?>
                <li><a href="#"><i class="icon-whatsapp"></i></a></li> <?= $data['core']->phone2; ?>
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