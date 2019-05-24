Feature: Fonctionnement de la StartUp
In order to  consulter les actions commerciales de la startUp
As a  Employé de la startUp
I need to consulter les progrès de l’entreprise
 
Scenario: Consulter le dashboard
Given  je me connecte sur le site internet
When  à l’arrivée sur le site
Then   j’ai sur ma page un tableau avec toutes les opérations de l’entreprise
 
Scenario: Ajouter une nouvelle opération
Given je viens de réaliser une nouvelle opération
When après avoir été sur le dashboard
Then je clique sur le bouton ajouter une nouvelle opération
And Je remplis le formulaire
When Je clique dans le menu pour ajouter une nouvelle opération
Then je remplis le formulaire
 
Scenario: Modifier les options
Given Je me connecte sur le site internet
When Quand je vais dans le menu option 
Then Je modifie la langue du site
And je modifie la provenance du contrat
And je modifie le type de contrat
And je souhaite activer les mails automatiques


Scenario: Afficher les analyses des résultats
Given Je me connecte sur le site internet
When je clique dans le menu 
Then les graphiques apparaissent, affichant les résultats des 12 derniers mois
And des tableaux résument les types d’action, montants, et autres provenances sur les 12 derniers mois
