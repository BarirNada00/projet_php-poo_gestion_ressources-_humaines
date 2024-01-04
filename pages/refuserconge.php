<?php
   session_start();
  if (isset($_SESSION['user'])){
  require_once("connexiondb.php");
    if (isset($_GET['idemp']))
        
        $id = $_GET['idemp'];
    
    else
        
        $id = "";

   $requete2="delete from congesdemandes where idemp=$id";
   $resultat2=$pdo->prepare($requete2);
   $resultat2->execute();

   }
?>
<html>
     <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "Le congé a été supprimé avec succès !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "congesdemandes.php";
             })
         </script>     
     </body></html>