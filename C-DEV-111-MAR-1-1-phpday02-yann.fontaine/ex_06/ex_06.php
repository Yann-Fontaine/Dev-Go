<?php
function my_create_continent($conNam, &$map){
	$map[]=array($conNam);
}


function my_create_country($couNam, $conNam, &$map){
	if(isset($conNam)==true){
		$map[$conNam]=array($couNam);
}
	else{
		echo "Failure to get continent\n";
		     return NULL;
}
}


function my_create_city($citNam, $zipCod, $couNam, $conNam, &$map){
	if(isset($conNam)==false){
		echo "Failure to get country\n";
		return NULL;
}
	elseif(isset($couNam)==false){
		echo "Failure to get city\n";
		return NULL;
}
	else{
		$map[$couNam][$citNam]=$zipCod;
}


function my_get_countries_of_continent($conNam, $map){
	foreach($map as $con){
		if (isset($conNam)==true){
			foreach($conNam as $cou){
		   		if (isset($couNam)==true){
					var_dump($map[$conNam][$couNam]);
}
				else{
					echo "Failure to get country\n";
					return NULL;
}
}
}
		else{
			echo "Failure to get continent\n";
			return NULL;

}
}
}

function my_get_cities_of_country($couNam, $conNam, $map){
	foreach($map as $con){
		if (isset($conNam)==true){
			foreach($conNam as $cou){
				if (isset($couNam)==true){
					foreach($couNam as $cit){
					   	if (isset($citNam)==true){
						      var_dump($map[$conNam][$couNam][$citNam]);
}
						else{
							echo "Failure to get city.\n"
							return NULL;
}
}
}
				else{
					echo "Failure to get country.\n";
					return NULL;
}
}
		else{
			echo "Failure to get continent.\n";
			return NULL;
}
}
}
}

function my_get_city_postal_code(
	foreach($map as $con){
		if (isset($conNam)==true){
			foreach($conNam as $cou){
				if (isset($couNam)==true){
					foreach($couNam as $cit){
						if (isset($citNam)==true){
							$result = $map[$conNam][$couNam][$citNam];
							echo $result;
}
						else{
							echo "Failure to get city.\n"
							return NULL;
}
}
}
				else{
					echo "Failure to get country.\n";
					return NULL;
}
}
		else{
			echo "Failure to get continent.\n";
			return NULL;
}
}
}
