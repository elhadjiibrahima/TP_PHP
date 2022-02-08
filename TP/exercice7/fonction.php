<?php

function testSaisi($j,$m,$a){
    if(isset($_POST['valide'])){
        if(empty($_POST['j']) || empty($_POST['m']) || empty($_POST['a'])){
            header('location:index.php');
        }
        else{
            if(intval($_POST['j']) && intval($_POST['m']) && intval($_POST['a'])){
              echo 'hello Mr';
            }
            else{
                header('location:index.php');
            }
        }
    }
}

 
 
?>