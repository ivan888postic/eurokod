<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Eurokod Putni Nalozi</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/sb-admin.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"></button>
                    <a class="navbar-brand" href="<?php base_url('putni_nalozi') ?>">
                        <span class="label label-success">Euro</span>
                        <span class="label label-danger">Kod</span>
                        <span class="label label-default">d.o.o.</span>
                        <span class="label label-info">Gundulićeva 1, Karlovac</span>
                    </a>
                </div>
                
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="<?php base_url('putni_nalozi')?>"><i class="fa fa-fw fa-files-o"></i>Putni nalozi</a>
                        </li>
                        <li>
                            <a href="index.php/vlasnici"><i class="fa fa-fw fa-user"></i>Podaci o vlasniku</a>
                        </li>
                        <li>
                            <a href="Djelatnici"><i class="fa fa-fw fa-users"></i>Podaci o djelatnicima</a>
                        </li>
                        <li>
                            <a href="Automobili"><i class="fa fa-fw fa-road"></i>Podaci o automobilima</a>
                        </li>
                        <li>
                            <a href="Opcine"><i class="fa fa-fw fa-homes"></i>Podaci o općinama</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <?= $body ?>

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
