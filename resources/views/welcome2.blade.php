<?php
$judul ="ini adalah judul";
?>
<x-halaman-layout :title="$judul">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam voluptatum sequi voluptate, odio quod qui animi rerum corporis minima doloribus deleniti magnam cum exercitationem! Nobis voluptatibus error minima eligendi eveniet.

    </p>
    <x-slot name="tanggal"> 17 agustus </x-slot>
    <x-slot name="penulis"> yansu </x-slot>

</x-halaman-layout>