<?php
require('fnc_db.php');

$con = new ConectorBD();

if ($con->initConexion('db_agenda')=='OK') {

    echo "Se realizo la conexión";

   $data[0]['nombre'] = "'Jorge Lopez'";
   $data[0]['password'] = "'".password_hash("123456", PASSWORD_DEFAULT)."'";
   $data[0]['birthdate'] = "'2017-07-30'";
   $data[0]['email'] = "'jlopez@mail.com'";

   $data[1]['nombre'] = "'Ferando Gil'";
   $data[1]['password'] = "'".password_hash("123456", PASSWORD_DEFAULT)."'";
   $data[1]['birthdate'] = "'2017-07-19'";
   $data[1]['email'] = "'fgil@mail.com'";

   $data[2]['nombre'] = "'Luis Garcia'";
   $data[2]['password'] = "'".password_hash("123456", PASSWORD_DEFAULT)."'";
   $data[2]['birthdate'] = "'2017-07-31'";
   $data[2]['email'] = "'lgarcia@mail.com'";

   foreach ($data as $key => $values) {
     if ($con->insertData('user', $values)) {
       echo "Se inserto los datos del usuario correctamente";
     }else echo "Se ha producido un error en la inserción";
   }

  $con->cerrarConexion();

}else {
  echo "Se presentó un error en la conexión";
}


 ?>
