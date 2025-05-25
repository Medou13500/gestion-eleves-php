
# CREATION DE FICHIER  EDITFORM AFIN DE METTRE EN PLACE DE FORMUALIRE DE MAJ DES ELEVES

-  faire afficher l'id de leleve depuis l'url (fait)
-  je selectionne  la table les eleve par id (fait)
-  je creer le formulaire en html (fait)
-  je met un fichier d'appel dans action du formulaire update. quelque chose (fait)

# CREATION DE FICHIER UPDATE POUR METTRE EN PLACE LA MAJ DES ELEVE (actif)
-  je selectionne la table eleve en recuperant actif en fonction de son eleve_id 
-  je recupere les donnant ligne par ligne de maniere indexé en commancant par la premiere ligne  fetch_row
-  faire en sorte de le mettre en true / false et false true les actif 
-  je creer une comdtion si la ligne exite deja alors requete update sinon echo pg_last error .. afin de creer un message d'erreur
-  le lien update je le met dans action du formulaire. 


#  À creuser plus tard :
- [ ] `Comprendre la condition isset de $id_exclusion : pourquoi on fait cette manière ?`
