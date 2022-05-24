<?php
/**
 * @param String to be tested
 * @return Boolean to be return
 * ler a string
 * percorrer a string
 * ver se todo elemento que abre tem um 
 * elemento que fecha na ****ordem correta
 * 
 * 
 * Fazer um dicionario para valores de abertura e fechamento
 * para comparar se o cracter é de abertura ou fechamento e
 * se o seu anterior corresponde ao seu valor de abertura/fechamento
*/

$s = "{[]}";

class Solution {
    function isValid($s) {
        $valid = true;
        $stack;

        $open = [
            "(" => ")",
            "[" => "]",
            "{" => "}"
        ];

        $close = [
            ")" => "(",
            "]" => "[",
            "}" => "{"
        ];

        $arrayS = str_split($s);

        if(count($arrayS) % 2 == 0){
            for($i = 0; $i < count($arrayS); $i++) {
                $item = $arrayS[$i];
                if (array_key_exists($item, $open)) {
                    $stack[] = $item;
                }

                $lastItem = $stack[count($stack) - 1];

                if (array_key_exists($item, $close) && ($close[$item] == $lastItem)) {
                    $validated = array_pop($stack);
                }

            } 
            $c = count($stack); 
            if ($c == 0){
                $valid = true;
            } else {
                $valid = false;
            }

        } else {
            $valid = false;
        }
        return $valid;
        
    

    }
    
    
}


//$s = readline();

$solution = new Solution();
$output = $solution->isValid($s);

if($output) {
    echo "valid";
} else {
    echo "invalid";
}

?>
