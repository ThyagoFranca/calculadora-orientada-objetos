<?php

class Calculadora {

	private $total;
	private $num1; 
	private $num2;

	public function __construct() { // para zerar os valores
		$this->total = 0;
		$this->num1 = 0;
		$this->num2 = 0;
	}

	public function setNum1($par1) {
		$this->num1 = $par1;
	}

	public function setNum2($par2) {
		$this->num2 = $par2;
	}

	// Operções
	public function somar() {
		$this->total = $this->num1 + $this->num2;
	}

	public function subtrair() {
		$this->total = $this->num1 - $this->num2;
	}

	public function multiplicar() {
		$this->total = $this->num1 * $this->num2;
	}

	public function dividir() {
		$this->total = $this->num1 / $this->num2;
	}

	public function getTotal() {
		return $this->total;
	}
}