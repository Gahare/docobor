<?php require(__DIR__."/fpdf182/fpdf.php");

function rus($word){
    return iconv('utf-8', 'windows-1251',$word);
}

$gotname=$_POST["name"];
$gotfamil=$_POST["famil"];
$gototche=$_POST["otche"];
$gotphone=$_POST["phone"];
$gotgender=$_POST["gender"];
$pdf = new FPDF();
$pdf->AddPage();
$pdf->AddFont('Arial','','arial.php');
$pdf->SetFont('Arial');
$pdf->Image('new.png',24,-25);
$pdf->Cell(200,100,'');
$pdf->Ln(); //line break
$pdf->Cell(200,10,rus('Ваше имя: '.$gotname));
$pdf->Ln(); //line break
$pdf->Cell(200,10,rus('Ваша фамилия: '.$gotfamil));
$pdf->Ln(); //line break
$pdf->Cell(200,10,rus('Ваше отчество: '.$gototche));
$pdf->Ln(); //line break
$pdf->Cell(200,10,rus('Ваш телефон: '.$gotphone));
$pdf->Ln(); //line break
$pdf->Cell(200,10,rus('Ваш пол:'.$gotgender));
$pdf->Ln(); //line break
$pdf->Output();
?>
