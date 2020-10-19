<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Funkcje
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    function pierwszaFunkcja() {
      echo("Wiadomość z pierwszej funkcji.");
    }
    pierwszaFunkcja();

    echo '</br>';

    function funkcjaZArgumentami($imie, $nazwisko="Nowak"){
      echo("Hello $imie $nazwisko").'</br>';
    }
      funkcjaZArgumentami("Jan"); 
      funkcjaZArgumentami("Justyna", "Gapys");

    function funkcjaZReferencja(&$imie){
      $imie="Jan";
    }
    $imieDoReferencji = "Adam";
    funkcjaZReferencja($imieDoReferencji);
    echo("$imieDoReferencji zostało zmienione poprzez referencję do zmiennej.").'</br>'; 

    function funckjaZNieznanaLiczbaArgumentow(){
      $count =0;
      $tab = func_get_args();
      foreach($tab as $i){
        $count++;
      }
      echo $count.'</br>';
    }
    funckjaZNieznanaLiczbaArgumentow(2,6,9,4,5,9);
    funckjaZNieznanaLiczbaArgumentow(1,2,3,4,5,6,7,8,9,10);
  ?>
</div>