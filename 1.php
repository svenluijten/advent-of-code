<?php foreach(str_split(file('i')[0])as$p=>$d)($f-=$d=='('?-1:1)>=0|$b?:$b=$p+1;echo"$f $b";

// All credit for this one goes to Leo Sjöberg (https://github.com/phroggyy), James (https://github.com/jaaaaaaaaaam)
// and Bas Hepping (https://github.com/mamorunl).
//
// file('i') requires a file called 'i' to be present in the directory, containing your input. You can get your input
// from http://adventofcode.com/day/1.