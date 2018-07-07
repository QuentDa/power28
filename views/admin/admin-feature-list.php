<div class="row d-flex justify-content-center">
    <div class="col-lg-10">
        <section class="mt-5">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Liste des Fonctionnalités</h4>
                <a class="btn btn-primary" href="index.php?c=admin-feature-form">Ajouter une fonctionnalité</a>
            </header>

            <?php if(isset($message)): //si un message a été généré plus haut, l'afficher ?>
                <div class="bg-success text-white p-2 mb-4">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if($features): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($features as $feature): ?>

                        <tr>
                            <!-- htmlentities sert à écrire les balises html sans les interpréter -->
                            <th><?php echo htmlentities($feature['id']); ?></th>
                            <td><?php echo htmlentities($feature['name']); ?></td>
                            <td><?php echo htmlentities($feature['description']); ?></td>
                            <td>
                                <a href="index.php?c=admin-feature-form&feature_id=<?php echo $feature['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                                <a onclick="return confirm('Are you sure?')" href="index.php?c=admin-feature-list&feature_id=<?php echo $feature['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            <?php else: ?>
                Aucune fonctionnalité enregistrée.
            <?php endif; ?>

        </section>
    </div>
</div>