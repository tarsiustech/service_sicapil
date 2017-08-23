<?php
 /**
 * Created by arun on 22/08/2017.
 * site https://tarsiustech.com
 */
 
 
function kode($field,$table,$kode_awal,$star,$jumKar){
		$SELECT = mysql_query("SELECT max($field) as maxKd from $table WHERE $field LIKE '$kode_awal%' ");
		$data =  mysql_fetch_array($SELECT);
		$maxKd = $data['maxKd'];
		$substr = (int) substr($maxKd, $star,$jumKar);
		$kode = $substr + 1;
		$newkode = "$kode_awal".sprintf("%0".$jumKar."s", $kode);
		return $newkode;
	}
?>