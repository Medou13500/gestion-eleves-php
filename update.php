<?php
require_once("db.php");

$id = isset($_POST['eleve_id']) ? (int) $_POST['eleve_id'] : null;




if ($id) {
    $sql = "SELECT actif FROM eleve WHERE eleve_id = $id";
    $res = pg_query($connexion, $sql);

    if ($row = pg_fetch_assoc($res)) {
   $currentStatus = ($row['actif'] === 't' || $row['actif'] === true);
    if ($currentStatus) {
        $newStatus = 'FALSE';
    } else {
        $newStatus = 'TRUE';
    }


        $update = "UPDATE eleve SET actif = $newStatus WHERE eleve_id = $id";
        pg_query($connexion, $update);
    }
}

// Redirection propre, rien ne doit avoir été affiché avant
header("Location: index.php");
exit;
?>
