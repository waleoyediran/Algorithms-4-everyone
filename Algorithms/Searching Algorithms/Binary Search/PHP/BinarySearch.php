<?php

    function binarySearch($haystack, $needle){
        $low = 0;
        $high = sizeof($haystack);

        while ($low <= $high){
            $mid = $low + (int)floor(($high - $low) / 2);
            if ($haystack[$mid] == $needle) {
                return $mid;
            } elseif ($haystack[$mid] < $needle) {
                $low = $mid + 1;
            } elseif ($haystack[$mid] > $needle) {
                $high = $mid - 1;
            }
        }
        return -1;
    }

    $haystack = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    print(binarySearch($haystack, 8));