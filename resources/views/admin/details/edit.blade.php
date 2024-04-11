<x-admin-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-3">
                        <a href="{{ route('admin.details.index') }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-door-closed"></i></a>
                    </div>
                    <div class="p-6 text-gray-900">
                        <label class=" text-2xl">Update Customer Payment</label>
                        <p class="mt-1 text-md leading-6 text-gray-600">You can add new customer payment by filling up the form below.</p>
                    <hr>
                        <div class="flex flex-col pt-5">
                            <form method="POST" action="{{ route('admin.details.update', $detail->id) }}">
                                @csrf

                                @method('PUT')

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                    <div class="sm:col-span-3">
                                        <label for="start_date" class="block text-sm font-medium leading-6 text-gray-900">Start Date <span class="text-red-600">*</span></label>
                                        <div class="mt-2">
                                            <input type="date" name="start_date" value="{{ $detail->start_date }}" id="start_date" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="end_date" class="block text-sm font-medium leading-6 text-gray-900">Due Date <span class="text-red-600">*</span></label>
                                        <div class="mt-2">
                                            <input type="date" name="end_date" id="end_date" value="{{ $detail->end_date }}" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="year" class="block text-sm font-medium leading-6 text-gray-900">Year</label>
                                        <div class="mt-2">
                                            <input type="number" name="year" required id="year" value="{{ $detail->year }}" placeholder="ex: 2024, 2025, 2026..." autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="month" class="block text-sm font-medium leading-6 text-gray-900">Month</label>
                                        <div class="mt-2">
                                            <input type="text" name="month" required id="month" value="{{ $detail->month }}" placeholder="ex: January, February, Mar..." autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="payment_status" class="block text-sm font-medium leading-6 text-gray-900">Payment Status: {{ $detail->payment_status }}</label>
                                        <div class="mt-2">
                                            <select name="payment_status" class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                            focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                <option selected>-- Select Below --</option>
                                                <option class="text-sm text-gray-700" value="Paid">Paid</option>
                                                <option class="text-sm text-gray-700" value="Overdue">Overdue</option>
                                                <option class="text-sm text-gray-700" value="Cancelled">Cancelled</option>
                                            </select>
                                        </div>
                                    </div>

                                    </div>
                                    <div class="sm:col-span-6 pt-5 justify-end flex">
                                        <button type="submit" class="px-4 py-2 bg-blue-700 hover:bg-blue-500 text-white rounded-md p-5">Next</button>
                                    </div>
                                </div>

                            </div>


                                </form>

                        </div>


                    </div>
                </div>
        </div>
    </div>

    </x-admin-layout>
