<x-admin-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3 mt-2 flex justify-between items-center">
                        <div>
                            <label class="uppercase text-2xl font-extrabold pl-5">Billing Report List</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view report details to the system here.</p>
                        </div>
                    </div>
                    <div class="sm:col-span-3 mt-2 flex justify-end mr-5 items-center">
                        <button class="flex justify-end bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" onclick="openFilterModal()">Filter</button>
                    </div>
                </div>
                <div id="filterModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="inline-block align-bottom bg-white rounded-lg text-center overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                        <label class="text-3xl uppercase font-extrabold text-gray-800" id="modalTitle">
                                            Filter Reports
                                        </label>
                                        <hr>
                                        <div class="mt-4 px-5 py-2 flex flex-col items-center space-y-4">

                                            <div class="mb-4 w-full flex">
                                                <label for="filterYear" class="block text-sm  mt-3 pr-5 font-medium text-gray-700">Year</label>
                                                <select id="filterYear" name="filterYear" class="mt-1 block w-full p-2 border rounded-md">
                                                    <option value="">All</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                </select>
                                            </div>
                                            <div class="mb-4  w-full flex">
                                                <label for="filterPaymentStatus" class="block text-sm mt-3 pr-5 font-medium text-gray-700">Payment Status</label>
                                                <select id="filterPaymentStatus" name="filterPaymentStatus" class="mt-1 block w-full p-2 border rounded-md">
                                                    <option value="">All</option>
                                                    <option value="Paid">Paid</option>
                                                    <option value="Overdue">Overdue</option>
                                                    <option value="Cancelled">Cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button onclick="applyFilters()" type="button" class="w-1/2 h-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:text-sm">
                                    Apply Filters
                                </button>
                                <button onclick="closeFilterModal()" type="button" class="w-1/2 h-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:text-sm">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <table id="billingTable" class="display">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center">Detail ID</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center">Customer Name</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center">Package Name</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center">Email</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center">Month</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center">Year</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center">Due Date</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center">Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                        <tr class="billing-row"
                            data-year="{{ $report->detail->year }}"
                            data-payment-status="{{ $report->detail->payment_status }}">
                            <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail_id }}</td>
                            <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail->customer->name }}</td>
                            <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail->package->package_name }}</td>
                            <td class="p-3 text-gray-700 text-sm text-center">{{ $report->detail->customer->email }}</td>
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
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>

    <script>
    function openFilterModal() {
    console.log("Modal opening...");  // Debugging line
    document.getElementById('filterModal').classList.remove('hidden');
    document.getElementById('filterModal').classList.add('block');
}


function closeFilterModal() {
    console.log("Modal closing...");  // Debugging line
    document.getElementById('filterModal').classList.remove('block');
    document.getElementById('filterModal').classList.add('hidden');
}


    function applyFilters() {
        filterBilling();
        closeFilterModal();
    }

    function filterBilling() {
        const year = document.getElementById('filterYear').value;
        const paymentStatus = document.getElementById('filterPaymentStatus').value;

        const rows = document.querySelectorAll('.billing-row');

        rows.forEach(row => {
            const rowYear = row.getAttribute('data-year');
            const rowPaymentStatus = row.getAttribute('data-payment-status');

            if (
                (year === '' || rowYear === year || year === 'All') &&
                (paymentStatus === '' || rowPaymentStatus === paymentStatus || paymentStatus === 'All')
            ) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    document.getElementById('filterYear').addEventListener('change', filterBilling);
    document.getElementById('filterPaymentStatus').addEventListener('change', filterBilling);

    </script>
    <style>
        .hidden {
    display: none;
}

.block {
    display: block;
}

        </style>
</x-admin-layout>
