<div class="row d-flex justify-content-center">
    <div class="col-md-10 d-flex justify-content-center">
        <p id="apple" class="text-center">Consultez les fonctionnalités de Power28 afin d'appréhender toute la puissance de ce logiciel de
            gestion de stock.</p>
    </div>
</div>
<div class="row d-flex justify-content-center">

    <div class="row  text-center col-10 d-flex justify-content-center">
        <?php foreach($features as $feature): ?>
        <div class="featuresquare">
            <a href="index.php?c=onefeature&feature_id=<?php echo $feature['id']; ?>"><div class="featurecircle"><i class="fas fa-mobile"></i></div></a>
            <p class="appdesc"><?php echo $feature['name']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>

</div>
