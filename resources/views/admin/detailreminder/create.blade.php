<x-admin-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-3">
                        <a href="{{ route('admin.details.index') }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-door-closed"></i></a>
                    </div>
                    <div class="sm:col-span-3 mt-2 p-3">
                        <label class="uppercase text-2xl font-extrabold pl-5">New Billing Overdue Reminder</label>
                        <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can add billing reminders to the system here.</p>

                    <hr>
                        <div class="flex flex-col pt-5">
                                <form method="POST" action="{{ route('admin.detailreminder.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="border-b border-gray-900/10 pb-12">
                                        <h2 class="text-base font-semibold leading-7 text-gray-900">Customer Billing Overdue Reminder Form</h2>
                                            <p class="mt-1 text-sm leading-6 text-gray-600">Read what you input for less errors.</p>

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                                <div class="sm:col-span-3">
                                                    <label for="detail_id" class="block text-sm font-medium leading-6 text-gray-900">Billing Information<span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                            <select name="detail_id" required class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                            focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option disabled>-- Select Below --</option>
                                                                @foreach ($details as $detail)
                                                                @if ($detail->payment_status == 'Overdue')
                                                                    <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                                                        <option class="text-sm text-gray-700" value="{{ $detail->id }}">{{ $detail->id }} - {{ $detail->customer->name }} - {{ $detail->package->package_name }} - {{ $detail->payment_status }}</option>
                                                                    </span>
                                                                @endif
                                                           @endforeach
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="month" class="block text-sm font-medium leading-6 text-gray-900">Month</label>
                                                    <p>Current Package End Month : <span class="text-red-600">{{ $detail->month }}</span></p>
                                                    <div class="mt-2">
                                                        <input type="text" name="month" required id="month" placeholder="ex: January, February, Mar..." autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="due_date" class="block text-sm font-medium leading-6 text-gray-900">Due Date Reminder</label>
                                                    <p>Current Package End date : <span class="text-red-600">{{ $detail->end_date }}</span></p>
                                                    <div class="mt-2">
                                                        <input type="date" name="due_date" id="due_date" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                </div>
                                                <div class="sm:col-span-6 pt-5 justify-end flex">
                                                    <button type="submit" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-white rounded-md p-5">Save</button>
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
