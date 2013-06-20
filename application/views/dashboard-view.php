<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body {
        padding-top: 60px;
        padding-bottom: 40px;
    }
    .sidebar-nav {
        padding: 9px 0;
    }

    @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
            float: none;
            padding-left: 5px;
            padding-right: 5px;
        }
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

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="brand"><?php echo $get_company_name ?></div>
                <div class="nav-collapse collapse">

                    <ul class="nav pull-right">
                        <li><a href="#about">Support</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="logout">Logout</a> </li>
                    </ul>

                    <p class="navbar-text">
                        <img class="img-rounded" src="<?php echo $profilePicUrl ?>" /> Hello, <?php echo $get_username ?>
                        &nbsp;&nbsp;&nbsp;
                    </p>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div id="main-content">
    
    </div>
    <div class="row-fluid">
    <div class="text-center">
        <a href="#addASite" role="button" class="btn" data-toggle="modal"><i class="icon-plus"></i> Add A Site</a>
    </div>

    <div id="addASite" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Add A Site</h3>
        </div>
        <div class="modal-body">
            <form class="form-horizontal">
                <p>It's as easy as 1. 2. 3.</p>
                <h4>Step 1</h4>
                <p>Download the module and install</p>
                <h4>Step 2</h4>
                <p>Add the following site-specific key to your Drupal site </p>
                <p class="well well-small"><?php echo $key ?></p>
                <h4>Step 3</h4>
                <?php echo Form::open('add-site', array('class' => 'form-signin')); ?>
                    <div class="control-group">
                        <?php echo Form::input('siteurl', NULL, array('class' => 'input-block-level', 'placeholder'=>'Site Address')); ?>
                    </div>
                    <div class="control-group">
                        <?php echo Form::input('email', NULL, array('class' => 'input-block-level', 'placeholder'=>'Admin Username')); ?>
                    </div>
                    <div class="control-group">
                        <?php echo Form::password('password', NULL, array('class' => 'input-block-level', 'placeholder'=>'Password')); ?>
                    </div>
                    <?php echo Form::hidden('key', $key, NULL); ?>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <?php echo Form::submit("submit", "Add to Dashboard", array('class' => 'btn btn-primary')); ?>
            <?php echo Form::close(); ?>
        </div>
    </div>
</div>

        <hr>

        <footer>
            <p>&copy; White Sky Web <?php echo $message ?></p>
        </footer>

    </div><!--/.fluid-container-->

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>

</body>
</html>
