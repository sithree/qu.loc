<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Дон Купон. Административная часть</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Genyx admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Genyx admin template" />

    <!-- Headings -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
    <!-- Text -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />

     <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
    <link href="<?php echo $this->templatePath ?>/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo $this->templatePath ?>/css/bootstrap/bootstrap-theme.css" rel="stylesheet" />
    <link href="<?php echo $this->templatePath ?>/css/icons.css" rel="stylesheet" />

    <!-- Plugins stylesheets -->
    <link href="<?php echo $this->templatePath ?>/js/plugins/forms/uniform/uniform.default.css" rel="stylesheet" /> 

    <!-- app stylesheets -->
    <link href="<?php echo $this->templatePath ?>/css/app.css" rel="stylesheet" /> 

    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="<?php echo $this->templatePath ?>/css/custom.css" rel="stylesheet" /> 

    <!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->

    <!-- Force IE9 to render in normal mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="images/ico/favicon.png">
    
    <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo $this->templatePath ?>/js/bootstrap/bootstrap.js"></script>  
    <script src="<?php echo $this->templatePath ?>/js/conditionizr.min.js"></script>  
    <script src="<?php echo $this->templatePath ?>/js/plugins/core/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?php echo $this->templatePath ?>/js/plugins/core/jrespond/jRespond.min.js"></script>
    <script src="<?php echo $this->templatePath ?>/js/jquery.genyxAdmin.js"></script>

    <!-- Form plugins -->
    <script src="<?php echo $this->templatePath ?>/js/plugins/forms/uniform/jquery.uniform.min.js"></script>
    <script src="<?php echo $this->templatePath ?>/js/plugins/forms/validation/jquery.validate.js"></script>

    <!-- Init plugins -->
    <script src="<?php echo $this->templatePath ?>/js/app.js"></script><!-- Core js functions -->
    <script src="<?php echo $this->templatePath ?>/js/pages/login.js"></script><!-- Init plugins only for page -->

  </head>
  <body>
    <div class="container-fluid">
        <div id="login">
            <div class="login-wrapper" data-active="log">
               <a class="navbar-brand" href="dashboard.html">
                    <!--<img src="<?php echo $this->templatePath ?>/images/logodark.png" alt="Genyx admin" class="img-responsive">-->
                   Дон Купон<br /> <small>административная часть</small>
               </a>
                <div id="log">
                    <div id="avatar">
                        <img src="<?php echo $this->templatePath ?>/images/avatars/suggebig.jpg" alt="SuggeElson" class="img-responsive">
                    </div>
                    <div class="page-header">
                        <h3 class="center">Авторизация</h3>
                    </div>
                    <form role="form" id="login-form" class="form-horizontal" action="dashboard.html">
                        <div class="row">
                            <div class="form-group relative">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <input class="form-control" type="text" name="user" id="user" placeholder="Email или логин">
                                
                            </div><!-- End .control-group  -->
                            <div class="form-group relative">
                                <div class="icon"><i class="icon20 i-key"></i></div>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Пароль">
                                
                            </div><!-- End .control-group  -->
                            <div class="form-group relative">
                                <label class="control-label" class="checkbox pull-left">
                                    <input type="checkbox" value="1" name="remember">
                                    Запомнить?
                                </label>
                                <button id="loginBtn" type="submit" class="btn btn-primary pull-right col-lg-5">Войти</button>
                            </div>
                        </div><!-- End .row-fluid  -->
                    </form>

                </div>
                
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>
  </body>
</html>