<?php
 
$table = array(7, 3, 9, 6, 5, 1, 2, 0, 8, 4);
$leftHand = insertionSort($table);
var_dump($leftHand);
 
function insertionSort(array $table) {
    $leftHand = array();
    foreach ($table as $card) {
        if (0 === count($leftHand)) {
            $leftHand[] = $card;
        } else {
            $insertedCard = false;
            $reindexedLeftHand = array();
            for ($i = count($leftHand)-1; $i >= 0; –$i) {
                if ($card >= $leftHand[$i]) {
                    for ($j = 0; $j <= $i; ++$j) {
                        $reindexedLeftHand[$j] = $leftHand[$j];
                    }
                    $reindexedLeftHand[] = $card;
                    for ($j = $i+1; $j < count($leftHand); ++$j) {
                        $reindexedLeftHand[$j+1] = $leftHand[$j];
                    }
                    $insertedCard = true;
                    break;
                }
            }
            if (false === $insertedCard) {
                $reindexedLeftHand[] = $card;
                foreach ($leftHand as $cardInLeftHand) {
                    $reindexedLeftHand[] = $cardInLeftHand;
                }
            }
            $leftHand = $reindexedLeftHand;
        }
    }
    return $leftHand;
}
