<x-user-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3 mt-2">
                            <label class="uppercase text-2xl font-extrabold pl-5">Package List</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view or add new packages to the system here.</p>
                        </div>


                    </div>
                    <table id="" class="display">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">SL</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Icon</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Name</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Details</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Price</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Status</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Is Trial</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($packages as $package)
                                <tr>
                                    <td class="p-3 text-sm text-left">{{ $package->package_number }}</td>
                                    <td class="p-3 text-sm text-center">
                                        <div class="flex items-center">
                                            <img src="{{ asset('storages/'.$package->file) }}" alt="file" width="70px"
                                            height="70px" class="rounded-5">
                                        </div>
                                    </td>
                                    <td class="p-3 text-sm text-center">{{ $package->package_name }}</td>
                                    <td class="p-3 text-sm text-center">{{ $package->package_detail }}</td>
                                    <td class="p-3 text-sm text-center"><span class="font-semibold text-lg pr-1">P</span>{{ $package->package_price }}</td>
                                    <td class="p-3 text-sm text-center">
                                        @if ($package->package_status == 'Active')
                                        <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                            {{ $package->package_status }}
                                        </span>
                                    @elseif($package->package_status == 'Inactive')
                                        <span class="px-2 font-bold bg-yellow-400 border-2 border-yellow-400 rounded-full">
                                            {{ $package->package_status }}
                                        </span>
                                    @elseif($package->package_status == 'Removed')
                                        <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">
                                            {{ $package->package_status }}
                                        </span>
                                    @endif
                                    </td>
                                    <td class="p-3 text-sm text-center">
                                        @if ($package->package_trial == 'Yes')
                                        <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                            {{ $package->package_trial }}
                                        </span>
                                    @elseif($package->package_trial == 'No')
                                        <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">
                                            {{ $package->package_trial }}
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
    </div>
</x-user-layout>


