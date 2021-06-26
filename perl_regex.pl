


use strict;
use warnings;

my $t= time;

open(my $f, "<resultados.csv") or die("no hay archivo");

while(<$f>) {

  print $_;

}

close ($f);
