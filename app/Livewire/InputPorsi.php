<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Makanan;

class InputPorsi extends Component
{
    // property dari class input porsi
    public $makanan;
    public $porsi = 0;
    public $totalDonasi = 0;

    // mengabil nilai dari view, dimana komponen ditempatkan
    public function mount(Makanan $makanan)
    {
        $this->makanan = $makanan; // memasukkan nilai kedalam variabel makanan.
    }

    public function render()
    {
        return view("livewire.input-porsi");
    }

    // fungsi ini diperuntukkan untuk mengupdate nilai dari totalDonasi, fungsi ini diaktifkan ketika input dilakukan oleh user pada komponen livewire
    public function pilih()
    {
        $this->totalDonasi = (int) $this->porsi * $this->makanan->harga; // mehintung nilai dari variabel totalDonasi, totalDonasi sama dengan jumlah porsi dikali harga makanan.
    }
}
