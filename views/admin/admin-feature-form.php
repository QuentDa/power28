<div class="row d-flex justify-content-center">
    <div class="col-lg-10">


        <section class="col-9">

            <header class="pb-3">
                <h4><?php if(isset($features)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> une fonctionnalité</h4>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-danger text-white">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>


            <form action="index.php?c=admin-feature-form" method="post">
                <div class="form-group">
                    <label for="firstname">Nom de la fonctionnalité :</label>
                    <input class="form-control" <?php if(isset($features)): ?>value="<?php echo $features['name']?>"<?php endif; ?> type="text" placeholder="Nom de la fonctionnalité" name="name" id="name" />
                </div>
                <div class="form-group">
                    <label for="lastname">Description : </label>
                    <input class="form-control" <?php if(isset($features)): ?>value="<?php echo $features['description']?>"<?php endif; ?> type="text" placeholder="Description de la Fonctionnalité" name="description" id="description" />
                </div>

                <div class="text-right">
                    <?php if(isset($features)): ?>
                        <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />
                    <?php else: ?>
                        <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
                    <?php endif; ?>
                </div>

                <?php if(isset($features)): ?>
                    <input type="hidden" name="id" value="<?php echo $features['id']?>" />
                <?php endif; ?>

            </form>
        </section>
    </div>
</div>