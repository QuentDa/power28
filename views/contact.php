<div class="row d-flex justify-content-center mt-5">
    <div class="d-flex col-lg-10 col-12">

        <div class="col-lg-6">
                <p id="apple" class="">Une question, <br> une démonstration? <br> Écrivez nous...</p>
        </div>

        <div class="col-lg-6 d-flex justify-content-center">
            <form action="index.php?c=contact" method="post" class="contactForm w-100">
                <div class="form-group">
                    <label for="name">Votre nom et prénom : </label>
                    <input type="text" name="name" id="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="email">Votre adresse e-mail : </label>
                    <input type="email" name="email" id="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Votre message : </label>
                    <textarea class="form-control" name="content" rows="10"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="buttonContact cta" name="send">Envoyer</button>
                </div>
            </form>
        </div>
    </div>

</div>

