<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Profil Bumdes.id</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="https://bumdes.id/id/public/assets/admin/img/bumdes-logo.png" />
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

        body {
            /* background: #13ff03; */
            background: url(https://i.imgur.com/73BxBuI.png);
            background-size: cover;
            background-position: center;
        }

        @media only screen and (max-width: 767px) {
            .hide-on-mobile {
                display: none;
            }
        }

        .login-box {
            /* background: url(https://i.imgur.com/73BxBuI.png); */
            /* background-color: yellowgreen; */
            background-color: rgba(255, 255, 255, .15);
            backdrop-filter: blur(5px);
            background-size: cover;
            background-position: center;
            padding: 50px;
            margin: 50px auto;
            min-height: 700px;
            -webkit-box-shadow: 0 2px 60px -5px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 60px -5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-family: "Script MT";
            font-size: 54px;
            text-align: center;
            color: #888888;
            margin-bottom: 50px;
        }

        .logo .logo-font {
            color: #3BC3FF;
        }

        @media only screen and (max-width: 767px) {
            .logo {
                font-size: 34px;
            }
        }

        .header-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .login-form {
            max-width: 800px;
            margin: 0 auto;
        }

        .login-form .form-control {
            border-radius: 0;
            margin-bottom: 30px;
        }

        .login-form .form-group {
            position: relative;
        }

        .login-form .form-group .forgot-password {
            position: absolute;
            top: 6px;
            right: 15px;
        }

        .login-form .btn {
            border-radius: 0;
            -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .login-form .btn.btn-primary {
            background: #3BC3FF;
            border-color: #31c0ff;
        }

        .slider-feature-card {
            background: #fff;
            max-width: 280px;
            margin: 0 auto;
            padding: 30px;
            text-align: center;
            -webkit-box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
        }

        .slider-feature-card img {
            height: 80px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .slider-feature-card h3,
        .slider-feature-card p {
            margin-bottom: 30px;
        }

        .carousel-indicators {
            bottom: -50px;
        }

        .carousel-indicators li {
            cursor: pointer;
        }
    </style>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <section class="body">
        <div class="container">
            <?= $this->renderSection('content') ?>
        </div>
    </section>
    <script type='text/javascript'></script>
</body>

</html>
