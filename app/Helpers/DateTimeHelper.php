<?php

use Carbon\Carbon;

// dth = DateTimeHelper

function dth_date($date, $format = 'd.m.Y') : string
{
    return date($format, strtotime($date));
}
