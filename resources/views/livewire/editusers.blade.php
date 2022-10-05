<div>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            Edit user details

        </h2>

    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                @if (session()->has('message'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                    @if($isOpen)
                        @include('livewire.createedit')
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


                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <table class="w-full text-md bg-white shadow-md rounded">
                                <thead>
                                <tr class="border-b">
                                    <th class="text-left p-3 px-5">Name</th>
                                    <th class="text-left p-3 px-5">Email</th>
                                    <th class="text-left p-3 px-5">Team</th>

                                    <th class="text-left p-3 px-5">Role</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody >
                                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                @foreach($data as $row)

                                    {{--run function once per user id--}}





                                        <td class="p-3 px-5"><input type="text"  value="{{$row->username}}" class="bg-transparent" readonly></td>
                                        <td class="p-3 px-5" ><input type="text"  value="{{$row->email}}" class="bg-transparent" readonly></td>
                                        <td class="p-3 px-5">

                                            <select value="team" class="bg-transparent" >
                                                @if($row->name == 'Fieldwork')
                                                    <option value="1" selected>Fieldwork</option>
                                                    <option value="2">Labs(Micro)</option>
                                                    <option value="3">Labs(Chemistry)</option>
                                                @endif
                                                @if($row->name == 'Labs(Micro)')
                                                        <option value="1" >Fieldwork</option>
                                                        <option value="2" selected>Labs(Micro)</option>
                                                        <option value="3">Labs(Chemistry)</option>
                                                @endif
                                                    @if($row->name == 'Labs(Micro)')
                                                        <option value="1" >Fieldwork</option>
                                                        <option value="2">Labs(Micro)</option>
                                                        <option value="3" selected>Labs(Chemistry)</option>
                                                    @endif

                                            </select>

                                        </td>

                                        <td class="p-3 px-5">

                                                <select value="role" class="bg-transparent">
                                                    @if($row->role == 'management')
                                                        <option value="management" selected>management</option>
                                                        <option value="general">general</option>
                                                    @endif
                                                        @if($row->role == 'general')
                                                            <option value="management" >management</option>
                                                            <option value="general" selected>general</option>
                                                        @endif
                                                </select>

                                        </td>


                                    <td class="p-3 px-5 flex justify-end">
                                        <button type="button" wire:click="edit({{ $row->id }},{{ $row->user_id }},{{ $row->team_id }})" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                                        <button type="button" wire:click="delete({{ $row->id }},{{ $row->user_id }})" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>


            </div>


    </div>

</div>
