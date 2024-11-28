<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                <div class="form-container">
                    <form action="/submit-dental-form" method="POST">
                        @csrf
                        <div class="form-columns">
                            <!-- Personal Information Section -->
                            <div class="form-section">
                                <h3>Personal Information</h3>
                                    <div class="form-group">
                                        <label for="firstname">First Name:</label>
                                        <input type="text" id="first-name" name="firstname" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="middlename">Middle Name:</label>
                                        <input type="text" id="middle-name" name="middlename">
                                    </div>

                                    <div class="form-group">
                                        <label for="lastname">Last Name:</label>
                                        <input type="text" id="last-name" name="lastname" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="number">Phone Number:</label>
                                        <input type="tel" id="number" name="phonenumber" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Gender:</label>
                                        <div class="gender-group">
                                            <input type="radio" id="male" name="gender" value="Male" required>
                                            <label for="male">Male</label>
                                            <input type="radio" id="female" name="gender" value="Female" required>
                                            <label for="female">Female</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="birthday">Birthday:</label>
                                        <input type="date" id="birthday" name="birthday" required>
                                    </div>
                                </div>

                            <!-- Address Section -->
                            <div class="form-section">
                                <h3>Address</h3>
                                    <div class="form-group">
                                        <label for="city">City:</label>
                                        <input type="text" id="city" name="city" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="barangay">Barangay:</label>
                                        <input type="text" id="barangay" name="barangay" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="street">Street:</label>
                                        <input type="text" id="street" name="street" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="housenumber">House Number:</label>
                                        <input type="text" id="house-number" name="housenumber" required>
                                    </div>
                                </div>
                            </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </form>
                </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
