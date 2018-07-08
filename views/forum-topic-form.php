<div class="row d-flex justify-content-center">
    <div class="col-lg-10">


        <section class="col-9">

            <header class="pb-3">
                <h4><?php if(isset($topics)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> un topic</h4>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-danger text-white">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>


            <form action="index.php?c=forum-topic-form" method="post">
                <div class="form-group">
                    <label for="firstname">Nom du topic :</label>
                    <input class="form-control" <?php if(isset($topics)): ?>value="<?php echo $topics['name']?>"<?php endif; ?> type="text" placeholder="Nom du topic" name="name" id="name" />
                </div>
                <div class="form-group">
                    <label for="lastname">Message : </label>
                    <input class="form-control" <?php if(isset($topics)): ?>value="<?php echo $topics['text']?>"<?php endif; ?> type="text" placeholder="Message du topic" name="text" id="text" />
                </div>

                <div class="text-right">
                    <?php if(isset($topics)): ?>
                        <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />
                    <?php else: ?>
                        <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
                    <?php endif; ?>
                </div>

                <?php if(isset($topics)): ?>
                    <input type="hidden" name="id" value="<?php echo $topics['id']?>" />
                <?php endif; ?>

            </form>
        </section>
    </div>
</div>