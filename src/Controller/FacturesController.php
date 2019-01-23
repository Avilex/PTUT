<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 19/12/2018
 * Time: 15:08
 */

namespace App\Controller;


use Spipu\Html2Pdf\Html2Pdf;

class FacturesController extends AppController
{

    public function test(){
            $html2pdf = new Html2Pdf();
            $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
            $html2pdf->output();
    }

}