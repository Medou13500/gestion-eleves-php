<h1 class="text-center">Tableau des gestion des eleve</h1>
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

        require_once("db.php");
          
           
          $sql= "SELECT * FROM  eleve";
          $res = pg_query($connexion,$sql);

         $data=[];


        while($row=pg_fetch_assoc($res)){
         $actionBtn = '<a href="editForm.php?id=' . $row['eleve_id'] . '" class="btn btn-primary btn-sm">Modifier</a>';



            $data[]=[

            'id' => $row['eleve_id'],
            'nom'=> $row['nom'],
            'prenom' => $row['prenom'],
            'classe' => $row['classe'],
            'age' => $row['age'],
            'dateNaissance' => $row['date_naissance'],
         'actif' => ($row['actif'] === 't') ? 'Oui' : 'Non',

            'action'=> $actionBtn,
            ];


        };
         echo'
                
                     <div class="col-lg-12">
                       <div class="card">
                         <div class="card-body">
                          <table id="example" class="table table-striped table-bordered table-hover">

                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                     <th>Prenom</th>
                                     <th>Classe</th>
                                      <th>Age</th>
                                      <th>Date de naissance</th>
                                       <th>Actif</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                         </div>
                       </div>
                     </div>


                    ';
                 $jsonData = json_encode($data);



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

$(document).ready(function () {
  const data = <?= $jsonData ?>;

  $('#example').DataTable({
    data: data,
    columns: [
      { title: "ID", data: 'id' },
      { title: "Nom", data: 'nom' },
      { title: "Prenom", data: 'prenom' },
      { title: "Classe", data: 'classe' },
      { title: "Age", data: 'age' },
      { title: "Date de Naissance", data: 'dateNaissance' },
      { title: "Actif", data: 'actif' },
      {
        title: "Action",
        data: 'action',
        render: data => data
      }
    ],
    pageLength: 25,
    searching: true
  });
});




</script>