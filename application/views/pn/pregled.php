<div id="page-wrapper">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $naslov; ?>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-fw fa-life-ring"></i><a href="<?php base_url(); ?>putninalozi">Eurokod</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-files-o"></i>  <a href="<?php base_url(); ?>putninalozi"><?php echo $naslov ?></a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row animated fadeInDown">
            <div class="col-lg-12">
                <div class="ibox-content">
                    <div class="panel blank-panel">
                        <ul class="nav nav-tabs">
                            <li class="active"><a aria-expanded="true" data-toggle="tab" href="#all">Putni nalozi</a></li>
                            <li class=""><a aria-expanded="false" data-toggle="tab" href="#add">Novi nalog</a></li>                            
                        </ul>
                    </div>

                    <div id="myModal" class="modal fade modal-admin" role="dialog" style="width: 90%; height: 90%">
                        <div class="modal-dialog modal-lg">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Prikaz putnog naloga</h4>
                                </div>
                                <div class="modal-body" id="modalPutniNalog">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="dialog"></div>
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
                                                            <th style="text-align: center;">Putovao</th>
                                                            <th style="text-align: center;">Mjesto</th>
                                                            <th style="text-align: center;">Datum putovanja</th>
                                                            <th style="text-align: center;">Auto</th>
                                                            <th style="text-align: center;">Putni nalog</th>
                                                            <th style="text-align: center;">Putni trošak</th>
                                                            <th style="text-align: center;">Editiraj</th>
                                                            <th style="text-align: center;">Obriši</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if (isset($nalozi)) {
                                                                foreach ($nalozi as $nalog) {
                                                                    ?>
                                                                    <tr style="text-align: center;">
                                                                    <td><?= $nalog->id ?></td>
                                                                    <td><?= $nalog->djelatnik_naziv ?></td>
                                                                    <td><?= $nalog->mjesto_putovanja ?></td>
                                                                    <td><?= $nalog->datum_putovanja ?></td>
                                                                    <td><?= $nalog->auto_naziv ?></td>
                                                                    <td>
                                                                        <form onclick="loadPutniNalog(<?= $nalog->id ?>);">
                                                                            <input type="hidden" name="id" value="<?= $nalog->id ?>">
                                                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal" >Putni nalog</button>
                                                                        </form>
                                                                    </td>
                                                                    <td>
                                                                        <form onclick="loadPutniRacun(<?= $nalog->id ?>);">
                                                                            <input type="hidden" name="id" value="<?= $nalog->id ?>">
                                                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Putni račun</button>
                                                                        </form>
                                                                    </td>
                                                                    <td>
                                                                        <form method="POST" action="putninalozi/edit/<?= $nalog->id ?>">
                                                                            <input type="hidden" name="id" value="<?= $nalog->id ?>">
                                                                            <button type="submit" class="btn btn-success btn-sm">Editiraj</button>
                                                                        </form>
                                                                    </td>
                                                                    <td>
                                                                        <form method="POST" action="djelatnici/obrisi">
                                                                            <input type="hidden" name="id" value="<?= $nalog->id ?>">
                                                                            <button type="submit" class="btn btn-danger btn-sm">Obriši</button>
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
                                <?php echo $edit; ?>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
   