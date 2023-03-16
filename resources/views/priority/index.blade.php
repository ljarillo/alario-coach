<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 sm:px-6 lg:px-8">

                <x-heading
                    title="Prioridades"
                    description="Lista de Prioridades"
                    btn-label="Add Prioridades"
                    :route="route('priority.create')" />

                <div class="w-full overflow-hidden md:rounded-lg">
                    <livewire:table
                        resource="Priority"
                        :columns="[
                        ['label' => 'Plano','column' => 'plan_id'],
                        ['label' => 'Dia', 'column' => 'date'],
                        ['label' => 'Horário','column' => 'time'],
                        ['label' => 'Descrição','column' => 'description']
                    ]
                    "
                        edit="priority.edit"
                        delete="priority.destroy"
                    ></livewire:table>
                </div>

            </div>
        </div>
</x-app-layout>
