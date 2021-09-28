<?php

class Alunos {
  public $nome;
  public $ra;

  function __construct($nome,$ra) {
  $this->nome=$nome;
  $this->ra=$ra;
}
}
class Presença{
  public $alunos;
  public function assiste(Alunos $aluno){
    $this->alunos[]=$aluno;
  }
  public function exibe(){
    foreach($this->Alunos as $aluno){
      echo $aluno->nome.'<br/>';
      echo $aluno->ra.'<hr>';
    }
  }

  }
$a=new alunos("Guilhermina","5689");
$b= new alunos("Frederico","70855");

$poo = new Presença();
$poo->exibe($a);
$poo->exibe($b);
?>
