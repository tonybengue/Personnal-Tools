<?php
	
// Classe héritée
class BootstrapForm extends \Html\Form {
	/** 
	* @param string $html Code HTML entouré
	* @return string
	*/
	protected function surround($html) {
		return "<div class=\"form-group\">{$html}</div>";
	}

	/** 
	* @param string
	* @return string
	*/
	public function input($name) {
		return $this->surround(
			'<label>' . $name . '</label><input type="text" name ="'. $name .'" value="'. $this->getValue($name) .'" class="form-control">'
		);
	}

	/** 
	* @return string
	*/
	public function submit() {
		return $this->surround(
			'<button type="submit" class="btn btn-primary">Envoyer</button>'
		);
	}
}