<!DOCTYPE html>
<?php if (!isset($_SESSION)) session_start(); ?>
<?php include_once('classes/login.class.php');
include_once ('./Server/dbname.php');
$m = new dbname();
$dbname = $m->getdbname();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ORB | Login</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/styles-grey.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <script type="text/javascript" src="js/vendors/horisontal/modernizr.custom.js"></script>
</head>

<body>
    <div class="colorful-page-wrapper">
        <div class="center-block">
            <div class="login-block">
                <form action="login.php" method="post" id="login-form" class="orb-form">
                    <header>
                        <div class="image-block"><img src="../images/logo_<?php echo $dbname;?>.png"  onerror="javascript:$(this).attr('src','../images/logo.png');$(this).addClass('NewStyleLogo')" alt="<?php echo $dbname;?>" /></div>
                        Login to <?php echo $dbname;?> <small>Have no account? &#8212; <a href="#">Register</a></small></header>
                    <fieldset>
                        <section>
                            <div class="row">
                                <label class="label col col-4">Username</label>
                                <div class="col col-8">
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        <input type="text" name="username" id="username">
                                    </label>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="row">
                                <label class="label col col-4">Password</label>
                                <div class="col col-8">
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <input type="password" name="password" id="password">
                                    </label>
                                    <div class="note"><a href="#">Forgot password?</a></div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="row">
                                <div class="col col-4"></div>
                                <div class="col col-8">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" checked>
                                        <i></i>Keep me logged in</label>
                                </div>
                            </div>
                        </section>
                    </fieldset>
                    <footer>
                        <button type="submit" class="btn btn-default">Log in</button>
                    </footer>
                </form>
            </div>
            <div class="using-social-header">Sign In Using Social Profiles</div>
            <div class="social-buttons">
                <ul class="social">
                    <li><a href="http://facebook.com/"><i class="entypo-facebook-circled"></i></a></li>
                    <li><a href="http://google.com/"><i class="entypo-gplus-circled"></i></a></li>
                    <li><a href="http://twitter.com/"><i class="entypo-twitter-circled"></i></a></li>
                </ul>
            </div>
            <div class="copyrights"> TitleHost <br>
                Copyrigths &copy; <?php echo date('Y');?> </div>
        </div>
    </div>

    <!--Scripts--> 
    <!--JQuery--> 
    <script type="text/javascript" src="js/vendors/jquery/jquery.min.js"></script> 
    <script type="text/javascript" src="js/vendors/jquery/jquery-ui.min.js"></script> 

    <!--Forms--> 
    <script type="text/javascript" src="js/vendors/forms/jquery.form.min.js"></script> 
    <script type="text/javascript" src="js/vendors/forms/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="js/vendors/forms/jquery.maskedinput.min.js"></script> 
    <script type="text/javascript" src="js/vendors/jquery-steps/jquery.steps.min.js"></script> 

    <!--NanoScroller--> 
    <script type="text/javascript" src="js/vendors/nanoscroller/jquery.nanoscroller.min.js"></script> 

    <!--Sparkline--> 
    <script type="text/javascript" src="js/vendors/sparkline/jquery.sparkline.min.js"></script> 

    <!--Main App--> 
    <script type="text/javascript" src="js/scripts.js"></script>



    <!--/Scripts-->

</body>
</html>