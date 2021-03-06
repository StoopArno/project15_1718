<?php
/**
 * @file views_admin/admin_teksten_aanpassen.php
 *
 * Hier kan de administrator de teksten van de helper- en personeelslidinschrijfpagina aanpassen.
 */

echo pasStylesheetAan('style.css');
?>

<?php
echo pasStylesheetAan('style.css');
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Teksten aanpassen</h2>
            </div>
        </div>
        <?php
        foreach($teksten as $tekst) {
            ?>
            <?php echo form_open('teksten_aanpassen/pasTekstAan/' . $tekst->id); ?>
            <div class="row mb-5">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <label for="<?php echo $tekst->id;?>"><?php echo $tekst->naam; ?></label>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <textarea name="<?php echo $tekst->id;?>" id="<?php echo $tekst->id; ?>"rows="3" class="form-control"><?php echo $tekst->omschrijving; ?></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p class="centerKnop"><?php echo form_submit('submitTeksten', 'Opslaan', 'class="btn btn-primary knop"'); ?></p>
                </div>
            </div>
            <?php echo form_close(); ?>
            <?php
        }
        ?>
    </div>


