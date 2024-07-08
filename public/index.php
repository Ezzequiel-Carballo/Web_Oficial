<?php
session_start();

require_once __DIR__ . '/../../includes/helpers.php';
require_once 'C:/wamp64/www/web-side/Web_Oficial/vendor/phpmailer/phpmailer/src/process_form.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Desarrollador Web</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- box iconos -->
    <link href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="conteiner">
        <div class="header">
            <input type="checkbox" name="" id="chk1">
            <div class="logo">
                <div class="simbolo">
                    <h2>ZC</h2>
                    <img src="../../asset/img/iconos/Web developer . UIUX Designer.png">
                </div>
            </div>
            <label class="nav-menu" for="chk1"><i class='bx bx-menu'></i></label>
            <ul class="navbar">
                <li>
                    <a href="#Home" style="--i:1;" class="active">Home</a>
                </li>
                <li>
                    <a href="#About" style="--i:2;">About</a>
                </li>
                <li>

                    <a href="#Skill" style="--i:3;">Skills</a>
                </li>
                <li>
                    <a href="#Project" style="--i:4;">Project</a>
                </li>
                <li>
                    <a href="#Contact" style="--i:5;">Contact</a>
                </li>
            </ul>
        </div>

        <section class="banner" id="Home">
            <div class="imgSidebar">
                <img src="../../asset/img/iconos/fondo.jpg">
            </div>
            <div class="contentBx">
                <h4 class="logoText"> My_Portfolio</h4>
                <div>
                    <h3><span>Hello</span>, Me Llamo</h3>
                    <h2>Ezequiel Carballo</h2>
                    <span class="multiple-text"></span>
                    <div class="btn-box">
                        <a href="#About" class="btn">About me </a>
                        <a href="#Contact" class="btn">Talk me </a>
                    </div>
                </div>
                <div class="sci">
                    <a href="https://github.com/" target="_blank" style="--i:6;" ><i class='bx bxl-github' ></i></a>
                    <a href="#" style="--i:7;" onclick="return gmail()"><i class='bx bxl-gmail'></i></a>
                    <a href="https://www.linkedin.com/in/ezequiel-carballo/" target="_blank" style="--i:8;"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </section>

        <section class="about" id="About">
            <h2 class="title">About <span>me</span></h2>
            <div class="about_img">
                <img src="../../asset/img/iconos/perfil.png">
                <div class="effect-circle"></div>
            </div>
            <p>
                Me desarrollo en programacion Front-end y Back-end, me apasiona la tecnologia es donde mejor me desenvuelvo, soy aplicado en
                los objetivos que me planteo, sobretodo si son un desafio.
            </p>
            <p>
                No soy un robot, tengo errores pero considero que la grandeza esta en ser superior a tu previo yo, por lo que siempre busco
                aprender y mejorar en cada ambito de mi vida.
            </p>
            <div class="about-btn">
                <a href="../../docs/Curriculum_EC.pdf" download="CV_EzequielCarballo.pdf"><i class='bx bx-download'></i>Download CV</a>
            </div>
        </section>

        <section class="skill" id="Skill">
            <div class="skill-title">
                <h2 class="title"><span>My </span>Skills</h2>
            </div>
            <div class="skill-section">
                <div class="skills-content">
                    <h3 style="--i:1;">Front-End</h3>
                    <div class="content">
                        <span style="--i:1;"><i class='bx bxl-html5'></i>HTML</span>
                        <span style="--i:2;"><i class='bx bxl-css3'></i>CSS</span>
                        <span style="--i:3;"><i class='bx bxl-javascript'></i>JavaScript</span>
                    </div>
                </div>
                <div class="skills-content">
                    <h3 style="--i:5;">Back-End</h3>
                    <div class="content">
                        <span style="--i:6;"><i class='bx bxl-python'></i>Python</span>
                        <span style="--i:7;"><i class='bx bxl-php'></i>PHP</span>
                        <span style="--i:8;"><i class='bx bxl-nodejs'></i>Node</span>
                        <span style="--i:9;"><i class='bx bxl-c-plus-plus'></i>C# .Net</span>
                    </div>
                </div>
                <div class="skills-content">
                    <h3 style="--i:2;">Frameworks</h3>
                    <div class="content">
                        <span style="--i:7;"><img src='../../asset/img/iconos/laravel.png' class="img-skill">Laravel</span>
                        <span style="--i:6;"><img src='../../asset/img/iconos/sympony.png' class="img-skill">Symfony</span>
                        <span style="--i:5;"><i class='bx bxl-bootstrap'></i>Bootstrap</span>
                    </div>
                </div>
                <div class="skills-content">
                    <h3 style="--i:4;">Learning...</h3>
                    <div class="content">
                        <span style="--i:2;"><img src='../../asset/img/iconos/django.png' class="img-skill">Django</span>
                        <span style="--i:3;"><i class='bx bxl-react'></i>React</span>
                        <span style="--i:4;"><i class='bx bxl-angular'></i>ANGULAR</span>


                    </div>
                </div>
                <div class="skills-content">
                    <h3 style="--i:2;">Other Programs</h3>
                    <div class="content">
                        <span style="--i:4;"><img src='../../asset/img/iconos/mysql.png' class="img-skill">Mysql</span>
                        <span style="--i:3;"><img src='../../asset/img/iconos/excel.png' class="img-skill">Excel Av.</span>
                        <span style="--i:2;"><img src='../../asset/img/iconos/autocad.png' class="img-skill">Autocad</span>
                        <span style="--i:1;"><img src='../../asset/img/iconos/photoshop.png' class="img-skill">Photoshop</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="work" id="Project">
            <h2 class="title">Recent <span>Work</span></h2>
            <div class="content" >
                <div class="workBx" style="--i:1;">
                    <div class="imgBx">
                        <img src="../../asset/img/portadas/NigthGestory.png">
                    </div>
                    <div class="textBx">
                        <div class="btn-modal">
                            <a href="#" class="btn open-modal" data-modal-id="modal1">Read Me</a>
                        </div>
                    </div>
                </div>
                <div class="overlay" id="overlay1">
                    <div class="modal" id="modal1">
                        <div class="modal_off" id="close"><i class='bx bx-x'></i></div>
                        <div class="imgBx_modal">
                            <img src="../../asset/img/portadas/Nigth Gestory.jpg">
                        </div>
                        <div class="textBx_modal">
                            <h2>Nigth Gestory | Gestoria Automotriz</h2>
                            <span>
                                <i class='bx bxl-html5'></i>
                                <i class='bx bxl-css3'></i>
                                <i class='bx bxl-php'></i>
                                <i class='bx bxl-javascript'></i>
                            </span>
                        </div>
                        <div class="btn-modal">
                            <a href="https://gestoriamaster.000webhostapp.com/" target="_blank" class="btn">Visit Project</a>
                            <a href="https://github.com/Ezzequiel-Carballo/Gestoria_Automotriz" target="_blank" class="btn">Visit GitHud</a>
                        </div>
                    </div>
                </div>

                <div class="workBx" style="--i:2;">
                    <div class="imgBx" >
                        <img src="../../asset/img/portadas/animeOyahoo2.jpg">
                    </div>
                    <div class="textBx">
                        <div class="btn-modal">
                            <a href="#" class="btn open-modal" data-modal-id="modal2">Read Me</a>
                        </div>
                    </div>
                </div>
                <div class="overlay" id="overlay2">
                    <div class="modal" id="modal2">
                        <div class="modal_off" id="close"><i class='bx bx-x'></i></div>
                        <div class="imgBx_modal">
                            <img src="../../asset/img/portadas/animeOyahoo3.png">
                        </div>
                        <div class="textBx_modal">
                            <h2>Nigth Gestory | Gestoria Automotriz</h2>
                            <span>
                                <i class='bx bxl-html5'></i>
                                <i class='bx bxl-css3'></i>
                                <i class='bx bxl-php'></i>
                                <i class='bx bxl-javascript'></i>
                            </span>
                        </div>
                        <div class="btn-modal">
                            <a href="https://gestoriamaster.000webhostapp.com/" class="btn">Visit Project</a>
                            <a href="https://github.com/Ezzequiel-Carballo/Gestoria_Automotriz" class="btn">Visit GitHud</a>
                        </div>
                    </div>
                </div>

                <div class="workBx" style="--i:3;">
                    <div class="imgBx">
                        <img src="../../asset/img/iconos/DinastySport.png">
                    </div>
                    <div class="textBx">
                        <div class="btn-modal">
                            <a href="#" class="btn open-modal" data-modal-id="modal3">Read Me</a>
                        </div>
                    </div>
                </div>
                <div class="overlay" id="overlay3">
                    <div class="modal" id="modal3">
                        <div class="modal_off" id="close"><i class='bx bx-x'></i></div>
                        <div class="imgBx_modal">
                            <img src="../../asset/img/iconos/DinastySport.png">
                        </div>
                        <div class="textBx_modal">
                            <h2>Dinasty Sport | Mercado de Calzados</h2>
                            <span>
                                <i class='bx bxl-html5'></i>
                                <i class='bx bxl-css3'></i>../../
                                <i class='bx bxl-php'></i>
                                <i class='bx bxl-javascript'></i>
                            </span>
                        </div>
                        <div class="btn-modal">
                            <a href="" class="btn">Visit Project</a>
                            <a href="" class="btn">Visit GitHud</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="contact" id="Contact">
            <form action="registro.php" method="POST" class="form">
                <div class="form-header">
                    <div class="form-title">
                        <h2 class="title blue">C<span>ontacto</span></h2>

                        <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
                            <p class="alert-green">Gracias por el mensaje, me estaré comunicando a la brevedad.</p>
                        <?php elseif (isset($_SESSION['errores']) && $_SESSION['errores'] == "failed") : ?>
                            <p class="alert-error">Hubo errores en el envío del mensaje.</p>
                        <?php else : ?>
                            <p>Manda un mensaje cuando gustes.</p>
                        <?php endif; ?>

                        <?php
                            // Eliminar la variable de sesión 'register' después de mostrar el mensaje
                            if (isset($_SESSION['register'])) {
                                unset($_SESSION['register']);
                            }
                        ?>
                    </div>

                    <label for="name" style="--i:1;" class="form-label">Nombre:</label>
                    <input type="text" style="--i:1;" class="form-input" name="name" placeholder="Escriba su nombre..." />
                    <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'name') : ''; ?>

                    <label for="username" style="--i:2;" class="form-label">Apellido:</label>
                    <input type="text" style="--i:2;" class="form-input" name="username" placeholder="Escriba su apellido..." />
                    <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'surname') : ''; ?>

                    <label for="email" style="--i:3;" class="form-label">Correo Electronico: </label>
                    <input type="email" style="--i:3;" class="form-input" name="email" placeholder="Escriba su Correo..." />
                    <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'email') : ''; ?>

                    <label for="message" style="--i:4;" class="form-label"> Mensaje: </label>
                    <textarea name="message" style="--i:4;" class="form-textarea" placeholder="Escriba su mensaje..."></textarea>
                    <?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'message') : ''; ?>

                    <input type="submit" class="btn-submit" value="Enviar Message" />
                </div>
            </form>
            <?php Utils::borrarErrores(); ?>

        </div>

        <div class="copyright">
            <p> <strong>ZekCode</strong> &copy; 2023 Derechos reservados</p>
            <div class="sci-footer">
                <a href="https://github.com/" target="_blank" style="--i:6;" ><i class='bx bxl-github' ></i></a>
                <a href="#" style="--i:7;" onclick="return gmail()"><i class='bx bxl-gmail'></i></a>
                <a href="https://www.linkedin.com/in/ezequiel-carballo/" target="_blank" style="--i:8;"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>

    </div>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="../../js/Scoll_out.js"></script>
    <script src="../../js/Effect.js"></script>
    <script type="text/javascript">
        ScrollOut({
            targets: 'div,h1,h2,h3,h4,span,p,a,img,label,input,textarea'
        })
    </script>
</body>

</html>