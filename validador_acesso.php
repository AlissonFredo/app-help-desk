<?php
  session_start();
  if(!$_SESSION['autenticado'] || $_SESSION['autenticado'] != 'sim'){
    header('Location: index.php?login=erro2');
  }
?>