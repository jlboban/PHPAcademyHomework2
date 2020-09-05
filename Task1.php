<?php

$name = 'jure';
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';

$nameArr = str_split($name);
$reverseNameArr = array_reverse($nameArr);
$alphabetArr = explode(',', $alphabet);

// Row loop
for ($i=0; $i<count($nameArr); $i++)
{
    // Alphabet loop
    for ($j=0; $j<count($alphabetArr); $j++)
    {
        // Bold and underline
        if($alphabetArr[$j] === $nameArr[$i] && $alphabetArr[$j] === $reverseNameArr[$i])
        {
            echo "<b>", "<u>", $alphabetArr[$j], "</u>", "</b>";
        }
        // Bold
        elseif($alphabetArr[$j] === $nameArr[$i])
        {
            echo "<b>", $alphabetArr[$j], "</b>";
        }
        // Underline
        elseif($alphabetArr[$j] === $reverseNameArr[$i])
        {
            // Letter "j" doesn't have a visible underline on serif type fonts.
            echo "<u>", $alphabetArr[$j], "</u>";
        }
        // Regular
        else
        {
            echo $alphabetArr[$j];
        }
    }

    echo "<br>";
}
