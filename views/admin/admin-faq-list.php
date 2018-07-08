<div class="row d-flex justify-content-center">
    <div class="col-lg-10">
        <section class="mt-5">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Liste des Questions de la FAQ</h4>
                <a class="btn btn-primary" href="index.php?c=admin-faq-form">Ajouter une question</a>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-success text-white p-2 mb-4">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if($questions): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Question</th>
                        <th>Réponse</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($questions as $question): ?>

                        <tr>
                            <th><?php echo htmlentities($question['id']); ?></th>
                            <td><?php echo htmlentities($question['question']); ?></td>
                            <td><?php echo htmlentities($question['answer']); ?></td>
                            <td>
                                <a href="index.php?c=admin-faq-form&question_id=<?php echo $question['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                                <a onclick="return confirm('Are you sure?')" href="index.php?c=admin-faq-list&question_id=<?php echo $question['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            <?php else: ?>
                Aucune question enregistrée.
            <?php endif; ?>

        </section>
    </div>
</div>