<?php
require_once('UserSession.php');

// ito
require_once APPPATH . 'third_party\tcpdf_min\tcpdf.php';

defined('BASEPATH') OR exit('No direct access allowed');
class Planning extends UserSession{
    public function __construct(){
        parent::__construct();
        // ito
        date_default_timezone_set('Indian/Antananarivo');

    }

    public function pdf() {

        $planning = $_SESSION['planning'];
        
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Code pour générer le contenu du PDF
        $pdfContent = 'Contenu du PDF à afficher ici';


      $tableHtml = '<div class="container" style="width:100vw; border: 1px dotted #de8475 ; font-family:Arial; padding-right:20px; " >
      <table>
        <tr>
            <td >  </td>
            <td style=" font-size:35px; " > Votre <span style="color: #de8475 ;">menu</span>  </td>
            <td></td>
        </tr>
      </table>
      <table style="width: 100%;" >
      ';
      for(  $i = 0 ; $i != count( $planning ) ; $i++  ){

       $tableHtml .= '<tr>
          <td ><span class="" style="color: #4b2875 ; font-size:40px; font-weight: 50;" >Jour <span style="font-weight: 600;   font-size:45px;margin-left: 5px; " >'.($i + 1 ).' :</div>
          </span></td>
          <td></td>
          <td></td>
      </tr>
      <tr  style="min-height: 600px; ">
            <td  style="border-left: solid 1px #7e7c7d; border-right: solid 1px #7e7c7d; border-top:none;  border-bottom:1px dotted #de8475;  " >
                <div style="background-color: rgb(0, 255, 242); " >
                    PETI DEJEUNER
                </div>
                <div >
                    <span style="color:rgb(0, 255, 242); font-size: 20px; padding-left:10px; " class="bullet">&#8226;</span>'.  $planning[$i]['nom_plat_matin'] .'
                </div>
            </td>
            <td  style="border-left: solid 1px #7e7c7d; border-right: solid 1px #7e7c7d; border-top:none;  border-bottom:1px dotted #de8475;  " >
                <div style="background-color: rgb(225, 255, 0);" >
                    DEJEUNER
                </div>
                <div >
                    <span style="color:rgb(225, 255, 0); font-size: 20px; " class="bullet">&#8226;</span>'. $planning[$i]['nom_plat_midi'] .'
                </div>
            </td>
            <td  style="border-left: solid 1px #7e7c7d; border-right: solid 1px #7e7c7d; border-top:none;  border-bottom:1px dotted #de8475;  " >
                <div style="background-color: #de8475;" >
                    DINER
                </div>
                <div >
                    <span style="color:#de8475; font-size: 20px; " class="bullet">&#8226;</span>'. $planning[$i]['nom_plat_soir'] .'
                </div>
            </td>

        </tr>
        <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        </tr>
        
        ';
      }
      $tableHtml .= '
      </table>
      </div>';

      $tableHtml .= '
      <div class="sport" style="font-family:Arial;">
            <table style="width: 100%;" >
                <tr>
                    <td ></td>
                    <td style=" font-size:35px; " > Votre <span style="color: #de8475 ;"> activité sportive</span>  </td>
                </tr>';
      for( $i = 1 ; $i != 4 ; $i++ ){
        $tableHtml .= '   <tr>
                        <td><span style="color:rgb(0, 255, 242); font-size: 20px; " class="bullet">&#8226;</span> Pompes </td>
                        <td ></td>
                        <td ></td>
                    </tr>';
      }

        $tableHtml .= '
            <tr>
                <td><span style="color:rgb(225, 255, 0); font-size: 20px; " class="bullet">&#8226;</span>Fréqunce/semaine 3 fois </td>
                <td ></td>
                <td ></td>
            </tr>
            <tr>
            <td><span style="color:rgb(225, 255, 0); font-size: 20px; " class="bullet">&#8226;</span>  Durée d\'un exercice 2mn </td>
            <td ></td>
            <td ></td>
            </tr>
        
        </table>
        </div>
      ';
    

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('DIMPEX');
        $pdf->SetTitle('Progamme pour vous');
        $pdf->SetSubject('Sujet du PDF');
        $pdf->SetKeywords('Progamme pour vous');

        $dateAujourdhui = date('d-m-Y');

        $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Progamme pour vous', 'Date : '.$dateAujourdhui);
        $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->SetFont('helvetica', '', 12);

        $pdf->AddPage();

        // Écrire le contenu HTML du tableau dans le PDF
        $pdf->writeHTML($tableHtml, true, false, true, false, '');

        $pdf->Output(base_url() .'assets/docs/pdf/balance.pdf', 'I');
        $pdf->Output(base_url() .'assets/docs/pdf/balance.pdf', 'F');

    }

}