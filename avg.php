<?php

function srednia($liczby) {
	if (count($liczby) === 0) {
		return 0;
	}
	return array_sum($liczby) / count($liczby);
}
function srednia_wazona($wartosci, $wagi) {
	if (count($wartosci) === 0 || count ($wartosci) !== count ($wagi)) {
		return 0;
}
	$suma_wazona = 0;
	$suma_wag = 0;
	}
	for ($i = 0; $i < count($wartosci); $i++) {
		$suma_wazona += $wartosci[$i] * $wagi[$i];
		$suma_wag += $wagi[$i];
}

	return $suma_wag === 0 ? 0 : $suma_wazona / $suma_wag;

	}
	$wartosci = [2, 4, 6];
	$wagi = [8, 2];
	
	echo srednia_wazona(&wartosci, &wagi);
