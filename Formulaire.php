<?php
    require_once __DIR__ . "/Lib/menu.php"; 
    require_once __DIR__ . "/templates/header.php";
?>

    <section class="section section-no-background section-no-border m-none p-none">
                <div class="container margin_top_30">
                <div class="row mt-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                    <div class="panel-group col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="text-danger accordion-toggle no-underline text-red-bold ms-3" data-toggle="collapse" href="#panel-cart-discount" aria-expanded="true">
                                Nous contacter
                            </a>
                            </h4>
                        </div>
                        </div>
                    </div>

                    <form class="text-grey fs-6" id="contactForm" action="leaveMessage.php" method="POST">
                        <div class="row">
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                                <label>Nom *</label>
                                <input value="" data-msg-required="Votre nom" maxlength="100" class="form-control" name="nom" id="nom" required="required" aria-required="true" type="text">
                            </div>
                            <div class="col-md-6">
                                <label>Prénom *</label>
                                <input value="" data-msg-required="Votre prénom" maxlength="100" class="form-control" name="prenom" id="prenom" required="required" aria-required="true" type="text">
                            </div>
                            </div>
                            <div class="col-md-12">
                            <label>Email *</label>
                            <input value="" data-msg-required="Votre email" data-msg-email="Adresse email non valide" maxlength="100" class="form-control" name="email" id="email" required="required" aria-required="true" type="email">
                            </div>
                            <div class="col-md-12">
                            <label>Téléphone *</label>
                            <input value="" data-msg-required="Votre telephone" maxlength="100" class="form-control" name="telephone" id="telephone" required="required" aria-required="true" type="text">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                            <label>Sujet</label>
                            <input value="" data-msg-required="Sujet" maxlength="100" class="form-control" name="sujet" id="sujet" required="required" aria-required="true" type="text">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                            <label>Message *</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required="required" aria-required="true"></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="row margin_bottom_20">
                        <div class="col-md-12">
                            <input value="1" name="rgpd" type="checkbox" required="required">
                            <span class="small">En soumettant ce formulaire, j'accepte que les
                            informations saisies soient exploitées dans le cadre
                            de la relation commerciale qui peut en découler.
                            <a href="politic.php" target="_blank">En savoir plus</a></span>
                        </div>
                        </div>
                        <div class="row my-4">
                        <div class="col-md-12">
                            <input value="Envoyer" name="envoimsg" class="btn btn-form btn-lg mb-xlg" data-loading-text="Loading..." type="submit">
                        </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-5" style="height: 400px">
                    <div class="panel-group col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="text-danger accordion-toggle no-underline text-red-bold ms-3" data-toggle="collapse" href="#panel-cart-discount" aria-expanded="true">
                                Nous trouver
                            </a>
                            </h4>
                        </div>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d656.478011032226!2d2.3509477697263796!3d48.840816380860566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671edd502cc37%3A0x7277a4bb77a7ef51!2s7%20Rue%20de%20Mirbel%2C%2075005%20Paris!5e0!3m2!1sfr!2sfr!4v1688645516288!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                </div>
            </section>

<?php
    require_once __DIR__ . "/templates/footer.php";  
?>