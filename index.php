
<?php
$programa =[""];
$nombre =[""];
$apellido =[""];
$telefono =[""];
$email =[""];
$pais=[""];
$experiencia=[""];

// require_once("funciones.php");

$programas=["Project Management","Supply Chain Management & Logistics","Dirección de Operaciones","Seguridad de la Información Empresarial","Dirección de Sistemas y sistemas de la información", "Dirección de Producción y Mejora de Procesos Industriales", "Data Management e Innovación Tecnológica","Business Intelligence","Marketing Online y Comercio Electrónico", "Dirección de Marketing y Gestión Comercial","Neuromárketing e Investigación de Mercados","Dirección de Comunicación Corporativa","Marketing y Dirección Comercial","Dirección Financiera","Asesoramiento financiero & gestión patrimonial","Derecho internacional de la empresa","Propiedad intelectual e industrial","Dirección de Recursos Humanos","Coaching Directivo & liderazgo" ];
$paises=[
"Arg" =>"Argentina",
"Pe"  =>"Peru",
"Co"  =>"Colombia",
"Br"  =>"Brasil",
"Ch"  =>"Chile",
"Ur"  =>"Uruguay",
"Bo"  =>"Bolivia",
"Ve"  =>"Venezuela",
"Pa"  =>"Paraguay"
];
$estudiosUniv =[
  "Arq"=>"Arquitectura",
  "Adm"=>"Administración de Empresas",
  "Eco"=>"Economia",
  "Mar"=>"Marketing",
  "Ing"=>"Ingenieria",
  "Rh"=>"Recursos Humanos",
  "Co"=>"Comercialización",
  "Ot"=>"Otros"
];
// $errores=[];
// if ($_POST) {
//   $errores = validarInformacion($_POST);
//     if (count($errores) == 0) {
//       mail('gironafrancisco86@gmail.com',$asunto,$cuerpo);
//       var_dump($_POST);exit;
//       header("Location:index.php");exit;
//     }
// }
 ?>

<!DOCTYPE html>
<html>
<title>Astute Way</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/styles.css">
<!-- <link rel="stylesheet" href="css/main.css" /> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Englebert" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-blue" style="background-color:#62929E!important">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3" style="background-color:#62929E!important"></a>
      <div class="logoAstute">
         <a href="#"><img src="images/logo.png" alt="astuteWayEducation"></a>
       </div>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-blue" style="background-color:#62929E!important">QUIENES SOMOS?</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-blue" style="background-color:#62929E!important">UB+OBS</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-blue" style="background-color:#62929E!important">CONTACTANOS</a>
    </div>

  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home" style="position: relative">
   <!-- <div class="logoAstute">
      <img src="images/logo.png" alt="astuteWayEducation">
    </div> -->
  <div class="w3-display-middle w3-center">

  </div>

</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-blue w3-large" style="background-color:white!important;">

<!-- About Container -->
<div class="w3-content" style="max-width:1200px">
                <h5 class="w3-center w3-padding-64"><span class="w3-tag" style="background-color:#62929E!important">OBS Business School + Universidad de Barcelona</span></h5>
                <p style="text-align:center">Obtene estudiando a distancia, la doble titulación de la <strong>OBS Business School</strong> y <strong>la Universidad de Barcelona</strong>. <?php echo "<br>" ?><strong>La OBS Business School</strong> es la <strong>primera</strong> y <strong>mejor</strong>, escuela de negocios <strong>online</strong> de habla hispana. xCon prestigio mundial, fue fundada en 2006, con 65% de alumnos internacionales, 20.000 directivos formados y gestores de Negocio. Los MBA, Executive MBA y Global MBA estan entre los mejores del mundo según Financial Times.<?php echo "<br>"; ?> <strong>La Universidad de Barcelona</strong>, con mas de 560 años de historia, es considerada la mejor universidad de España y esta <strong>entre las mejores 200 del mundo</strong>. OBS cuenta con mas de 250 profesores que complementan sus actividades empresariales junto con la docencia, siendo el 75%, de su plantilla, CEOs.</p>
</div>

