<div class="row d-flex justify-content-center">
    <div class="col-lg-10">
        <section class="mt-5">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Liste des Topics du forum</h4>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-success text-white p-2 mb-4">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if($topics): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($topics as $topic): ?>

                        <tr>
                            <th><?php echo htmlentities($topic['id']); ?></th>
                            <td><?php echo htmlentities($topic['text']); ?></td>
                            <td>
                                <a href="index.php?c=admin-forum-category-form&category_id=<?php echo $topic['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                                <a onclick="return confirm('Are you sure?')" href="index.php?c=admin-forum-category-list&category_id=<?php echo $topic['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
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