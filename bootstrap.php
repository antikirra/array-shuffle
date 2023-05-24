<?php

if (!function_exists('array_shuffle')) {
    /**
     * @param array $array
     * @param int $seed
     * @return array
     */
    function array_shuffle($array, $seed = 0)
    {
        return \Antikirra\ArrayShuffle\ArrayShuffle::shuffle($array, $seed);
    }
}
