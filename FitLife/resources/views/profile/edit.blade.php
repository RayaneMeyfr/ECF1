<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-2xl">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Réservations</h2>
                    
                    @if ($user->creneauxes->isEmpty())
                        <p class="text-gray-500 text-center">Aucune réservation disponible pour le moment.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="w-full border border-gray-200 rounded-lg shadow-sm">
                                <thead class="bg-gray-100 text-gray-700">
                                    <tr>
                                        <th class="border border-gray-300 px-6 py-3 text-left">Cours</th>
                                        <th class="border border-gray-300 px-6 py-3 text-left">Date</th>
                                        <th class="border border-gray-300 px-6 py-3 text-left">Heure</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-800">
                                    @foreach ($user->creneauxes as $creneaux)
                                        <tr class="border border-gray-300 hover:bg-gray-50">
                                            <td class="border border-gray-300 px-6 py-3">{{ $creneaux->cour->name }}</td>
                                            <td class="border border-gray-300 px-6 py-3">{{ \Carbon\Carbon::parse($creneaux->date_creneaux)->format('d/m/Y') }}</td>
                                            <td class="border border-gray-300 px-6 py-3">{{ \Carbon\Carbon::parse($creneaux->hour_creneaux)->format('H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
