<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $title; ?>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-fw fa-life-ring"></i><a href="<?php base_url('putni_nalozi'); ?>">Eurokod</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-files-o"></i>  <a href="<?php base_url('vlasnik'); ?>"><?php echo $title ?></a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form role="form" action="index.php/vlasnici/updateVlasnik" method="post" class="form-horizontal">
                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="naziv">Naziv</label>
                                    <input class="form-control" type="text" name="naziv" placeholder="Naziv" value="<?php echo $owner->naziv; ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="direktor">Direktor</label>
                                    <input class="form-control" type="text" name="direktor" placeholder="Direktor" value="<?php echo $boss->naziv; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="opis">Opis</label>
                            <textarea class="form-control" rows="3" placeholder="Opis" name="opis"><?php echo $owner->opis; ?></textarea>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="adresa">Adresa</label>
                                    <input class="form-control" type="text" name="adresa" placeholder="Adresa" value="<?php echo $owner->adresa; ?>" required> 
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="mjesto">Mjesto</label>
                                    <input class="form-control" type="text" name="mjesto" placeholder="Mjesto" value="<?php echo $owner->mjesto; ?>" required> 
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="postanski_broj">Poštanski broj</label>
                                    <input class="form-control" type="text" name="postanski_broj" placeholder="Poštanski broj" value="<?php echo $owner->postanski_broj; ?>" required> 
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="telefon">Telefon</label>
                                    <input class="form-control" type="text" name="telefon" placeholder="Telefon" value="<?php echo $owner->telefon; ?>" required> 
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="fax">Fax</label>
                                    <input class="form-control" type="text" name="fax" placeholder="Fax" value="<?php echo $owner->fax; ?>" required> 
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="ziroracun">Žiroračun</label>
                                    <input class="form-control" type="text" name="ziroracun" placeholder="Žiroračun" value="<?php echo $owner->ziroracun; ?>" required> 
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="dnevnica_kn">Dnevnica [kn]</label>
                                    <input class="form-control" type="text" name="dnevnica_kn" placeholder="Dnevnica [kn]" value="<?php echo $owner->dnevnica_kn; ?>" required> 
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="dnevnica_eur">Dnevnica [eur]</label>
                                    <input class="form-control" type="text" name="dnevnica_eur" placeholder="Dnevnica [eur]" value="<?php echo $owner->dnevnica_eur; ?>" required> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="benzin_kn">Benzin [kn]</label>
                                    <input class="form-control" type="text" name="benzin_kn" placeholder="Benzin [kn]" value="<?php echo $owner->benzin_kn; ?>" required> 
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="benzin_eur">Benzin [eur]</label>
                                    <input class="form-control" type="text" name="benzin_eur" placeholder="Benzin [eur]" value="<?php echo $owner->benzin_eur; ?>" required> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tecaj">Tečaj [x kn = 1 euro]</label>
                                    <input class="form-control" type="text" name="tecaj" placeholder="Tečaj [x kn = 1 euro]" value="<?php echo $owner->tecaj_kn_euro; ?>" required> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button class="form-control" type="submit" class="btn btn-default">Spremi promjene</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
