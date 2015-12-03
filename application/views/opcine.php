<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $naslov; ?>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-fw fa-life-ring"></i><a href="<?php base_url(''); ?>putninalozi">Eurokod</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-files-o"></i>  <a href="<?php base_url(''); ?>opcine">Općine</a>
                    </li>
                </ol>
            </div>
        </div>

        <!--                TABLE-->
        <div class="row">
            <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Id</th>
                                <th style="text-align: center;">Naziv</th>
                                <th style="text-align: center;">Šifra</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            if (isset($opcine)) {
                                foreach ($opcine as $opcina) {
                                    ?>
                                    <tr style="text-align: center;">
                                        <td><?= $opcina->id ?></td>
                                        <td><?= $opcina->naziv ?></td>
                                        <td><?= $opcina->sifra ?></td>
                                    </tr>   
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
