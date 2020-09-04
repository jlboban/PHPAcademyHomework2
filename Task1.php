<?php

/*
Task1

Output given alphabet: 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z' in each row without commas. Number of rows equals number of letters in your name.
Each row will have one letter from your name bolded, starting from first letter and proceeding in order. Example tomislav, will have "t" bolded in first row, "o" in second, etc.
Each row will have one letter from your name underlined, starting from last letter and proceeding in reversed order. Example tomislav, will have "v" underlined in first row, "a" in second, etc.
Start with variable $name='yourname'; with your name assigned as string, and proceed to work with it until you get what you need.
See homework2_task1.png for wanted result.
Use loops to complete the task.
*/

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
