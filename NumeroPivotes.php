<?php
function NumerosPivotes()
{
    $pivote = 0;
    $i = 0;
    $arrayPivotes=[];
    do {
        $k=1;
        // echo"--------------------------------- <br>";
        $i++;
        echo "Iteracion: $i <br>";
        $predecesores = 0;
        $sucesores = 0;
        for ($j = 0; $j < $i; $j++) {
            $predecesores += $j;
        }
        echo "Suma predecesores dio : $predecesores <br>";

        if($sucesores<$predecesores){
            $sucesores=$i+1;
            while($sucesores<$predecesores){
                $k++;
                $sucesores+=$i+$k;
            }
            if($sucesores==$predecesores){
                echo "Pivote: ".($i)." <br>";
                echo "Numero maximo sucesor: ".($i+$k)."<br>";
                $pivote+=1;
                array_push($arrayPivotes,$i);
            }
        }
        // echo $i;
        echo "Suma sucesores: $sucesores <br>";
        echo"--------------------------------------------------------------------- <br>";
    } while ($pivote<10);
    return  print_r($arrayPivotes);
}

NumerosPivotes();
?>
