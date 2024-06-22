<?php
ob_start();
session_cache_expire(60);
session_start();
require('../_app/Config.inc.php');
require('../_app/Mobile_Detect.php');
$detect = new Mobile_Detect;

$site = HOME;

$login = new Login(3);

if($login->CheckLogin()):
  $idusuar = $_SESSION['userlogin']['user_id'];
  $lerbanco->ExeRead('ws_empresa', "WHERE user_id = :idcliente", "idcliente={$idusuar}");

  if (!$lerbanco->getResult()):       
  else:
    foreach ($lerbanco->getResult() as $i):
      extract($i);
    endforeach;
    header("Location: {$site}{$nome_empresa_link}/estatisticas");
  endif;

else:
endif;
?>