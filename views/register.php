<div class="tab-pane container-fluid <?php if(isset($_POST['register'])): ?>active<?php endif; ?>" id="register" role="tabpanel">

    <form action="index.php?c=register" method="post" class="p-4 row flex-column">

        <h4 class="pb-4 col-sm-8 offset-sm-2 font-weight-light">Inscription</h4>

        <?php if(isset($registerMessage)): ?>
            <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $registerMessage; ?></div>
        <?php endif; ?>

        <div class="form-group col-sm-8 offset-sm-2">
            <label for="firstname">Prénom <b class="text-danger">*</b></label>
            <input class="form-control" value="" type="text" placeholder="Prénom" name="firstname" id="firstname" />
        </div>
        <div class="form-group col-sm-8 offset-sm-2">
            <label for="lastname">Nom de famille</label>
            <input class="form-control" value="" type="text" placeholder="Nom de famille" name="lastname" id="lastname" />
        </div>
        <div class="form-group col-sm-8 offset-sm-2">
            <label for="email">Email <b class="text-danger">*</b></label>
            <input class="form-control" value="" type="email" placeholder="Email" name="email" id="email" />
        </div>
        <div class="form-group col-sm-8 offset-sm-2">
            <label for="password">Mot de passe <b class="text-danger">*</b></label>
            <input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
        </div>
        <div class="form-group col-sm-8 offset-sm-2">
            <label for="password_confirm">Confirmation du mot de passe <b class="text-danger">*</b></label>
            <input class="form-control" value="" type="password" placeholder="Confirmation du mot de passe" name="password_confirm" id="password_confirm" />
        </div>

        <div class="text-right col-sm-8 offset-sm-2">
            <p class="text-danger">* champs requis</p>
            <input class="btn btn-success" type="submit" name="register" value="Valider" />
        </div>

    </form>

</div>