<?php

require_once 'app/database/conexao.php';


session_start();
if (!isset($_SESSION['logado'])) :
    header('Location: https://app.valan.com.br');
endif;

$id = $_SESSION['id_usuario'];
$sql = " SELECT*FROM users WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);


$tipo_usuario = $dados['user_level'];
define('Endereco', 'https://admin.emperius.com.br');

$sql_tipo = "SELECT user_level from users where id='$id'";
$resultado_tipo = mysqli_query($connect, $sql_tipo);
$dadoTipo = mysqli_fetch_array($resultado_tipo);


?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bem vindo ao app valan</title>
    <meta name="description" content="Hope UI Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard, simple auth">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Hope UI Pro Simple | Responsive Bootstrap 5 Admin Dashboard Template">
    <!-- Google Font Api KEY-->
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
    <!-- Config Options -->
    <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Hope UI&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--{{prefix}}primary&quot;:&quot;#3a57e8&quot;,&quot;--{{prefix}}info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-white&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="assets/css/core/libs.min.css" />












    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="assets/css/hope-ui.min.css?v=2.2.0" />
    <link rel="stylesheet" href="assets/css/pro.min.css?v=2.2.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/custom.min.css?v=2.2.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="assets/css/dark.min.css?v=2.2.0" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="assets/css/customizer.min.css?v=2.2.0" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="assets/css/rtl.min.css?v=2.2.0" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            overflow: hidden;
        }
    </style>

</head>

