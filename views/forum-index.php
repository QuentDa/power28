<div class="row d-flex justify-content-center">
    <table class="table col-10">
        <thead>
        <tr id="forumhead">
            <th scope="col"></th>
            <th scope="col">Catégories</th>
            <th scope="col">Nombre de topics</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($forumCategories as $category): ?>
        <tr>
            <th scope="row"></th>
            <td><h2><a href="index.php?c=forum-topic&category_id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></h2></td>
            <td><h2>12</h2></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>