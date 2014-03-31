<?php
/**
 * My own me-page to start with.
 */
include("config.php");


// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig själv</h1>

<a href="http://www.flickr.com/photos/mikaelroos/tags/me/">
<figure class="right top">
<img src="img/julia2.jpg">
</figure>
</a>

<p>
Mitt namn är Julia Sivartsson, jag är en tjej på 23 år som bor i Växjö. Jag har i många, många år varit intresserad
av webprogrammering, på gymnasiet gick jag IT-programmet där jag fick mig en relativt bra grund inom det.
Vi läste webdesign, programmering, databaser och mycket annat samt att jag har många timmar av kodning och design bakom mig
då jag spenderar det mesta av min fritid framför det.<br>
Jag arbetar just nu på DHL som terminalarbetare, men känner nu att jag måste göra något
med mitt liv, börja plugga till något som ger mig något. Så jag valde den här kursen
och redan har jag lärt mig jättemycket. <br>
Förhoppningsvis kommer jag hitta ett jobb inom yrket när jag är klar.
</p>

<p>
Det här med att plugga på distans fungerar bra för mig, visst är det jobbigt att
samtidigt arbeta 75% som jag gör nu, det blir inte mycket fritid över, men det är värt det känner jag.
Jag får ut så himla mycket av den här kursen och det är inte tråkiga timmar eftersom jag verkligen gillar att koda.
När jag väl har fritid så spenderar jag den främst framför serier och filmer. Men försöker även komma iväg och träna minst 3 ggr
i veckan, helst gym, men blir även lite zumba och löpning.<br>
Annars då, jaa, jag är en ganska lugn och sansad person, jag tänker efter innan jag pratar
vilket är en bra egenskap i många lägen, haha.
Är en fruktansvärt stor djurvän och har en liten skäggagam vid namn Alastair som roomate (eller ja,
han bor ju i ett terrarie).
</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 