
<?php include '_head.php' ?>


<div class="main">

    <?php // подключаем левую панель навигации ?>
    <?php include '_menu.php' ?>

    <section id="content">
        <div class="wrapper">
            <div class="crumb">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon16 i-home-4"></i>Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ul>
            </div>

            <div class="container-fluid">
                <div id="heading" class="page-header">
                    <h1><i class="icon20 i-dashboard"></i> <?php echo $this->pageTitle ?></h1>
                </div>

                



                                <?php echo $content ?>

                                









            </div> <!-- End .container-fluid  -->
        </div> <!-- End .wrapper  -->
    </section>
</div><!-- End .main  -->
</body>
</html>