<?php ?>

<html>
    <body>
        <div class="container-fluid">
            <row>
                <div class="col-lg-12">
                    <label><?php echo $vlasnik->{'naziv'} ?> <?php echo $vlasnik->{'mjesto'} ?></label>
                </div>
            </row>
            <row>
                <div class="col-lg-6">
                    <label >Broj: <?php echo $nalog[0]->{'id'} ?></label>
                </div>
                <div class="col-lg-6">
                    <label class="pull-right"> U <?php echo $vlasnik->{'mjesto'} ?>, dana <?php echo $nalog[0]->{'vrijeme_naloga'} ?></label>
                </div>
            </row>  
            <row>
                <div class="col-lg-12">
                    <br>
                    <h2 style="text-align: center;" class="text-info">Putni nalog</h2>
                    <br>
                </div>
            </row>
            <row>
                <div class="col-lg-12">
                    <label>Određujem da: <?php echo $nalog[0]->{'djelatnik_naziv'} ?></label>
                </div>
            </row>
            <row>
                <div class="col-lg-12">
                    <label>zvanje: <?php echo $nalog[0]->{'titula'} ?></label>
                </div>
            </row>
            <row>
                <div class="col-lg-12">
                    <label>na radnom mjestu: <?php echo $nalog[0]->{'posao'} ?></label>
                </div>
            </row>
            <row>
                <div class="col-lg-12">
                    <label>službeno otputuje dana: <?php echo $nalog[0]->{'datum_putovanja'} ?> u <?php echo $nalog[0]->{'mjesto_putovanja'} ?></label>
                </div>
            </row>
            <br>
            <row>
                <div class="col-lg-12">
                    <label>sa zadaćom: <?php echo $nalog[0]->{'svrha_putovanja'} ?></label>
                </div>
            </row>
            <br>
            <row>
                <div class="col-lg-12">
                    <label>Putovanje može trajati: <?php echo $nalog[0]->{'trajanje'} ?> dana</label>
                </div>
            </row>
            <br>    
            <row>
                <div class="col-lg-12">
                    <label>Odobravam upotrebu: <?php echo $nalog[0]->{'reg_oznaka'} ?></label>
                </div>
            </row>
            <br>
            <row>
                <div class="col-lg-12">
                    <label>Troškovi putovanja terete <?php echo $vlasnik->{'naziv'} ?></label>
                </div>

            </row>
            <br>
            <row>
                <div class="col-lg-12">
                    <label>Odobravam isplatu predujma u iznosu od <?php echo $nalog[0]->{'predujam_iznos'} ?> kn</label>   
                </div>
            </row>
        </div>
    </body>
</html>