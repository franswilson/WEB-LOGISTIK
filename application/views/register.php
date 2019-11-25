<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <link rel="stylesheet" href="<?= base_url() ?>assets/regis/fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/regis/css/style.css">
</head>

<body>
    <div class="main">
        <section class="signup">

            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="<?= base_url('auth/register') ?>" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create your account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Your Name" />
                            <?= form_error('username'); ?>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" />
                            <?= form_error('password'); ?>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address" placeholder="your address" />
                            <?= form_error('address'); ?>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="email" id="email" placeholder="Your Email" />
                            <?= form_error('email'); ?>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="telp" id="telp" placeholder="Your number phone" />
                            <?= form_error('telp'); ?>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?= base_url('auth/login') ?>" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>
    </div>

    <script src="<?= base_url() ?>assets/regis/vendor/jquery/jquery.min.js" type="b5dcbf2b38417512553e76a3-text/javascript"></script>
    <script src="<?= base_url() ?>assets/regis/js/main.js" type="b5dcbf2b38417512553e76a3-text/javascript"></script>

    <script async src="<?= base_url() ?>assets/regis/https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="b5dcbf2b38417512553e76a3-text/javascript"></script>
    <script type="b5dcbf2b38417512553e76a3-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="<?= base_url() ?>assets/regis/https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="b5dcbf2b38417512553e76a3-|49" defer=""></script>
</body>

</html>