<?php
    require_once __DIR__ . "/Lib/menu.php"; 
    require_once __DIR__ . "/templates/header.php";
?>


<div class="container connect my-3">
            <form action="add_review.php" method="POST">
                <div class="my-3">
                    <label for="nom">Nom :</label>
                    <input type="text" class="my-3 form-control" id="nomAddComment" name="nom" required="">
                </div>
                <div class="my-3">
                    <label for="commentaire">Commentaire :</label>
                    <textarea class="my-3 form-control" id="commentaireAddComment" name="commentaire" required=""></textarea>
                </div>
                <div class="my-3">
                    <label for="note">Note :</label>
                    <select class="my-3" id="noteAddComment" name="note" required="">
                    <option value="1">1 étoile</option>
                    <option value="2">2 étoiles</option>
                    <option value="3">3 étoiles</option>
                    <option value="4">4 étoiles</option>
                    <option value="5">5 étoiles</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" name="envoiReview" class="my-5 btn btn-danger">
                    Ajouter un avis
                    </button>
                </div>
                </form>
            </div>

<?php 
require_once __DIR__ . "/templates/footer.php"; 
?>