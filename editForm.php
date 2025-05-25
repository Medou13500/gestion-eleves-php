
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <?php
 // liaison a la bdd 
        require_once("db.php");
// Mettre id a lurl du navigateur
        $id = $_GET['id'];
//* Requete pour selectionner les eleve par id 
          $sql= "SELECT * FROM  eleve WHERE eleve_id=$id";
          $res = pg_query($connexion,$sql);
//! Variable sous forme de tableau afin d'evité les doublons
        $id_exclusion= [];
 while($row=pg_fetch_assoc($res)){
  //* On verifie si les eleve_id existe depuis la bdd
    //* on verifie que id_exclusion est bien un tableau 
      //* on verifie si l'eleve  existe pas dans le tableau $id_exclusion
              if (isset($row['eleve_id']) && is_array($id_exclusion) && !in_array($row['eleve_id'], $id_exclusion)) {
       //* on affiche le formulaire avec AdminLte
                      echo '
                                    <div class="col-lg-8 offset-lg-2 "> 
                                      <h1 class="text-center my-4">Tableau de gestion des élèves</h1>
                                      <div class="card border-primary shadow-lg mt-5">
                                        <div class="card-header bg-primary text-white text-center">
                                          <h4 class="mb-0">Modifier l\'élève</h4>
                                        </div>
                                        <div class="card-body bg-light">
                                              <form action="/update.php" method="post">

                                                  <div class="form-group mb-3">
                                                      <h2 for="nom">'.htmlspecialchars($row['nom']).'</h2>
                                                    
                                                  </div>

                                                
                                                  <div class="form-group mb-3">
                                                      <h2 for="prenom">'.htmlspecialchars($row['prenom']).'</h2>
                                                    
                                                  </div>
                                                  <!-- Radios -->
                                                  <div class="form-group mb-4">
                                                      <label>Statut</label>
                                                      <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="actif" id="actif Oui" value="1" ' . ($row['actif'] ? 'checked' : '') . '>
                                                          <label class="form-check-label text-success" for="actifOui">✅ Actif</label>
                                                      </div>
                                                      <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="actif" id="actifNon" value="0" ' . (!$row['actif'] ? 'checked' : '') . '>
                                                          <label class="form-check-label text-danger" for="actifNon">❌ Inactif</label>
                                                      </div>
                                                  </div>
                                                  <input type="hidden" name="eleve_id" value="' . $row['eleve_id'] . '">
                                                  <button type="submit" class="btn btn-success btn-block">💾 Enregistrer les modifications</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    ';

         //* on push sur le tableau uniquement si eleve_id n'existe pas dans le tab $id_exclusion
                                  array_push($id_exclusion, $row['eleve_id']);
            }
                        


                  }
              
      
                



        ?>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
<script>






