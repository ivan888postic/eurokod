<?php ?>

<html>
    <body>
        <div class="form-group">
            <div class="col-lg-6">
                <label for="odlazak_datum">Odlazak datum: <?php echo date_format(new DateTime($nalog[0]->odlazak_vrijeme), 'd-m-Y'); ?></label>
            </div>
            <div class="col-lg-6">
                <label for="odlazak_vrijeme">Odlazak vrijeme: <?php echo date_format(new DateTime($nalog[0]->odlazak_vrijeme), 'H:i'); ?></label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6">
                <label for="dolazak_datum">Dolazak datum: <?php echo date_format(new DateTime($nalog[0]->dolazak_vrijeme), 'd-m-Y'); ?></label>

            </div>
            <div class="col-lg-6">
                <label for="dolazak_vrijeme">Dolazak vrijeme: <?php echo date_format(new DateTime($nalog[0]->dolazak_vrijeme), 'H:i'); ?></label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="broj_sati">Broj sati: <?php echo $nalog[0]->broj_sati; ?></label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="broj_dnevnica">Broj dnevnica: <?php echo $nalog[0]->broj_dnevnica; ?></label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="iznos_dnevnice">Iznos dnevnica: <?php echo $nalog[0]->iznos_dnevnice ?></label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table id="relacije_table" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
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
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table id="troskovi_table" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Obračun ostalih troškova</th>
                        </tr>
                        <tr>
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
                                <td><?= $trosak->opis ?></td>
                                <td><?= $trosak->iznos ?></td>
                                </tr>   
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>