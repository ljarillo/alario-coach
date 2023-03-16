<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 sm:px-6 lg:px-8">

                <x-heading
                    title="Paciente"
                    description="Detalhes do Paciente"
{{--                    btn-label="Add Planejamento"--}}
{{--                    :route="route('plans.patient.create', $patient)" --}}
                />

                <div class="w-full overflow-hidden md:rounded-lg bg-gray-600">
                    <div class="p-4">
                        <p class="text-md text-gray-700 dark:text-gray-100">Nome: {{ $patient->name }}</p>
                        <p class="text-md text-gray-700 dark:text-gray-100">Email: {{ $patient->email }}</p>
                        <p class="text-md text-gray-700 dark:text-gray-100">Telefone: {{ $patient->phone }}</p>
                    </div>
                </div>

                <div class="mt-4 w-full overflow-hidden md:rounded-lg">
                    <livewire:table
                        resource="Plan"
                        reference="patient_id"
                        idreference='{{ $patient->id }}'
                        :columns="[
                        ['label' => 'Start', 'column' => 'start'],
                        ['label' => 'End','column' => 'end'],
                    ]"
                        edit="patients.edit"
                        delete="patients.destroy"
                    ></livewire:table>
                </div>

            </div>
        </div>
</x-app-layout>
