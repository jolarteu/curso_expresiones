<?php
$file = fopen("resultados.csv","r");

$match   = 0;
$nomatch = 0;

while(!feof($file)) {

    $line=fgets($file);
  #  echo $line ;

    if(preg_match(

        '/^2018\-01\-(\d\d),.*$/',
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
        print_r($m);
        $match++;
      }
      else {
        $nomatch++;
      }
}

fclose($file);
printf("\n %d match y %d no match\n", $match, $nomatch);
