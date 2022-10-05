


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eurofins report generation</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
<div class="flex items-center justify-center min-h-screen bg-gray-100 print:w-[full]]">
    <div class="w-3/5 bg-white shadow-lg print:w-[full]]">
        <div class="flex justify-between p-4">
            <div>
                <img
                    alt="Eurofins"
                    class="object-cover"
                    src="{{url('/images/logo.png')}}"
                />


            </div>
            <div class="p-2">
                <ul class="flex">
                    <li class="flex flex-col items-center p-2 border-l-2 border-indigo-200">
                         <span class="text-xl italic font-extrabold tracking-widest text-blue-800">
                                    Version 3.1
                                </span>
                        @foreach($reports as $report)
                        <span class="text-sm">
                                    Last updated at: {{$report->updated_at}}
                                </span>
                        @endforeach

                    </li>
                    <li class="flex flex-col p-2 border-l-2 border-indigo-200">
                        @foreach($reports as $report)

                         <span class="text-xl italic font-extrabold tracking-widest text-blue-800">
                                    Created at: {{$report->created_at->toDateString()}}
                                </span>
                            @endforeach
                        <span class="text-sm">
                                   By: {{'Mr. Alex'}}
                                </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full h-0.5 bg-indigo-500"></div>
        <span class="px-4 text-sm font-bold ">A. In stock Register</span>
        <div class="mb-2 w-full h-0.5 bg-indigo-500"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Category</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
            <span class="-px-8 text-base font-bold col-span-4">{{$report->category}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Equipment Name</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
            <span class="-px-8 text-base font-bold col-span-4">{{$report->Equipment_Name}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Classification</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->classification}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Identification number</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{session()->get('idno')}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Serial number</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->Serial_No}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Software version</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->Software_Version}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Manufacturer name</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->Manufacturer_Name}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Supplier name</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->Supplier_Name}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        <div class="grid grid-cols-2 gap-3">
            <div class="grid grid-cols-12 gap-0 content-evenly">
                <span class="px-4 text-base font-bold col-span-5">Supplier Contact</span>
                <span class="-px-4 text-base font-bold col-span-1">:</span>
                @foreach($reports as $report)
                    <span class="-px-8 text-base font-bold col-span-6">{{$report->Supplier_Contact}}</span>
                @endforeach
            </div>
            <div class="grid grid-cols-12 gap-0 content-evenly">
                <span class="px-4 text-base font-bold col-span-6">Supplier email</span>
                <span class="-px-4 text-base font-bold col-span-1">:</span>
                @foreach($reports as $report)
                    <span class="-px-8 text-base font-bold col-span-5">{{$report->Supplier_Email}}</span>
                @endforeach
            </div>
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        <div class="grid grid-cols-2 gap-3">
            <div class="grid grid-cols-12 gap-0 content-evenly">
                <span class="px-4 text-base font-bold col-span-5">Date Received</span>
                <span class="-px-4 text-base font-bold col-span-1">:</span>
                @foreach($reports as $report)
                    <span class="-px-8 text-base font-bold col-span-6">{{$report->date_received}}</span>
                @endforeach
            </div>
            <div class="grid grid-cols-12 gap-0 content-evenly">
                <span class="px-4 text-base font-bold col-span-6">Date put into services</span>
                <span class="-px-4 text-base font-bold col-span-1">:</span>
                @foreach($reports as $report)
                    <span class="-px-8 text-base font-bold col-span-5">{{$report->Service_date}}</span>
                @endforeach
            </div>
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        <div class="grid grid-cols-2 gap-3">
            <div class="grid grid-cols-12 gap-0 content-evenly">
                <span class="px-4 text-base font-bold col-span-5">Normal Location</span>
                <span class="-px-4 text-base font-bold col-span-1">:</span>
                @foreach($reports as $report)
                    <span class="-px-8 text-base font-bold col-span-6">{{$report->Location}}</span>
                @endforeach
            </div>
            <div class="grid grid-cols-12 gap-0 content-evenly">
                <span class="px-4 text-base font-bold col-span-6">Operational Section</span>
                <span class="-px-4 text-base font-bold col-span-1">:</span>
                @foreach($reports as $report)
                    <span class="-px-8 text-base font-bold col-span-5">{{$report->Operation_Section}}</span>
                @endforeach
            </div>
        </div>
        <div class=" w-full h-0.5 bg-gray-800"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Location of Operating Instruction Manual</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->Manual_Location}}</span>
            @endforeach
        </div>
        <div class="w-full h-0.5 bg-gray-800 content-around"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Authorized User For Equipment/Machinery</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->Authorized_User}}</span>
            @endforeach
        </div>
        <div class="w-full h-0.5 bg-gray-800 content-around"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Limitation In Use or Calibration Limit</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->equip_limit}}</span>
            @endforeach
        </div>
        <div class="w-full h-0.5 bg-gray-800 content-around"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Other Relevant Technical Information</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->Technical_Info}}</span>
            @endforeach
        </div>



        <div class="w-full h-0.5 bg-gray-800 content-around"></div>

        <div class="grid grid-cols-12 gap-0 content-evenly">

            @if($report->Calibration==1)

                @foreach($reports as $report)
        <span class="text-base text-center font-bold col-span-12">Calibration</span>
                @endforeach

            @endif
        </div>
        @if($report->Calibration==1)
            <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif

        <div class="grid grid-cols-2 gap-3">
            @if($report->Calibration==1)
            <div class="grid grid-cols-12 gap-0 content-evenly">
                <span class="px-4 text-base font-bold col-span-5">Frequency</span>
                <span class="-px-4 text-base font-bold col-span-1">:</span>
                @foreach($reports as $report)
                    <span class="-px-8 text-base font-bold col-span-6">{{$report->Calib_date}}</span>
                @endforeach
            </div>
            <div class="grid grid-cols-12 gap-0 content-evenly">
                @foreach($reports as $report)
                <span class="px-4 text-base font-bold col-span-6">Calibration by</span>
                @endforeach
                <span class="-px-4 text-base font-bold col-span-1">:</span>
                @foreach($reports as $report)
                    <span class="-px-8 text-base font-bold col-span-5">{{$report->Calibration_by}}</span>
                @endforeach
            </div>
            @endif

        </div>
        @if($report->Calibration==1)
            <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif
        <div class="grid grid-cols-12 gap-0 content-evenly">

            @if($report->Preventive==1)

                @foreach($reports as $report)
                    <span class="text-base text-center font-bold col-span-12">Preventive</span>
                @endforeach

            @endif
        </div>
        @if($report->Preventive==1)
            <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif

        <div class="grid grid-cols-2 gap-3">
            @if($report->Preventive==1)
                <div class="grid grid-cols-12 gap-0 content-evenly">
                    <span class="px-4 text-base font-bold col-span-5">Frequency</span>
                    <span class="-px-4 text-base font-bold col-span-1">:</span>
                    @foreach($reports as $report)
                        <span class="-px-8 text-base font-bold col-span-6">{{$report->Preven_date}}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-12 gap-0 content-evenly">
                    @foreach($reports as $report)
                        <span class="px-4 text-base font-bold col-span-6">Preventive measure by</span>
                    @endforeach
                    <span class="-px-4 text-base font-bold col-span-1">:</span>
                    @foreach($reports as $report)
                        <span class="-px-8 text-base font-bold col-span-5">{{$report->Calibration_by}}</span>
                    @endforeach
                </div>
            @endif

        </div>
        @if($report->Preventive==1)
            <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif
        <div class="grid grid-cols-12 gap-0 content-evenly">

            @if($report->Internal==1)

                @foreach($reports as $report)
                    <span class="text-base text-center font-bold col-span-12">Internal services</span>
                @endforeach

            @endif
        </div>
        @if($report->Internal==1)
        <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif
        <div class="grid grid-cols-2 gap-3">
            @if($report->Internal==1)
                <div class="grid grid-cols-12 gap-0 content-evenly">
                    <span class="px-4 text-base font-bold col-span-5">Frequency</span>
                    <span class="-px-4 text-base font-bold col-span-1">:</span>
                    @foreach($reports as $report)
                        <span class="-px-8 text-base font-bold col-span-6">{{$report->Int_date}}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-12 gap-0 content-evenly">
                    @foreach($reports as $report)
                        <span class="px-4 text-base font-bold col-span-6">Serviced by</span>
                    @endforeach
                    <span class="-px-4 text-base font-bold col-span-1">:</span>
                    @foreach($reports as $report)
                        <span class="-px-8 text-base font-bold col-span-5">{{$report->Service_by}}</span>
                    @endforeach
                </div>
            @endif

        </div>
        @if($report->Internal==1)
            <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif
        <div class="grid grid-cols-12 gap-0 content-evenly">

            @if($report->External==1)

                @foreach($reports as $report)
                    <span class="text-base text-center font-bold col-span-12">External Services</span>
                @endforeach

            @endif
        </div>
        @if($report->External==1)
            <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif

        <div class="grid grid-cols-2 gap-3">
            @if($report->External==1)
                <div class="grid grid-cols-12 gap-0 content-evenly">
                    <span class="px-4 text-base font-bold col-span-5">Frequency</span>
                    <span class="-px-4 text-base font-bold col-span-1">:</span>
                    @foreach($reports as $report)
                        <span class="-px-8 text-base font-bold col-span-6">{{$report->Ext_date}}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-12 gap-0 content-evenly">
                    @foreach($reports as $report)
                        <span class="px-4 text-base font-bold col-span-6">Serviced by</span>
                    @endforeach
                    <span class="-px-4 text-base font-bold col-span-1">:</span>
                    @foreach($reports as $report)
                        <span class="-px-8 text-base font-bold col-span-5">{{$report->Service_by}}</span>
                    @endforeach
                </div>
            @endif

        </div>
        @if($report->External==1)
            <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif
        <div class="grid grid-cols-12 gap-0 content-evenly">

            @if($report->Verification==1)

                @foreach($reports as $report)
                    <span class="text-base text-center font-bold col-span-12">Verification</span>
                @endforeach

            @endif
        </div>
        @if($report->Verification==1)
            <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif

        <div class="grid grid-cols-2 gap-3">
            @if($report->Verification==1)
                <div class="grid grid-cols-12 gap-0 content-evenly">
                    <span class="px-4 text-base font-bold col-span-5">Frequency</span>
                    <span class="-px-4 text-base font-bold col-span-1">:</span>
                    @foreach($reports as $report)
                        <span class="-px-8 text-base font-bold col-span-6">{{$report->Ver_date}}</span>
                    @endforeach
                </div>
                <div class="grid grid-cols-12 gap-0 content-evenly">
                    @foreach($reports as $report)
                        <span class="px-4 text-base font-bold col-span-6">Verification by</span>
                    @endforeach
                    <span class="-px-4 text-base font-bold col-span-1">:</span>
                    @foreach($reports as $report)
                        <span class="-px-8 text-base font-bold col-span-5">{{$report->Verification_by}}</span>
                    @endforeach
                </div>
            @endif

        </div>
        @if($report->Verification==1)
            <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        @endif

        <div class="grid grid-cols-12 gap-0 content-evenly">
            <div class="mb-2 text-base align-middle text-center font-bold col-span-6">Register</div>
            <div class="mb-2 text-base text-center font-bold col-span-6 border-l-2 flex border-gray-800">Authorized and Approved By (Laboratory Operation Manager/Technical Manager)</div>
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>

        <div class="grid grid-cols-12 content-evenly">

                <span class="px-4 text-base font-bold col-span-2">Name</span>
                <span class="text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-3">{{$report->Registrant}}</span>
            @endforeach

            <span class="mb-2 px-2 text-base font-bold col-span-2 border-l-2 border-gray-800">Name</span>
            <span class="text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-3">{{$report->Authorizer}}</span>
            @endforeach
        </div>
        <div class="grid grid-cols-12 content-evenly">

            <span class="px-4 text-base font-bold col-span-2">Date</span>
            <span class="text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-3">{{$report->Registrant_date}}</span>
            @endforeach

            <span class="mb-2 px-2 text-base font-bold col-span-2 border-l-2 border-gray-800">Date</span>
            <span class="text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-3">{{$report->Authorized_date}}</span>
            @endforeach
        </div>
        <div class="w-full h-0.5 bg-indigo-500"></div>
        @foreach($reports as $report)
        <span class="px-4 text-sm font-bold ">B. Declaration of {{$report->Declaration}}</span>
        @endforeach
        <div class="mb-2 w-full h-0.5 bg-indigo-500"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Date of Declaration</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->Declaration_date}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <span class="px-4 text-base font-bold col-span-3">Notified by</span>
            <span class="px-4 text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-4">{{$report->Notified_By}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>
        <div class="grid grid-cols-12 gap-0 content-evenly">
            <div class="mb-2 text-base align-middle text-center font-bold col-span-6">Comment on declaration by notify person</div>
            <div class="mb-2 text-base text-center font-bold col-span-6 border-l-2 flex border-gray-800">Authorized and Approved By (Laboratory Operation Manager/Technical Manager)</div>
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>

        <div class="grid grid-cols-12 content-evenly">

            @foreach($reports as $report)
                <span class="px-4 text-base font-bold col-span-6">{{$report->Comment}}</span>
            @endforeach

            <span class="mb-2 px-2 text-base font-bold col-start-7 col-span-2 border-l-2 border-gray-800">Name</span>
            <span class="text-base font-bold col-span-1">:</span>
                @foreach($reports as $report)
                    <span class="-px-8 text-base font-bold col-span-3">{{$report->Comment_Approver}}</span>
                @endforeach
        </div>
        <div class="grid grid-cols-12 content-evenly">



            <span class="mb-2 px-2 text-base font-bold col-start-7 col-span-2 border-l-2 border-gray-800">Date</span>
            <span class="text-base font-bold col-span-1">:</span>
            @foreach($reports as $report)
                <span class="-px-8 text-base font-bold col-span-3">{{$report->Comment_Approval_date}}</span>
            @endforeach
        </div>
        <div class="mb-2 w-full h-0.5 bg-gray-800 content-around"></div>


        <div class="p-4">
            @foreach($reports as $report)
            <div class="flex items-center justify-center">
                Status : {{$report->Status}}
            </div>
            @endforeach
            <div class="flex items-end justify-end space-x-3">
                {{--<button wire:click="print()" class="px-4 py-2 text-sm text-green-600 bg-green-100">Print</button>--}}
                {{--<button class="px-4 py-2 text-sm text-blue-600 bg-blue-100">Save</button>--}}
                <button wire:click="print()" class="px-4 py-2 text-sm text-red-600 bg-red-100">Cancel</button>
            </div>
        </div>


    </div>
</div>

</body>

</html>

