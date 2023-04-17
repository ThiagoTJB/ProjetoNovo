<?php
include_once('Conexao.php');
if($_POST)
{
    $id_PCategoria = $_POST['txtID'];    
    $nome_PCategoria = $_POST['txtNome'];
    $status_PCategoria = $_POST['txtStatus'];
    
    try 
    {
       
        $sql = $conn->prepare('update PCategoria set
        $nome_PCategoria =:nome_PCategoria,         
        $nome_PCategoria=:nome_PCategoria,
        $status_PCategoria=:status_PCategoria
        where id_PCategoria=:id_PCategoria'
        );   

        $sql->execute(array(
            'id_PCategoria'=>$id_PCategoria,
            ':nome_PCategoria'=>$nome_PCategoria,
            ':status_PCategoria'=>$status_PCategoria
        ));
        if($sql->rowCount()==1)
        {
            echo "<p>Dados alterados com sucesso</p>";
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>
    