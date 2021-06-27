<?php
$file = fopen("resultados.csv","r");

$match   = 0;
$nomatch = 0;

$t = time();
while(!feof($file)) {

    $line=fgets($file);
  #  echo $line ;

#1957-09-25,Netherlands,Austria,1,1,FIFA World Cup qualification,Amsterdam,Netherlands,FALSE

    if(preg_match(
        '/^\d{4,4}.*,(.*?),(.*?),(\d+),(\d+),.*$/i',
        $line,
        $m
      )                           // if(preg_match(
                                  //   EXPRESION,
                                  //    $line,
                                  //    $m
                                  //
                                  //   )
      )
      {
      if($m[3] == $m[4]){
        echo "Empate   ";
      }
      elseif ($m[3] < $m[4]){
        echo "Visitante";
      }
      else {
        echo "Local     ";
      }
      print_r("\t$m[1], $m[2] ($m[3]-$m[4])\n");
      $match++;
      }
      else {
        $nomatch++;
        // echo $line;
        // echo "holi\n";

      }
}

fclose($file);
printf("\n %d match y %d no match\n", $match, $nomatch);
printf("tiempo: %d\n", time() - $t);
