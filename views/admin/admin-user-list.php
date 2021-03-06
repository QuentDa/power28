<div class="row d-flex justify-content-center">
    <div class="col-lg-10">
        <section class="mt-5">
                    <header class="pb-4 d-flex justify-content-between">
                        <h4>Liste des utilisateurs</h4>
                        <a class="btn btn-primary" href="index.php?c=admin-user-form">Ajouter un utilisateur</a>
                    </header>

                    <?php if(isset($message)):  ?>
                        <div class="bg-success text-white p-2 mb-4">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>

                    <?php if($users): ?>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Admin</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($users as $user): ?>

                                <tr>
                                    <!-- htmlentities sert à écrire les balises html sans les interpréter -->
                                    <th><?php echo htmlentities($user['id']); ?></th>
                                    <td><?php echo htmlentities($user['firstname']); ?></td>
                                    <td><?php echo htmlentities($user['lastname']); ?></td>
                                    <td><?php echo htmlentities($user['email']); ?></td>
                                    <td><?php echo htmlentities($user['is_admin']); ?></td>
                                    <td>
                                        <a href="index.php?c=admin-user-form&user_id=<?php echo $user['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                                        <a onclick="return confirm('Are you sure?')" href="index.php?c=admin-user-list&user_id=<?php echo $user['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    <?php else: ?>
                        Aucun utilisateur enregistré.
                    <?php endif; ?>

        </section>
    </div>
</div>