<!-- Menu Container -->
<div class="w3-container" >
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide"style="background-color:#62929E!important">MBA Y MAESTRIAS</span></h5>



    <div class="w3-row w3-center w3-card-2 w3-padding" id="menu">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Mba');" id="myLink">
        <div class="w3-col s6 tablink">MBA</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">MAESTRIAS</div>
      </a>
      </div>

    <div id="Mba" class="w3-container menu w3-padding-48 w3-card-2">
    <h6>Executive MBA</h6>
    <h6>60 ECTS – Duracion 11 meses – 13700 euros</h6>
    <h6>Executive MBA(English)</h6>
    <h6>60 ECTS – Duracion 11 meses – 13700 euros</h6>
    <h6>Global MBA Online</h6>
    <h6>60 ECTS – Duracion 11 meses – 13700 euros</h6>
      </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card-2">
      <?php foreach ($programas as $programa) { ?>
        <h6><?=$programa?></h6>
    <?php } ?>
    </div>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>Consulta con <strong>Astute Way Education</strong> por <strong>precios</strong>, <strong>financiación</strong>, <strong>becas</strong> y <strong>apoyos especiales</strong></i></p>
      </div>
    <img src="./images/estudiaADistancia.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:1200px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide" style="background-color:#62929E!important" >ACERCA DE ASTUTE WAY EDUCATION</span></h5>
                <p>Empresa con dinamismo y vocación de servicio,  encargada de guiarte y ser el nexo entre vos y las mejores universidades  durante el proceso de seleccion y admision del mejor programa en el extranjero a tu medida y sin moverte de tu casa. Concebimos la <strong>ENSEÑANZA</strong>, como la idea de brindar <strong>EXPERIENCIAS</strong> educativas y culturales inolvidables para los futuros <strong>LIDERES</strong>. Creemos y hacemos hincapié, que la formación académica, trasciende lo meramente profesional, y sirve para <strong>ABRIR LA MENTE</strong>, para ver otras formas de hacer las cosas, para <strong>APRENDER</strong> y <strong>DESAPRENDER</strong>, para poder tener un mayor poder de <strong>REFLEXION</strong> y sobre todo para lograr un <strong>EQUILIBRIO</strong> perfecto entre trabajo, estudio y familia/amigos. Desde la dirección, te guiaremos en el proceso de selección y admisión del mejor programa y seremos el nexo entre vos y las mejores universidades en el exterior</p><br>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i><strong>APRENDE MAS A NIVEL INTERNACIONAL, EN UN AÑO, CON MAYOR PRESTIGIO ACADEMICO Y DE LA FORMA MAS ECONOMICA, A TRAVES DE ASTUTE WAY, EN OBS BUSINESS SCHOOL Y UNIVERSIDAD DE BARCELONA.</strong></i></p>
      </div>
    </div>
</div>

  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:1200px">

    <h5 class="w3-center w3-padding-48"><p><span class="w3-tag w3-wide" style="background-color:#62929E!important">SOLICITE INFORMACIÓN</span></h5></p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i><strong> Para mas información sobre nuestros MBA's, maestrias y programas online, complete el siguiente formulario. Le enviaremos información a la brevedad.</strong></i></p>
      </div>
    </div>
