
<?php 
Class ClearPar {
	/**
     * build
     * Sintaxis segun PS4 y validada con codesniffer ;)
     * @param String $val
     * @return String
    */
	public function build($val) {
		$out = '';

		if (!empty($val)) {
			for ($i = 0; $i < strlen($val); $i++) {
				if (!empty($val[$i+1])) {
					if ($val[$i] == "(" && $val[$i+1] == ")") {
						$out .= $val[$i] . $val[$i+1];
					}
				}	
			}
		} else {
			$out = 'Entrada invalida!';
		}

		return $out;
	}
}
?>