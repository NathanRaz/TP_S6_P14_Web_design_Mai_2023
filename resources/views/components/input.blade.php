@php
    $type ??= 'text';
    $name ??= '';
    $value ??= null;
    $label ??= ucfirst($name);
    $class ??= null;
	$multiple ??= false;
	$cols ??= 30;
	$rows ??= 10;
@endphp

<div @class(["form-group", $class])>
        <label  class="form-label" for="{{ $name}}">{{ $label }}</label>
        @if($type === 'textarea')
            <textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $name }}" cols="{{ $cols }}" rows="{{ $rows }}">{{ old($name, $value) }}</textarea>
        @else
            <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}"  id="{{ $name }}" name="{{ $name }}" value= "{{ old($name, $value) }}"
            @if($multiple) multiple @endif>
        @endif

    @error($name)
        <div class="invalid-feedback">
                {{ $message }}
        </div>
    @enderror
</div>


