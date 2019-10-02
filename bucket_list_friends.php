<?php
echo 'Hoeveel vrienden zal ik vragen om hun droom?' . PHP_EOL;

$aantal = readline();

if (is_numeric($aantal));
elseif (!is_numeric($aantal)) {
    echo "$aantal" . ' is geen geldig getal!';
    exit;
}
echo "Je gaat $aantal vrienden vragen om hun droom" . PHP_EOL;
$action = array(["naam"],
                ["droom"]
            );
for ($o = 1; $o <= $aantal; $o++) {

    array_push($action["naam"]  = readline("Wat is jouw naam?" . PHP_EOL));
    array_push($action["droom"] = readline("Wat is jouw droom?" . PHP_EOL));
}
echo $action["naam"] . " heeft dit als droom: " . $action["droom"] . PHP_EOL;
