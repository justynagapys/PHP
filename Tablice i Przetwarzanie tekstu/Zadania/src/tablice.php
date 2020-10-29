<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Tablice
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    $tablica = array("pierwszy", "drugi", "czwarty");
    echo $tablica[2];
    echo "</br>";

    foreach ($tablica as $wartosc){
      echo $wartosc, "</br>";
    }

    print_r($tablica);
    echo "</br>";

    echo count($tablica), '</br>';

    $nowaTablica = array("klucz1"=>"wartoscJakas", "klucz2"=>"lepszaWartosc");
    echo $nowaTablica["klucz2"], "</br>";

    $nowaTablica["klucz2"]="innaWartosc";
    echo $nowaTablica["klucz2"], "</br>";

    $reversed=array_reverse($nowaTablica);
    print_r($reversed);
    echo "</br>";

    function sprawdzCzyJest($wartoscSzukana, $tablica){
      if(in_array($wartoscSzukana, $tablica)){
        echo "jest", "</br>";
      } else{
      echo "nie ma", "</br>";
      }
    }

    sprawdzCzyJest("czwarty", $tablica);
    sprawdzCzyJest("piąty", $tablica);

    echo "</br>";

    $imiona = array("Jan", "Monika", "Dominik", "Patryk");
    natcasesort($imiona);
    print_r($imiona);
    echo "</br>";

    $tablicaLiczbowa = array(1, 2, 4, 9, 8, 7, 6);
    rsort($tablicaLiczbowa);
    print_r($tablicaLiczbowa);
    echo "</br>";
    shuffle($tablicaLiczbowa);
    print_r($tablicaLiczbowa);
    echo "</br>";

    echo "</br>";

    $owoce = array('a'=>'ananas', 'b'=>'banan', 'c'=>'cytryna');
    $warzywa = array('m'=>'marchew', 'z'=>'ziemniak');
    $market=array_merge($owoce, $warzywa);
    print_r($market);
    echo "</br>";

    $male = array('wszystkie', 'te', 'slowa', 'sa', 'wielkimi', 'literami');
    $duze = array_map("strtoupper",$male);
    print_r($duze);
    echo "</br>";

  ?>
<div>