<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-print-none shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">UPTecámac</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="boleta.html">Boleta</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

<?php
//Competencias
$competencias = 0;
$estatus = " ";

//Datos
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$grupo=$_POST['grupo'];

//---Ingles---//
//Recibo de datos
$ingc1 = $_POST['ingc1'];
$ingh1 = $_POST['ingh1'];
$ings1 = $_POST['ings1'];

$ingc2 = $_POST['ingc2'];
$ingh2 = $_POST['ingh2'];
$ings2 = $_POST['ings2'];

$ingc3 = $_POST['ingc3'];
$ingh3 = $_POST['ingh3'];
$ings3 = $_POST['ings3'];

//Calculo de calificacion por unidad
$ing1 = ($ingc1 * 0.4) + ($ingh1 * 0.4) + ($ings1 * 0.2);
$ing2 = ($ingc2 * 0.4) + ($ingh2 * 0.4) + ($ings2 * 0.2);
$ing3 = ($ingc3 * 0.4) + ($ingh3 * 0.4) + ($ings3 * 0.2);

//Condición
if ($ing1 < 7 ){
    $competencias++;
}
if ($ing2 < 7 ){
    $competencias++;
}
if ($ing3 < 7 ){
    $competencias++;
}

//Promedio
$ingp = round((($ing1 + $ing2 + $ing3)/3),2);


//---Habilidades---//
//Recibo de datos
$habc1 = $_POST['habc1'];
$habh1 = $_POST['habh1'];
$habs1 = $_POST['habs1'];

$habc2 = $_POST['habc2'];
$habh2 = $_POST['habh2'];
$habs2 = $_POST['habs2'];

$habc3 = $_POST['habc3'];
$habh3 = $_POST['habh3'];
$habs3 = $_POST['habs3'];

//Calculo de calificacion por unidad
$hab1 = ($habc1 * 0.4) + ($habh1 * 0.4) + ($habs1 * 0.2);
$hab2 = ($habc2 * 0.4) + ($habh2 * 0.4) + ($habs2 * 0.2);
$hab3 = ($habc3 * 0.4) + ($habh3 * 0.4) + ($habs3 * 0.2);

//Condición
if ($hab1 < 7 ){
    $competencias++;
}
if ($hab2 < 7 ){
    $competencias++;
}
if ($hab3 < 7 ){
    $competencias++;
}

//Promedio
$habp = round((($hab1 + $hab2 + $hab3)/3),2);


//---Matemáticas---//
//Recibo de datos
$matc1 = $_POST['matc1'];
$math1 = $_POST['math1'];
$mats1 = $_POST['mats1'];

$matc2 = $_POST['matc2'];
$math2 = $_POST['math2'];
$mats2 = $_POST['mats2'];

$matc3 = $_POST['matc3'];
$math3 = $_POST['math3'];
$mats3 = $_POST['mats3'];

//Calculo de calificacion por unidad
$mat1 = ($matc1 * 0.4) + ($math1 * 0.4) + ($mats1 * 0.2);
$mat2 = ($matc1 * 0.4) + ($math2 * 0.4) + ($mats2 * 0.2);
$mat3 = ($matc3 * 0.4) + ($math3 * 0.4) + ($mats3 * 0.2);

//Condición
if ($mat1 < 7 ){
    $competencias++;
}
if ($mat2 < 7 ){
    $competencias++;
}
if ($mat3 < 7 ){
    $competencias++;
}

//Promedio
$matp = round((($mat1 + $mat2 + $mat3)/3),2);


//---Programación web---//
//Recibo de datos
$proc1 = $_POST['proc1'];
$proh1 = $_POST['proh1'];
$pros1 = $_POST['pros1'];

$proc2 = $_POST['proc2'];
$proh2 = $_POST['proh2'];
$pros2 = $_POST['pros2'];

$proc3 = $_POST['proc3'];
$proh3 = $_POST['proh3'];
$pros3 = $_POST['pros3'];

//Calculo de calificacion por unidad
$pro1 = ($proc1 * 0.4) + ($proh1 * 0.4) + ($pros1 * 0.2);
$pro2 = ($proc2 * 0.4) + ($proh2 * 0.4) + ($pros2 * 0.2);
$pro3 = ($proc3 * 0.4) + ($proh3 * 0.4) + ($pros3 * 0.2);

//Condición
if ($pro1 < 7 ){
    $competencias++;
}
if ($pro2 < 7 ){
    $competencias++;
}
if ($pro3 < 7 ){
    $competencias++;
}

//Promedio
$prop = round((($pro1 + $pro2 + $pro3)/3),2);


