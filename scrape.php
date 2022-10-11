<?php
// Include Composer autoloader if not already done.
include 'vendor/autoload.php';
// Prep
$web = new \spekulatius\phpscraper;
// got from https://onyxonlinelearning.atlassian.net/wiki/spaces/PROJ/pages/674201611/Limosa+Dimona
$web->go('http://limosa.be/q.html?id=24911788404097061&1=010219310121&2=59412215334&3=MEEL+VAN&4=ADRIANUS&5=2&6=NL001315006B01&7=KAEFER+Nederland+B.V.&8=1&9=445887323');

//echo "This page contains " . count($web->paragraphs) . " paragraphs.\n\n";
// var_dump($web->unorderedLists);
// var_dump($web->orderedLists);
echo $web->filter("//*[@id='startDate']")->text();

