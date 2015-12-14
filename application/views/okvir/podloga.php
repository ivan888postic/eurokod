<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Eurokod Putni Nalozi</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/putninalozi.js"></script>
        
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
                            <a href="<?php echo base_url(); ?>putninalozi"><i class="fa fa-fw fa-files-o"></i>Putni nalozi</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>vlasnici"><i class="fa fa-fw fa-user"></i>Podaci o vlasniku</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>djelatnici"><i class="fa fa-fw fa-users"></i>Podaci o djelatnicima</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>automobili"><i class="fa fa-fw fa-road"></i>Podaci o automobilima</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>opcine"><i class="fa fa-fw fa-homes"></i>Podaci o općinama</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <?= $body ?>

            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
