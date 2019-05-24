<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

     /**
     * @Given je me connecte sur le site internet
     */
    public function jeMeConnecteSurLeSiteInternet()
    {
        throw new PendingException();
    }

    /**
     * @When à l’arrivée sur le site
     */
    public function aLarriveeSurLeSite()
    {
        throw new PendingException();
    }

    /**
     * @Then j’ai sur ma page un tableau avec toutes les opérations de l’entreprise
     */
    public function jaiSurMaPageUnTableauAvecToutesLesOperationsDeLentreprise()
    {
        throw new PendingException();
    }

    /**
     * @Given je viens de réaliser une nouvelle opération
     */
    public function jeViensDeRealiserUneNouvelleOperation()
    {
        throw new PendingException();
    }

    /**
     * @When après avoir été sur le dashboard
     */
    public function apresAvoirEteSurLeDashboard()
    {
        throw new PendingException();
    }

    /**
     * @Then je clique sur le bouton ajouter une nouvelle opération
     */
    public function jeCliqueSurLeBoutonAjouterUneNouvelleOperation()
    {
        throw new PendingException();
    }

    /**
     * @Then Je remplis le formulaire
     */
    public function jeRemplisLeFormulaire()
    {
        throw new PendingException();
    }

    /**
     * @When Je clique dans le menu pour ajouter une nouvelle opération
     */
    public function jeCliqueDansLeMenuPourAjouterUneNouvelleOperation()
    {
        throw new PendingException();
    }

    /**
     * @Then je remplis le formulaire
     */
    public function jeRemplisLeFormulaire2()
    {
        throw new PendingException();
    }

    /**
     * @Given Je me connecte sur le site internet
     */
    public function jeMeConnecteSurLeSiteInternet2()
    {
        throw new PendingException();
    }

    /**
     * @When Quand je vais dans le menu option
     */
    public function quandJeVaisDansLeMenuOption()
    {
        throw new PendingException();
    }

    /**
     * @Then Je modifie la langue du site
     */
    public function jeModifieLaLangueDuSite()
    {
        throw new PendingException();
    }

    /**
     * @Then je modifie la provenance du contrat
     */
    public function jeModifieLaProvenanceDuContrat()
    {
        throw new PendingException();
    }

    /**
     * @Then je modifie le type de contrat
     */
    public function jeModifieLeTypeDeContrat()
    {
        throw new PendingException();
    }

    /**
     * @Then je souhaite activer les mails automatiques
     */
    public function jeSouhaiteActiverLesMailsAutomatiques()
    {
        throw new PendingException();
    }

    /**
     * @When je clique dans le menu
     */
    public function jeCliqueDansLeMenu()
    {
        throw new PendingException();
    }

    /**
     * @Then les graphiques apparaissent, affichant les résultats des :arg1 derniers mois
     */
    public function lesGraphiquesApparaissentAffichantLesResultatsDesDerniersMois($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then des tableaux résument les types d’action, montants, et autres provenances sur les :arg1 derniers mois
     */
    public function desTableauxResumentLesTypesDactionMontantsEtAutresProvenancesSurLesDerniersMois($arg1)
    {
        throw new PendingException();
    }
}
