<?php
/**
 * This is a data pagecontroller.
 *
 */

// Include the essential config-file which also creates the $data variable with its defaults.
include(__DIR__.'/config.php');

// Do it and store it all in variables in the data container.
$data['title'] = "Redovisning";

// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"]))
{
    $p = $_GET["p"];
}

$h1 = null;
$mvc = "";

switch ($p) {
    case "mvc01":
        $h1 = "<h1>Redovisning mvc01</h1>";
        $mvc = "";
        break;

    case "mvc02":
        $h1 = "<h1>Redovisning mvc02</h1>";
        $mvc = "";
        break;

    case "mvc03":
        $h1 = "<h1>Redovisning mvc03</h1>";
        $mvc = "";
        break;
    case "mvc04":
        $h1 = "<h1>Redovisning mvc04</h1>";
        $mvc = "";
        break;
    case "mvc05":
        $h1 = "<h1>Redovisning mvc05</h1>";
        $mvc = "";
        break;
    case "mvc06":
        $h1 = "<h1>Redovisning mvc06</h1>";
        $mvc = "<h1>Redovisning mvc06</h1>";
        $mvc = "<p>

";
        break;

    case "mvc10":
        $h1 = "<h1>Redovisning Projektarbete</h1>";
        $mvc = "
";
        break;

    default:
        $h1 = "<h1>Redovisningar</h1>";
        $mvc = "Här kommer alla redovisningstexter från kursen att ligga, klicka helt enkelt på den lektion som du vill läsa om.";
}

$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<a href="?p=mvc01">mvc01</a>
<a href="?p=mvc02">mvc02</a>
<a href="?p=mvc03">mvc03</a>
<a href="?p=mvc04">mvc04</a>
<a href="?p=mvc05">mvc05</a>
<a href="?p=mvc06">mvc06</a>
<a href="?p=mvc10">Projekt</a>
$h1
$mvc
<p>
EOD;

?>

<?php
// Finally, leave it all to the rendering phase of data.
include(__DIR__."/theme/template.php");