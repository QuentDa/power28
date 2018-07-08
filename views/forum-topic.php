<div class="row d-flex justify-content-center">
    <table class="table col-10">
        <thead>
        <tr id="forumhead">
            <th scope="col"></th>
            <th scope="col">Topics</th>
            <th scope="col">Nombre de messages</th>
            <th scope="col"><a href="index.php?c=forum-topic-form" class="btn btn-primary">Créer un topic</a></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($forumTopics as $topic): ?>
            <tr>
                <th scope="row"></th>
                <td><h2><a href="index.php?c=forum-answer&topic_id=<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></a></h2></td>
                <td><h2>12</h2></td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
    <a href="index.php?c=forum-index" class="text-center m-0 p-0 w-100">Retourner à l'index du forum</a>
</div>
