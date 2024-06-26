<x-admin-layout>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg p-3">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <div class="p-3">
                            <label class="uppercase text-2xl font-extrabold pl-5">Customer Details</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view the customer information & billing here.</p>
                        </div>
                    </div>
                    <div class="sm:col-span-3 mt-2">
                        <div class="flex justify-end p-3">

                            <a href="{{ route('admin.details.create') }}" class="px-4 py-2 ml-4 bg-green-700 hover:bg-green-500 text-white
                                rounded-md"></i>Make Payment</a>
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
                            <tr class="bg-blue-500 text-white">
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Package ID</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Package Name</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Price</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Month</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Year</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Start Date</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Due Date</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Status</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Action</th>
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
                                        <td>
                                            <div class="items-center">
                                                <div class="flex space-x-3">
                                                    <a href="{{ route('admin.details.edit', $payment->id) }}" class="text-blue-500 hover:text-blue-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('admin.details.destroy', $payment->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-500 hover:text-red-900">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
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

</x-admin-layout>