//---Diseño---//
//Recibo de datos
$disc1 = $_POST['disc1'];
$dish1 = $_POST['dish1'];
$diss1 = $_POST['diss1'];

$disc2 = $_POST['disc2'];
$dish2 = $_POST['dish2'];
$diss2 = $_POST['diss2'];

$disc3 = $_POST['disc3'];
$dish3 = $_POST['dish3'];
$diss3 = $_POST['diss3'];

//Calculo de calificacion por unidad
$dis1 = ($disc1 * 0.4) + ($dish1 * 0.4) + ($diss1 * 0.2);
$dis2 = ($disc2 * 0.4) + ($dish2 * 0.4) + ($diss2 * 0.2);
$dis3 = ($disc3 * 0.4) + ($dish3 * 0.4) + ($diss3 * 0.2);

//Condición
if ($dis1 < 7 ){
    $competencias++;
}
if ($dis2 < 7 ){
    $competencias++;
}
if ($dis3 < 7 ){
    $competencias++;
}

//Promedio
$disp = round((($dis1 + $dis2 + $dis3)/3),2);


//---Base de datos---//
//Recibo de datos
$basc1 = $_POST['basc1'];
$bash1 = $_POST['bash1'];
$bass1 = $_POST['bass1'];

$basc2 = $_POST['basc2'];
$bash2 = $_POST['bash2'];
$bass2 = $_POST['bass2'];

$basc3 = $_POST['basc3'];
$bash3 = $_POST['bash3'];
$bass3 = $_POST['bass3'];

//Calculo de calificacion por unidad
$bas1 = ($basc1 * 0.4) + ($bash1 * 0.4) + ($bass1 * 0.2);
$bas2 = ($basc2 * 0.4) + ($bash2 * 0.4) + ($bass2 * 0.2);
$bas3 = ($basc3 * 0.4) + ($bash3 * 0.4) + ($bass3 * 0.2);

//Condición
if ($bas1 < 7 ){
    $competencias++;
}
if ($bas2 < 7 ){
    $competencias++;
}
if ($bas3 < 7 ){
    $competencias++;
}

//Promedio
$basp = round((($bas1 + $bas2 + $bas3)/3),2);


//---Electricidad---//
//Recibo de datos
$elec1 = $_POST['elec1'];
$eleh1 = $_POST['eleh1'];
$eles1 = $_POST['eles1'];

$elec2 = $_POST['elec2'];
$eleh2 = $_POST['eleh2'];
$eles2 = $_POST['eles2'];

$elec3 = $_POST['elec3'];
$eleh3 = $_POST['eleh3'];
$eles3 = $_POST['eles3'];

//Calculo de calificacion por unidad
$ele1 = ($elec1 * 0.4) + ($eleh1 * 0.4) + ($eles1 * 0.2);
$ele2 = ($elec2 * 0.4) + ($eleh2 * 0.4) + ($eles2 * 0.2);
$ele3 = ($elec2 * 0.4) + ($eleh2 * 0.4) + ($eles2 * 0.2);

//Condición
if ($ele1 < 7 ){
    $competencias++;
}
if ($ele2 < 7 ){
    $competencias++;
}
if ($ele3 < 7 ){
    $competencias++;
}

//Promedio
$elep = round((($ele1 + $ele2 + $ele3)/3),2);


//---Promedio Final---//
$prof = round((($ingp + $habp +$matp + $prop + $disp + $basp + $elep)/7),2);

//---Beca---//
if($prof >= 9 && $competencias == 0){
    echo "
    <div class='alert alert-primary' role='alert'>
        Tienes un promedio mayor a 9, por lo que eres acreedor a una beca.
    </div>
    ";
}

if($prof<7){
    $estatus="reprobado";
}else{
    $estatus="aprobado";
}

if($competencias >= 3){
    echo "
    <div class='alert alert-danger' role='alert'>
        Tienes más de 2 competencias por lo que no tienes derecho a reinscripción.
    </div>
    ";
}

