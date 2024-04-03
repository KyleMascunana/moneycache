<x-admin-layout>

    <div class="py-1">
                <div class="p-6 text-gray-900">
                    <div class="max-w-3xl mx-auto bg-white shadow-md p-8 mt-8">
                        <div class="text-center mb-8">
                            <h1 class="text-3xl font-bold">{{ $templateone->template_name }}</h1>
                        </div>
                        <div class="text-right mb-4">{{ $templateone->email_date }}</div>
                        <div class="mb-4">
                            <p>Money Cache</p>
                            <p>2nd Level, Jardiniano Building, Rizal St</p>
                            <p>Cagayan de Oro, 9000 Misamis Oriental</p>
                            <p>money-cache.org</p>
                        </div>
                        <div class="mb-4">
                            <p>{{ $templateone->customer_name }}</p>
                            <p>{{ $templateone->customer_job }}</p>
                            <p>{{ $templateone->customer_business_name }}</p>
                            <p>{{ $templateone->customer_address }}</p>
                        </div>
                        <div class="text-justify">
                            <p>Dear {{ $templateone->customer_abbreviation }} {{ $templateone->customer_name }},</p>
                            <p class="mt-2">{{ $templateone->email_description }}</p>
                            <p class="mt-4">Sincerely,</p>
                            <p>{{ $templateone->customer_name }}</p>
                        </div>
                    </div>
                </div>
    </div>

</x-admin-layout>
