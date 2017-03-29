<?php

class Produit {
	
	public $id_produit;
	public $nom;
	public $pu;


	public function __construct($id_produit=0, $nom="", $pu=0) {

		$this->id_produit = $id_produit;
		$this->$nom = $nom;
		$this->pu = $pu;
	}
	public static function tab($where='1', $order_by='1') {
		global $connex;
		$req="SELECT * FROM `produit` WHERE {$where} ORDER BY {$order_by}";
		return $connex->xeq()->tab(__CLASS__);
	}
	

}