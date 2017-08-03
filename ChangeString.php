<?php

class ChangeString {
	
	/**
     * build
     * enfocado a escribir pocas lineas de codigo y efeciente :)
     * @param String $val
     * @return String
    */
    public function build(String $val) {
		$out = 'algo salio mal!';
		$toConsider = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,ñ,o,p,q,r,s,t,u,v,w,x,y,z';
		$search = explode(',', $toConsider);
		$transLower = array();
		$transUpper = array();

		if (!empty($val)) {
		    if (!empty($search)) {
		    	for ($i = 0; $i < count($search); $i++) {
		    		if (!empty($search[$i+1])) {
		    			$transLower[$search[$i]] = $search[$i+1];
		    			$transUpper[strtoupper($search[$i])] = strtoupper($search[$i+1]);
		    		} else {
		    			$transLower['z'] = 'a';
		    			$transUpper['Z'] = 'A';
		    		}
				}
		    }

			$out = strtr($val, $transLower);
			$out = strtr($out, $transUpper);
		}

		return $out;
    }
}

?>