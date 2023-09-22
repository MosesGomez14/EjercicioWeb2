<?php
//Declaro las variables
$numero1="0";
$numero2="0";
$resultado="0";
$resultadoCompleto="0";
$residuo="0";
$mensaje="";

//Defino si se llama el botón calcular
if(isset($_POST["calcular"])){
//Tomo los datos y realizo la operación
$numero1=(float)$_POST["numero1"];
$numero2=(float)$_POST["numero2"];

if($numero2!=0){
    $resultadoCompleto=$numero1/$numero2;
    $resultado=floor($resultadoCompleto);
    $residuo=fmod($numero1,$numero2);
    if($residuo!=0){
        $mensaje="El número ".$numero1." no es divisible entre el número ".$numero2;
    }else{
        $mensaje="El número ".$numero1." si es divisible entre el número ".$numero2;
    }
}else{
    $resultado="Error";
    $mensaje="No se puede dividir entre cero";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Web 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <form method="Post" action="">
        <table>
            <tr>
               <td>Dame el numero 1: </td>
               <td>
                   <input type="text" name="numero1" value="<?php echo $numero1 ?>">
               </td>
            </tr>
            <tr>
               <td>Dame el numero 2: </td>
               <td>
                   <input type="text" name="numero2" value="<?php echo $numero2 ?>">
               </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="calcular" value="Calcular"></td>
            </tr>
            <tr>
                <td>Resultado: </td>
                <td><p  name="resultado"><?php echo $resultado?></p></td>
            </tr>
            <tr>
                <td>Resultado con decimales: </td>
                <td><p  name="resultadoCompleto"><?php echo $resultadoCompleto?></p></td>
            </tr>
            <tr>
                <td>Residuo: </td>
                <td><p  name="residuo"><?php echo $residuo?></p></td>
            </tr>
            <tr>
                <td>Mensaje: </td>
                <td><p  name="mensaje"><?php echo $mensaje?></p></td>
            </tr>
        </table>
    </form>
</body>
</html>