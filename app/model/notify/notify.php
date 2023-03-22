<?php
      include_once(__dir__."/../admintablas/sqls_admin.php");

    if(getnoti($consulnotis)>0){
        echo getnoti($consulnotis);
    }else{
        echo "";
    }

      


      function getnoti($notis){
        $cont=0;
        foreach($notis as $noti){
            if($noti['estado']==0){
                $cont=$cont+1;
            }
        }
        return $cont;
    }




?>