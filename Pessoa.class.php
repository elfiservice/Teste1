<?php

class Pessoa{

	private  $primeiroNome;
	private  $segundoNome;
	private  $idade;

	public function __construct($primeironome, $segundonome){

		$this->primeiroNome = $primeironome;
		$this->segundoNome = $segundonome;


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

	//	public abstract function esporte();

}

?>