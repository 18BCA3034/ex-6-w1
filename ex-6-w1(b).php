<?php
echo 'Experement 6 (b)<br>';
class Sort{
    function __construct($arr) {
        sort($arr);
        print_r($arr);// given array is sorted and printed while creating instance of class
    }
}
$values = array(11, -2, 4, 35, 0, 8, -9);
new Sort($values); // creating new instance of class and passing unsorted array