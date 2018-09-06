<?php
function validate($X, $Y, $R)
{
    if (!is_numeric($X) || !in_array($X, array(-3, -2, -1, 0, 1, 2, 3, 4, 5)))
        return false;
    elseif (!is_numeric($Y) || $Y < -3 || $Y > 3) return false;
    elseif (!is_numeric($R) || !in_array($R, array(1, 1.5, 2, 2.5, 3))) return false;
    return true;
}

function checkBelonging($X, $Y, $R)
{
    if ($X > 0 & $Y > 0 & $Y < -$X + $R) return true;
    elseif ($X <= 0 & $Y >= 0 & $X != $Y & $X * $X + $Y * $Y < $R * $R / 4) return true;
    elseif ($X < 0 & $Y < 0 & $X > -$R & $Y > -$R / 2) return true;
    return false;
}