<?php // src/functions.php

/**
 * Esa línea activa el modo de comprobación estricta de tipos (strict typing) en PHP.
Se coloca al principio del archivo y le dice al intérprete que debe respetar exactamente los tipos de datos indicados en las funciones.
 */
//declare(strict_types=1);

function media(int ...$nums): float
{
    $total = 0;
    $cantNum = count($nums);
    foreach ($nums as $n) {
        $total += $n;
    }
    return $cantNum > 0 ? $total / $cantNum : 0;
}

function potencia(int $base, int $exp): int
{
    return pow($base, $exp);
}

function esPar(int $num): bool
{
    return ($num % 2 == 0) ? "Sí" : "No";
}

function factorial(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException("n debe ser mayor o igual a 0");
    }
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
}

function crearLista(string ...$items): string
{
    $resultado = "<ol>";
    foreach ($items as $item) {
        $resultado .= "<li>" . $item . "</li>";
    }
    $resultado .= "</ol>";
    return $resultado;
}

