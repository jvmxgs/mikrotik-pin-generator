<?php

if (! function_exists('pin')) {
    function pin()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        list($usec, $sec) = explode(' ', microtime());
        $seed = $sec + $usec * 1000000;

        mt_srand($seed);

        $pin = substr(str_shuffle($characters), 1, 5);

        if (\App\Models\Pin::where('pin', $pin)->exists()) {
            $pin = pin();
        }

        return $pin;
    }
}
