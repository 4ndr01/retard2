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
        $image = '../public/image/signature.png';
        $x = 100; // Position horizontale
        $y = 100; // Position verticale
        $largeur = 100;
        $hauteur = 0;
        //convertir en string
        $choix = $formData['Excuses'];
        $choix2=$formData['Vos_excuses'];

        $pdf->Cell(0,10,$sujet,0,1,'C');


        $pdf->Cell(0,0,$nom_prenom);
        $pdf->writeHTML($choix,true,false,true,false,'');
        $pdf->writeHTML($choix2,true,false,true,false,'');
        $pdf->Image($image, $x, $y, $largeur, $hauteur);











        return $pdf;
    }

}