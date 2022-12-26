<?php


        function plusMinus($arr)
        {
            // Write your code here

            $pos = [];
            $neg = [];
            $zeros = [];
            $ans = [];
            foreach ($arr as $key => $value) {
                if (is_numeric($value) && $value > 0) {
                    $pos[] = $value;
                } elseif ($value < 0) {
                    $neg[] = $value;
                } else {
                    $zeros[] = $value;
                }
            }
            $arrSize = count($arr);
            $posNo = count($pos);
            $negNo = count($neg);
            $zerosNo = count($zeros);
            dd(compact ('posNo', 'negNo', 'zerosNo'));

            $p = number_format($posNo / $arrSize,  $arrSize, '.', '');

            if (number_format($p, 1, '.', '')) {
                $ans[] = $p;
            }
            $ans[] = round($negNo / $arrSize,   $arrSize - 1);
            $ans[] = round($zerosNo / $arrSize,   $arrSize - 1);
            return implode(PHP_EOL, $ans);
        }
        $arr = [0, 0, -1, 1, 1];

        // $num = 0.5;
        // $formatted = number_format($num, 1, '.', '');

        // if ($formatted == $num) {
        //     dd("$num does not have extra zeros");
        // } else {
        //      dd("$num has extra zeros");
        // }

        dd(plusMinus($arr));
