<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Prioridades') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('priority.update', $priority->id) }}">
                @csrf
                @method('PUT')

                <x-text-input id="plan_id" class="block w-full mt-1" type="text" name="plan_id" :value="$priority->plan_id ?? old('plan_id')" required />

                <!-- Date -->
                <div>
                    <x-input-label for="date" :value="__('Dia')" />
                    <x-text-input id="date" class="block w-full mt-1" type="date" name="date" :value="$priority->date ?? old('date')" required autofocus />
                    <x-input-error :messages="$errors->get('start')" class="mt-2" />
                </div>

                <!-- Time -->
                <div>
                    <x-input-label for="time" :value="__('Horário')" />
                    <x-text-input id="time" class="block w-full mt-1" type="time" name="time" :value="$priority->time ?? old('time')" required />
                    <x-input-error :messages="$errors->get('time')" class="mt-2" />
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="description" :value="__('Descrição')" />
                    <x-text-input id="description" class="block w-full mt-1" type="text" name="description" :value="$priority->description ?? old('description')" required />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- Observation -->
                <div>
                    <x-input-label for="observation" :value="__('Observação')" />
                    <x-text-input id="observation" class="block w-full mt-1" type="text" name="observation" :value="$priority->observation ?? old('observation')" />
                    <x-input-error :messages="$errors->get('observation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
