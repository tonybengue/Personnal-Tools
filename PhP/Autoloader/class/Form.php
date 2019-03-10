<?php
namespace Html;

/** Classe Form
 * Permet de générer un formulaire
 */
class Form {
	/** 
	* @var array Données utilisées par le formulaire
	*/
	protected $data;
	
	/** 
	* @var string Tag utilisé pour entourer les champs
	*/
	public $surround = 'p';
	
	/** 
	* @param array $data
	*/
	public function __construct($data = array()) {
			$this->data = $data; 
	}

	/** 
	* @param string $html Code HTML entouré
	* @return string
	*/
	protected function surround($html) {
		return "<{$this->surround}}>$html</{$this->surround}>";
	}
	
	/** 
	* @param string $index Index de la valeur à récupérer
	* @return string
	*/
	protected function getValue($index) {
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}

	/** 
	* @param string
	* @return string
	*/
	public function input($name) {
		return $this->surround(
			'<input type="text" name ="'. $name .'" value="'. $this->getValue($name) .'">'
		);
	}
	
	/** 
	* @return string
	*/
	public function submit() {
		return $this->surround(
			'<button type="submit">Envoyer</button>'
		);
	}
}