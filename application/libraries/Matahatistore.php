<?php

class Matahatistore {
public static function membeli($items) {
$totalPrice = 0;

foreach ($items as $item) {
    $itemName = $item['nama'];
    $harga = $item['harga'];
    $itemQty = $item['banyak'];

switch ($itemName) {
    case 'Pakaian Anak':
        if ($itemQty >= 2) {
            $harga *= 0.8; 
        }
    break;
    case 'Pakaian Laki-laki Dewasa':
        if ($item['Member']) {
            $harga *= 0.65; 
        }
    break;
    case 'Pakaian Wanita Dewasa':
        $harga = max($harga, 0); 
    break;
}

$totalPrice += $harga * $itemQty;
}

return $totalPrice + (count($items) * 2000); 
}
}
?>