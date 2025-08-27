@props([
    'label',
    'id',
    'name' => $id,
    'placeholder' => '',
    'required' => false,
    'type' => 'text',
])

<fieldset class="{{ in_array($type, ['checkbox', 'radio']) ? "flex items-center gap-2" : "flex flex-col gap-2" }}">
    @if (in_array($type, ["checkbox", "radio"]))
        <input
            {{
                $attributes->merge([
                    'class' => 'w-5 h-5 rounded accent-highlight focus:ring-highlight',
                    'type' => $type,
                    'name' => $name,
                    'id' => $id,
                    'value' => $label,
                    'required' => $required,
                ])
            }}
        />
        <label for="{{ $id }}" class="text-body-small">
            {{ $label }}
        </label>
    @elseif ($type === "textarea")
        <label for="{{ $id }}" class="text-body-small">
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
        <textarea
            {{ $attributes->merge([
                'class' => 'w-full text-label-medium leading-6 bg-background-light text-foreground-tertiary rounded-2xl px-6 py-4 focus:outline-none focus:ring-2 focus:ring-highlight min-h-[180px] resize-none',
                'name' => $name,
                'id' => $id,
                'placeholder' => $placeholder,
                'required' => $required,
            ]) }}>{{ $slot }}</textarea>
    @else
        <label for="{{ $id }}" class="text-body-small">
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
        <input
            {{ $attributes->merge([
                'class' => 'w-full text-label-medium leading-6 bg-background-light text-foreground-tertiary rounded-2xl px-6 py-4 focus:outline-none focus:ring-2 focus:ring-highlight',
                'type' => $type,
                'name' => $name,
                'id' => $id,
                'placeholder' => $placeholder,
                'required' => $required,
            ]) }}
        />
    @endif
</fieldset>