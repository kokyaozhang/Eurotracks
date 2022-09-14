<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Identification number:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter ID no." wire:model="Identification_No">
                            @error('Identification_No') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Equipment Name:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Equipment Name" wire:model="Equipment_Name">
                            @error('Equipment_Name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                            <select wire:model="category" id="exampleFormControlInput3">
                                <option value="" selected>Choose Category</option>
                                <option value="Testing Equipment">Testing Equipment</option>
                                <option value="Measuring Equipment">Measuring Equipment</option>
                                <option value="Sampling Equipment">Sampling Equipment</option>
                                <option value="Machinery">Machinery</option>
                            </select>
                            @error('category') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput4" class="block text-gray-700 text-sm font-bold mb-2">Serial Number:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput4" placeholder="Enter Serial No" wire:model="Serial_No">
                            @error('Serial_No') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput5" class="block text-gray-700 text-sm font-bold mb-2">Software Version:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput5" placeholder="Enter Software Version" wire:model="Software_Version">
                            @error('Software_Version') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput6" class="block text-gray-700 text-sm font-bold mb-2">Manufacturer Name:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput6" placeholder="Enter Manufacturer Name:" wire:model="Manufacturer_Name">
                            @error('Manufacturer_Name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput7" class="block text-gray-700 text-sm font-bold mb-2">Supplier Name:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput7" placeholder="Enter Supplier Name:" wire:model="Supplier_Name">
                            @error('Supplier_Name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput30" class="block text-gray-700 text-sm font-bold mb-2">Supplier Contact:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput30" placeholder="Enter Supplier Contact:" wire:model="Supplier_Contact">
                            @error('Supplier_Contact') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput31" class="block text-gray-700 text-sm font-bold mb-2">Supplier Email:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput31" placeholder="Enter Supplier Email:" wire:model="Supplier_Email">
                            @error('Supplier_Email') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput8" class="block text-gray-700 text-sm font-bold mb-2">Classification:</label>
                            <select wire:model="classification" id="exampleFormControlInput8">
                                <option value="" selected>Choose classification</option>
                                <option value="Model">Model</option>
                                <option value="Type">Type</option>
                            </select>
                            @error('classification') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput9" class="block text-gray-700 text-sm font-bold mb-2">Date received:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput9" placeholder="Enter date received:" wire:model="date_received">
                            @error('date_received') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput10" class="block text-gray-700 text-sm font-bold mb-2">Service date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput10" placeholder="Enter service date:" wire:model="Service_date">
                            @error('Service_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput11" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput11" placeholder="Enter Location:" wire:model="Location">
                            @error('Location') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput12" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput12" placeholder="Enter Operation Section:" wire:model="Operation_Section">
                            @error('Operation_Section') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput13" class="block text-gray-700 text-sm font-bold mb-2">Manual Location:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput13" placeholder="Enter Manual Location:" wire:model="Manual_Location">
                            @error('Manual_Location') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput14" class="block text-gray-700 text-sm font-bold mb-2">Authorized User:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput14" placeholder="Enter Authorized User:" wire:model="Authorized_User">
                            @error('Authorized_User') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput15" class="block text-gray-700 text-sm font-bold mb-2">Equip limit:</label>
                            <select wire:model="equip_limit" id="exampleFormControlInput15">
                                <option value="" selected>Choose equip limit</option>
                                <option value="Limitation In Use">Limitation In Use</option>
                                <option value="Calibration Limit">Calibration Limit</option>
                            </select>
                            @error('equip_limit') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput16" class="block text-gray-700 text-sm font-bold mb-2">Enter Techinical Info:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput16" placeholder="Enter Technical Info:" wire:model="Technical_Info">
                            @error('Technical_Info') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput17" class="block text-gray-700 text-sm font-bold mb-2">Grouping</label>
                            <select wire:model="Grouping" id="exampleFormControlInput17">
                                <option value="" selected>Choose grouping</option>
                                <option value="Calibration">External Calibration</option>
                                <option value="Verification/QC check">Verification/QC check(Internal Calibration)</option>
                                <option value="Services/Maintenance">Services/Maintenance</option>
                            </select>
                            @error('Grouping') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput18" class="block text-gray-700 text-sm font-bold mb-2">Select Frequency:</label>
                            <select wire:model="Frequency" id="exampleFormControlInput18">
                                <option value="" selected>Choose Frequency</option>
                                <option value="Daily">Daily</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Quarterly">Quarterly</option>
                                <option value="Half Yearly">Half Yearly</option>
                                <option value="Yearly">Yearly</option>
                                <option value="Biennial">Biennial</option>
                                <option value="Upon Usage">Upon Usage</option>
                            </select>
                            @error('Frequency') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput19" class="block text-gray-700 text-sm font-bold mb-2">Executed By:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput19" placeholder="Enter Executor:" wire:model="Executor">
                            @error('Executor') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput20" class="block text-gray-700 text-sm font-bold mb-2">Registered by:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput20" placeholder="Enter Registrant:" wire:model="Registrant">
                            @error('Registrant') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput21" class="block text-gray-700 text-sm font-bold mb-2">Enter Registrant date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput21" placeholder="Enter registrant date:" wire:model="Registrant_date">
                            @error('Registrant_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput22" class="block text-gray-700 text-sm font-bold mb-2">Authorized by:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput22" placeholder="Enter Authorizer:" wire:model="Authorizer">
                            @error('Authorizer') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput23" class="block text-gray-700 text-sm font-bold mb-2">Select Date Authorized:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput23" placeholder="Select Date Authorized:" wire:model="Authorized_date">
                            @error('Authorized_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput24" class="block text-gray-700 text-sm font-bold mb-2">Select Declaration Type:</label>
                            <select wire:model="Declaration" id="exampleFormControlInput24">
                                <option value="" selected>Choose equip limit</option>
                                <option value="Write Off">Write Off</option>
                                <option value="Discontinue">Discontinue</option>
                                <option value="Transfer">Transfer</option>
                            </select>
                            @error('Declaration') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput25" class="block text-gray-700 text-sm font-bold mb-2">Select Declaration Date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput25" placeholder="Select Declaration date" wire:model="Declaration_date">
                            @error('Declaration_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput26" class="block text-gray-700 text-sm font-bold mb-2">Comments:</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput26" wire:model="Comment" placeholder="Enter Comments"></textarea>
                            @error('Comment') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput27" class="block text-gray-700 text-sm font-bold mb-2">Comment Approved by:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput27" placeholder="Enter Comment Approved:" wire:model="Comment_Approver">
                            @error('Comment_Approver') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput28" class="block text-gray-700 text-sm font-bold mb-2">Comment Approved Date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput28" placeholder="Comment Approval date" wire:model="Comment_Approval_date">
                            @error('Comment_Approval_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput29" class="block text-gray-700 text-sm font-bold mb-2">Notified_By:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput29" placeholder="Notified Person:" wire:model="Notified_By">
                            @error('Notified_by') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput24" class="block text-gray-700 text-sm font-bold mb-2">Select Status:</label>
                            <select wire:model="Status" id="exampleFormControlInput24">
                                <option value="Active" selected>Active</option>
                                <option value="Transfer">Transfer</option>
                                <option value="Obsolete">Obsolete</option>
                            </select>
                            @error('Status') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Save
          </button>
        </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

          <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
                </div>
            </form>


    </div>
</div>
</div>
