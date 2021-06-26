


use strict;
use warnings;

my $t= time;

open(my $f, "<resultados.csv") or die("no hay archivo");

my $match =   0;
my $nomatch=  0;

while(<$f>) {

#1957-09-25,Netherlands,Austria,1,1,FIFA World Cup qualification,Amsterdam,Netherlands,FALSE
  chomp;
  #if(m/^\d{4,4}\-02.*$/){

if(m/^([\d]{4,4})\-.*?,(.*?),(.*?),(\d+),(\d+),.*$/)
{
    $match++;

  if($3 < $4)
  {
    print $_."\n";

  }
  }

  else {
    $nomatch ++;
  }
}

close ($f);

print("se encontraron $match matches y $nomatch no matches \n");
