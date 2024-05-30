<div class="donationDetails__payments">
  <div class="payments">
    <div class="paymentsHeader">
      <div class="payments__title">
        <h4 class="donationDetails__heading">Total Donasi</h4>
      </div>
      <div class="payments__methods">
          <h4 class="donationDetails__heading">Rp{{ number_format($totalDonasi) }}</h4>
      </div>
    </div>
    <div class="paymentsCustoms">
      <div class="paymentsInput">
        <input class="paymentsCustoms__field" type="number" placeholder="Masukkan Jumlah Makanan" wire:model="porsi" wire:keyup="pilih">
      </div>
        <div class="payments__method">
          <input class="payments__input" id="pay4" type="radio" name="pay2" value="1" wire:model="porsi" wire:click="pilih">
          <label class="paymentsAmountChoice__label" for="pay4">1 Porsi</label>
        </div>
        <div class="payments__method">
          <input class="payments__input" id="pay5" type="radio" name="pay2" value="3" wire:model="porsi" wire:click="pilih">
          <label class="paymentsAmountChoice__label" for="pay5">3 Porsi</label>
        </div>
        <div class="payments__method">
          <input class="payments__input" id="pay6" type="radio" name="pay2" value="5" wire:model="porsi" wire:click="pilih">
          <label class="paymentsAmountChoice__label" for="pay6">5 Porsi</label>
        </div>
        <div class="payments__method">
          <input class="payments__input" id="pay7" type="radio" name="pay2" value="10" wire:model="porsi" wire:click="pilih">
          <label class="paymentsAmountChoice__label" for="pay7">10 Porsi</label>
        </div>
      </div>
  </div>
</div>
