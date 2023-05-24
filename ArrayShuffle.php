<?php

namespace Antikirra\ArrayShuffle;

final class ArrayShuffle
{
    /**
     * @param array $array
     * @param int $seed
     * @return array
     */
    public static function shuffle($array, $seed = 0)
    {
        if (empty($array)) {
            return [];
        }

        if ($seed !== 0) {
            sort($array);
            mt_srand($seed);
        }

        shuffle($array);

        if ($seed !== 0) {
            mt_srand();
        }

        return $array;
    }
}
