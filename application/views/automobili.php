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
                        <i class="fa fa-fw fa-files-o"></i>  <a href="<?php base_url(''); ?>automobili">Automobili</a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row animated fadeInDown">
            <div class="col-lg-6">
                <div class="ibox-content">
                    <div class="panel blank-panel">
                        <ul class="nav nav-tabs">
                            <li class="active"><a aria-expanded="true" data-toggle="tab" href="#all">Pregled automobila</a></li>
                            <li class=""><a aria-expanded="false" data-toggle="tab" href="#add">Novi automobil</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="all" class="tab-pane active">
                                <div id="all-container">
                                    <div class="wrapper wrapper-content">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align: center;">Naziv</th>
                                                                <th style="text-align: center;">Registarska oznaka</th>
                                                                <th style="text-align: center;">Kilometri</th>
                                                                <th style="text-align: center;">Editiraj</th>
                                                                <th style="text-align: center;">Obriši</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if (isset($automobili)) {
                                                                foreach ($automobili as $auto) {
                                                                    ?>
                                                                    <tr style="text-align: center;">
                                                                        <td><?= $auto->naziv ?></td>
                                                                        <td><?= $auto->reg_oznaka ?></td>
                                                                        <td><?= $auto->km ?></td>
                                                                        <td>
                                                                            <button type="submit" class="btn btn-success" action="automobili/edit/<?= $auto->id ?>">Editiraj</button>
                                                                        </td>
                                                                        <td>
                                                                            <form method="POST" action="automobili/obrisiAuto">
                                                                                <input type="hidden" name="id" value="<?= $auto->id ?>">
                                                                                <button type="submit" class="btn btn-danger">Obriši</button>
                                                                            </form>
                                                                        </td>
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
                                </div>
                            </div>
                            <div id="add" class="tab-pane">
                                <div id="add-container">
                                    <div class="row animated fadeInDown">
                                        <div class="col-lg-12"> 
                                            <div class="wrapper wrapper-content">
                                                <div class="ibox float-e-margins">
                                                    <div class="ibox-content">
                                                        <form action="automobili/dodajAuto" method="post" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label for="naziv">Naziv</label>
                                                                <input class="form-control" type="text" name="naziv" placeholder="Naziv" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="reg_oznaka">Registarska oznaka</label>
                                                                <input class="form-control" type="text" name="reg_oznaka" placeholder="Registarska oznaka" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="km">Kilometri</label>
                                                                <input class="form-control" type="text" name="km" placeholder="Kilometri" required>
                                                            </div>
                                                            <div class="row">
                                                                <button class="btn btn-success form-control" type="submit" class="btn btn-default">Spremi automobil</button>
                                                            </div>
                                                        </form> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>            