<body class=" " style="background-color: #fff;">
    <!-- loader Start -->


    <div class="" style="width:100%; height:90px; background-color:#282739;">
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-3 d-flex justify-content-end">
                <a data-bs-toggle="offcanvas" data-bs-target="#barralateral" aria-controls="offcanvasExample" class="mt-2 text-white"><svg xmlns="http://www.w3.org/2000/svg" height="60" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg></a>
            </div>
        </div>
    </div>
    <div class="row  mt-4">
        <div class="col-md-4 " style="margin-left:25px;">
            <h4 class="text-left mt-4">Olá, <?= $dados['name'] ?></h4>
            <h5 class="text-left mt-4">Ultimo logon: <?= $dados['last_login'] ?></h5>

        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center text-center">
        <div class="col-md-5 d-flex align-items-center justify-content-center text-center">
            <div class="card" style="background-color:#f1f4f8; ">
                <div class="card-header">
                    <h6>Mensagem</h6>
                </div>
                <div class="body">
                    <h2>Está em perigo?</h2>
                    <h4>Acione o agente Valan Segurança</h4>
                    <h4><a class="btn btn-primary btn-lg rounded-pill mt-5 mb-5" style="background-color: #8A1213; border: 1px solid #8A1213;">SOS Agente</a></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center text-center mt-2">
        <div class="col-md-5 d-flex align-items-center justify-content-center text-center">
            <a data-bs-toggle="modal" data-bs-target="#sosagent">
                <div class="card" style="background-color:#8A1213;">

                    <div class="body">
                        <h4 class="mt-2 text-white"> </h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-center text-center">
            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card" style="background-color:#282739; ">

                    <div class="body">
                        <h4 class="mt-2 text-white"><svg style="color:#fff;" xmlns="http://www.w3.org/2000/svg" height="40" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                                <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                            </svg> Segurança do seu celular</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    <footer class="footer">
                <div class="footer-body">
                    <ul class="left-panel list-inline mb-0 p-0">
                    <a class="btn btn-primary mt-5 mb-5" style="background-color:#000; border: 1px solid #8A1213;">teste</a>
                    <a class="btn btn-primary  mt-5 mb-5" style="background-color: #8A1213; border: 1px solid #8A1213;"><img src="assets/images/icone_sos.png" height="20" alt=""></a>
                    <a class="btn btn-light  mt-5 mb-5" >Contatos</a>
                    <a class="btn btn-primary mt-5 mb-5" style="background-color: #8A1213; border: 1px solid #8A1213;">teste</a>
                    </ul>
                </div>
            </footer>
    <!-- Live Customizer start -->
    <!--- barra lateral ---->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="barralateral" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">

        </div>
        <div class="offcanvas-body">
            <div>
                <div class="row text-center mb-5">
                    <div class="col-md-3">
                        <img src="<?= $dados['photo_user'] ?>" style="border: 5px solid #282739; border-radius: 60px;" class="text-center" height="120" alt=""><br>
                        <h5 class="text-center mt-4"><?= $dados['name'] ?></h5>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-md-6">
                        <a href="">
                            <div class="card" style="background-color:#fff; box-shadow: none; ">

                                <div class="body" style="float: left; text-align:left;">
                                    <h4 class="mt-2 " style="margin-left:22px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                            <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                        </svg> Assinatura</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row text-center mt-1">
                    <div class="col-md-6">
                        <a href="">
                            <div class="card" style="background-color:#fff;box-shadow: none; ">

                                <div class="body" style="float: left; text-align:left;">
                                    <h4 class="mt-2 " style="margin-left:22px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                                        </svg> Configurações</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row text-center mt-1">
                    <div class="col-md-5">
                        <a href="app/model/sair.php">
                            <div class="card" style="background-color:#fff;box-shadow: none; ">

                                <div class="body text-left" style="float: left; text-align:left;">
                                    <h4 class="mt-2 " style="margin-left:22px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg> Sair do app</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown mt-3">

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-center text-center" style="border: none;">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1 class="modal-title mb-5  d-flex align-items-center justify-content-center text-center" id="staticBackdropLabel">Aviso</h1>
                    <h6>A função de segurança do celular, solicitará o cadastro do IMEI e o
                        modelo do seu aparelho, para que a equipe valan em caso de perda ou
                        roubo, possa solicitar junto a ANATEL o bloqueio do seu aparelho.</h6>
                    <form action="cadastrar_imei.php" class="d-flex align-items-center justify-content-center text-center" method="post">
                        <button type="submit" name="btn-entrar" class="btn btn-primary btn-lg rounded-pill mt-5" style="background-color: #282737; border: 1px solid #282737;">Prosseguir</button>
                    </form>

                </div>
                <div class="modal-footer" style="border: none;"><br>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sosagent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-center text-center" style="border: none;">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1 class="modal-title mb-5  d-flex align-items-center justify-content-center text-center" id="staticBackdropLabel">SOS Agent</h1>
                    <h6>Entendemos que você está correndo pegiro, agora por gentileza</h6>

                    <form action="model/sos_agent.php" method="post">
                        <div class="row d-flex align-items-center justify-content-center text-center">
                            <div class="col-md-4 mb-3 d-flex align-items-center justify-content-center ">
                                <div class="form-floating mb-3">
                                    <input type="hidden" class="form-control rounded-pill" name="idclient" id="floatingInput" value="<?= $id ?>">

                                    <input type="text" class="form-control rounded-pill" name="nome" id="floatingInput" style="width: 280px;" value="<?= $dados['name'] ?>" readonly>
                                    <label for="floatingInput">Seu nome</label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 d-flex align-items-center justify-content-center">
                                <div class="form-floating mb-3">
                                    <select class="form-select rounded-pill" name="tipo_ocorrencia" id="floatingSelect" style="width: 280px;" aria-label="Floating label select example">
                                        <option selected>Selecione o ocorrido</option>
                                        <option value="Agreção domestica">Agreção domestica</option>
                                        <option value="Assalto">Assalto</option>
                                        <option value="Ameaça de morte">Ameaça de morte</option>
                                    </select>
                                    <label for="floatingSelect">Relato do ocorrido</label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 d-flex align-items-center justify-content-center">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control rounded-pill" name="desde_quando" id="floatingInput" style="width: 280px;" placeholder="name@example.com">
                                    <label for="floatingInput">desde quando ocorre?</label>
                                </div>
                            </div>
                            <h4><button type="submit" class="btn btn-primary btn-lg rounded-pill mt-5 mb-5" style="background-color: #8A1213; border: 1px solid #8A1213;">Acionar Agent</button></h4>
                        </div>
                    </form>

                </div>
                <div class="modal-footer" style="border: none;"><br>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Bundle Script -->
    <script src="assets/js/core/libs.min.js"></script>
    <!-- Plugin Scripts -->




    <!-- Slider-tab Script -->
    <script src="assets/js/plugins/slider-tabs.js"></script>













    <!-- Lodash Utility -->
    <script src="assets/vendor/lodash/lodash.min.js"></script>
    <!-- Utilities Functions -->
    <script src="assets/js/iqonic-script/utility.js"></script>
    <!-- Settings Script -->
    <script src="assets/js/iqonic-script/setting.js"></script>
    <!-- Settings Init Script -->
    <script src="assets/js/setting-init.js"></script>
    <!-- External Library Bundle Script -->
    <script src="assets/js/core/external.min.js"></script>
    <!-- Widgetchart Script -->
    <script src="assets/js/charts/widgetcharts.js?v=2.2.0" defer></script>
    <!-- Dashboard Script -->
    <script src="assets/js/charts/dashboard.js?v=2.2.0" defer></script>
    <script src="assets/js/charts/alternate-dashboard.js?v=2.2.0" defer></script>
    <!-- Hopeui Script -->
    <script src="assets/js/hope-ui.js?v=2.2.0" defer></script>
    <script src="assets/js/hope-uipro.js?v=2.2.0" defer></script>
    <script src="assets/js/sidebar.js?v=2.2.0" defer></script>
</body>

</html>