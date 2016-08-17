<?php
if (isset ( $_GET ['procesar'] )) {
	$ventas = $_GET ['listadoventas'];
	$codigoProd = $_GET ['codigobuscar'];
	// var_dump($codigoProd);
	// var_dump($ventas);
	function mostrarListado($ventasProd) {
		$arregloVentas = explode ( ',', $ventasProd );
		// var_dump($arregloVentas);
		
		echo "<h5>Cod | Cantidad</h5> ";
		echo "<br>";
		foreach ( $arregloVentas as $valor ) {
			echo $valor;
			echo "<br>";
		} // foreach()
	} // mostrarListado()
	function contarCodigoBuscado($ventasProd, $codBuscado) {
		$arregloCodigos = array ();
		$arregloVentas = explode ( ',', $ventasProd );
		$contarCodigo = 0;
		foreach ( $arregloVentas as $valor ) {
			array_push ( $arregloCodigos, substr ( $valor, 0, 4 ) );
		} // foreach()
		foreach ( $arregloCodigos as $valor ) {
			if ($codBuscado == $valor) {
				$contarCodigo ++;
			} // if
		} // foreach()
		return $contarCodigo;
	} // function contarCodigoBuscado
	
	mostrarListado ( $ventas );
	$cuentaBuscado = contarCodigoBuscado ( $ventas, $codigoProd );
	echo "La cantidad de codigos encontrados es : " . $cuentaBuscado;
} //isset(









