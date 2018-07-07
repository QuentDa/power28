<div class="row d-flex justify-content-center">
    <div class="col-md-10">
        <div id="userHeader" class="row mt-5">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <form action="index.php?c=user-profile" method="post" enctype="multipart/form-data" class="image">
                    <img src="./assets/img/defaultimage.png" alt="" width="150px" height="150px">
                    <div class="form-group">
                        <input class="form-control" type="file" name="image" id="image" />
                        <?php if(isset($user) && $user['image']): ?>
                            <img class="img-fluid py-4" src="./assets/img/user/<?php echo $user['image']; ?>" alt="" />
                            <input type="hidden" name="current-image" value="<?php echo $user['image']; ?>" />
                        <?php endif; ?>
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="name">
                    <h4 class="ml-5"><?php echo $user['lastname']?> <?php echo $user['firstname']?></h4>
                </div>
            </div>
        </div>

        <form action="index.php?c=user-profile" method="post" class="p-4 row flex-column mt-5">

            <h4 class="pb-4 col-sm-8 offset-sm-2">Mise à jour des informations utilisateur</h4>

            <?php if(isset($updateMessage)): ?>
                <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $updateMessage; ?></div>
            <?php endif; ?>

            <div class="form-group col-sm-8 offset-sm-2">
                <label for="firstname">Prénom <b class="text-danger">*</b></label>
                <input class="form-control" value="<?php echo $user['firstname']?>" type="text" placeholder="Prénom" name="firstname" id="firstname" />
            </div>
            <div class="form-group col-sm-8 offset-sm-2">
                <label for="lastname">Nom de famille</label>
                <input class="form-control" value="<?php echo $user['lastname']?>" type="text" placeholder="Nom de famille" name="lastname" id="lastname" />
            </div>
            <div class="form-group col-sm-8 offset-sm-2">
                <label for="email">Email <b class="text-danger">*</b></label>
                <input class="form-control" value="<?php echo $user['email']?>" type="email" placeholder="Email" name="email" id="email" />
            </div>
            <div class="form-group col-sm-8 offset-sm-2">
                <label for="password">Mot de passe (uniquement si vous souhaitez modifier votre mot de passe actuel)</label>
                <input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
            </div>
            <div class="form-group col-sm-8 offset-sm-2">
                <label for="password_confirm">Confirmation du mot de passe (uniquement si vous souhaitez modifier votre mot de passe actuel)</label>
                <input class="form-control" value="" type="password" placeholder="Confirmation du mot de passe" name="password_confirm" id="password_confirm" />
            </div>


            <div class="text-right col-sm-8 offset-sm-2">
                <p class="text-danger">* champs requis</p>
                <input type="hidden" value="<?php echo $_SESSION['user_id']?>" name="id">
                <input class="btn btn-success" type="submit" name="update" value="Valider" />

            </div>

        </form>


    </div>
</div>
