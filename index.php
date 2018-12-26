<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 22/12/2018
 * Time: 22:23
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <?php
    //exercice 1 :
    // ex: 22/10/2018
    echo date("d/m/Y");
    ?>
</div>
<div>
    <?php
    //exercice 2 :
    // ex: 22/10/18
    echo date("d/m/y");
    ?>
</div>
<div>
    <?php
    //zxercice 3 :
    // ex: samedi 22 decemnbre 2018
    // change le format de la langue en francais
    setlocale(LC_TIME,'french');
    //afiche la date en lettre
    echo strftime("%A %d %B %Y",time());
    ?>
</div>
<div>
    <?php
    //exercice 4:
    // on creer un nouvel objet date
    $date = new DateTime('2016-08-02 15:00');
// on demande le timestamp
    echo $date->getTimestamp();
    ?>
</div>
<div>
    <?php
    $date1 = time();
    $date2 = mktime(00,00,00,05, 16, 2016);
    $dateT =$date1 - $date2;
    echo $dateT/(60*60*24);
    ?>
</div>
<div>
    <?php
    $jours = cal_days_in_month(CAL_GREGORIAN,02,2016);
    echo "il y a ".$jours." jours dans le mois de fevrier 2016";
    ?>
</div>
<div>
    <?php
    echo date("d-m-Y", strtotime("+20 days"));
    ?>
</div>
<div>
    <?php
    echo date("d-m-Y", strtotime("-22 days"));
    ?>
</div>
<form method="get" action="index.php">
    <fieldset>
        <legend>calandrier</legend>
        <label for="mois">mois </label><select name="mois">
            <optgroup label="mois">
                <option value="01">Janvier</option>
                <option value="02">Fevrier</option>
                <option value="03">Mars</option>
                <option value="04">Avril</option>
                <option value="05">Mai</option>
                <option value="06">Juin</option>
                <option value="07">Juillet</option>
                <option value="08">Aout</option>
                <option value="09">Septembre</option>
                <option value="10">Octobre</option>
                <option value="11">Novembre</option>
                <option value="12">Decembre</option>
            </optgroup>
        </select>
        <label for="annee">année </label><input name="annee" type="number" min="1900" max="2100"  >
        <input type="submit">
    </fieldset>
</form>
</body>
<?php
$moisNum = $_GET["mois"];
$annee = $_GET["annee"];
$mois = ["Janvier","fevrier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];
$Amois =  $mois[$moisNum-1];



?>
<?php
if (isset($moisNum) && isset($annee)) {
    $nbjours = cal_days_in_month(CAL_GREGORIAN,$moisNum,$annee);
    ?>
    <div id="date">
        <?php
        echo $Amois . " " . $annee;
        ?>
    </div>
    <div id="nbMois">
        <div class="nb" id="nb1"></div>
        <div class="nb" id="nb2"></div>
        <div class="nb" id="nb3"></div>
        <div class="nb" id="nb4"></div>
        <div class="nb" id="nb5"></div>
        <div class="nb" id="nb6"></div>
        <div class="nb" id="nb7"></div>
        <div class="nb" id="nb8"></div>
        <div class="nb" id="nb9"></div>
        <div class="nb" id="nb10"></div>
        <div class="nb" id="nb11"></div>
        <div class="nb" id="nb12"></div>
        <div class="nb" id="nb13"></div>
        <div class="nb" id="nb14"></div>
        <div class="nb" id="nb15"></div>
        <div class="nb" id="nb16"></div>
        <div class="nb" id="nb17"></div>
        <div class="nb" id="nb18"></div>
        <div class="nb" id="nb19"></div>
        <div class="nb" id="nb20"></div>
        <div class="nb" id="nb21"></div>
        <div class="nb" id="nb22"></div>
        <div class="nb" id="nb23"></div>
        <div class="nb" id="nb24"></div>
        <div class="nb" id="nb25"></div>
        <div class="nb" id="nb26"></div>
        <div class="nb" id="nb27"></div>
        <div class="nb" id="nb28"></div>
        <div class="nb" id="nb29"></div>
        <div class="nb" id="nb30"></div>
        <div class="nb" id="nb31"></div>
    </div>
    <?php
}
?>

<script>
    var jMois = <?php echo json_encode($nbjours);?>;
    for (let i=1;i<=jMois;i++){
        document.getElementById("nb"+i).innerHTML = i;
    }
</script>
</html>


