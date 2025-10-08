<?php
$punctaj=0;
$raspunsuri=['unu'=>'B', 'doi'=>'D', 'trei'=>'A'];
foreach ($raspunsuri as $x => $y) {
    if (isset($_POST[$x]) && $_POST[$x] === $y) {
        $punctaj++;
    }
}
echo "<h1> Rezultat </h1>";
echo "<h2>Ai răspuns corect la ".$punctaj." din 3 întrebări.</h2>";

?>