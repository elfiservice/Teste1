<?php

class Pessoa{

	private  $primeiroNome;
	private  $segundoNome;
	private  $idade;
	private $sexo;

	public function __construct($primeironome, $segundonome, $idade, $sexo){

		$this->primeiroNome = $primeironome;
		$this->segundoNome = $segundonome;
		$this->idade = $idade;
		
		$this->sexo = $sexo;

	}

	public function getName(){
		return $this->primeiroNome." ".$this->segundoNome;
	}

	public function setPrimeiroNome($primeironomeset){
		$this->primeiroNome = $primeironomeset;
	}

	public function setSegundoNome($segundonomeset){
		$this->segundoNome = $segundonomeset;
	}

	public function getIdade(){
		return $this->idade;
	}
	//	public abstract function esporte();

}

?>
