<x-user-layout>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg p-3">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <div class="p-3">
                            <label class="uppercase text-2xl font-extrabold pl-5">{{ $customer->name }} Details</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view the customer information & billing here.</p>
                        </div>
                    </div>
                </div><hr>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="set_date" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2 text-lg uppercase">
                            <input type="text" value="{{ $customer->name }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="client_id" class="block text-sm font-medium leading-6 text-gray-900">Email</label>

                        <div class="mt-2 text-lg uppercase">
                            <input type="text" value="{{ $customer->email }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Contact Number</label>

                        <div class="mt-2 text-lg uppercase">
                            <input type="text" value="{{ $customer->contact }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="business_name" class="block text-sm font-medium leading-6 text-gray-900">Business Name</label>

                        <div class="mt-2 text-lg uppercase">
                            <input type="text" value="{{ $customer->business_name }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="user_status" class="block text-sm font-medium leading-6 text-gray-900">User Status</label>

                        <div class="mt-2 text-lg uppercase">
                            <input type="text" value="{{ $customer->user_status }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                        <div class="sm:col-span-3">
                            <label for="business_location" class="block text-sm font-medium leading-6 text-gray-900">Business Location</label>

                            <div class="mt-2 text-lg uppercase">
                                <input type="text" value="{{ $customer->business_location }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3 mt-2">
                            <label class="uppercase text-2xl font-extrabold pl-5"><span>{{ $customer->name }}</span> Billing History</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can add billing details to the system here.</p>
                        </div>


                    </div>
                    <table id="" class="display">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Package ID</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Package Name</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Price</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Month</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Year</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Start Date</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Due Date</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $payment)
                                    <tr>
                                        <td class="p-3 text-sm text-center">{{ $payment->package_id }}</td>
                                        <td class="p-3 text-sm text-center">{{ $payment->package->package_name }}</td>
                                        <td class="p-3 text-sm text-center"><span class="font-semibold">P </span> {{ $payment->billing_payment}}</td>
                                        <td class="p-3 text-sm text-center">{{ $payment->month }}</td>
                                        <td class="p-3 text-sm text-center">{{ $payment->year }}</td>
                                        <td class="p-3 text-sm text-center">{{ $payment->start_date }}</td>
                                        <td class="p-3 text-sm text-center">{{ $payment->end_date }}</td>
                                        <td class="p-3 text-gray-800 text-sm text-center">
                                            @if ($payment->payment_status == 'paid')
                                                <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">{{ $payment->payment_status }}</span>
                                            @elseif($payment->payment_status == 'unpaid')
                                                <span class="px-2 font-bold bg-orange-400 border-2 border-orange-400 rounded-full">{{ $payment->payment_status }}</span>
                                            @elseif($payment->payment_status == 'overdue')
                                                <span class="px-2 font-bold bg-yellow-400 border-2 border-yellow-400 rounded-full">{{ $payment->payment_status }}</span>
                                            @elseif($payment->payment_status == 'cancelled')
                                                <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">{{ $payment->payment_status }}</span>
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
    </div>

</x-user-layout>
