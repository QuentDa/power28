<div class="row d-flex justify-content-center">
    <div class="col-lg-10">


        <section class="col-9">

            <header class="pb-3">
                <h4><?php if(isset($questions)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> une question à la FAQ</h4>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-danger text-white">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>


            <form action="index.php?c=admin-faq-form" method="post">
                <div class="form-group">
                    <label for="firstname">Question :</label>
                    <input class="form-control" <?php if(isset($questions)): ?>value="<?php echo $questions['question']?>"<?php endif; ?> type="text" placeholder="Nom de la question" name="question" id="question" />
                    <label for="answer">Réponse :</label>
                    <textarea class="form-control" id="answer" name="answer" rows="3"><?php if(isset($questions)): ?><?php echo $questions['answer']?><?php endif; ?></textarea>
                </div>

                <div class="text-right">
                    <?php if(isset($questions)): ?>
                        <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />
                    <?php else: ?>
                        <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
                    <?php endif; ?>
                </div>

                <?php if(isset($questions)): ?>
                    <input type="hidden" name="id" value="<?php echo $questions['id']?>" />
                <?php endif; ?>

            </form>
        </section>
    </div>
</div>