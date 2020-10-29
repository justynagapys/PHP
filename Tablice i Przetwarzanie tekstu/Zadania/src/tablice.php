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

  ?>
<div>