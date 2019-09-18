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
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">CONFIGURATION DU SITE</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Nom du site</label>
                                <input class="form-control" type="text" placeholder="NomDuSite" required>
                                <p class="help-block">Essentiel pour le référencement naturel - Idéalement entre 45 et 70 caractères</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Description du site</label>
                                <input class="form-control" type="text" placeholder="Description du site NomDuSite" required>
                                <p class="help-block">Essentiel pour le référencement naturel - Idéalement entre 150 et 200 caractères</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>URL du site</label>
                                <input class="form-control" type="text" placeholder="https://nomdusite.com/" required>
                                <p class="help-block">Essentiel pour le référencement naturel</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Indexer le site sur les moteurs de recherches</label>
                                <select class="form-control">
                                    <option>Activer l'indexation (par défaut)</option>
                                    <option>Désactiver l'indexation (non recommandé)</option> 
                                </select>       
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </div>
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