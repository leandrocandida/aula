<meta charset="utf-8">
<style type="text/css">
body{
    background-color:#ff5733;
    font:14px/1.4 tahoma,sans-serif;
    color:#ffffff; }
</style>
   
   <?php
    class Cursos{
        var $codcurso;  var $nomecurso;  var $cargaH;
        //colocamos NULL nas propriedades  por não serem obrigatórias
        function _construct($codcurso=NULL, $nomecurso=NULL, $cargaH=NULL) {
            //metodo construtor
            $this->codigo=$codcurso;
            $this->nomecurso=$nomecurso;
            $this->cargaHoraria=$cargaH;
        }
  
    public function Incluir() {
        //atribuindo a descrição do metodo construtor
        $codcurso = $this->codigo;
        $nomecurso = $this->nomecurso;
        $cargaH = $this->cargaHoraria;
        
        //conecção com banco de dados
        $conecta = mysqli_connect("localhost","root","","academico") or die (mysqli_error());
        //trecho SQL de inserção dos dados
        $sql ="INSERT INTO curso(codcurso,nomecurso,cargaHoraria) VALUE ('$codcurso','$nomecurso','$cargaH')";
  //execução do trecho SQL
  mysqli_query($conecta, $sql) or die ("erro no comando sql:".mysqli_error($conecta));
    //verificação
    if(mysqli_affected_rows($conecta)==1){
        print"<h2> cadastro cadastrado com sucesso!</h2>";

    }
else{
     print "<h2>cadastro não realizado.motivo</h2>". mysqli_error();

    }
    //fecha conecção ao servidor mysql_error
    mysqli_close($conecta);
    }
    }
    $codigo= $_post["codigo"];
    $curso= $_post["nome"];
    $cargaH= $_post["cargaHoraria"];
    $obj = new Cursos ($codigo,$curso,$cargaH);
    $obj->Incluir();
    ?>
    <p> <a href ="aulaCad.html">Voltar </a>