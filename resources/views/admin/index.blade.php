<x-admin-layout>
    <div class="mr-5 pt-3 px-3 font-semibold flex justify-end ">
        <button type="button" class="position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
              </svg>
              @if ($reports->count() > 0)
                    <!-- Display badge with the count -->
                    <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                @endif
          </button>


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Billing Overdue Reminder</h1>
                </div>
                <div class="modal-body">
                    <table id="" class="w-full">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Customer Name</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Package Name</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Month</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Due Date</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($reports as $report)
                                <tr>
                                    <td class="p-3 text-sm text-center">{{ $report->detail->customer->name }}</td>
                                    <td class="p-3 text-sm text-center">{{ $report->detail->package->package_name }}</td>
                                    <td class="p-3 text-sm text-center">{{ $report->detail->month }}</td>
                                    <td class="p-3 text-sm text-center">{{ $report->detail->end_date }}</td>
                                    <td class="p-3 text-gray-800 text-sm text-center">
                                        @if ($report->detail->payment_status == 'Overdue')
                                        <span class="px-2 font-bold bg-yellow-400 border-2 border-yellow-400 rounded-full">
                                            {{ $report->detail->payment_status }}
                                        </span>
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid sm:grid-cols-12">
                    <div class="sm:col-span-3">
                        <div class="py-2">
                            <div class="mx-auto sm:px-4 lg:px-6">
                                <div class="bg-red-500 overflow-hidden sm:rounded-lg">
                                    <div class="p-6 text-gray-100 flex justify-center">
                                        <div>
                                            <span class="flex justify-center text-5xl font-semibold">{{ $activeCount }}</span>
                                            <span class="flex justify-center pt-2">Active Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <div class="py-2">
                            <div class="mx-auto sm:px-4 lg:px-6">
                                <div class="bg-orange-400 overflow-hidden sm:rounded-lg">
                                    <div class="p-6 text-gray-100 flex justify-center">
                                        <div>
                                            <span class="flex justify-center text-5xl font-semibold">{{ $inactiveCount }}</span>
                                            <span class="flex justify-center pt-2">Idle Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <div class="py-2">
                            <div class="mx-auto sm:px-4 lg:px-6">
                                <div class="bg-[#1ABC9C] overflow-hidden sm:rounded-lg">
                                    <div class="p-6 text-gray-100 flex justify-center">
                                        <div>
                                            <span class="flex justify-center text-5xl font-semibold">{{ $suspendedCount }}</span>
                                            <span class="flex justify-center pt-2">Suspended Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <div class="py-2">
                            <div class="mx-auto sm:px-4 lg:px-6">
                                <div class="bg-green-500 overflow-hidden sm:rounded-lg">
                                    <div class="p-6 text-gray-100 flex justify-center">
                                        <div>
                                            <span class="flex justify-center text-5xl font-semibold">{{ $paidCount }}</span>
                                            <span class="flex justify-center pt-2">Paid Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <div class="py-2">
                            <div class="mx-auto sm:px-4 lg:px-6">
                                <div class="bg-blue-500 overflow-hidden sm:rounded-lg">
                                    <div class="p-6 text-gray-100 flex justify-center">
                                        <div>
                                            <span class="flex justify-center text-5xl font-semibold">{{ $unpaidCount }}</span>
                                            <span class="flex justify-center pt-2">Overdue Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <div class="py-2">
                            <div class="mx-auto sm:px-4 lg:px-6">
                                <div class="bg-violet-500 overflow-hidden sm:rounded-lg">
                                    <div class="p-6 text-gray-100 flex justify-center">
                                        <div>
                                            <span class="flex justify-center text-5xl font-semibold">{{ $cancelledCount }}</span>
                                            <span class="flex justify-center pt-2">Cancelled Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <div class="py-2">
                            <div class="mx-auto sm:px-4 lg:px-6">
                                <div class="bg-[#81DA00] overflow-hidden sm:rounded-lg">
                                    <div class="p-6 text-gray-100 flex justify-center">
                                        <div>
                                            <span class="flex justify-center text-5xl font-semibold">{{ $packagesCount }}</span>
                                            <span class="flex justify-center pt-2">Available Package</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <div class="py-2">
                            <div class="mx-auto sm:px-4 lg:px-6">
                                <div class="bg-[#6802DA] overflow-hidden sm:rounded-lg">
                                    <div class="p-6 text-gray-100 flex justify-center">
                                        <div>
                                            <span class="flex justify-center text-5xl font-semibold">{{ $templateCount }}</span>
                                            <span class="flex justify-center pt-2">Available Templates</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container flex flex-row mt-5">
        <div class="w-4/5">
            <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg max-w-3xl">
                <div class="sm:col-span-2">
                    <canvas id="horizontalBar"></canvas>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="flex justify-center font-semibold text-lg">Package Graph Details</h1>
                        <div class="mt-3">
                            <span class="flex items-center text-left pl-[30px]">
                                <span class="rounded-[50px] bg-red-500 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                    </svg>
                                </span>
                                <span class="flex justify-center ml-5 text-md text-red-500 font-semibold">Package 1</span>
                            </span>
                        </div>
                        <div class="mt-3">
                            <span class="flex items-center text-left pl-[30px]">
                                <span class="rounded-[50px] bg-orange-500 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                    </svg>
                                </span>
                                <span class="flex justify-center ml-5 text-md text-orange-500 font-semibold">Package 1-A</span>
                            </span>
                        </div>
                        <div class="mt-4">
                            <span class="flex items-center text-left pl-[30px]">
                                <span class="rounded-[50px] bg-[#1ABC9C] text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                    </svg>
                                </span>
                                <span class="flex justify-center ml-5 text-md text-[#1ABC9C] font-semibold">Package 1-B</span>
                            </span>
                        </div>
                        <div class="mt-4">
                            <span class="flex items-center text-left pl-[30px]">
                                <span class="rounded-[50px] bg-green-500 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                    </svg>
                                </span>
                                <span class="flex justify-center ml-5 text-md text-green-500 font-semibold">Package 2</span>
                            </span>
                        </div>
                        <div class="mt-4">
                            <span class="flex items-center text-left pl-[30px]">
                                <span class="rounded-[50px] bg-blue-500 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                    </svg>
                                </span>
                                <span class="flex justify-center ml-5 text-md text-blue-500 font-semibold">Package 2-A</span>
                            </span>
                        </div>
                        <div class="mt-4">
                            <span class="flex items-center text-left pl-[30px]">
                                <span class="rounded-[50px] bg-violet-500 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                    </svg>
                                </span>
                                <span class="flex justify-center ml-5 text-md text-violet-500 font-semibold">Package 2-B</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript">
        $(function(){
                    new Chart(document.getElementById("horizontalBar"), {
            "type": "horizontalBar",
            "data": {
            "labels": ["P1", "P2", "P3", "P4", "P5", "P6"],
            "datasets": [{
                "label": "Package Rating",
                "data": [{{ $package1Count }}, {{ $package1ACount }}, {{ $package1BCount }},
                {{ $package2Count }}, {{ $package2ACount }}, {{ $package2BCount }}],
                "fill": false,
                "backgroundColor": ["rgba(231, 76, 60, 0.8)", "rgba(255, 131, 0, 0.8)",
                "rgba(26, 188, 156, 0.8)", "rgba(46, 204, 113, 0.8)",
                "rgba(46, 134, 193, 0.8)", "rgba(142, 68, 173, 0.8)"
                ],
                "borderColor": ["rgb(231, 76, 60, 0)", "rgb(255, 131, 0)", "rgb(26, 188, 156)",
                 "rgb(46, 204, 113)", "rgb(46, 134, 193)", "rgb(142, 68, 173)"
                ],
                "borderWidth": 1
            }]
            },
            "options": {
            "scales": {
                "xAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
                }]
            }
            }
        });
        });
    </script>
</x-admin-layout>