</div>
</div>
</div>
      <div class="formularioTotal">
        <h3>Infórmate sobre nuestros cursos</h3>
                <form class="script.php" action="index.php" method="post">
                          <div class="primeraMitad">
                                  <input type="text" name="name" value="" required  placeholder="Ingrese su Nombre" class=".form-control">
                                            <?php if(isset($errores["nombre"])){ ?>
                                                    <span><?php echo $errores["nombre"]; ?></span>
                                            <?php } ?>
                                  <input type="text" name="surname" value="" required   placeholder="Ingrese su Apellido">
                                            <?php if(isset($errores["apellido"])){ ?>
                                                    <span><?php echo $errores["apellido"]; ?></span>
                                            <?php } ?>
                                  <select class="paisesForm" name="pais">
                                                    <option value="">País de Nacimiento</option>
                                                    <?php
                                                                      foreach($paises as $pais) { ?>

                                                                        <option>
                                                                              <?=$pais?>
                                                                        </option>
                                                      <?php } ?>
                                            </select>
                                                      <?php if(!empty($errores["pais"])){ ?>
                                                              <span><?php echo $errores["pais"]; ?></span>
                                                      <?php } ?>
                                  <input type="text" name="phone" value="" placeholder="Ingrese su Telefono" required="">
                                                    <?php if(isset($errores["telefono"])){ ?>
                                                            <span><?php echo $errores["telefono"]; ?></span>
                                                    <?php } ?>
                          </div>
                <div class="segundaMitad">
                                  <input type="text" name="email" value="" required placeholder="Ingrese su Email">
                                                    <?php if(isset($errores["mail"])){ ?>
                                                            <span><?php echo $errores["mail"]; ?></span>
                                                    <?php } ?>
                                  <select class="paisesForm" name="pais">
                                                      <option value="eleccion">Estudio Universitario realizado</option>
                                                      <?php
                                                              foreach($estudiosUniv as $estudio) { ?>

                                                                          <option value="">
                                                                              <?=$estudio?>
                                                                            </option>
                                                        <?php } ?>

                                  </select>
                                                        <?php if(!empty($errores["pais"])){ ?>
                                                                <span><?php echo $errores["pais"]; ?></span>
                                                        <?php } ?>
                                <input type="text" name="experience" value="" required placeholder="Describa su experiencia laboral">
                                                        <?php if(isset($errores["experiencia"])){ ?>
                                                                <span><?php echo $errores["experiencia"]; ?></span>
                                                        <?php } ?>
                                <select class="programasIntereses" name="programas">
                                                      <option value="">Seleccione su Programa!</option>
                                                        <optgroup label="Dirección General">
                                                                <option value="">Global MBA Online</option>
                                                                <option value="">Executive MBA</option>
                                                                <option value="">Executive MBA (English)</option>
                                                                <option value="">Maestría en Transformación Digital y Desarrollo de Negocio</option>
                                                                <option value="">Maestría en Innovación y Emprendimiento</option>
                                                                <option value="">Maestría en International Business Management</option>
                                                                <option value="">Maestría en International Business Management (English)</option>
                                                        </optgroup>
                                                        <optgroup label="Finanzas">
                                                                <option value="">Maestría en Dirección Financiera</option>
                                                                <option value="">Maestría en Asesoramiento Financiero y Gestión Patrimonial</option>
                                                        </optgroup>
                                                                <optgroup label="Sistemas y Operaciones">
                                                                  <option value="">Maestría en Dirección Estratégica de Operaciones e Innovación</option>
                                                                  <option value="">Maestría en Dirección de Sistemas y Tecnologías de la Información</option>
                                                                  <option value="">Maestría en Seguridad de la Información Empresarial</option>
                                                                  <option value="">Maestría en Project Management</option>
                                                                  <option value="">Maestría en Dirección de la Producción y Mejora de Procesos</option>
                                                                  <option value="">Maestría en Project Management (English)</option>
                                                                  <option value="">Maestría en Supply Chain Management & Logistics</option>
                                                                  <option value="">Maestría en Business Intelligence</option>
                                                                  <option value="">Maestría en Data Management e Innovación Tecnológica</option>
                                                    </optgroup>
                                                    <optgroup label="Marketing y Comunicación">
                                                                  <option value="">Maestría en Dirección de Marketing y Gestión Comercial</option>
                                                                  <option value="">Maestría en Neuromarketing e Investigación de Mercados</option>
                                                                  <option value="">Maestría en Marketing Online y Comercio Electrónico</option>
                                                                  <option value="">Maestría en Dirección de Comunicación Corporativa</option>
                                                    </optgroup>
                                                    <optgroup label="Derecho de la Empresa">
                                                                <option value="">Maestría en Propiedad Intelectual e Industrial</option>
                                                                <option value="">Maestría en Derecho Internacional de la Empresa</option>
                                                    </optgroup>
                                                    <optgroup label="Recursos Humanos">
                                                                <option value="">Dirección de RRHH</option>
                                                    </optgroup>
                                                        <?php if(!empty($errores["programa"])){ ?>
                                                                <span><?php echo $errores["programa"]; ?></span>
                                                        <?php } ?>
                      </div>

                      <div class="botonSubmit">
                                      <input type="submit" name="" value="Enviar" style="margin-top:1%; background-color:#2196F3; color:white; border: #2196F3; font-weight:blod">
                      </div>

              </form>
        </div>

<!-- End page content -->


<!-- Footer -->
<footer>
  <div class="footer-ContenedorTotal">
    <div class="logoOBS">
      <img src="images/logoObs.png" alt="">
    </div>
    <div class="logoBar">
      <img src="images/escudoBar.png" alt="">
    </div>
    <div class="headerContenedorRedesSociales">
    <div class="redesSociales">
      <a href="#"><img src="./images/facebooklogo.png" alt="logoFacebook"></a>
    </div>
    <div class="redesSociales">
      <a href="#"><img src="./images/instagramlogo.png" alt="logoInstagram"></a>
    </div>
    <div class="redesSociales">
      <a href="#"><img src="./images/twitterlogo.png" alt="logoTwitter"></a>
    </div>
    <div class="redesSociales">
      <a href="#"><img src="./images/linkedin.png" alt="logoLinkedin"></a>
    </div>
  </div>

      <div class="footerSuscribiteNewsletter">
        <form class="script.php" action="index.php" method="post">
          <input type="text" name="emailSuscripcion" value=""placeholder="Ingrese su email">
          <input type="submit" name="newsletter" value="Suscribirme!"  class="btn btn-danger"  >
        </form>
      </div>

      <div class="footerCopyright">
        <p>Copyright © 2017 Astute Way</p>
      </div>

    </div>
</footer>
<script src="main.js"></script>



</body>
</html>
