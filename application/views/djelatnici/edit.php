<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit djelatnik</h4>
            </div>
            <div class="col-lg-5">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form action="djelatnici/edit" method="post" class="form-horizontal">
                            <input name="id" type="hidden" value="<?php echo $djelatnik->id; ?>">
                            <div class="form-group">
                                
                                <label for="naziv">Naziv</label>
                                
                                <input class="form-control" type="text" name="naziv" placeholder="Naziv" value="<?php echo $djelatnik->naziv; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="titula">Titula</label>
                                <input class="form-control" type="text" name="titula" placeholder="Titula" value="<?php echo $djelatnik->titula; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="posao">Posao</label>
                                <input class="form-control" type="text" name="posao" placeholder="Posao" value="<?php echo $djelatnik->posao; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="adresa">Adresa</label>
                                <input class="form-control" type="text" name="adresa" placeholder="Adresa" value="<?php echo $djelatnik->adresa; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="preb_opcina_id">Prebivalište</label>
                                <select name="preb_opcina_id" required class="form-control">
                                    <?php foreach ($opcine as $opcina) { ?>
                                        <?php if($djelatnik->opcina_preb_id == $opcina->id) { ?>
                                            <option selected value="<?php echo $opcina->id; ?>"><?php echo $opcina->naziv; ?></option>
                                        <?php } else { ?>
                                            <option value="<?php echo $opcina->id; ?>"><?php echo $opcina->naziv; ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="preb_rad_id">Adresa</label>
                                <select name="preb_rad_id" required class="form-control">
                                    <option></option>
                                    <?php foreach ($opcine as $opcina) { ?>
                                        <?php if($djelatnik->opcina_rad_id == $opcina->id) { ?>
                                            <option selected value="<?php echo $opcina->id; ?>"><?php echo $opcina->naziv; ?></option>
                                        <?php } else { ?>
                                            <option value="<?php echo $opcina->id; ?>"><?php echo $opcina->naziv; ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="row">
                                <button class="btn btn-success form-control" type="submit" class="btn btn-default">Spremi promjene</button>
                            </div>
                        </form> 

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>