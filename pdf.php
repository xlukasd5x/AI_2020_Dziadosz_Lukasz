<?php
//Wywołujemy FPDF bilbioteke
require('fpdf17/fpdf.php');
//A4 width : 219mm
//Domyślny margines : 10mm each side
//Zapisywalny poziomo : 219-(10*2)=189mm

//Tworzymy nowy pdf obiekt
$pdf = new FPDF('P','mm','A4');
//Dodajemy nową stronę
$pdf->AddPage();


//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , tekst , border , koniec linii , [align] )

$pdf->Cell(130 ,5,'Lukasz Dziadosz - szybkie auta',0,0);
$pdf->Cell(59 ,5,'Faktura',0,1);//koniec linii

//Ustawiamy czcionkę Arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Rejtana 16',0,0);
$pdf->Cell(59 ,5,'',0,1);//koniec linii

$pdf->Cell(130 ,5,'Rzeszow, Polska',0,0);
$pdf->Cell(25 ,5,'Data:',0,0);
$pdf->Cell(34 ,5,date('d-m-Y'),0,1);//koniec linii

$pdf->Cell(130 ,5,'+48 123 456 789',0,0);//koniec linii


//Robimy pustą komórkę jako pionowy margines
$pdf->Cell(189 ,10,'',0,1);//koniec linii

//Adres rachunku
$pdf->Cell(100 ,5,'Rachunek dla:',0,1);//koniec linii
//Dodajemy fikcyjną komórkę na początku każdej linii w celu wcięcia
$imie = $_POST['imie'];
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$imie,0,1);

$adres = $_POST['adres'];
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$adres,0,1);

$telefon = $_POST['telefon'];
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$telefon,0,1);

//Robimy pustą komórkę jako pionowy element dystansowy
$pdf->Cell(189 ,10,'',0,1);//koniec linii

//Treść faktury
$pdf->SetFont('Arial','B',12);

$pdf->Cell(78 ,5,'Model',1,0);
$pdf->Cell(77 ,5,'Marka',1,0);
$pdf->Cell(34 ,5,'Koszta',1,1);//koniec linii

$pdf->SetFont('Arial','',12);

//Liczby są wyrównane do prawej, więc podajemy „R” po nowym parametrze wiersza
$Marka = $_POST['Marka'];
$Model = $_POST['Model'];
$Cena = $_POST['Cena'];
$pdf->Cell(78 ,5,$Marka,1,0);
$pdf->Cell(77 ,5,$Model,1,0);
$pdf->Cell(6 ,5,'Zl',1,0);
$pdf->Cell(28 ,5,$Cena,1,1,'R');//koniec linii


//Suma kosztów
$pdf->Cell(121 ,5,'',0,0);
$pdf->Cell(34 ,5,'Suma czesciowa',0,0);
$pdf->Cell(6 ,5,'Zl',1,0);
$pdf->Cell(28 ,5,$Cena,1,1,'R');//koniec linii

$pdf->Cell(121 ,5,'',0,0);
$pdf->Cell(34 ,5,'Podatek',0,0);
$pdf->Cell(6 ,5,'Zl',1,0);
$pdf->Cell(28 ,5,'10%',1,1,'R');//koniec linii

$iNumber = 1.1;
$iResult = $Cena * $iNumber;
$pdf->Cell(121 ,5,'',0,0);
$pdf->Cell(34 ,5,'Suma calkowitka',0,0);
$pdf->Cell(6 ,5,'Zl',1,0);
$pdf->Cell(28 ,5,$iResult,1,1,'R');//koniec linii
$pdf->Output();
?>