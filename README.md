
# STACK DEVELOPPEMENT DU PROJET 🧑‍💻
 - PHP natif
 - AdminLTE template frontend
 - docker 
 - Boostraps css


# OBJECTIF DU PROJET C'EST DE METTRE EN PLACE UN TABLEAU DE GESTION DES ELEVE AFIN DE POUVOIR SAVOIR 
# SI LES ELEVES FONT PARTIE DE L'ETABLISSEMENT OU DE LA CLASSE EN CAS DE L'APPEL DE DEBUT DE COURS OU L'ADMINISTRATION 🧑‍💻



# CONNEXTION DE BASE DE DONNÉE POSTGRES VIA PG ADMIN VIA DOCKER

# CREATION DU FICHIER INDEX.PHP TABLEAU DES ELEVE 🧑‍💻
 -   je relie mon fichier a la connexion de la base de donnée
 -   je selectionne tout la table de ma bdd eleve via requete SELECT
 -   j'exécute la requete
 -   je creer une variable de tableau vide 
 -   je creer une boucle while qui va me permettre de recuperer les donnée de ma bdd ligne par ligne avec avec pg_fetch_assoc
 - en recuperant les donnée je l'ai place dans la variable de tab vide
 -   ensuite en dehors de la boucle en utilisant la squelette de adminLTe  je vais creer un tab en creant id (example) uniquement le thead
 -  je vais recuperer la variable ou ya les donnée sous forme de tab et le mettre en json_encode afin de le mettre sous format json
 - je met tout les cdn boostrap jsquery datatable a la fin
 - en dessous je creer un datatable dans le je vais devoir  creer le td en recuperant  id example en recuperant la variable ou sont placé les donnée sous format json 
 - ensuite je relie datatable  au donnée recuperer dans un tableau column 






# CREATION DE FICHIER  EDITFORM AFIN DE METTRE EN PLACE DE FORMUALIRE DE MAJ DES ELEVES

-  faire afficher l'id de leleve depuis l'url (fait)
-  je selectionne  la table les eleve par id (fait)
-  je creer le formulaire en html (fait)
-  je met un fichier d'appel dans action du formulaire update. quelque chose (fait)

# CREATION DE FICHIER UPDATE POUR METTRE EN PLACE LA MAJ DES ELEVE (actif)
- je fait en sorte que eleve_id soit un entier lors de la soumission du formulaire  (fait)
- je fait une comdition si cest le cas  je recupere tout les eleve par id sous forme de requete (fait)
- j'execute la requete (fait )
- je recupere les donnée ligne par ligne avec fetch_assoc en faisant update a l'interieu (fait)
- ensuite je fait la comdtion qui permet de le mettre a true et a false depuis la base de donnée (fait)
- requete update pour mettre a jour les eleve depuis la base true false /false true (fait)
- j'exécute la requete (fait)
-  je fait une redirection a la page principal (fait)



# RESTE A FAIRE =  COMMENTER LE CODE  ET BIEN INDENTÉ

#  À comprendre plus tard :
 - `Comprendre la condition isset de $id_exclusion : pourquoi on fait cette manière ?`
 - `Comprendre la condition isset de $id_exclusion : pourquoi on fait cette manière ?`