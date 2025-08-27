@props([
    'label',
    'id',
    'name' => $id,
    'placeholder' => '',
    'required' => false,
    'type' => 'text',
])

<fieldset class="{{ in_array($type, ['checkbox', 'radio']) ? "flex items-center gap-2" : "flex flex-col gap-2" }}">
    @switch($type)
        @case('radio')
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
            @break
        @case('checkbox')
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
            @break
        @case('textarea')
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
            @break
        @case('date')
            @pushOnce('scripts')
                <script>
                    function datePicker() {
                        return {
                            minDate: null,
                            maxDate: null,
                            selectedDate: '',
                            showCalendar: false,
                            
                            init() {
                                const minDate = new Date();
                                const maxDate = new Date(new Date().setDate(minDate.getDate() + 14));
                                
                                this.minDate = minDate.toISOString().slice(0,10);
                                this.maxDate = maxDate.toISOString().slice(0,10);
                            },

                            updateSelectedDate(date) {
                                this.selectedDate = date;
                                this.showCalendar = false;
                            }
                        }
                    }
                </script>
            @endPushOnce
            
            <div x-data="datePicker()" x-init="init()">
                <label for="{{ $id }}" class="text-body-small">
                    {{ $label }}
                    @if ($required)
                        <span class="text-red-500">*</span>
                    @endif
                </label>

                <input
                    x-model="selectedDate"
                    x-on:click="showCalendar = true"
                    {{
                        $attributes->merge([
                            'class' => 'w-full text-label-medium leading-6 bg-background-light text-foreground-tertiary rounded-2xl px-6 py-4 focus:outline-none focus:ring-2 focus:ring-highlight',
                            'name' => $name,
                            'id' => $id,
                            'required' => $required,
                            'type' => 'date',
                            'readonly' => true,
                        ])
                    }}
                />

                <div x-show="showCalendar" x-on:click.outside="showCalendar = false" class="relative">
                    <calendar-date
                        x-on:change="updateSelectedDate($event.target.value)"
                        class="absolute top-4 px-6 py-4 rounded-2xl bg-background"
                        x-bind:min="minDate"
                        x-bind:max="maxDate"
                    >
                        <i class="bx bx-chevron-left" slot="previous"></i>
                        <i class="bx bx-chevron-right" slot="next"></i>
                        <calendar-month></calendar-month>
                    </calendar-date>
                </div>
            </div>
            @break
        @default
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
    @endswitch
</fieldset>