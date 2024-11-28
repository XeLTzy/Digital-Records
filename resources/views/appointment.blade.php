<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Appointment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                <div>
    <form id="BookingForm" method="POST" action="/record">
        @csrf
        <!-- First Name -->
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name *</label>
            <input type="text" name="firstname" class="form-control" value="{{ old('firstname') }}" required>
            @error('firstname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Middle Name -->
        <div class="mb-3">
            <label for="middlename" class="form-label">Middle Name</label>
            <input type="text" name="middlename" value="{{ old('middlename') }}" class="form-control">
        </div>

        <!-- Last Name -->
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name *</label>
            <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" required>
            @error('lastname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Suffix -->
        <div class="mb-3">
            <label for="suffix" class="form-label">Suffix</label>
            <input type="text" name="suffix" value="{{ old('suffix') }}" class="form-control">
        </div>

        <!-- Contact Number -->
        <div class="mb-3">
            <label for="number" class="form-label">Contact Number *</label>
            <input type="tel" name="number" required value="{{ old('number') }}" class="form-control" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
            @error('number')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email *</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Date -->
        <div class="mb-3">
            <label for="date" class="form-label">Date *</label>
            <input type="date" name="date" id="date-picker" value="{{ old('date') }}" class="form-control" required>
            @error('date')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Time -->
        <div class="mb-3">
            <label for="time" class="form-label">Time *</label>
            <select class="form-select" name="time" required>
                <option selected disabled>Open this select time</option>
                <option value="09:00">9:00 AM</option>
                <option value="09:30">9:30 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="10:30">10:30 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="11:30">11:30 AM</option>
                <option value="12:00">12:00 PM</option>
                <option value="12:30">12:30 PM</option>
                <option value="13:00">1:00 PM</option>
                <option value="13:30">1:30 PM</option>
                <option value="14:00">2:00 PM</option>
                <option value="14:30">2:30 PM</option>
                <option value="15:00">3:00 PM</option>
                <option value="15:30">3:30 PM</option>
                <option value="16:00">4:00 PM</option>
                <option value="16:30">4:30 PM</option>
            </select>
            @error('time')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mt-3">
                            <div class="col-md-3 mx-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="terms_checkbox" required>
                                        <label class="form-check-label" for="terms_checkbox">
                                            I agree to the <a href="#" id="terms-link">Terms and Conditions.</a>
                                        </label>
                                    @error('terms_checkbox')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div id="terms-container">
                            <p>By booking with us, you agree to these terms. Once booked, 
                                a confirmation email will be sent. Cancellations or 
                                rescheduling must be done at least 24 hours in advance. 
                                Please inform us of any health conditions or special needs. 
                                Your data will be kept private in accordance with our privacy 
                                policy. We are not liable for any damages, injuries, or 
                                losses. By booking, you acknowledge and accept these terms.</p>
                            <span id="close-terms">Close</span>
                        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>

    <!-- <div id="bookingToast" class="toast-container top-0 start-50 translate-middle-x">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="d-flex justify-content-center">Dentista Royale D.W.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body d-flex justify-content-center">
                Book successfully!
            </div>
        </div>
    </div> -->

                   </div>
                </div>
            </div>
        </div>
    </div>

    <script>
            // JavaScript to block previous dates and enforce restriction
            document.addEventListener("DOMContentLoaded", function () {
            const datePicker = document.getElementById('date-picker');
            const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format

            // Set the min attribute dynamically to block past dates
            datePicker.setAttribute('min', today);

            // Add validation to block Fridays
            datePicker.addEventListener('input', function () {
                const selectedDate = new Date(this.value);

                // Check if the selected date is a Friday (getDay() returns 5 for Fridays)
                if (selectedDate.getDay() === 5) {
                    alert("We are closed every Friday.");
                    this.value = ""; // Clear the invalid value
                }
            });
        });
    </script>

    <script>
        // Get references to elements
        const termsLink = document.getElementById('terms-link');
        const termsContainer = document.getElementById('terms-container');
        const closeTerms = document.getElementById('close-terms');

        
        termsLink.addEventListener('click', function(event) {
            event.preventDefault(); 
            termsContainer.style.display = 'block'; 
        });

        
        closeTerms.addEventListener('click', function() {
            termsContainer.style.display = 'none';
        });
    </script>

</x-app-layout>
