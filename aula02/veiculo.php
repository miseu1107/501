<?php
echo "<pre>";

class veiculo //classe pai
{
	public $roda;
	public $banco;

	public function freio(){

	}
	public function acelerar(){

	}

}
class carro extends veiculo
{

}
class moto extends veiculo
{

}
$gol = new carro();
$gol->roda = "aro20";
var_dump($gol);

$biz = new moto();
$biz->roda = "aro15";
var_dump($biz);