<?php

class pessoa{
  public   $nome;
  public  $sexo;
  public   $idade;
  public  $cpf;
  public   $celular;



public function __construct($nome,$sexo,$idade,$cpf,$celular)
{
  $this->nome=$nome;
  $this->sexo=$sexo;
  $this->idade=$idade;
  $this->cpf=$cpf;
  $this->celular=$celular;
}
}
 $j = new pessoa("Joaquina",'f',27,2059948,99456890);
 $w = new pessoa("Hercules",'m',45,6809,995899);
 $h = new pessoa("Mary",'f',15,908655,9544400);
 $u = new pessoa("Clodoaldo",'m',89,90457,9066);
 $m = new pessoa("Adoniran",'m', 78,90678,9870);
 var_dump($j);
 echo"<br>";
 var_dump($w);
 echo"<br>";
 var_dump($h);
 echo"<br>";
 var_dump($u);
 echo"<br>";
 var_dump($m);
 echo"<br>";
  class salaVirtual{
    public $disciplina;
    public $professor;
    public $dia_da_semana;

    public function __construct  ($disciplina,$professor,$dia_da_semana)
    {
    $this->disciplina=$disciplina;
    $this->professor=$professor;
    $this->dia=$dia_da_semana;
    }
    };
  $o=new salaVirtual("Desenvolvimento Web II","Orlando","terça");
 $r=new salaVirtual("Taticas","Rodrigo","sexta");

 var_dump($o);
 echo "<br>";
 var_dump($r);
 
 


?>