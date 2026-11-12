<?php





$operator = (int) readline("podaj operator: 1=dodawanie, 2=odejmowanie, 3=mnożenie, 4=dzielenie, 5=potęgowanie, 6 = silnia,7=całościowe: ");

if ($operator ==7){
    $prompt = (string) readline("podaj prompt:  ");
echo calculateBasicMath($prompt);   
} else {
    calculate($operator) ;
}

function calculateBasicMath(string $prompt): int|float {

    $sanitized = preg_replace('/[^0-9+\-*\/().]/', '', $prompt);

    if ($sanitized === '') {
        return 0;
    }

    return eval("return {$sanitized};");
}

 

function calculate(int $operator) {
    switch ($operator) {
        case 1:
            $a = (float) readline("Podaj pierwszą liczbę: ");
            $b = (float) readline("Podaj drugą liczbę: ");

            return $a + $b;
        case 2:
            $a = (float) readline("Podaj pierwszą liczbę: ");
            $b = (float) readline("Podaj drugą liczbę: ");
            return $a - $b;
        case 3:
            $a = (float) readline("Podaj pierwszą liczbę: ");
            $b = (float) readline("Podaj drugą liczbę: ");
            return $a * $b;
        case 4:
            $a = (float) readline("Podaj pierwszą liczbę: ");
            $b = (float) readline("Podaj drugą liczbę: ");
            return $a / $b;
        case 5:
            $a = (float) readline("Podaj pierwszą liczbę: ");
            $b = (float) readline("Podaj drugą liczbę: ");
            return $a ** $b;
        case 6:
            $a = (float) readline("Podaj liczbę dla silnii: ");
            if ($a < 0) {
                return "Silnia nie jest zdefiniowana dla liczb ujemnych!";
            } else {
                for ($i = 1; $i <= $a; $i++) {
                    $a *= $i;
                }
                return $a;
            }
        default:
            return "Nieprawidłowy operator!";
    }
}



































?>