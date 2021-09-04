<?php 
namespace App\Libraries;
require_once 'Fpdf_PB.php';
class Reporte_facturas extends Fpdf_PB
{
	public function __construct()
	{
		parent::__construct('L', 'mm', [80, 150]);
	}

	public function facturaLg()
	{
		$this->AddPage();

		// CABECERA
		$this->SetFont('Helvetica', '', 12);
		$this->Cell(60, 4, 'Posgrado Bolivia', 0, 1, 'C');
		$this->SetFont('Helvetica', '', 8);
		// $this->Cell(60, 4, 'C.I.F.: 01234567A', 0, 1, 'C');
		$this->Cell(60, 4, 'C/ Arturo Soria, 1', 0, 1, 'C');
		// $this->Cell(60, 4, 'C.P.: 28028 Madrid (Madrid)', 0, 1, 'C');
		$this->Cell(60, 4, '72 888 77', 0, 1, 'C');
		$this->Cell(60, 4, 'posgrado_bolivia@gmail.com', 0, 1, 'C');

		// DATOS FACTURA        
		$this->Ln(5);
		$this->Cell(60, 4, utf8_decode('Codígo: 004341'), 0, 1, '');
		$this->Cell(60, 4, 'Fecha: '.date('d-m-Y'), 0, 1, '');
		// $this->Cell(60, 4, 'Metodo de pago: Tarjeta', 0, 1, '');

		// COLUMNAS
		$this->SetFont('Helvetica', 'B', 6);
		$this->Cell(27, 6, 'Detalle de la Factura', 0,0);
		$this->Cell(8, 6, 'Saldo', 0, 0, 'R');
		$this->Cell(12, 6, 'A Cuenta', 0, 0, 'R');
		$this->Cell(12, 6, 'Total', 0, 1, 'R');
		$this->Cell(60, 0, '', 'T');
		$this->Ln(0);

		// PRODUCTOS
		$this->SetFont('Helvetica', '', 7);
		$this->SetTypeCell(['m','c','c','c']);
		$this->SetWidths([27,8,12,12]);
		$this->SetAligns(['L','C','C','C']);
		$this->SetBorder([0,0,0,0]);
		$this->SetFillColor(221,215,214);
		$this->Row([utf8_decode('Diplomado en Educación Superior (MATRICULA)'), '200', '0', '200'], 'DF');
		$this->Row([utf8_decode('Diplomado en Educación Superior (COLEGIATURA)'), '500', '500', '500'], 'D');
		$this->Row([utf8_decode('Diplomado en Psicología Educativa (MATRICULA)'), '200', '0', '200'], 'DF');

		// SUMATORIO DE LOS PRODUCTOS Y EL IVA
		// $this->Ln(6);
		$this->Cell(60, 0, '', 'T');
		// $this->Ln(2);
		$this->Ln();
		$this->Cell(35, 5, 'TOTAL A CUENTA', 0);
		$this->Cell(12, 5, '500', 0, 1, 'C');

		$this->Cell(47, 5, 'TOTAL', 0);
		$this->Cell(12, 5, '900', 0, 0, 'C');

		// PIE DE PAGINA
		$this->Ln(10);
		$this->Cell(60, 0, 'GRACIAS POR CONFIAR EN ', 0, 1, 'C');
		$this->Ln(3);
		$this->Cell(60, 0, 'POSGRADO BOLIVIA', 0, 1, 'C');

		$this->Output();
	}
}
