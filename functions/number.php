<?php

function number($amount)
{
    if ($amount == null || $amount == '') {
        return 0;
    } else {
        return number_format($amount, 0, '.', ' ');
    }
}

function remove_space($value)
{
    return str_replace(' ', '', $value);
}