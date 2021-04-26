<div>
    <input wire:model="name" type="text">
    <input wire:model="checkbox" type="checkbox">
    <select wire:model="option" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>
    {{ implode(', ', $option )}} {{ $name }} @if($checkbox ==true) ! @endif
</div>
