<?php

namespace App\Libraries;
use App\Libraries\Fpdf_PB;

class Reporte_facturas extends Fpdf_PB
{
	public function __construct()
	{
		parent::__construct('P', 'mm', [80, 200]);
		// parent::__construct();
	}

	public function facturaLg()
	{
		$this->SetTitle('RECIBO',true);
		$this->AddPage();

		// CABECERA
		$this->Image(FCPATH.'/img/logo/LOGO_POSGRADO_BOLIVIA_negro.png', 17, 8, 50, 12, 'png');
		$this->SetY(20);
		// $this->SetFont('Helvetica', '', 12);
		// $this->Cell(60, 4, 'Posgrado Bolivia', 0, 1, 'C');
		$this->SetFont('Helvetica', '', 8);
		// $this->Cell(60, 4, 'C.I.F.: 01234567A', 0, 1, 'C');
		$this->Cell(60, 4, 'El Alto C/ Arturo Soria, 1', 0, 1, 'C');
		// $this->Cell(60, 4, 'C.P.: 28028 Madrid (Madrid)', 0, 1, 'C');
		$this->Cell(60, 4, '728 88 747', 0, 1, 'C');
		$this->Cell(60, 4, 'posgrado_bolivia@gmail.com', 0, 1, 'C');
		$this->SetFont('Times', 'B', 15);
		$this->Cell(0, 5, 'R E C I B O', 0, 1, 'C');
		$this->SetFont('Symbol', 'B', 10);
		// $this->Cell(0, 3, chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42), 0, 1, 'C');

		$this->Cell(0, 3, chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168), 0, 1, 'C');

		// DATOS FACTURA
		$this->SetFont('Helvetica', '', 8);
		$this->Ln(1);
		$this->SetFont('Helvetica', 'B', 8);
		$this->Cell(31, 4, utf8_decode('Fecha de Inscripción:'), 1, 0);
		$this->SetFont('Helvetica', '', 8);
		$this->Cell(0, 4, '09-09-2021', 1, 1, 'L');
		$this->SetFont('Helvetica', 'B', 8);
		$this->Cell(31, 4, utf8_decode('Codígo de Recibo:'), 1, 0);
		$this->SetFont('Helvetica', '', 8);
		$this->Cell(0, 4, '004341', 1, 1, 'L');
		$this->SetFont('Helvetica', 'B', 8);
		$this->Cell(15, 5, 'Nombre:', 1, 0);
		$this->SetFont('Helvetica', '', 8);
		$this->CellFitSpace(0, 5, 'LAURA SUSANA ACOSTA TORRES', 1, 1, 'L');
		$this->SetFont('Helvetica', 'B', 8);
		$this->Cell(8, 4, 'CI:', 1, 0);
		$this->SetFont('Helvetica', '', 8);
		$this->Cell(0, 4, '84765263', 1, 1, 'L');
		$this->SetFont('Symbol', 'B', 10);
		$this->Ln(1);
		// $this->Cell(0, 3, chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42), 0, 1, 'C');

		$this->Cell(0, 3, chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168), 0, 1, 'C');

		// COLUMNAS
		$this->Cell(60, 0, '', 'T', 1);
		$this->SetFont('Helvetica', 'B', 6);
		$this->Cell(27, 6, 'Detalle de la Factura', 0, 0);
		$this->Cell(8, 6, 'Saldo', 0, 0, 'R');
		$this->Cell(12, 6, 'A Cuenta', 0, 0, 'R');
		$this->Cell(12, 6, 'Total', 0, 1, 'R');
		$this->Cell(60, 0, '', 'T');
		$this->Ln(1);

		// PRODUCTOS
		$this->SetFont('Helvetica', '', 7);
		$this->SetTypeCell(['m', 'c', 'c', 'c']);
		$this->SetWidths([27, 8, 12, 12]);
		$this->SetAligns(['L', 'C', 'C', 'C']);
		$this->SetBorder([0, 0, 0, 0]);
		$this->SetFillColor(235, 240, 240);
		$this->Row([utf8_decode('Diplomado en Educación Superior (MATRICULA)'), chr(151), '200', '200'], 'DF');
		$this->Row([utf8_decode('Diplomado en Educación Superior (COLEGIATURA)'), '500', '500', '500'], 'D');
		$this->Row([utf8_decode('Diplomado en Psicología Educativa (MATRICULA)'), chr(151), '200', '200'], 'DF');

		// SUMATORIO DE LOS PRODUCTOS Y EL IVA
		// $this->Ln(6);
		$this->Cell(60, 0, '', 'T');
		// $this->Ln(2);
		$this->Ln();
		$this->Cell(27, 5, 'SALDO TOTAL', 0);
		$this->Cell(8, 5, '500', 0, 1, 'C');

		$this->Cell(47, 5, 'TOTAL', 'B',0,'',true);
		$this->Cell(0, 5, '900', 'B', 1, 'C',true);

		$this->SetFont('Symbol', 'B', 10);
		$this->Ln(1);
		// $this->Cell(0, 3, chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42) . chr(42), 0, 1, 'C');

		$this->Cell(0, 3, chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168) . chr(168), 0, 1, 'C');

		// PIE DE PAGINA
		$this->Ln(1);
		$this->SetFont('Helvetica', 'IU', 4);
		$this->Cell(30,2,utf8_decode("Fue atendio por: USUARIO_REGISTRO"),0, 0, 'L');
		$this->Cell(30,2,utf8_decode("Fecha de emisión: ". date('d-m-Y h:i:s')),0,1, 'R');
		$this->Image(FCPATH . 'img/qr-code.png', 28.5, ($this->GetY() + 6), 25, 25, 'png');
		$this->SetY($this->GetY() + 34);
		$this->SetFont('Helvetica', '', 7);
		$this->Cell(60, 0, 'GRACIAS POR CONFIAR EN ', 0, 1, 'C');
		$this->Ln(3);
		$this->Cell(60, 0, 'POSGRADO BOLIVIA', 0, 1, 'C');
		$this->Ln(5);
		$this->SetTextColor(234, 234, 234);
		$this->SetFont('Symbol', 'B', 10);
		$this->Cell(0, 3, chr(193) . chr(97) . chr(98) . chr(211) . chr(101), 0, 1, 'C');


		$this->Output('I','RECIBO-'.date('d-m-y h.i.s').'.pdf');
	}
}
