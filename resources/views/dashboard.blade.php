<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Modal toggle -->
                <button data-modal-target="staticModal" data-modal-toggle="staticModal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Toggle modal
                </button>

                <!-- Main modal -->
                <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Static modal
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="staticModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                    With less than a month to go before the European Union enacts new consumer privacy
                                    laws for its citizens, companies around the world are updating their terms of
                                    service agreements to comply.
                                </p>
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect
                                    on May 25 and is meant to ensure a common set of data rights in the European Union.
                                    It requires organizations to notify users as soon as possible of high-risk data
                                    breaches that could personally affect them.
                                </p>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="staticModal" type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                    accept</button>
                                <button data-modal-hide="staticModal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6">
                    <label for="success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Your
                        name</label>
                    <input type="text" id="success"
                        class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                        placeholder="Success input">
                    <p class="mt-2 text-sm text-green-600 dark:text-green-500"><span class="font-medium">Well
                            done!</span> Some success message.</p>
                </div>
                <div class="p-6">
                    <label for="error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Your
                        name</label>
                    <input type="text" id="error"
                        class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"
                        placeholder="Error input">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>
                        Some error message.</p>
                </div>

            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                </div>
                <div class="p-6">
                    <x-input right-icon="user" label="Name" placeholder="your name" />
                    <x-input icon="user" right-icon="pencil" label="Name" placeholder="your name" />
                    <x-input class="!pl-[6.5rem]" label="Website" placeholder="your-website.com"
                        prefix="https://www." />
                    <x-input class="pr-28" label="Email" placeholder="your email" suffix="@mail.com" />
                    <x-input label="Name" placeholder="your name" class="pl-12">
                        <x-slot name="prepend">
                            <div class="absolute inset-y-0 left-0 flex items-center p-0.5">
                                <x-button class="h-full rounded-l-md" icon="sort-ascending" primary flat squared />
                            </div>
                        </x-slot>
                    </x-input>
                    <x-input label="Name" placeholder="your name">
                        <x-slot name="append">
                            <div class="absolute inset-y-0 right-0 flex items-center p-0.5">
                                <x-button class="h-full rounded-r-md" icon="sort-ascending" primary flat squared />
                            </div>
                        </x-slot>
                    </x-input>
                    <x-inputs.password label="Secret 🙈" value="I love WireUI ❤️" />
                    <x-inputs.number label="How many Burgers?" />
                    <x-textarea label="Comment" placeholder="Your comment" />
                    <x-native-select label="Select Status" :options="[
                        ['name' => 'Active', 'id' => 1],
                        ['name' => 'Pending', 'id' => 2],
                        ['name' => 'Stuck', 'id' => 3],
                        ['name' => 'Done', 'id' => 4],
                    ]" option-label="name" option-value="id"
                        wire:model.live="models" />
                    <x-native-select label="Select Status" wire:model="modeld">
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Stuck</option>
                        <option>Done</option>
                    </x-native-select>
                </div>
                <div class="p-6">
                    <x-select label="Select Status" placeholder="Select one status" :options="['Active', 'Pending', 'Stuck', 'Done']"
                        wire:model="model1" />
                    <x-select label="Select Statuses" placeholder="Select many statuses" multiselect :options="['Active', 'Pending', 'Stuck', 'Done']"
                        wire:model="model2" />
                    <x-select label="Select Relator" placeholder="Select relator" wire:model="model3">
                        <x-select.user-option src="https://via.placeholder.com/500" label="People 1"
                            value="1" />
                        <x-select.user-option src="https://via.placeholder.com/500" label="People 2"
                            value="2" />
                        <x-select.user-option src="https://via.placeholder.com/500" label="People 3"
                            value="3" />
                        <x-select.user-option src="https://via.placeholder.com/500" label="People 4"
                            value="4" />
                    </x-select>
                    <x-select label="Select Status" placeholder="Select one status" :options="[
                        ['name' => 'Active', 'id' => 1, 'description' => 'The status is active'],
                        ['name' => 'Pending', 'id' => 2, 'description' => 'The status is pending'],
                        ['name' => 'Stuck', 'id' => 3, 'description' => 'The status is stuck'],
                        ['name' => 'Done', 'id' => 4, 'description' => 'The status is done'],
                    ]"
                        option-label="name" option-value="id" wire:model="modelr" />
                    <x-color-picker label="Select a Color" placeholder="Select the book color" :colors="[
                        ['name' => 'White', 'value' => '#FFF'],
                        ['name' => 'Black', 'value' => '#000'],
                        ['name' => 'Teal', 'value' => '#14b8a6'],
                        ['name' => 'Slate', 'value' => '#64748b'],
                        ['name' => 'Red', 'value' => '#ef4444'],
                        ['name' => 'Lime', 'value' => '#a3e635'],
                        ['name' => 'Sky', 'value' => '#38bdf8'],
                        ['name' => 'Violet', 'value' => '#8b5cf6'],
                        ['name' => 'Pink', 'value' => '#8b5cf6'],
                        ['name' => 'Indigo', 'value' => '#6366f1'],
                    ]" />

                    <x-color-picker label="Select a Color" placeholder="Select the book color" :colors="[
                        '#FFF',
                        '#000',
                        '#14b8a6',
                        '#64748b',
                        '#ef4444',
                        '#a3e635',
                        '#38bdf8',
                        '#8b5cf6',
                        '#8b5cf6',
                        '#6366f1',
                    ]" />
                </div>
                <div class="p-6">
                    <x-button.circle icon="home" />
                    <x-button.circle primary icon="pencil" />
                    <x-button.circle secondary icon="clipboard-list" />
                    <x-button.circle positive icon="check" />
                    <x-button.circle negative icon="x" />
                    <x-button.circle warning icon="exclamation" />
                    <x-button.circle info icon="information-circle" />
                    <x-button.circle dark icon="ban" />
                    <x-button.circle secondary label="A" />
                    <x-button.circle positive label="B" />
                    <x-button.circle negative label="C" />
                    <x-button.circle primary label="+" />
                </div>
                <div class="p-6">
                    <x-button icon="home" label="Default" />
                    <x-button icon="pencil" primary label="Primary" />
                    <x-button icon="clipboard-list" secondary label="Secondary" />
                    <x-button icon="check" positive label="Positive" />
                    <x-button icon="x" negative label="Negative" />
                    <x-button icon="exclamation" warning label="Warning" />
                    <x-button right-icon="information-circle" info label="Info" />
                    <x-button right-icon="ban" dark label="Dark" />
                </div>
                <div class="p-6">
                    <x-button label="Default" />
                    <x-button primary label="Primary" />
                    <x-button secondary label="Secondary" />
                    <x-button positive label="Positive" />
                    <x-button negative label="Negative" />
                    <x-button warning label="Warning" />
                    <x-button info label="Info" />
                    <x-button dark label="Dark" />
                    <x-button white label="White" />
                    <x-button black label="Black" />
                    <x-button slate label="Slate" />
                    <x-button gray label="Gray" />
                    <x-button zinc label="Zinc" />
                    <x-button neutral label="Neutral" />
                    <x-button stone label="Stone" />
                    <x-button red label="Red" />
                    <x-button orange label="Orange" />
                    <x-button amber label="Amber" />
                    <x-button lime label="Lime" />
                    <x-button green label="Green" />
                    <x-button emerald label="Emerald" />
                    <x-button teal label="Teal" />
                    <x-button cyan label="Cyan" />
                    <x-button sky label="Sky" />
                    <x-button blue label="Blue" />
                    <x-button indigo label="Indigo" />
                    <x-button violet label="Violet" />
                    <x-button purple label="Purple" />
                    <x-button fuchsia label="Fuchsia" />
                    <x-button pink label="Pink" />
                    <x-button rose label="Rose" />
                </div>
                <div class="p-6">
                    <x-toggle left-label="Label in Left" wire:model="modeldg" />
                    <x-toggle label="Label in Right" wire:model="modelf" />
                    <x-toggle wire:model="modeln" />
                    <x-toggle md wire:model="modelnn" />
                    <x-toggle lg wire:model="modelm" />
                </div>
                <div class="p-6">
                    <x-checkbox id="left-label" left-label="Label in Left" wire:model.defer="model" />
                    <x-checkbox id="right-label" label="Label in Right" wire:model.defer="model" />
                    <x-checkbox id="sm" wire:model.defer="model" />
                    <x-checkbox id="md" md wire:model.defer="model" />
                    <x-checkbox id="lg" lg wire:model.defer="model" />
                </div>
                <div class="p-6">
                    <x-radio id="left-label" left-label="Label in Left" wire:model.defer="model" />
                    <x-radio id="right-label" label="Label in Right" wire:model.defer="model" />
                </div>
                <div class="p-6">
                    @livewire('user-table')
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
