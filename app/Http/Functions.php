<?php

function getCountries()
{
    $countries = [
        'apu' => 'Argentina/Uruguay',
        'col' => 'Colombia',
        'chi' => 'Chile',
        'mex' => 'México',
        'br' => 'Brasil',
    ];
    return $countries;
}

function getCountry($id)
{
    $countries = [
        'apu' => 'Argentina/Uruguay',
        'col' => 'Colombia',
        'chi' => 'Chile',
        'mex' => 'México',
        'br' => 'Brasil',
    ];
    return $countries[$id];
}

function getRole($id)
{
    $roles=['2'=>'Usuario normal','1'=>'Administrador','0'=>'Administrador'];
    return $roles[$id];
}

function getStatus($value)
{
    $status = [
        'PUBLISHED' => 'Publicado',
        'DRAFT' => 'Borrador',
    ];
    return $status[$value];
}

function outP($text)
{
    $text = str_replace(array("<p>","</p>"), "", $text);
    return $text;
}