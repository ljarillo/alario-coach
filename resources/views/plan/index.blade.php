<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 sm:px-6 lg:px-8">

                <x-heading
                    title="Planejamento"
                    description="Lista de Planejamentos"
                    btn-label="Add Planejamento"
                    :route="route('plan.create')" />

                <div class="w-full overflow-hidden md:rounded-lg">
                    <livewire:table
                        resource="Plan"
                        :columns="[
                        ['label' => 'Começo','column' => 'start'],
                        ['label' => 'Fim', 'column' => 'end'],
                        ['label' => 'Paciente','column' => 'patient_id'],
                    ]
                    "
                        edit="plan.edit"
                        delete="plan.destroy"
                    ></livewire:table>
                </div>

            </div>
        </div>
</x-app-layout>
