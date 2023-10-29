<?php
class MascotaCanina {
    public function calcularEdadCanina($edadMascota) {       

       // Aplicar la tasa de conversión de 1 año humano a 7 años caninos
        $edadCanina = $edadMascota * 7;

       // Retornar el mensaje con la edad en años caninos
        return "Su mascota tiene $edadCanina años en edad canina.";
    }
}

$miMascota = new MascotaCanina();
$edadHumana = 5; // Edad de la mascota en años humanos
$mensaje = $miMascota->calcularEdadCanina($edadHumana);

// Imprimirá "Su mascota tiene 35 años en edad canina."
echo $mensaje; 
?>

