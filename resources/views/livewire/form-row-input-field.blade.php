<div class="{{ $colSpan }}">
    <div class="form-group">
        <label for="{{ $id }}">{{ ucwords($label) }}:</label>
        <input type="{{ $type }}" class="form-control {{ $classes }}" id="{{ $id }}" wire:model.live="{{ $model }}">
        @error($id)
            <p class="error">{{ $message }}</p>
        @enderror
    </div>
</div>
