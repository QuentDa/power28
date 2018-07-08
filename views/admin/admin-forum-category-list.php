<div class="row d-flex justify-content-center">
    <div class="col-lg-10">
        <section class="mt-5">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Liste des Catégories du forum</h4>
                <a class="btn btn-primary" href="index.php?c=admin-forum-category-form">Ajouter une catégorie</a>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-success text-white p-2 mb-4">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if($categories): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($categories as $category): ?>

                        <tr>
                            <th><?php echo htmlentities($category['id']); ?></th>
                            <td><?php echo htmlentities($category['name']); ?></td>
                            <td>
                                <a href="index.php?c=admin-forum-category-form&category_id=<?php echo $category['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                                <a onclick="return confirm('Are you sure?')" href="index.php?c=admin-forum-category-list&category_id=<?php echo $category['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            <?php else: ?>
                Aucune catégorie enregistrée.
            <?php endif; ?>

        </section>
    </div>
</div>