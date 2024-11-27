<x-app-layout>
    <section class="relative bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:justify-between">
        <!-- Pattern Sidebar -->
        <div class="hidden lg:block w-1/4 h-full bg-ralika-blue">
            <div class="h-full bg-[url('/images/pattern.png')] bg-cover bg-repeat"></div>
        </div>

        <!-- Form and Illustration Section -->
        <div class="lg:flex lg:flex-row lg:items-center lg:justify-between w-full lg:w-3/4 p-8 lg:pl-16 lg:pr-16">
            <!-- Form Section -->
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-ralika-blue mb-2">Contact Us</h2>
                <p class="text-gray-600 mb-6">Monday - Friday: 08:00 AM - 17:00 PM</p>

                <!-- Form -->
                <form action="{{ route('visitor-messages.store') }}" method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-ralika-blue focus:border-transparent">
                    <input type="email" name="email" placeholder="Email Address"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-ralika-blue focus:border-transparent">
                    <textarea name="message" rows="4" placeholder="Type your message here"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-ralika-blue focus:border-transparent"></textarea>
                    <button type="submit"
                        class="px-6 py-3 bg-ralika-blue text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition">
                        Submit
                    </button>
                </form>
            </div>

            <!-- Illustration Section -->
            <div class="flex-1 hidden lg:flex justify-center">
                <img src="/images/illustration.png" alt="Contact Illustration" class="max-w-full h-auto">
            </div>
        </div>
    </section>
</x-app-layout>
