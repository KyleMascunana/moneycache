<x-admin-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3 mt-2">
                            <label class="uppercase text-2xl font-extrabold pl-5">Blling Report List</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view report details to the system here.</p>
                        </div>
                    </div>
                    <hr>
                    <table id="" class="display">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Detail ID</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Customer Name</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Package Name</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Month</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Year</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Due Date</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($reports as $report)
                                <tr>
                                    <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail_id }}</td>
                                    <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail->customer->name }}</td>
                                    <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail->package->package_name }}</td>
                                    <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail->month }}</td>
                                    <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail->year }}</td>
                                    <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail->end_date }}</td>
                                    <td class="p-3 text-gray-700 text-sm text-center">
                                        @if ($report->detail->payment_status == 'Paid')
                                        <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                            {{ $report->detail->payment_status }}
                                        </span>
                                    @elseif($report->detail->payment_status == 'Overdue')
                                        <span class="px-2 font-bold bg-yellow-400 border-2 border-yellow-400 rounded-full">
                                            {{ $report->detail->payment_status }}
                                        </span>
                                    @elseif($report->detail->payment_status == 'Cancelled')
                                        <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">
                                            {{ $report->detail->payment_status }}
                                        </span>
                                    @endif
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <br>
                    </div>
                </div>
        </div>
    </div>

</x-admin-layout>


