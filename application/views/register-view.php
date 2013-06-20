<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign-Up &middot; DruDash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }
    .form-signin input[type="text"],
    .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
    }

    </style>
    <link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>

    <div class="container">
       



        <?php echo Form::open('register', array('class' => 'form-signin')); ?>
		    <h2 class="form-signin-heading">Sign-Up to DruDash</h2>
		    <?php echo Form::input('company', NULL, array('class' => 'input-block-level', 'placeholder'=>'Company Name')); ?>
		    <?php echo Form::input('email', NULL, array('class' => 'input-block-level', 'placeholder'=>'Email address')); ?>
		    <?php echo Form::input('username', NULL, array('class' => 'input-block-level', 'placeholder'=>'Desired Username')); ?>
		    <?php echo Form::password('password', NULL, array('class' => 'input-block-level', 'placeholder'=>'Password')); ?>
		    <?php echo Form::password('password_repeat', NULL, array('class' => 'input-block-level', 'placeholder'=>'Repeat Password')); ?>

		    <?php echo Form::submit("submit", "Sign-Up", array('class' => 'btn btn-large btn-primary')); ?>
		<?php echo Form::close(); ?>

		<p class="well well-large text-center" style="max-width: 300px; margin: 0 auto; background-color: #fff;">Already have an account? <a href="login">Login</a></p>
    </div> <!-- /container -->

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>
