<?php
// if(!empty($_POst['submit']))
// {
	$a=$_POST['t13'];
	$b=$_POST['t2'];
 	 $c = ucwords($b);
	 $a=ucwords($a);
	$d=$_POST['t5'];
	$d=ucwords($d);
	$e=$_POST['t6'];
	$f=$_POST['t7'];
	$f=ucwords($f);
	$g=$_POST['t8'];
	$h=$_POST['t9'];
	$h=ucwords($h);
	$i=$_POST['t10'];
	$j=$_POST['t11'];
	$j=ucwords($j);
	$k=$_POST['t12'];
	$l=$_POST['t4'];
	$m=$_POST['t3'];
	$m=ucwords($m);
// 	
// 	
// 	
// 	
	require("fpdf/fpdf.php");
	$pdf=new FPDF();
	$pdf->AddPage();
// 	
	$pdf->SetFont("Arial","B",20);
	
	$pdf->Cell(0,10,"PROJECT REPORT",0,1,'C');
	$pdf->Cell(0,10," ",0,1,'C');
	$pdf->Cell(0,10,"ON",0,1,'C');
	$pdf->Cell(0,10," ",0,1,'C');
	$pdf->Cell(0,10,"{$c}",0,1,'C');
	$pdf->SetFont("Arial","BU",20);
	$pdf->Cell(0,10,"{$a}",0,1,'C');
	$pdf->Image('images.jpg',65,80,80,60);
	$pdf->SetFont("Arial","B",10);
	$pdf->Cell(0,10," ",0,1,'C');
	$pdf->Cell(0,10," ",0,1,'C');
	$pdf->Cell(0,10," ",0,1,'C');
	$pdf->Cell(0,10," ",0,1,'C');
	$pdf->Cell(0,10," ",0,1,'C');
	$pdf->Cell(0,10," ",0,1,'C');
	$pdf->Cell(0,10," ",0,1,'C');
	$pdf->SetFont("Arial","BU",10);
	$pdf->Cell(0,10,"Submitted By",0,1,'C');
	$pdf->SetFont("Arial","",10);
	$pdf->Cell(0,10,"{$d}",0,1,'C');
	$pdf->Cell(0,10,"{$e}($l)",0,1,'C');
	$pdf->Cell(0,10,"{$f}",0,1,'C');
	$pdf->Cell(0,10,"{$g}($l)",0,1,'C');
	$pdf->Cell(0,10,"{$h}",0,1,'C');
	$pdf->Cell(0,10,"{$i}($l)",0,1,'C');
	if (!empty($_POST['t11'])) 
	{
	$pdf->Cell(0,10,"{$j}",0,1,'C');
	$pdf->Cell(0,10,"{$k}($l)",0,1,'C');
	}
	$pdf->SetFont("Arial","BU",10);
	$pdf->Cell(0,10,"Under The Able Guidance of",0,1,'C');
	$pdf->SetFont("Arial","",10);
	$pdf->Cell(0,10,"{$m}",0,1,'C');
	$pdf->Cell(0,10,"Computer Science Department",0,1,'C');
	
	$pdf->output();
// }




?>