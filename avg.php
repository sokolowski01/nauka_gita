<?php

function srednia($liczby) {
	if (count($liczby) === 0) {
		return 0;
	}
	return array_sum($liczby) / count($liczby);
}

	$suma_wazona = 0;
	$suma_wag = 0;

	for ($i = 0; $i < count($wartosci); $i++) {
		$suma_wazona += $wartosci[&i] * $wagi[$i];
		$suma_wag += $wagi[$i];
}

	return $suma_wag === 0 ? 0 : $suma_wazona / $suma_wag;
}
