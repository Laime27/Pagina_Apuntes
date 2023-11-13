<?php
    include("conexion.php");
    session_start();
   
    $usuarioID = isset($_SESSION["usuarioID"]) ? $_SESSION["usuarioID"] : "";

    $usuarioIngresado = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
    $clave = isset($_POST["clave"]) ? $_POST["clave"] : "";

    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
    $texto = isset($_POST["texto"]) ? $_POST["texto"] : "";
    $accion = isset($_POST["accion"]) ? $_POST["accion"] : ""; 
    
    $sentenciaSQL = $conexion->prepare("SELECT * FROM asunto WHERE usuarioID = :id");
    $sentenciaSQL->bindParam(":id", $usuarioID);
    $sentenciaSQL->execute();
    $listaNotas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
    $listaNotas = array_reverse($listaNotas);
   
   
    switch($accion){
        case "crear":

            $sentenciaSQL = $conexion->prepare("INSERT INTO asunto (usuarioID, titulo, texto) VALUES (:usuarioID, :titulo, :texto)");
            $sentenciaSQL->bindParam(":usuarioID", $usuarioID);
            $sentenciaSQL->bindParam(":titulo", $titulo);
            $sentenciaSQL->bindParam(":texto", $texto);
            $sentenciaSQL->execute();
            header("location:apuntes.php");
 
        break;
        
       case "eliminar":
            $sentenciaSQL=$conexion->prepare("DELETE FROM asunto WHERE id=:id");
            $sentenciaSQL->bindParam(":id",$id);
            $sentenciaSQL->execute();
            header("location:apuntes.php");
        break;

        case "modificar":
                $sentenciaSQL= $conexion->prepare("UPDATE asunto set titulo=:titulo, texto=:texto Where id=:id");
                $sentenciaSQL->bindParam(":id",$id);
                $sentenciaSQL->bindParam(":titulo",$titulo);
                $sentenciaSQL->bindParam(":texto",$texto);
                $sentenciaSQL->execute();

                header("location:apuntes.php");

            break;

            case "registrar":
              $sentenciaVerificar = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuarioIngresado");
              $sentenciaVerificar->bindParam(":usuarioIngresado", $usuarioIngresado);
              $sentenciaVerificar->execute();
          
              if ($sentenciaVerificar->rowCount() > 0) {
                    $noexisteUsuario=1;
                  
              } else {
                
                  $sentenciaSQL = $conexion->prepare("INSERT INTO usuarios (usuario, contra) VALUES (:usuario, :contra)");
                  $sentenciaSQL->bindParam(":usuario", $usuarioIngresado);
                  $sentenciaSQL->bindParam(":contra", $clave);
                  $sentenciaSQL->execute();
                  header("location:index.php");
              }
              break;

            }
?>