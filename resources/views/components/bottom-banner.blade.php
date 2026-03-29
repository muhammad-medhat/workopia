        @props(['title' => 'Looking to hire?',
        'description' => 'Post your job listing now and find the perfect candidate.',
        'buttonText' => 'Create Job',
        'buttonLink' => 'create-job.html'])
        <!-- Bottom Banner -->
        <section class="container mx-auto my-6">
            <div
                class="bg-blue-800 text-white rounded p-4 flex items-center justify-between flex-col md:flex-row gap-4"
            >
                <div>
                    <h2 class="text-xl font-semibold">{{ $title }}</h2>
                    <p class="text-gray-200 text-lg mt-2">

                        {{ $description }}
                    </p>
                </div>
             <x-button-link
                    url="{{ $buttonLink }}"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded"
                >
                    {{ $buttonText }}
                </x-button-link>
            </div>
        </section>
