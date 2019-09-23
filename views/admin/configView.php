<?php ob_start(); ?>

<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Configuration du site</h1>
                <h2 class="page-subhead-line">Cette section permet de configurer les informations de bases du site en cas de changements</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        CONFIGURATION DU SITE
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Nom du site</label>
                                <input class="form-control" type="text" name="adminConfig1NomSite" value="NomDuSite" required>
                                <p class="help-block">Essentiel pour le référencement naturel - Idéalement entre 45 et 70 caractères</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Description du site</label>
                                <textarea class="form-control" type="text" row="2" name="adminConfig1Description" required>Description du site NomDuSite</textarea>
                                <p class="help-block">Essentiel pour le référencement naturel - Idéalement entre 150 et 200 caractères</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>URL du site</label>
                                <input class="form-control" type="text" name="adminConfig1URL" value="https://nomdusite.com/" required>
                                <p class="help-block">Essentiel pour le référencement naturel</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Lien de l'espace client</label>
                                <input class="form-control" type="text" name="adminConfig1Client" value="https://nomdusite.com/espace-client/" required>
                                <p class="help-block">Modifie le lien du bouton "Espace client" en cas de changement</p>     
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminConfig1">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        COORDONNÉES DU CABINET
                    </div>
                    <form action="./?treatment" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Adresse</label>
                                <input class="form-control" type="text" name="adminConfig2Adresse" value="5 Place d'Angleterre 62200, Boulogne-sur-mer" required>
                                <p class="help-block">Modifie l'adresse du cabinet, présent dans la section "Contact" et le bas du site</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>E-mail de contact</label>
                                <input class="form-control" type="text" name="adminConfig2Mail" value="contact@gkaufmann.fr" required>
                                <p class="help-block">Modifie l'adresse e-mail de contact, présent dans la section "Contact" et le bas du site</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input class="form-control" type="text" name="adminConfig2Telephone" value="03 21 30 19 19" required>
                                <p class="help-block">Modifie le numéro de téléphone du cabinet, présent dans la section "Contact" et le bas du site</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>FAX</label>
                                <input class="form-control" type="text" name="adminConfig2Fax" value="03 91 18 65 65" required>
                                <p class="help-block">Modifie le numéro de FAX du cabinet, présent dans la section "Contact" et le bas du site</p>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" name="formAdminConfig2">Sauvegarder</button>
                            <a class="btn btn-alert" href="">Annuler les modifications</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    $htmlTitle = 'Configuration du site | Admin | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/admin/template.php';
?>