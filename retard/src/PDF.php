<?php
namespace App;


use TCPDF;


class PDF
{

    public function generatePDF($formData): TCPDF
    {
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 12);
        $pdf->SetFillColor(200, 200, 255); // Couleur de remplissage de la cellule (R, G, B)
        $pdf->Cell(0, 10, 'Justificatif de retard', 1, 1, 'C', true);


        $sujet = $formData['Sujet'];
        $nom = $formData['Nom'];
        $prenom = $formData['Prenom'];
        $nom_prenom = $prenom . ' ' . $nom;

        //convertir en string
        $choix = $formData['Choix'];

        $pdf->Cell(0,10,$sujet,0,1,'C');

        $pdf->Cell(0,10,$nom_prenom,0,10,$choix);










        return $pdf;
    }

}