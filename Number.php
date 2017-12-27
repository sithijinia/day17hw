<?php
    class Number {
        public function getRange($firstNumber, $secondNumber, $type)
        {
            $result = array();

            if($type == 'all') {
                if($firstNumber > $secondNumber) {
                    while($firstNumber >= $secondNumber) {
                        array_push($result, $firstNumber);
                        $firstNumber--;
                    }
                } else {
                    while($firstNumber <= $secondNumber) {
                        array_push($result, $firstNumber);
                        $firstNumber++;
                    }
                }
            } else if($type == 'even') {
                if($firstNumber > $secondNumber) {
                    while($firstNumber >= $secondNumber) {
                        if($firstNumber%2 == 0) array_push($result, $firstNumber);
                        $firstNumber--;
                    }
                } else {
                    while($firstNumber <= $secondNumber) {
                        if($firstNumber%2 == 0)array_push($result, $firstNumber);
                        $firstNumber++;
                    }
                }
            } else if($type == 'odd') {
                if($firstNumber > $secondNumber) {
                    while($firstNumber >= $secondNumber) {
                        if($firstNumber%2 != 0) array_push($result, $firstNumber);
                        $firstNumber--;
                    }
                } else {
                    while($firstNumber <= $secondNumber) {
                        if($firstNumber%2 != 0) array_push($result, $firstNumber);
                        $firstNumber++;
                    }
                }
            }

            return $result;
        }
    }
?>