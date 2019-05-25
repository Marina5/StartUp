<?php include ('header.html.php'); ?>
<h1>Options</h1>
<div class="row justify-content-center">
    <div class="col-10">
        <form method="post">
            <div class="form-group">
                <label class="bmd-label-floating label">Langue de l'interface</div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="français" id="français" value="français"/>
                    <label class="form-check-label" for="français">Français</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="anglais" id="anglais" value="anglais"/>
                    <label class="form-check-label" for="anglais">Anglais</label>
                </div>
            </div>
            <div class="form-group">
                <label class="bmd-label-floating label">Provenance du contact</label>
                <select id="prevenance" class="form-control">
                    <option value="1">Démarchage</option>
                    <option value="2">Appel entrant</option>
                    <option value="3">Site web</option>
                    <option value="4">Bouche à oreille</option>
                    <option value="5">Réseau</option>
                    <option value="6">Apport d'affaires</option>
                    <option value="7">Renouvellement</option>
                    <option value="8">Linkedin</option>
                    <option value="9">Meetup</option>
                    <option value="10">Facebook Ads</option>
                    <option value="11">Salon</option>
                </select>
            </div>
            <div class="form-group">
                <label class="bmd-label-floating label">Email de notification</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="btnOui" id="BTNOui" value="Oui" />
                    <label class="form-check-label" for="BTNOui">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="btnNon" id="BTNNon" value="Non"/>
                    <label class="form-check-label" for="BTNNon">Non</label>
                </div>
            </div>
            <div class="form-group">
                <label class="bmd-label-floating label">Objectif par mois</label>
                <select id="typeAction" class="form-control">
                    <option value="1">1er contact</option>
                    <option value="2">Proposition</option>
                    <option value="2">Relance</option>
                    <option value="2">Négociation</option>
                    <option value="2">Refus</option>
                    <option value="2">Abandon</option>
                    <option value="2">Gagné</option>
                </select>
            </div>
        </form>
    </div>
</div>
<?php include ('footer.html.php'); ?>

