<?php include ('header.html.php'); ?>
<h1>Formulaire d'ajout d'une nouvelle action</h1>
<div class="row justify-content-center">
    <div class="col-10">
        <form method="post">
            <div class="form-group">
                <label for="date" class="bmd-label-floating label">Date de l'action :</label>
                <input type="date" id="date" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="prenom" class="bmd-label-floating label">Prénom du contact :</label>
                <input type="text" id="prenom" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="nom" class="bmd-label-floating label">Nom du contact :</label>
                <input type="text" id="nom" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="entreprise" class="bmd-label-floating label">Nom de l'entreprise :</label>
                <input type="text" id="entreprise" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="typeAction" class="bmd-label-floating label">Type de l'action :</label>
                <select id="typeAction" class="form-control">
                    <option disabled selected>Type de l'action</option>
                    <option value="1">1er contact</option>
                    <option value="2">Proposition</option>
                    <option value="2">Relance</option>
                    <option value="2">Négociation</option>
                    <option value="2">Refus</option>
                    <option value="2">Abandon</option>
                    <option value="2">Gagné</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="montant" class="bmd-label-floating label">Montant de l'action</label>
                <input type="number" id="montant" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="prevenance" class="bmd-label-floating label">Provenance du contact :</label>
                <select id="prevenance" class="form-control">
                    <option disabled selected>Provenance du contact</option>
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
                <label for="statut" class="bmd-label-floating label">Statut de l'action :</label>
                <select id="statut" class="form-control">
                    <option disabled selected>Statut de l'action</option>
                    <option value="0">A faire</option>
                    <option value="1">En cours</option>
                    <option value="2">Terminée</option>
                    <option value="3">Arrêtée</option>
                </select>
            </div>
            <div class="form-group">
                <label for="commentaire" class="bmd-label-floating label">Commentaire de l'action :</label>
                <textarea class="form-control" id="commentaire" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-raised">Enregistrer l'action</button>
            </div>
        </form>
    </div>
</div>

<?php include ('footer.html.php'); ?>