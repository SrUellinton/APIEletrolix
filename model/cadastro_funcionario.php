<?php

session_start();
require_once '../database/conexao.php';
require("../../vendor/autoload.php");
require("../../vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("../../vendor/phpmailer/phpmailer/src/SMTP.php");



$fun_nome = mysqli_real_escape_string($connect, $_POST['fun_nome']);
$fun_cpf = mysqli_real_escape_string($connect, $_POST['fun_cpf']);
$fun_rg = mysqli_real_escape_string($connect, $_POST['fun_rg']);
$fun_email = mysqli_real_escape_string($connect, $_POST['fun_email']);
$fun_celular = mysqli_real_escape_string($connect, $_POST['fun_celular']);
$fun_funcao = mysqli_real_escape_string($connect, $_POST['fun_funcao']);
$estado_civil = mysqli_real_escape_string($connect, $_POST['fun_estado_civil']);
$fun_modelo_contrato = mysqli_real_escape_string($connect, $_POST['fun_modelo_contrato']);
$fun_cep = mysqli_real_escape_string($connect, $_POST['fun_cep']);
$fun_rua = mysqli_real_escape_string($connect, $_POST['fun_rua']);
$fun_bairro = mysqli_real_escape_string($connect, $_POST['fun_bairro']);
$fun_cidade = mysqli_real_escape_string($connect, $_POST['fun_cidade']);
$fun_estado = mysqli_real_escape_string($connect, $_POST['fun_estado']);
$fun_numero = mysqli_real_escape_string($connect, $_POST['fun_numero']);
$fun_complemento = mysqli_real_escape_string($connect, $_POST['fun_complemento']);
$fun_nivel_acesso = mysqli_real_escape_string($connect, $_POST['fun_nivel_acesso']);
$fun_senha = "Pezinho@123456";
$fun_participacao = mysqli_real_escape_string($connect, $_POST['fun_participacao']);
$fun_inss_percentage = mysqli_real_escape_string($connect, $_POST['fun_inss_percentage']);
$fun_cargo = mysqli_real_escape_string($connect, $_POST['fun_cargo']);
$fun_tipo_colaborador = mysqli_real_escape_string($connect, $_POST['fun_tipo_colaborador']);
$fun_participacao = mysqli_real_escape_string($connect, $_POST['fun_participacao']);
$fun_fgts_percentage = mysqli_real_escape_string($connect, $_POST['fun_fgts_percentage']);
$fun_cbo_percentage = mysqli_real_escape_string($connect, $_POST['fun_cbo_percentage']);
$fun_base_salary = mysqli_real_escape_string($connect, $_POST['fun_base_salary']);
$fun_data_cadastro = date('d-m-y H:m:s');
$fun_tomou_vacina = mysqli_real_escape_string($connect, $_POST['fun_tomou_vacina']);


if (isset($_FILES['fImage'])) {
    $arquivo = $_FILES['fImage']['name'];
    $extensao = strtolower(substr($_FILES['fImage']['name'], -4));

    $novo_nome = uniqid();
    $novo_arquivo = $novo_nome . $extensao;

    // recebendo arquivos
    $anexo_cnh = $_FILES['anexo_cnh']['name'];
    $anexo_rg = $_FILES['anexo_rg']['name'];
    $anexo_pis = $_FILES['anexo_pis']['name'];
    $anexo_asno = $_FILES['anexo_asno']['name'];
    $anexo_vacina = $_FILES['anexo_vacina']['name'];
    $anexo_passaporte = $_FILES['anexo_passaporte']['name'];
    $anexo_cert_casamento = $_FILES['anexo_due']['name'];

    $diretorio = "../../uploads/";
    $fun_foto_funcionario = $diretorio . $novo_arquivo;
    move_uploaded_file($_FILES['fImage']['tmp_name'], $diretorio . $novo_arquivo);
    move_uploaded_file($_FILES['anexo_cnh']['tmp_name'], $diretorio . $anexo_cnh);
    move_uploaded_file($_FILES['anexo_rg']['tmp_name'], $diretorio . $anexo_rg);
    move_uploaded_file($_FILES['anexo_pis']['tmp_name'], $diretorio . $anexo_pis);
    move_uploaded_file($_FILES['anexo_asno']['tmp_name'], $diretorio . $anexo_asno);
    move_uploaded_file($_FILES['anexo_vacina']['tmp_name'], $diretorio . $anexo_vacina);
    move_uploaded_file($_FILES['anexo_passaporte']['tmp_name'], $diretorio . $anexo_passaporte);
    move_uploaded_file($_FILES['anexo_due']['tmp_name'], $diretorio . $anexo_cert_casamento);
    $cadastro_clientepf = "INSERT INTO funcionarios(fun_foto_funcionario,
    fun_nome_completo,
	fun_cpf,
    fun_rg,	
    fun_estado_civil,
	fun_email,
    fun_celular,
	fun_funcao,    
    fun_cep,
    fun_rua,
    fun_bairro,
    fun_cidade,
    fun_estado,
    fun_numero,
    fun_complemento,
    fun_senha,
    fun_status,
    fun_participacao,
    fun_inss_percentage,
    fun_cargo,
    fun_modelo_contrato,
    fun_tipo_colaborador,
    fun_fgts_percentage,
    fun_cbo_percentage,
    fun_base_salary,
    fun_data_cadastro,
    anexo_cnh,
    anexo_rg,
    anexo_pis,
    anexo_asno,
    tomou_vacina_covid,
    anexo_vacina,
    anexo_passaporte,
    anexo_cert_casamento) 
	values ('$fun_foto_funcionario',
    '$fun_nome',
	'$fun_cpf',
    '$fun_rg',
    '$estado_civil',	
	'$fun_email',
    '$fun_celular',
	'$fun_funcao',    
    '$fun_cep',
    '$fun_rua',
    '$fun_bairro',
    '$fun_cidade',
    '$fun_estado',
    '$fun_numero',
    '$fun_complemento',
    md5('$fun_senha'),
    'Ativo',
    '$fun_participacao',    
    '$fun_inss_percentage',
    '$fun_cargo',
    '$fun_modelo_contrato',
    '$fun_tipo_colaborador',
    '$fun_fgts_percentage',
    '$fun_cbo_percentage',
    '$fun_base_salary',
    '$fun_data_cadastro',
    '$anexo_cnh',
    '$anexo_rg',
    '$anexo_pis',
    '$anexo_asno',
    '$fun_tomou_vacina',
    '$anexo_vacina',
    '$anexo_passaporte',
    '$anexo_cert_casamento')";
//var_dump($cadastro_clientepf);
    $cad_pf = mysqli_query($connect, $cadastro_clientepf);

    /**
     * Area de senha do usuario
     */



    $usu_nome = mysqli_real_escape_string($connect, $fun_nome);
    $usu_email = mysqli_real_escape_string($connect, $fun_email);
    $usu_token = md5(mysqli_real_escape_string($connect, $fun_email));
    $usu_status = "Ativo";
    $usu_nivel_usuario = "Equipe";

    $cadastro_acesso = "INSERT INTO usuarios(usu_foto_login,
     usu_nome,
     usu_email,
     usu_senha,
     usu_token,
     usu_status,
     usu_celular,
     usu_nivel_usuario,
     usu_data_cadastro)
     values('$fun_foto_funcionario',
     '$usu_nome',
     '$usu_email',
     md5('$fun_senha'),
     '$usu_token',
     'Ativo',
     '$fun_celular',
     '$fun_nivel_acesso',
     now())";
    $cadastrando_acesso =  mysqli_query($connect, $cadastro_acesso);

    /**
     * Envio de email
     */



    if ($cad_pf) {
        /*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";*/

        $_SESSION['cadastradoInfo'] = "<div class='alert alert-succes bg-success text-center' role='alert' style='border:1px solid #28A745; color:#FFF;  font-size:19px;'>Informações  cadastradas com sucesso!<div>";


        header('Location: ../../colaboradores.php?sucesso');
    } else {
        /*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso não foi cadastrado com Sucesso.\");
				</script>
			";	*/

        $_SESSION['cadastradoInfo'] = "<div class='alert alert-danger' role='alert'>Falha ao registrar no banco de dados! erro:</div>" . mysqli_error($connect);

        //header('Location: ../lista_clientes.php?erro');

        echo mysqli_error($connect);
    }
}
