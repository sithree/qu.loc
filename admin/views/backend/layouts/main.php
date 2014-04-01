<!DOCTYPE html>
<html lang="en">
    <?php include '_head.php' ?>
    <body class="tooltips">
        <div class="container">
            <?php include '_header.php' ?>
            <?php include '_menu.php' ?>
            <div class="right content-page">
                <?php include '_contentHeader.php' ?>
                <div class="body content rows scroll-y">
                    <?php echo $content ?>;
                </div>
            </div>
        </div>
        <!--
    ================================================
    JAVASCRIPT
    ================================================
        -->
        <!-- Basic Javascripts (Jquery and bootstrap) -->
        <script src="<?php echo $this->templatePath ?>/js/jquery.js"></script>
        <script src="<?php echo $this->templatePath ?>/js/bootstrap/bootstrap.min.js"></script>

        <!-- VENDOR -->

        <!-- Slimscroll js -->
        <script src="<?php echo $this->templatePath ?>/third/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Morris js -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo $this->templatePath ?>/js/morris.js"></script>

        <!-- Nifty modals js -->
        <script src="<?php echo $this->templatePath ?>/third/nifty-modal/js/classie.js"></script>
        <script src="<?php echo $this->templatePath ?>/third/nifty-modal/js/modalEffects.js"></script>

        <!-- Sortable js -->
        <script src="<?php echo $this->templatePath ?>/third/sortable/sortable.min.js"></script>

        <!-- Bootstrao selectpicker js -->
        <script src="<?php echo $this->templatePath ?>/third/select/bootstrap-select.min.js"></script>

        <!-- Summernote js -->
        <script src="<?php echo $this->templatePath ?>/third/summernote/summernote.js"></script>

        <!-- Magnific popup js -->
        <script src="<?php echo $this->templatePath ?>/third/magnific-popup/jquery.magnific-popup.min.js"></script> 

        <!-- Bootstrap file input js -->
        <script src="<?php echo $this->templatePath ?>/third/input/bootstrap.file-input.js"></script>

        <!-- Bootstrao datepicker js -->
        <script src="<?php echo $this->templatePath ?>/third/datepicker/js/bootstrap-datepicker.js"></script>

        <!-- Icheck js -->
        <script src="<?php echo $this->templatePath ?>/third/icheck/icheck.min.js"></script>

        <!-- Form wizard js -->
        <script src="<?php echo $this->templatePath ?>/third/wizard/jquery.snippet.min.js"></script>
        <script src="<?php echo $this->templatePath ?>/third/wizard/jquery.easyWizard.js"></script>
        <script src="<?php echo $this->templatePath ?>/third/wizard/scripts.js"></script>

        <!-- LANCENG TEMPLATE JAVASCRIPT -->
        <script src="<?php echo $this->templatePath ?>/js/lanceng.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </body>
</html>