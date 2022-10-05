<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​n

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        {{--split this form into three section--}}
                        <div class="flex">
                            <div class="flex-1 py-6 pl-1 overflow-hidden">
                                <svg class="inline align-text-top" height="24px" viewBox="0 0 28 28" width="24px" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g transform="scale(1.5)">
                                        <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>                                    </g>
                                </svg>
                                <h1 class="pl-1 inline align-text-top text-2xl font-semibold leading-none">In Stock Register</h1>
                            </div>
                        </div>

                            <div class="mb-4 flex">

                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Identification number:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter ID no." wire:model="Identification_No">
                            @error('Identification_No') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>


                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Equipment Name:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Equipment Name" wire:model="Equipment_Name">
                            @error('Equipment_Name') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                    </div>
                        <div class="mb-4 flex">
                        <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput3" class="block text-gray-700 text-sm w-full font-bold mb-2">Category:</label>
                            <select wire:model="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput3">
                                <option value="" selected>Choose Category</option>
                                <option value="Testing Equipment">Testing Equipment</option>
                                <option value="Measuring Equipment">Measuring Equipment</option>
                                <option value="Sampling Equipment">Sampling Equipment</option>
                                <option value="Machinery">Machinery</option>
                            </select>
                            @error('category') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput4" class="block text-gray-700 text-sm font-bold mb-2">Serial Number:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput4" placeholder="Enter Serial No" wire:model="Serial_No">
                            @error('Serial_No') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                                <label for="exampleFormControlInput5" class="block text-gray-700 text-sm font-bold mb-2">Software Version:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput5" placeholder="Enter Software Version" wire:model="Software_Version">
                                @error('Software_Version') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput6" class="block text-gray-700 text-sm font-bold mb-2">Manufacturer Name:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput6" placeholder="Enter Manufacturer Name:" wire:model="Manufacturer_Name">
                            @error('Manufacturer_Name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput7" class="block text-gray-700 text-sm font-bold mb-2">Supplier Name:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput7" placeholder="Enter Supplier Name:" wire:model="Supplier_Name">
                            @error('Supplier_Name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        </div>

                        <div class="mb-4 flex">

                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput8" class="block text-gray-700 text-sm font-bold mb-2">Classification:</label>
                            <select wire:model="classification" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput8">
                                <option value="" selected>Choose classification</option>
                                <option value="Model">Model</option>
                                <option value="Type">Type</option>
                            </select>
                            @error('classification') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput9" class="block text-gray-700 text-sm font-bold mb-2">Date received:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput9" placeholder="Enter date received:" wire:model="date_received">
                            @error('date_received') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput10" class="block text-gray-700 text-sm font-bold mb-2">Service date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput10" placeholder="Enter service date:" wire:model="Service_date">
                            @error('Service_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        </div>
                        <div class="flex">
                            <div class="flex-1 py-6 pl-1 overflow-hidden">
                                <svg class="inline align-text-top" height="24px" viewBox="0 0 28 28" width="24px" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g transform="scale(1.5)">
                                        <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                <h1 class="pl-1 inline align-text-top text-2xl font-semibold leading-none">Location</h1>
                            </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput11" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput11" placeholder="Enter Location:" wire:model="Location">
                            @error('Location') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput12" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput12" placeholder="Enter Operation Section:" wire:model="Operation_Section">
                            @error('Operation_Section') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput13" class="block text-gray-700 text-sm font-bold mb-2">Manual Location:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput13" placeholder="Enter Manual Location:" wire:model="Manual_Location">
                            @error('Manual_Location') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput14" class="block text-gray-700 text-sm font-bold mb-2">Authorized User:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput14" placeholder="Enter Authorized User:" wire:model="Authorized_User">
                            @error('Authorized_User') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">

                                    <label for="exampleFormControlInput14" class="block text-gray-700 text-sm font-bold mb-2">Equip Limit:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput14" placeholder="Enter equip limit:" wire:model="equip_limit">
                                    @error('equip_limit') <span class="text-red-500">{{ $message }}</span>@enderror

                        </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput16" class="block text-gray-700 text-sm font-bold mb-2">Enter Techinical Info:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput16" placeholder="Enter Technical Info:" wire:model="Technical_Info">
                            @error('Technical_Info') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex">
                            <div class="flex-1 py-6 pl-1 overflow-hidden">
                                <svg class="inline align-text-top" height="24px" viewBox="0 0 28 28" width="24px" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g transform="scale(1.5)">
                                        <path d="M6.176,7.241V6.78c0-0.221-0.181-0.402-0.402-0.402c-0.221,0-0.403,0.181-0.403,0.402v0.461C4.79,7.416,4.365,7.955,4.365,8.591c0,0.636,0.424,1.175,1.006,1.35v3.278c0,0.222,0.182,0.402,0.403,0.402c0.222,0,0.402-0.181,0.402-0.402V9.941c0.582-0.175,1.006-0.714,1.006-1.35C7.183,7.955,6.758,7.416,6.176,7.241 M5.774,9.195c-0.332,0-0.604-0.272-0.604-0.604c0-0.332,0.272-0.604,0.604-0.604c0.332,0,0.604,0.272,0.604,0.604C6.377,8.923,6.105,9.195,5.774,9.195 M10.402,10.058V6.78c0-0.221-0.181-0.402-0.402-0.402c-0.222,0-0.402,0.181-0.402,0.402v3.278c-0.582,0.175-1.006,0.714-1.006,1.35c0,0.637,0.424,1.175,1.006,1.351v0.461c0,0.222,0.181,0.402,0.402,0.402c0.221,0,0.402-0.181,0.402-0.402v-0.461c0.582-0.176,1.006-0.714,1.006-1.351C11.408,10.772,10.984,10.233,10.402,10.058M10,12.013c-0.333,0-0.604-0.272-0.604-0.604S9.667,10.805,10,10.805c0.332,0,0.604,0.271,0.604,0.604S10.332,12.013,10,12.013M14.629,8.448V6.78c0-0.221-0.182-0.402-0.403-0.402c-0.221,0-0.402,0.181-0.402,0.402v1.668c-0.581,0.175-1.006,0.714-1.006,1.35c0,0.636,0.425,1.176,1.006,1.351v2.07c0,0.222,0.182,0.402,0.402,0.402c0.222,0,0.403-0.181,0.403-0.402v-2.07c0.581-0.175,1.006-0.715,1.006-1.351C15.635,9.163,15.21,8.624,14.629,8.448 M14.226,10.402c-0.331,0-0.604-0.272-0.604-0.604c0-0.332,0.272-0.604,0.604-0.604c0.332,0,0.604,0.272,0.604,0.604C14.83,10.13,14.558,10.402,14.226,10.402 M17.647,3.962H2.353c-0.221,0-0.402,0.181-0.402,0.402v11.27c0,0.222,0.181,0.402,0.402,0.402h15.295c0.222,0,0.402-0.181,0.402-0.402V4.365C18.05,4.144,17.869,3.962,17.647,3.962 M17.245,15.232H2.755V4.768h14.49V15.232z"></path>
                                    </g>
                                </svg>
                                <h1 class="pl-1 inline align-text-top text-2xl font-semibold leading-none">Grouping</h1>
                            </div>
                        </div>
                        <div class="flex justify-left mb-4">

                            <ul class=" justify-items-center w-80 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">


                                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input name="Calibration" wire:model="Calibration" id="Calibration" type="checkbox" class="peer flex items-center pl-3 w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Calibration</label><br>

                                        <div class="p-2 flex justify-end invisible peer-checked:visible ">
                                            <select wire:model="Calib_date" id="selectBox" class="shadow appearance-none border rounded w-max py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                <option value="" selected>Frequency</option>
                                                <option value="Daily">Daily</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Quarterly">Quarterly</option>
                                                <option value="Half Yearly">Half Yearly</option>
                                                <option value="Yearly">Yearly</option>
                                                <option value="Biennial">Biennial</option>
                                                <option value="Upon Usage">Upon Usage</option>
                                            </select>
                                        </div>
                                        @error('Calib_date') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </li>
                                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input name="Preventive" wire:model="Preventive" id="Preventive" type="checkbox" class="peer flex items-center pl-3 w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Preventive</label><br>

                                        <div class="p-2 flex justify-end invisible peer-checked:visible ">
                                            <select wire:model="Preven_date" id="selectBox" class="shadow appearance-none border rounded w-max py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                <option value="" selected>Frequency</option>
                                                <option value="Daily">Daily</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Quarterly">Quarterly</option>
                                                <option value="Half Yearly">Half Yearly</option>
                                                <option value="Yearly">Yearly</option>
                                                <option value="Biennial">Biennial</option>
                                                <option value="Upon Usage">Upon Usage</option>
                                            </select>
                                        </div>
                                        @error('Preven_date') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </li>
                                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input name="Internal" wire:model="Internal" id="Internal" type="checkbox" class="peer flex items-center pl-3 w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Internal Service</label><br>

                                        <div class="p-2 flex justify-end invisible peer-checked:visible ">
                                            <select wire:model="Int_date" id="Int_date" class="shadow appearance-none border rounded w-max py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                <option value="" selected>Frequency</option>
                                                <option value="Daily">Daily</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Quarterly">Quarterly</option>
                                                <option value="Half Yearly">Half Yearly</option>
                                                <option value="Yearly">Yearly</option>
                                                <option value="Biennial">Biennial</option>
                                                <option value="Upon Usage">Upon Usage</option>
                                            </select>
                                        </div>
                                        @error('Int_date') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </li>
                                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input name="External" wire:model="External" id="External" type="checkbox" class="peer flex items-center pl-3 w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">External Service</label><br>

                                        <div class="p-2 flex justify-end invisible peer-checked:visible ">
                                            <select wire:model="Ext_date" id="Ext_date" class="shadow appearance-none border rounded w-max py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                <option value="" selected>Frequency</option>
                                                <option value="Daily">Daily</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Quarterly">Quarterly</option>
                                                <option value="Half Yearly">Half Yearly</option>
                                                <option value="Yearly">Yearly</option>
                                                <option value="Biennial">Biennial</option>
                                                <option value="Upon Usage">Upon Usage</option>
                                            </select>
                                        </div>
                                        @error('Ext_date') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </li>
                                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input name="Verification" wire:model="Verification" id="Verification" type="checkbox" class="peer flex items-center pl-3 w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Verification</label><br>

                                        <div class="p-2 flex justify-end invisible peer-checked:visible ">
                                            <select wire:model="Ver_date" id="Ver_date" class="shadow appearance-none border rounded w-max py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                <option value="" selected>Frequency</option>
                                                <option value="Daily">Daily</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Quarterly">Quarterly</option>
                                                <option value="Half Yearly">Half Yearly</option>
                                                <option value="Yearly">Yearly</option>
                                                <option value="Biennial">Biennial</option>
                                                <option value="Upon Usage">Upon Usage</option>
                                            </select>
                                        </div>
                                        @error('Ver_date') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="mb-4 flex">
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput19" class="block text-gray-700 text-sm font-bold mb-2">Calibration By:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput19" placeholder="Enter Calibration by:" wire:model="Calibration_by">
                            @error('Calibration_by') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput19" class="block text-gray-700 text-sm font-bold mb-2">Verification By:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput19" placeholder="Enter Verification by:" wire:model="Verification_by">
                            @error('Verification_by') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput19" class="block text-gray-700 text-sm font-bold mb-2">Service By:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput19" placeholder="Enter Service by:" wire:model="Service_by">
                            @error('Service_by') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput20" class="block text-gray-700 text-sm font-bold mb-2">Registered by:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput20" placeholder="Enter Registrant:" wire:model="Registrant">
                            @error('Registrant') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput21" class="block text-gray-700 text-sm font-bold mb-2">Enter Registrant date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput21" placeholder="Enter registrant date:" wire:model="Registrant_date">
                            @error('Registrant_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput22" class="block text-gray-700 text-sm font-bold mb-2">Authorized by:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput22" placeholder="Enter Authorizer:" wire:model="Authorizer">
                            @error('Authorizer') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput23" class="block text-gray-700 text-sm font-bold mb-2">Select Date Authorized:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput23" placeholder="Select Date Authorized:" wire:model="Authorized_date">
                            @error('Authorized_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        </div>
                        <div class="flex">
                            <div class="flex-1 py-6 pl-1 overflow-hidden">
                                <svg class="inline align-text-top" height="24px" viewBox="0 0 28 28" width="24px" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g transform="scale(1.5)">
                                        <path d="M8.627,7.885C8.499,8.388,7.873,8.101,8.13,8.177L4.12,7.143c-0.218-0.057-0.351-0.28-0.293-0.498c0.057-0.218,0.279-0.351,0.497-0.294l4.011,1.037C8.552,7.444,8.685,7.667,8.627,7.885 M8.334,10.123L4.323,9.086C4.105,9.031,3.883,9.162,3.826,9.38C3.769,9.598,3.901,9.82,4.12,9.877l4.01,1.037c-0.262-0.062,0.373,0.192,0.497-0.294C8.685,10.401,8.552,10.18,8.334,10.123 M7.131,12.507L4.323,11.78c-0.218-0.057-0.44,0.076-0.497,0.295c-0.057,0.218,0.075,0.439,0.293,0.495l2.809,0.726c-0.265-0.062,0.37,0.193,0.495-0.293C7.48,12.784,7.35,12.562,7.131,12.507M18.159,3.677v10.701c0,0.186-0.126,0.348-0.306,0.393l-7.755,1.948c-0.07,0.016-0.134,0.016-0.204,0l-7.748-1.948c-0.179-0.045-0.306-0.207-0.306-0.393V3.677c0-0.267,0.249-0.461,0.509-0.396l7.646,1.921l7.654-1.921C17.91,3.216,18.159,3.41,18.159,3.677 M9.589,5.939L2.656,4.203v9.857l6.933,1.737V5.939z M17.344,4.203l-6.939,1.736v9.859l6.939-1.737V4.203z M16.168,6.645c-0.058-0.218-0.279-0.351-0.498-0.294l-4.011,1.037c-0.218,0.057-0.351,0.28-0.293,0.498c0.128,0.503,0.755,0.216,0.498,0.292l4.009-1.034C16.092,7.085,16.225,6.863,16.168,6.645 M16.168,9.38c-0.058-0.218-0.279-0.349-0.498-0.294l-4.011,1.036c-0.218,0.057-0.351,0.279-0.293,0.498c0.124,0.486,0.759,0.232,0.498,0.294l4.009-1.037C16.092,9.82,16.225,9.598,16.168,9.38 M14.963,12.385c-0.055-0.219-0.276-0.35-0.495-0.294l-2.809,0.726c-0.218,0.056-0.351,0.279-0.293,0.496c0.127,0.506,0.755,0.218,0.498,0.293l2.807-0.723C14.89,12.825,15.021,12.603,14.963,12.385"></path>                                    </g>
                                </svg>
                                <h1 class="pl-1 inline align-text-top text-2xl font-semibold leading-none">Declaration</h1>
                            </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput24" class="block text-gray-700 text-sm font-bold mb-2">Select Declaration Type:</label>
                            <select wire:model="Declaration" id="exampleFormControlInput24" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="" selected>Choose equip limit</option>
                                <option value="Write Off">Write Off</option>
                                <option value="Discontinue">Discontinue</option>
                                <option value="Write Off">Active</option>
                                <option value="Transfer">Transfer</option>
                            </select>
                            @error('Declaration') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput25" class="block text-gray-700 text-sm font-bold mb-2">Select Declaration Date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput25" placeholder="Select Declaration date" wire:model="Declaration_date">
                            @error('Declaration_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        </div>
                        <div class="flex">
                            <div class="flex-1 py-6 pl-1 overflow-hidden">
                                <svg class="inline align-text-top" height="24px" viewBox="0 0 28 28" width="24px" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g transform="scale(1.5)">
                                        <path d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"></path>                               </g>
                                </svg>
                                <h1 class="pl-1 inline align-text-top text-2xl font-semibold leading-none">Comments</h1>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput26" class="block text-gray-700 text-sm font-bold mb-2">Comments:</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput26" wire:model="Comment" placeholder="Enter Comments"></textarea>
                            @error('Comment') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4 flex">
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput27" class="block text-gray-700 text-sm font-bold mb-2">Comment Approved by:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput27" placeholder="Enter Comment Approved:" wire:model="Comment_Approver">
                            @error('Comment_Approver') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput28" class="block text-gray-700 text-sm font-bold mb-2">Comment Approved Date:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput28" placeholder="Comment Approval date" wire:model="Comment_Approval_date">
                            @error('Comment_Approval_date') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput29" class="block text-gray-700 text-sm font-bold mb-2">Notified_By:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput29" placeholder="Notified Person:" wire:model="Notified_By">
                            @error('Notified_by') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                            <div class="flex-grow w-1/3 pr-2">
                            <label for="exampleFormControlInput24" class="block text-gray-700 text-sm font-bold mb-2">Select Status:</label>
                            <select wire:model="Status" id="exampleFormControlInput24"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="Active" selected>Active</option>
                                <option value="Transfer">Transfer</option>
                                <option value="Obsolete">Obsolete</option>
                            </select>
                            </div>
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
