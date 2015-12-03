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

        <div class="row animated fadeInDown">
            <div class="col-lg-6">
                <div class="ibox-content">
                    <div class="panel blank-panel">
                        <ul class="nav nav-tabs">
                            <li class="active"><a aria-expanded="true" data-toggle="tab" href="#all">Pregled općina</a></li>
                            <li class=""><a aria-expanded="false" data-toggle="tab" href="#add">Nova općina</a></li>
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
                                                                <th style="text-align: center;">Id</th>
                                                                <th style="text-align: center;">Naziv</th>
                                                                <th style="text-align: center;">Šifra</th>
                                                                <th style="text-align: center;">Opcije</th>
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
                                                                        <td>
                                                                            <button type="submit" class="btn btn-success" action="automobili/edit/<?= $opcina->id ?>">Editiraj</button>
                                                                            <button type="submit" class="btn btn-danger" action="automobili/obrisi">Obriši</button>
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
                                                        <form action="opcine/dodajOpcinu" method="post" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label for="naziv">Naziv</label>
                                                                <input class="form-control" type="text" name="naziv" placeholder="Naziv" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sifra">Šifra</label>
                                                                <input class="form-control" type="text" name="sifra" placeholder="Šifra" required>
                                                            </div>
                                                            <div class="row">
                                                                <button class="btn btn-success form-control" type="submit" class="btn btn-default">Spremi općinu</button>
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