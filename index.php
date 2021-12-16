<?php

function seculoAno(int $ano): string
{
    return 'Século ' . ceil($ano / 100);
}

echo seculoAno(1700);