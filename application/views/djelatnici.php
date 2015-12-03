<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $naslov; ?>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-fw fa-life-ring"></i><a href="<?php echo base_url('putninalozi'); ?>">Eurokod</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-files-o"></i>  <a href="<?php echo base_url('djelatnici'); ?>">Djelatnici</a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row animated fadeInDown">
            <div class="col-lg-12">
                <div class="ibox-content">
                    <div class="panel blank-panel">
                        <ul class="nav nav-tabs">
                            <li class="active"><a aria-expanded="true" data-toggle="tab" href="#all">Pregled djelatnika</a></li>
                            <li class=""><a aria-expanded="false" data-toggle="tab" href="#add">Novi djelatnik</a></li>
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
                                                                <th style="text-align: center;">Titula</th>
                                                                <th style="text-align: center;">Posao</th>
                                                                <th style="text-align: center;">Adresa</th>
                                                                <th style="text-align: center;">Prebivalište</th>
                                                                <th style="text-align: center;">Radno mjesto</th>
                                                                <th style="text-align: center;">Opcije</th>
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
                                                                        <td>
                                                                            <button type="submit" class="btn btn-success" action="djelatnici/editirajDjelatnika/<?= $dj->id ?>">Editiraj</button>
                                                                            <button type="submit" class="btn btn-danger" action="djelatnici/obrisi">Obriši</button>
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
                                        <div class="col-lg-6">
                                            <div class="wrapper wrapper-content">
                                                <div class="ibox float-e-margins">
                                                    <div class="ibox-content">
                                                        <form action="djelatnici/dodajDjelatnika" method="post" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label for="naziv">Naziv</label>
                                                                <input class="form-control" type="text" name="naziv" placeholder="Naziv" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="titula">Titula</label>
                                                                <input class="form-control" type="text" name="titula" placeholder="Titula" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="posao">Posao</label>
                                                                <input class="form-control" type="text" name="posao" placeholder="Posao" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="adresa">Adresa</label>
                                                                <input class="form-control" type="text" name="adresa" placeholder="Adresa" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="preb_opcina_id">Prebivalište</label>
                                                                <select name="preb_opcina_id" required class="form-control">
                                                                    <option></option>
                                                                    <?php foreach ($opcine as $opcina) { ?>
                                                                        <option value="<?php echo $opcina->id; ?>"><?php echo $opcina->naziv; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="preb_rad_id">Adresa</label>
                                                                <select name="preb_rad_id" required class="form-control">
                                                                    <option></option>
                                                                    <?php foreach ($opcine as $opcina) { ?>
                                                                        <option value="<?php echo $opcina->id; ?>"><?php echo $opcina->naziv; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="row">
                                                                <button class="btn btn-success form-control" type="submit" class="btn btn-default">Spremi djelatnika</button>
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