<?php

    function linearSearch($haystack, $needle){
        foreach ($haystack as $index => $item) {
            if ($item === $needle){
                return $index;
            }
        }
        return -1;
    }

    $haystack = array(5, 45, 3, 56, 2, 6, 1, 10, 0);

    print(linearSearch($haystack, 10));