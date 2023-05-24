<?php

namespace Antikirra;

if (!function_exists('Antikirra\array_shuffle')) {
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
