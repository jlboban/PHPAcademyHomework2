<?php

// Output given alphabet: 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z' in each row without commas.
// Number of rows equals number of letters in an alphabet.
// Each next row will continue from next letter of alphabet (so that we can read alphabet when looking both horizontally and vertically).
// Once alphabet stops in a row it will start again, but only for number letters that need to match number of letters in the first line.
// Starting from 13th position (letter m), draw a snake like pattern that will bounce of edges.
// See homework2_task2.png for wanted result.
// Use loops to complete the task.

$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$alphabetArr = explode(',', $alphabet);

// 26, row length
$x = count($alphabetArr);
$m = 12;

// Row loop
for ($i = 0; $i < $x; $i++)
{
    // Alphabet loop
    for ($j = 0; $j < $x; $j++)
    {
        // $j + $i offsets alphabet on each row by 1 position
        if ($j + $i < $x)
        {
            if ($j + $i === $m)
            {
                echo "<b>", $alphabetArr[$j + $i], "</b>";
            }
            elseif($j + $m === $i)
            {
                echo "<b>", $alphabetArr[$j + $i], "</b>";
            }
            else
            {
                echo $alphabetArr[$j + $i];
            }
        }
        else
        {
            // Get number of missing letters to fill the row
            // Echo out missing positions
            $lettersToRowEnd = abs($x - $j - $i);

            if ($j + $m === $i)
            {
                echo "<b>", $alphabetArr[$lettersToRowEnd], "</b>";
            }
            else
            {
                echo $alphabetArr[$lettersToRowEnd];
            }
        }
    }

    echo "<br>";
}
