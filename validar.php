
     <?php

     session_start();
    
     
     $con = mysqli_connect('localhost','organiqu_organiqu','limonada2018');

     mysqli_select_db($con, 'usuarios');
     //VERFICA SE O CADASTRO FOI REQUISITADO
     if ($_SERVER['REQUEST_METHOD'] == "POST") {
       $nome = $_POST ['email'];
       $senha = $_POST ['senha'];

     $s = "select * from tabela1 where nome = '$nome'";

     $result = mysqli_query ($con, $s);
     $num = mysqli_num_rows($result);

     if($num == 1) {

         echo 'Email já cadastrado. Por favor, informe um email válido';
     }else {
         $reg= "insert into tabela1 (nome , senha) values ('$nome' , '$senha')";

         mysqli_query($con, $reg);

         echo "Registrado com sucesso!";
     }
     }
     ?>
