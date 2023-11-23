<?php
defined('BASEPATH') or exit('No direcr script access allowed');


class Hitungmatahatistore extends CI_Controller
{
    function __construct()
    {
       parent::__construct();
       $this->load->library('Matahatistore');
    }
    function index()
    {
        $items1 = [ ['nama' => 'Pakaian Anak', 'harga' => 100000, 'banyak' => 2],
    ];

    $items2 = [
        ['nama' => 'Pakaian Laki-laki Dewasa', 'harga' => 120000, 'banyak' => 7, 'Member' => false],
        ['nama' => 'Pakaian Laki-laki Dewasa', 'harga' => 200000, 'banyak' => 5, 'Member' => true],
    ];

    $items3 = [
        ['nama' => 'Pakaian Wanita Dewasa', 'harga' => 80000, 'banyak' => 2],
    ];

    $totalbarang1 = Matahatistore::membeli($items1);
    $totalbarang2 = Matahatistore::membeli($items2);
    $totalbarang3 = Matahatistore::membeli($items3);

    echo "Dita membeli dua helai pakaian anak dengan total Rp.150.000, maka berapa total harga yang harus Dita bayar? Total Harga: Rp. " . $totalbarang1 . "<br>";
    echo "Toni membeli pakaian laki laki dewasa dengan total Rp.350.000 , maka berapa total harga yang harus Toni bayar? Total Harga: Rp. " . $totalbarang2 . "<br>";
    echo "Intan membeli pakaian wanita dewasa dan menggunakan kantong belanjaan, maka berapa total harga yang harus Intan bayar? Total Harga: Rp. " . $totalbarang3;
}
}

?>