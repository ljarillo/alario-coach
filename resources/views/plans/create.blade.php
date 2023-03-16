<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Planejamento') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('plans.store') }}">
                @csrf
                <x-text-input id="patient_id" class="block w-full mt-1" type="text" name="patient_id" :value="$patient->id" required />

                <!-- Date Start -->
                <div>
                    <x-input-label for="start" :value="__('Start')" />
                    <x-text-input id="start" class="block w-full mt-1" type="date" name="start" :value="old('start')" required autofocus />
                    <x-input-error :messages="$errors->get('start')" class="mt-2" />
                </div>

                <!-- Date end -->
                <div>
                    <x-input-label for="end" :value="__('End')" />
                    <x-text-input id="end" class="block w-full mt-1" type="date" name="end" :value="old('end')" required />
                    <x-input-error :messages="$errors->get('end')" class="mt-2" />
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
