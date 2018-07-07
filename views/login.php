<div>

    <form action="index.php?c=login" method="post" class="p-4 row flex-column">

        <h4 class="pb-4 col-sm-8 offset-sm-2 font-weight-light">Connexion</h4>

        <?php if(isset($error)): ?>
            <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $error; ?></div>
        <?php endif; ?>

        <div class="form-group col-sm-8 offset-sm-2">
            <label for="email">Email</label>
            <input class="form-control" value="" type="email" placeholder="Email" name="email" id="email" />
        </div>

        <div class="form-group col-sm-8 offset-sm-2">
            <label for="password">Mot de passe</label>
            <input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
        </div>

        <div class="text-right col-sm-8 offset-sm-2">
            <input class="btn btn-success" type="submit" name="submit" value="Valider" />
        </div>

    </form>

</div>