<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require 'core/pdfcrowd.php';

class Pdf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Automobili_model');
    }
   
    public function index($webpage){
       $this->createPdf($webpage);
    }
    
    public function createPdf($webpage) {
        try {
            // create an API client instance
            $client = new PdfCrowd("api", "apikey");

            // convert a web page and store the generated PDF into a $pdf variable
            $pdf = $client->convertURI($webpage);

            // set HTTP response headers
            header("Content-Type: application/pdf");
            header("Cache-Control: max-age=0");
            header("Accept-Ranges: none");
            header("Content-Disposition: attachment; filename=\"google_com.pdf\"");

            // send the generated PDF 
            echo $pdf;
        } catch (PdfcrowdException $why) {
            echo "Pdfcrowd Error: " . $why;
        }
    }

}