<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    @php
        $timetableData = \App\Models\timetable::all(); // Отримати всі дані з таблиці timetable
    @endphp

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if (Auth::user()->role === 'admin')
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <h1>ADMIN</h1>
                        <form method="post" action="{{ route('records.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label for="date" :value="__('Date')"/>
                                <x-text-input id="date" class="block mt-1 w-full" type="text" name="date"
                                              :value="old('date')" required autofocus autocomplete="date"/>
                                <x-input-error :messages="$errors->get('date')" class="mt-2"/>
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('queue_1')"/>
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                              :value="old('name')" required autofocus autocomplete="name"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('queue_2')"/>
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                              :value="old('name')" required autofocus autocomplete="name"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('queue_3')"/>
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                              :value="old('name')" required autofocus autocomplete="name"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('queue_4')"/>
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                              :value="old('name')" required autofocus autocomplete="name"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>

                            <div class="flex items-center gap-4">
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">{{ __('Save') }}</button>

                                @if (session('status') === 'profile-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>


                            {{--                            <table>--}}
                            {{--                                <thead>--}}
                            {{--                                <tr>--}}
                            {{--                                    <th>Group</th>--}}
                            {{--                                    <th>Grafik</th>--}}
                            {{--                                </tr>--}}
                            {{--                                </thead>--}}
                            {{--                                <tbody>--}}
                            {{--                                @foreach($timetableData as $item)--}}
                            {{--                                    <tr>--}}
                            {{--                                        <div>--}}
                            {{--                                            <x-input-label for="name" :value="__('Grafik')" />--}}
                            {{--                                            <x-text-input id="date" name="date" type="text" class="mt-1 block w-full" :value="old('name', $item->date)" required autofocus autocomplete="date" />--}}
                            {{--                                            <x-input-error class="mt-2" :messages="$errors->get('date')" />--}}
                            {{--                                        </div>--}}
                            {{--                                                                                <td>{{ $item->group }}</td>--}}
                            {{--                                                                                <td>{{ $item->grafik }}</td>--}}
                            {{--                                    </tr>--}}
                            {{--                                @endforeach--}}
                            {{--                                </tbody>--}}
                            {{--                            </table>--}}

                            {{--                            <div class="flex items-center gap-4">--}}
                            {{--                                <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>--}}

                            {{--                                @if (session('status') === 'profile-updated')--}}
                            {{--                                    <p--}}
                            {{--                                        x-data="{ show: true }"--}}
                            {{--                                        x-show="show"--}}
                            {{--                                        x-transition--}}
                            {{--                                        x-init="setTimeout(() => show = false, 2000)"--}}
                            {{--                                        class="text-sm text-gray-600 dark:text-gray-400"--}}
                            {{--                                    >{{ __('Saved.') }}</p>--}}
                            {{--                                @endif--}}
                            {{--                            </div>--}}


                        </form>
                    </div>
                </div>
            @endif


        </div>
    </div>
</x-app-layout>
