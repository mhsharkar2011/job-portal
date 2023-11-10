<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-slate-950">
                    <div class="content container-fluid">
                    <div class="d-flex">
                        <x-card count="{{ $totalResumes ?? '0' }}"     label="Total Resumes"        icon="fa-solid fa-truck-plane" />
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
