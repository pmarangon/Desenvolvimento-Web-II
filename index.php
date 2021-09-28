<?php

class aluno{
  public   $nome;
  public  $ra;
  public   $email;
}
 
  class salaVirtual{
    public $professor;
    public $disciplina;
    public $conteudo;
    public $data;
    public $aluno;
  }

  $j = new aluno();
  $j->nome= "Josefina";
  $j->ra = "4086";
  $j->email = "josefina.arantes@bol.com.br";
    
 $terça = new salaVirtual();
 $terça->professor="Orlando";
 $terça->disciplina="Desenvolvimento Web II";
  $terça->conteudo = "POO";
  $terça->data = "29/09";
  $terça->aluno = $j;
  $aula =array(
  'professor'=>$terça->professor,
  'disciplina'=>$terça->disciplina,
  'conteudo'=>$terça->conteudo,
  'data'=>$terça->data,
  'aluno'=>$terça->aluno,
);
var_dump($aula);


?>