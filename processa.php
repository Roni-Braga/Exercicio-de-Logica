<?php
$tabela1 = $_POST['opcao1'];
$tabela2 = $_POST['opcao2'];
$tabela3 = $_POST['opcao3'];
$tabela4 = $_POST['opcao4'];
$tabela5 = $_POST['opcao5'];
$tabela6 = $_POST['opcao6'];




/*echo"tabela 1 =".$tabela1;
echo"tabela 2 =".$tabela2;
echo"tabela 3 =".$tabela3;
echo"tabela 4 =".$tabela4;
echo"tabela 5 =".$tabela5;
echo"tabela 6 =".$tabela6;
*/
if($tabela1 =="SIM"){
   $tabela1 = 1;
    

} if($tabela2 =="SIM"){
     $tabela2 = 2;
   
}
 if($tabela3 =="SIM"){
     $tabela3 = 4;
   
}
 if($tabela4 =="SIM"){
     $tabela4 = 8;
   
}
 if($tabela5 =="SIM"){
    $tabela5 = 16;
    
}
 if($tabela6 =="SIM"){
     $tabela6 = 32;
    
}


if($tabela1 == "NAO"){
    $tabela1 = 0;
   

} if($tabela2 == "NAO"){
    $tabela2 = 0;
    

} if($tabela3 == "NAO"){
   $tabela3 = 0;
    

} if($tabela4 == "NAO"){
     $tabela4 = 0;
  

} if($tabela5 == "NAO"){
     $tabela5 = 0;
    

} if($tabela6 == "NAO"){
     $tabela6 = 0;
   

}


$resultado = $tabela1 + $tabela2 +$tabela3 + $tabela4 + $tabela5 + $tabela6;

echo"<script>alert('Número que você pensou foi'+ ' ' +$resultado)</script>";
echo"<script>window.location.href='teste.php'</script>";



