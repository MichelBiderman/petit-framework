<?php
class View {
	private $vue = "";
	private $args = [];
	public function __construct($nomTemplate="",$tableauArgs = [])
	{
		$this->vue = "views/{$nomTemplate}.php";
		$this->args = $tableauArgs;
	}

	public function __toString() {
			foreach($this->args as $key=>$value) {
					$$key = $value;
			}	
		    ob_start();
			include $this->vue;
			return ob_get_clean();
	}
}