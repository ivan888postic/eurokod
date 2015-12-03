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
                        <i class="fa fa-fw fa-files-o"></i>  <a href="<?php base_url(''); ?>djelatnici">Djelatnici</a>
                    </li>
                </ol>
            </div>
        </div>

        <!--                TABLE-->
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Naziv</th>
                                <th style="text-align: center;">Titula</th>
                                <th style="text-align: center;">Posao</th>
                                <th style="text-align: center;">Adresa</th>
                                <th style="text-align: center;">Prebivalište</th>
                                <th style="text-align: center;">Radno mjesto</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            if (isset($djelatnici)) {
                                foreach ($djelatnici as $dj) {
                                    ?>
                                    <tr style="text-align: center;">
                                        <td><?= $dj->naziv ?></td>
                                        <td><?= $dj->titula ?></td>
                                        <td><?= $dj->posao ?></td>
                                        <td><?= $dj->adresa ?></td>
                                        <td><?= $dj->preb_opcina ?></td>
                                        <td><?= $dj->rad_opcina ?></td>
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
