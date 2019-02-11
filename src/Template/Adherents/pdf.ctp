<?php

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

?>
    <div>
        <h2><?php echo "ALOAS" ?></h2>
        <h4 class="test"><?php echo "27 Route de Lent" . '<br>' . "01960 PERRONAS" ?></h4>
    </div>
<?php

foreach ($adh as $adherent) {
    foreach ($adherent->factures as $fact) {
        if ($fact->nom == $nameFact) {
            ?>
            <div>
                <h2 text-align="right"><?php echo $fact->nom; ?> </h2>
            </div>
            <?php
        }
    }
    ?>
    <h4 text-align="right"><?php echo $adherent->nom . " " . $adherent->prenom . '<br>' .
            $adherent->dateNaissance . '<br>' .
            $adherent->tel . '<br>' .
            $adherent->mail . '<br>' .
            "Licence n° " . $adherent->licence; ?></h4>
    <?php
}

?>
    <table border="1px">
        <tr>
            <th>Nom Activité</th>
            <th>Nombre de participations</th>
            <th>Prix unitaire HT</th>
            <th>Prix total HT</th>
        </tr>
    </table>
<?php
//Ecrire dans le pdf
$content = ob_get_clean();
try {
    $html2pdf = new Html2Pdf('P', 'A4', 'fr');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('forms.pdf');

} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}