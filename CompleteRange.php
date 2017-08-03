
<?php 
Class CompleteRange{
	/**
     * build
     * No solo los completa, los reordena, eliminar los valores >D
     * @param Array $numbers
     * @return String
    */
	public function build($numbers) {
		$out = '';
		if (!empty($numbers)) {
			$min = 1;
			$max = max(array_values($numbers));
		    
			while ($min <= $max) {
				$out.=  $min . ', ';
				$min++;
			}
		}

		$out = substr (trim($out), 0, -1);
		return $out;
	}
}
?>