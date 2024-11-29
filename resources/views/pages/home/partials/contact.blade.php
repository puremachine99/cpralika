<section class="relative bg-white rounded-lg shadow-lg overflow-hidden flex items-center justify-center p-4 lg:p-8">
    <!-- Form and Illustration Section -->
    <div
        class="lg:flex lg:flex-row lg:items-center lg:justify-stretch w-full lg:w-3/4 relative bg-white rounded-xl shadow-xl p-8 overflow-hidden">
        <x-pattern position="absolute -ml-72 top-0 left-0" height="screen" class="opacity-100" />
        <!-- Form Section -->
        <div class="flex-1 relative z-10 left-44">
            <h2 class="text-5xl font-bold text-ralika-blue mb-2">Contact Us</h2>
            <p class="text-gray-600 mb-6">Monday - Friday: 08:00 AM - 17:00 PM</p>

            <!-- Form -->
            <form action="{{ route('visitor-messages.store') }}" method="POST" class="space-y-4">
                @csrf
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
        <div class="ml-48 flex-1 hidden lg:flex justify-end relative z-10 opacity-80">
            <img src="/images/illustration.png" alt="Contact Illustration" class="max-w-full h-auto">
        </div>
    </div>
</section>
