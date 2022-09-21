<div>
<x-slot name="header">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        @switch(Request::segment(2))
            @case(1)
                Register New Field Assets
                @break

            @case(2)
                Register New Field Equipments
                @break
            @case(3)
                Register New Field Models
                @break
            @case(4)
                Register New Lab Assets
                @break
            @case(5)
                Register New Lab Equipments
                @break
            @case(6)
                Register New Lab Models
                @break

            @default
               Header not define
        @endswitch

    </h2>

</x-slot>
<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
                @if($errors->any())
                        <?php $count = 0; ?>
                    @foreach ($errors->all() as $error)
                        @if($count < 5)
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                            <div class="flex">
                                <div>

                                        <p class="text-sm">{{ $error }}</p>



                                </div>
                            </div>
                        </div>
                        @endif
                            <?php $count++; ?>
                    @endforeach
                @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Register New Equipments</button>
            @if($isOpen)
                @include('livewire.createfieldequip')
            @endif
                <button wire:click="createimp()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded my-3">Import Excel File</button>
                @if($isimpOpen)
                    @include('livewire.creteimp')
                @endif
                <button wire:click="toexport()" class="bg-fuchsia-600 hover:bg-fuchsia-800 text-white font-bold py-2 px-4 rounded my-3">Export Excel File</button>

                <table class="table-auto w-full">
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 w-30">Identification No</th>
                    <th class="px-4 py-2">Equipment Name</th>
                    <th class="px-2 py-2">Premise</th>
                    <th class="px-4 py-2">Interval</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-6 py-2">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fieldequips as $fieldequip)
                    <tr>
                        <td class="border px-4 py-2" >{{ $fieldequip->Identification_No }}</td>
                        <td class="border px-4 py-2">{{ $fieldequip->Equipment_Name }}</td>
                        <td class="border px-4 py-2">{{ $fieldequip->Location }}</td>
                        <td class="border px-4 py-2">{{ $fieldequip->Frequency }}</td>
                        <td class="border px-4 py-2">{{ $fieldequip->Status }}</td>
                        <td class="border px-6 py-2">
                            <button wire:click="edit('{{ $fieldequip->Identification_No }}')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button  wire:click="toreport('{{ $fieldequip->Identification_No }}')"  class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</button>
                            <button wire:click="delete('{{ $fieldequip->Identification_No }}')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>
</div>
