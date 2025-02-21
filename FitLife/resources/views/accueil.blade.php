<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Liste des créneaux</h3>

                @if ($creneauxes->isEmpty())
                    <p class="text-gray-500">Aucun créneau disponible pour le moment.</p>
                @else
                    <table class="w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-left">Cours</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Date</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Heure</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($creneauxes as $creneaux)
                                <tr class="border border-gray-300">
                                    <td class="border border-gray-300 px-4 py-2">{{ $creneaux->cour->name }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $creneaux->date_creneaux }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $creneaux->hour_creneaux }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $creneauxes->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
