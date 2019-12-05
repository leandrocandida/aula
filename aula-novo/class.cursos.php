<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of class
 *
 * @author labd
 */
class Cursos {
var $codcurso; 
var $nomecurso;
var $cargaH;
var $cursoE;

function __construct($codcurso=NULL, $nomecurso=NULL, $cargaH=NULL, $cursoE=NULL) {
    $this->codigo = $codcurso;
    $this->nomecurso = $nomecurso;
    $this->cargahora = $cargaH;
    $this->cursoextra = $cursoE;
}
    public function incluir(){
 echo      $codcurso = $this->codigo;
 echo      $nomecurso = $this->nomecurso;
 echo       $cargaH = $this->cargahora;
 echo      $cursoE = $this->cursoextra;
       // para conectar em outro banco de dados, lembrar de importar ele, no lugar de "academico". E faça com o mesmo número de campos na tabela
       $conecta = mysqli_connect("localhost", "root","xDSL%23*9","academico") or die (mysqli_error());
       $sql = "INSERT INTO cursos (cod_curso, nome_curso, carga_horaria, curso_extra) VALUES('$codcurso','$nomecurso','$cargaH' , '$cursoE')";
       mysqli_query($conecta, $sql) or die("Erro no comando SQL: ".mysqli_error($conecta));
     if(mysqli_affected_rows($conecta)==1){
         echo 'cadastro com sucesso ';
         
     }else {
         echo 'cadastro nao realizado'. mysqli_error();
     }
     mysqli_close($conecta);
    }
   }
 $codigo = $_POST["codigo"];
 $curso = $_POST["nome"];
 $cargaH = $_POST["cargaHoraria"];
 $cursoextra = $_POST['cursoExtra'];
 $obj= new Cursos($codigo,$curso,$cargaH,$cursoextra);
 $obj->incluir();
 ?>
<p><a href="aulaCad.html">voltar</a></p>