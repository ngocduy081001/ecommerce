<?php

function  generateCode($id, $str)
{

    if ($id < 10) {
        return $str . '000' . $id;
    }
    if ($id > 10 && $id < 100) {
        return $str. '00' . $id;
    }

    if ($id > 100 && $id < 1000) {
        return $str . '0'. $id;
    }
    return $str . $id;
}


