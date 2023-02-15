<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 sm:px-6 lg:px-8">

                <x-heading
                    title="Pacientes"
                    description="Lista de Pacientes"
                    btn-label="Add Paciente"
                    :route="route('patients.create')" />

                <div class="w-full overflow-hidden md:rounded-lg">
                    <livewire:table
                        resource="Patient"
                        :columns="[
                        ['label' => 'Patient', 'column' => 'name'],
                        ['label' => 'Email','column' => 'email'],
                        ['label' => 'Phone', 'column' => 'phone'],
                    ]
                    "
                        edit="patients.edit"
                        delete="patients.destroy"
                    ></livewire:table>
                </div>

            </div>
        </div>
</x-app-layout>