if($estatus == "reprobado" && $competencias < 3){
    echo "
    <div class='alert alert-danger' role='alert'>
        Tienes un promedio menor a 7 por lo que no tienes derecho a reinscripción.
    </div>
    ";
}
?>

    <div class="m-3">
        <div class="row mb-3">
            <div class="col-3 d-flex justify-content-center">
                <img src="assets/logo upt.png" height="100" alt="">              
            </div>
            <div class="col-9">
                <table class="table">
                    <tr>
                        <td colspan="2">Nombre del alumno: <?php echo $nombre ?></td>
                    </tr>
                    <tr>
                        <td>Matricula: <?php echo $matricula ?></td>
                        <td>Grupo: <?php echo $grupo ?></td>
                    </tr>
                </table>                
            </div>
        </div>

        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <td rowspan="2"><b>Materias</b></td>
                    <td colspan="4"><b>Parcial 1</b</td>
                    <td colspan="4"><b>Parcial 2</b</td>
                    <td colspan="4"><b>Parcial 3</b</td>
                    <td rowspan="2"><b>Promedio</b</td>

                </tr>
                <tr>
                    <td><b>C</b</td>
                    <td><b>H</b</td>
                    <td><b>S</b</td>
                    <td><b>Calif</b</td>
                    <td><b>C</b</td>
                    <td><b>H</b</td>
                    <td><b>S</b</td>
                    <td><b>Calif</b</td>
                    <td><b>C</b</td>
                    <td><b>H</b</td>
                    <td><b>S</b</td>
                    <td><b>Calif</b</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ingles IV</td>
                    <td> <?php echo $ingc1 ?> </td>
                    <td> <?php echo $ingh1 ?> </td>
                    <td> <?php echo $ings1 ?> </td>
                    <td <?php if($ing1<7){echo "class='text-danger'";} ?>> <?php echo $ing1 ?> </td>
                    <td> <?php echo $ingc2 ?> </td>
                    <td> <?php echo $ingh2 ?> </td>
                    <td> <?php echo $ings2 ?> </td>
                    <td <?php if($ing2<7){echo "class='text-danger'";} ?>> <?php echo $ing2 ?> </td>
                    <td> <?php echo $ingc3 ?> </td>
                    <td> <?php echo $ingh3 ?> </td>
                    <td> <?php echo $ings3 ?> </td>
                    <td <?php if($ing3<7){echo "class='text-danger'";} ?>> <?php echo $ing3 ?> </td>
                    <td <?php if($ingp<7){echo "class='text-danger'";} ?>> <?php echo $ingp ?> </td>
                </tr>
                <tr>
                    <td>Habilidades Cognitivas  y Creatividad</td>
                    <td> <?php echo $habc1 ?> </td>
                    <td> <?php echo $habh1 ?> </td>
                    <td> <?php echo $habs1 ?> </td>
                    <td <?php if($hab1<7){echo "class='text-danger'";} ?>> <?php echo $hab1 ?> </td>
                    <td> <?php echo $habc2 ?> </td>
                    <td> <?php echo $habh2 ?> </td>
                    <td> <?php echo $habs2 ?> </td>
                    <td <?php if($hab2<7){echo "class='text-danger'";} ?>> <?php echo $hab2 ?> </td>
                    <td> <?php echo $habc3 ?> </td>
                    <td> <?php echo $habh3 ?> </td>
                    <td> <?php echo $habs3 ?> </td>
                    <td <?php if($hab3<7){echo "class='text-danger'";} ?>> <?php echo $hab3 ?> </td>
                    <td <?php if($habp<7){echo "class='text-danger'";} ?>> <?php echo $habp ?> </td>
                </tr>
                <tr>
                    <td>Matemáticas para Ingeniería I</td>
                    <td> <?php echo $matc1 ?> </td>
                    <td> <?php echo $math1 ?> </td>
                    <td> <?php echo $mats1 ?> </td>
                    <td <?php if($mat1<7){echo "class='text-danger'";} ?>> <?php echo $mat1 ?> </td>
                    <td> <?php echo $matc2 ?> </td>
                    <td> <?php echo $math2 ?> </td>
                    <td> <?php echo $mats2 ?> </td>
                    <td <?php if($mat2<7){echo "class='text-danger'";} ?>> <?php echo $mat2 ?> </td>
                    <td> <?php echo $matc3 ?> </td>
                    <td> <?php echo $math3 ?> </td>
                    <td> <?php echo $mats3 ?> </td>
                    <td <?php if($mat3<7){echo "class='text-danger'";} ?>> <?php echo $mat3 ?> </td>
                    <td <?php if($matp<7){echo "class='text-danger'";} ?>> <?php echo $matp ?> </td>
                </tr>
                <tr>
                    <td>Programación Web</td>
                    <td> <?php echo $proc1 ?> </td>
                    <td> <?php echo $proh1 ?> </td>
                    <td> <?php echo $pros1 ?> </td>
                    <td <?php if($pro1<7){echo "class='text-danger'";} ?>> <?php echo $pro1 ?> </td>
                    <td> <?php echo $proc2 ?> </td>
                    <td> <?php echo $proh2 ?> </td>
                    <td> <?php echo $pros2 ?> </td>
                    <td <?php if($pro2<7){echo "class='text-danger'";} ?>> <?php echo $pro2 ?> </td>
                    <td> <?php echo $proc3 ?> </td>
                    <td> <?php echo $proh3 ?> </td>
                    <td> <?php echo $pros3 ?> </td>
                    <td <?php if($pro3<7){echo "class='text-danger'";} ?>> <?php echo $pro3 ?> </td>
                    <td <?php if($prop<7){echo "class='text-danger'";} ?>> <?php echo $prop ?> </td>
                </tr>
                <tr>
                    <td>Diseño de Interfaces</td>
                    <td> <?php echo $disc1 ?> </td>
                    <td> <?php echo $dish1 ?> </td>
                    <td> <?php echo $diss1 ?> </td>
                    <td <?php if($dis1<7){echo "class='text-danger'";} ?>> <?php echo $dis1 ?> </td>
                    <td> <?php echo $disc2 ?> </td>
                    <td> <?php echo $dish2 ?> </td>
                    <td> <?php echo $diss2 ?> </td>
                    <td <?php if($dis2<7){echo "class='text-danger'";} ?>> <?php echo $dis2 ?> </td>
                    <td> <?php echo $disc3 ?> </td>
                    <td> <?php echo $dish3 ?> </td>
                    <td> <?php echo $diss3 ?> </td>
                    <td <?php if($dis3<7){echo "class='text-danger'";} ?>> <?php echo $dis3 ?> </td>
                    <td <?php if($disp<7){echo "class='text-danger'";} ?>> <?php echo $disp ?> </td>
                </tr>
                <tr>
                    <td>Bases de Datos</td>
                    <td> <?php echo $basc1 ?> </td>
                    <td> <?php echo $bash1 ?> </td>
                    <td> <?php echo $bass1 ?> </td>
                    <td <?php if($bas1<7){echo "class='text-danger'";} ?>> <?php echo $bas1 ?> </td>
                    <td> <?php echo $basc2 ?> </td>
                    <td> <?php echo $bash2 ?> </td>
                    <td> <?php echo $bass2 ?> </td>
                    <td <?php if($bas2<7){echo "class='text-danger'";} ?>> <?php echo $bas2 ?> </td>
                    <td> <?php echo $basc3 ?> </td>
                    <td> <?php echo $bash3 ?> </td>
                    <td> <?php echo $bass3 ?> </td>
                    <td <?php if($bas3<7){echo "class='text-danger'";} ?>> <?php echo $bas3 ?> </td>
                    <td <?php if($basp<7){echo "class='text-danger'";} ?>> <?php echo $basp ?> </td>
                </tr>
                <tr>
                    <td>Electricidad y Magnetismo</td>
                    <td> <?php echo $elec1 ?> </td>
                    <td> <?php echo $eleh1 ?> </td>
                    <td> <?php echo $eles1 ?> </td>
                    <td <?php if($ele1<7){echo "class='text-danger'";} ?>> <?php echo $ele1 ?> </td>
                    <td> <?php echo $elec2 ?> </td>
                    <td> <?php echo $eleh2 ?> </td>
                    <td> <?php echo $eles2 ?> </td>
                    <td <?php if($ele2<7){echo "class='text-danger'";} ?>> <?php echo $ele2 ?> </td>
                    <td> <?php echo $elec3 ?> </td>
                    <td> <?php echo $eleh3 ?> </td>
                    <td> <?php echo $eles3 ?> </td>
                    <td <?php if($ele3<7){echo "class='text-danger'";} ?>> <?php echo $ele3 ?> </td>
                    <td <?php if($elep<7){echo "class='text-danger'";} ?>> <?php echo $elep ?> </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-sm">
            <tr>
                <td><b>Promedio final</b></td>
                <td <?php if($prof<7){echo "class='text-danger'";} ?>><b><?php echo $prof ?></b></td>
            </tr>
            <tr>
                <td>Competencias</td>
                <td><?php echo $competencias ?></td>
            </tr>
            <tr>
                <td>Estatus</td>
                <td><?php echo $estatus ?></td>
            </tr>
        </table>
        <button onclick="window.print()" class="btn btn-outline-dark d-print-none">Imprimir boleta</button>   
    </div>
    <!--Footer-->
    <footer class="container-fluid m-0 p-2 bg-light fixed-bottom d-print-none">
        ® ComiColmillos - Todos los derechos recervados.
    </footer>    
    <script src="script/bootstrap.bundle.js"></script>
</body>
</html>