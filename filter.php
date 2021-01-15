
<form action="" method="GET">
    <div id="filter" class="row align-items-center">
        <div class="col-12 col-md-2">
            <label>Taille</label>
            <select class="form-select" aria-label="Default select example" name="size">
                <?php
                foreach (Bonnet::TAILLE as $value) {
                    ?>
                <option value="<?= $value ?>" <?php echo $size == $value ? 'selected' : ''; ?>><?php echo $value; ?></option>
                <?php
                } ?>
            </select>
        </div>

        
            <div class="col-12 col-md-2">
                <label>Matiere</label>
                <select class="form-select" aria-label="Default select example" name="material">
                    <?php
                    foreach (Bonnet::MATIERE as $value) {
                        ?>
                    <option value="<?= $value ?>" <?php echo $material == $value ? 'selected' : ''; ?>><?php echo $value; ?></option>
                    <?php
                    } ?>
                </select>
            </div>
   
            <div class="col-12 col-md-3">
                <label for="price-min">prix min</label>
                <input type="number" id="price-min" name="price-min" min="0" value="<?php echo $priceMin !== null ? $priceMin : ''; ?>">
            </div>
            <div class="col-12 col-md-3">
                <label for="price-max">prix max</label>
                <input type="number" id="price-max" name="price-max" min ="0" value="value="<?php echo $priceMax !== null ? $priceMax : ''; ?>">
            </div>
            <div class="col-6 col-md-2">
                    <button class="btn" type="submit">Rechercher</button>
            </div>
    </div>
</form>