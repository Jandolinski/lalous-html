<?php
function asset($src)
{
    echo '../dist/img/temp/' . $src;
}

function dist($src)
{
    echo '../dist/' . $src;
}

function svg($src)
{
    echo file_get_contents('../dist/img/' . $src);
}
