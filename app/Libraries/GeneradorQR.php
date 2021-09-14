<?php

namespace App\Libraries;

use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Encoding\Encoding;

class GeneradorQR
{
	function __construct()
	{
		
	}

	public function generar_qr()
	{
		$texto = "Generando códigos QR con PHP desde parzibyte.me";
		$codigoQR = new QrCode($texto);

		/**
		 * ============================================================
		 * |        De aquí en adelante todo es personalización       |
		 * ============================================================
		 */
		# Tamaño del código en pixeles (recuerda que es cuadrado),
		# mayor tamaño requiere más tiempo de generación
		$codigoQR->setSize(400);

		# El margen, comienza desde 0 y
		# puede ser incluso mayor que el tamaño del código
		$codigoQR->setMargin(0);

		# Codificación, útil cuando ponemos acentos o
		# caracteres especiales
		$codigoQR->setEncoding(new Encoding('UTF-8'));

		# Si queremos, podemos agregar un logotipo
		$rutaDelLogotipo = FCPATH."img/logo/logo.png";
		$codigoQR->setLogoPath($rutaDelLogotipo);
		# Tamaño del logo. Anchura, altura en pixeles
		$codigoQR->setLogoSize(50, 50);

		# Color de fondo. La a es de alpha, va de 0 a 127
		# Mayor alfa es mayor transparencia
		$colorDeFondo = ['r' => 39, 'g' => 40, 'b' => 34, 'a' => 0];
		$codigoQR->setBackgroundColor($colorDeFondo);

		# Color del primer plano
		# Lo de la a de alpha aplica igual que el del color de fondo
		$colorPrimerPlano = ['r' => 166, 'g' => 226, 'b' => 46, 'a' => 0];
		$codigoQR->setForegroundColor($colorPrimerPlano);

		# También podemos poner una etiqueta
		$textoEtiqueta = "Escanea este fabuloso código QR [parzibyte.me]";
		$tamanioTextoEtiqueta = 10; # En pixeles
		$rutaFuenteParaEtiqueta = "MontserratAlternates-Regular.otf";
		# La alineación puede ser LEFT, CENTER y RIGHT
		$alineacion = LabelAlignment::CENTER;
		$codigoQR->setLabel($textoEtiqueta, $tamanioTextoEtiqueta, $rutaFuenteParaEtiqueta, $alineacion);

		# Para ejemplos de simplicidad, mostramos en código en el navegador
		header('Content-Type: ' . $codigoQR->getContentType());
		echo $codigoQR->writeString();
	}
}

# Indicar que usaremos el namespace de QRCode


# Esto es para las constantes de la alineación de la etiqueta
