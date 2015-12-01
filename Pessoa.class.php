<?php

class Pessoa{

	private  $primeiroNome;
	private  $segundoNome;
	private  $idade;

	public function __construct($primeironome, $segundonome, $idade){

		$this->primeiroNome = $primeironome;
		$this->segundoNome = $segundonome;
		$this->idade = $idade;

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