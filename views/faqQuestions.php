<div class="row d-flex justify-content-center">
    <div class="col-md-10 d-flex justify-content-center">
        <p id="apple" class="text-center">Bienvenue sur notre Foire Aux Questions</p>
    </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col-lg-10 col-12">
        <?php foreach($faqQuestions as $question): ?>
        <h2 class="font-weight-light"><?php echo $question['question']; ?></h2>
        <h6 class="mt-5 font-weight-light"><?php echo $question['answer']; ?></h6>
            <hr class="m-5">
        <?php endforeach; ?>
    </div>
</div>
