<div id="page-wrapper">
    <div class="container-fluid">

        <?php if (isset($naslov_edit)) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> <?php echo $naslov_edit; ?></h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-fw fa-life-ring"></i><a href="<?php echo base_url(); ?>putninalozi">Eurokod</a>
                        </li>
                        <li>
                            <i class="fa fa-fw fa-files-o"></i>  <a href="<?php echo base_url(); ?>putninalozi">Putni nalozi</a>
                        </li>
                    </ol>
                </div>
            </div>
        <?php } ?>

        <div class="col-lg-12">
            <div class="ibox-content">
                <form role="form" action="<?php echo base_url(); ?>putninalozi/editNalog" method="post" class="form-horizontal">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Putni nalog</div>
                                <div class="panel-body" style="margin-left: 3%;margin-right: 3%;"><div>
                                        <input type="hidden" name="id" value="<?php echo $nalog->id; ?>">
                                        <div class="form-group">
                                            <label for="djelatnik_id">Određujem da:</label>
                                            <select name="djelatnik_id" required class="form-control" placeholder>
                                                <?php
                                                if (isset($djelatnici)) {
                                                    foreach ($djelatnici as $djelatnik) {
                                                        if ($djelatnik->id == $nalog->djelatnik_id) {
                                                            ?>
                                                            <option selected value="<?php echo $djelatnik->id; ?>"><?php echo $djelatnik->naziv; ?></option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $djelatnik->id; ?>"><?php echo $djelatnik->naziv; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="datum">službeno otputuje dana:</label>
                                            <input class="form-control" type="text" name="datum" placeholder="Izaberi datum" type="text" id="datepicker-1" value="<?php echo date_format(new DateTime($nalog->datum_putovanja), 'd-m-Y'); ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mjesto">u mjesto:</label>
                                            <input class="form-control" type="text" name="mjesto" placeholder="Mjesto" value="<?php echo $nalog->mjesto_putovanja; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="svrha">sa zadaćom:</label>
                                            <input class="form-control" type="text" name="svrha" placeholder="Svrha puta" value="<?php echo $nalog->svrha_putovanja; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="trajanje">putovanje može trajati:</label>
                                            <input class="form-control" type="text" name="trajanje" placeholder="Trajanje [dani]" value="<?php echo $nalog->trajanje; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="auto_id">odobravam upotrebu:</label>
                                            <select name="auto_id" required class="form-control">
                                                <?php
                                                foreach ($auti as $auto) {
                                                    if ($auto->id == $nalog->auto_id) {
                                                        ?>
                                                        <option selected value="<?php echo $auto->id; ?>"><?php echo $auto->naziv; ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $auto->id; ?>"><?php echo $auto->naziv; ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="iznos_predujam">odobravam isplatu predujma u IZNOSU od:</label>
                                            <input class="form-control" type="text" name="iznos_predujam" placeholder="Iznos [kn]" value="<?php echo $nalog->predujam_iznos; ?>" required>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading"></div>
                                <div class="panel-body">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <button style="width:90%" class="btn btn-info form-control" type="button" action="<?php echo base_url(); ?>putninalozi">Odbaci</button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <button style="width:90%" class="btn btn-info form-control" type="submit" >Spremi nalog</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-7">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Putni račun</div>
                                <div class="panel-body" style="margin-left: 3%;margin-right: 3%;">

                                    <div class="panel panel-yellow">
                                        <div class="panel-heading">Obračun dnevnica</div>
                                        <div class="panel-body" style="margin-left: 1%;margin-right: 1%;">

                                            <div class="form-group">
                                                <div class="col-lg-6">
                                                    <label for="odlazak_datum">Odlazak datum:</label>
                                                    <input class="form-control" id="datepicker-2" type="text" name="odlazak_datum" placeholder="Datum odlaska:" value="<?php echo date_format(new DateTime($nalog->odlazak_vrijeme), 'd-m-Y'); ?>" required>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="odlazak_vrijeme">Odlazak vrijeme:</label>
                                                    <input class="form-control" id="text" type="time" name="odlazak_vrijeme" placeholder="Vrijeme odlaska:" value="<?php
                                                if (isset($nalog)) {
                                                    echo date_format(new DateTime($nalog->odlazak_vrijeme), 'H:i');
                                                }
                                                ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-6">
                                                    <label for="dolazak_datum">Dolazak datum:</label>
                                                    <input class="form-control" id="datepicker-3" type="text" name="dolazak_datum" placeholder="Datum dolaska:" value="<?php echo date_format(new DateTime($nalog->dolazak_vrijeme), 'd-m-Y'); ?>" required>

                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="dolazak_vrijeme">Dolazak vrijeme:</label>
                                                    <input class="form-control" id="text" type="time" name="dolazak_vrijeme" placeholder="Vrijeme dolaska:" value="<?php
                                                           if (isset($nalog)) {
                                                               echo date_format(new DateTime($nalog->dolazak_vrijeme), 'H:i');
                                                           }
                                                ?>"  required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="broj_sati">Broj sati:</label>
                                                        <input class="form-control" type="text" name="broj_sati" placeholder="Broj sati:" value="<?php echo $nalog->broj_sati; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="broj_dnevnica">Broj dnevnica:</label>
                                                        <input class="form-control" id="datepicker-2" type="text" name="broj_dnevnica" placeholder="Broj dnevnica:" value="<?php echo $nalog->broj_dnevnica; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="iznos_dnevnice">Iznos dnevnica:</label>
                                                        <input class="form-control" id="datepicker-2" type="text" name="iznos_dnevnice" placeholder="Iznos dnevnice:" value="<?php echo $nalog->iznos_dnevnice ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-yellow">
                                        <div class="panel-heading">Obračun prijevoznih troškova</div>
                                        <div class="panel-body" style="margin-left: 1%;margin-right: 1%;">

                                            <div class="form-group">
                                                <div class="table-responsive">
                                                    <table id="relacije_table" class="table table-bordered table-hover table-striped">
                                                        <thead>
                                                            <tr>
                                                            <th style="text-align: center; width:10%;"></th>
                                                            <th style="text-align: center; width:15%;">Od</th>
                                                            <th style="text-align: center; width:15%;">Do</th>
                                                            <th style="text-align: center; width:10%;">Km</th>
                                                            <th style="text-align: center;  width:10%;">Vrsta auta</th>
                                                            <th style="text-align: center;  width:10%;">Iznos</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if (isset($relacije)) {
                                                                foreach ($relacije as $relacija) {
                                                                    ?>
                                                                    <tr id="rel_tr_<?php echo $relacija->id; ?>" style="text-align: center;">
                                                                    <td><input type="button" onclick="izbrisiRelaciju(<?php echo $relacija->id; ?>);" value="Obriši" class="btn btn-danger form-control"></td>
                                                                    <td><?= $relacija->od ?></td>
                                                                    <td><?= $relacija->do ?></td>
                                                                    <td><?= $relacija->km ?></td>
                                                                    <td><?= $relacija->auto_vrsta ?></td>
                                                                    <td><?= $relacija->iznos ?></td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>

                                                            <tr id="zadnji_red" style="text-align: center;">
                                                            <input type="hidden" name="nalog_id" id="nalog_id" value="<?php echo $nalog->id; ?>"required>
                                                            <td><input type="button" onclick="dodajRelaciju();" name="relacija_id" value="Dodaj" class="btn btn-success form-control"></td>
                                                            <td><input type="text" name="od" placeholder="Od" id="od"></td>
                                                            <td><input type="text" name="do" placeholder="Do" id="do"></td>
                                                            <td><input type="text" name="km" placeholder="Duljina relacije [km]" id="km"></td>
                                                            <td><input type="text" name="vrsta_auta" placeholder="Vrsta auta" id="vrsta_auta"></td>
                                                            <td><input type="text" name="iznos" placeholder="Iznos" id="iznos"></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-yellow">
                                        <div class="panel-heading">Obračun ostalih troškova</div>
                                        <div class="panel-body" style="margin-left: 1%;margin-right: 1%;">

                                            <div class="form-group">
                                                <div class="table-responsive">
                                                    <table id="troskovi_table" class="table table-bordered table-hover table-striped">
                                                        <thead>
                                                            <tr>
                                                            <th style="text-align: center; width:15%;"></th>
                                                            <th style="text-align: center;">Opis</th>
                                                            <th style="text-align: center;">Iznos</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if (isset($troskovi)) {
                                                                foreach ($troskovi as $trosak) {
                                                                    ?>
                                                                    <tr id="trosak_tr_<?php echo $trosak->id; ?>" style="text-align: center;">
                                                                    <td><input type="button" onclick="izbrisiTrosak(<?php echo $trosak->id; ?>);" value="Obriši" class="btn btn-danger form-control"></td>
                                                                    <td><?= $trosak->opis ?></td>
                                                                    <td><?= $trosak->iznos ?></td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>

                                                            <tr style="text-align: center;">
                                                            <input type="hidden" name="nalog_id" id="nalog_id" value="<?php echo $nalog->id; ?>"required>
                                                            <td><input type="button" onclick="dodajTrosak();" name="trosak_id" id="trosak_id" value="Dodaj" class="btn btn-success form-control"></td>
                                                            <td><input type="text" name="trosak_opis" id="trosak_opis" ></td>
                                                            <td><input type="text" name="trosak_iznos" id="trosak_iznos"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
