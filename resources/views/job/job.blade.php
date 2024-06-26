<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Jobless') }}
        </h2>
    </x-slot>
    
        <!-- ***** Fleet Starts ***** -->
     
        <section class="section" id="trainers" style="margin-left: 380px;margin-top:100px;">
            <div class="container">
            
    
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="product-1-720x480.jpg" alt="">
                                    </div>
                                    @include('components.viewmore')
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="product-2-720x480.jpg" alt="">
                                    </div>
                                  @include('components.viewmore')
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="product-3-720x480.jpg" alt="">
                                    </div>
                                    @include('components.viewmore')
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="product-4-720x480.jpg" alt="">
                                    </div>
                                    @include('components.viewmore')
                                </div>
                            </div>
                    
                            
                        </div>
                    </div>
                </div>
      

                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h4>Medical Requirements</h4>
                        <p>1.Pre-Employment Medical Examination: Includes physical, vision, and hearing tests tailored to job demands.<br>

                            2.Drug and Alcohol Screening: Ensures a safe workplace, especially in safety-sensitive roles.<br>
                            
                            3.Immunizations: Required for roles involving public health or safety.<br>
                            
                            4.Medical History Questionnaire: Discloses health conditions that could affect job performance.<br>
                            
                            5.Fitness for Duty Certification: Confirms ability to handle job requirements, especially physical tasks.<br>
                            
                            6.Psychological Evaluation: May be needed for high-stress or safety-critical positions.<br>
                            
                            7.Continued Medical Surveillance: Periodic check-ups for ongoing health monitoring in certain industries.</p>


                            <form id="applyForm1" class="apply-form" style="display: none;">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" readonly><br><br>
                            
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" readonly><br><br>
                                
                                <div style="text-align: right;">
                                    <a href="/resumes" class="btn-submit">Click here to fillup the Application</a>
                                </div>
                            </form>

                        <div style="text-align: right;">
                            <a href="" class="btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>

    </div>
    </section>
</x-app-layout>
<style>
    /* Modal styles */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1000; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto; /* Enable scroll if needed */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        text-align: center; /* Center align the content */
    }

    p{
        text-align: justify;
    }

    .btn-apply{
        background-color: red;
        border-radius: 10px;
        padding: 5px;
        color: white;
        box-sizing: border-box;
    }

    .modal-content {
        background-color: #fefefe;
        margin: auto; /* Center the modal */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
        max-width: 600px; /* Limit max width */
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        position: relative; /* Ensure position relative for absolute centering */
        top: 50%; /* Position the modal center vertically */
        transform: translateY(-50%); /* Adjust for vertical centering */
    }

    .close {
        color: #aaa !important;
        position: absolute;
        top: 8px;
        right: 16px;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modals = document.querySelectorAll('.modal');

        // Function to open modal
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.display = "block";
        }

        // Function to close modal
        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.display = "none";
        }

        // Event listeners to open each modal
        document.querySelectorAll('.view-more').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default link behavior
                var modalId = this.getAttribute('data-modal');
                openModal(modalId);
            });
        });

        // Event listener to close modal when clicking on the close button
        document.querySelectorAll('.close').forEach(function(closeButton) {
            closeButton.addEventListener('click', function() {
                var modalId = this.closest('.modal').getAttribute('id');
                closeModal(modalId);
            });
        });

        // Event listener to close modal when clicking outside of it
        window.addEventListener('click', function(event) {
            modals.forEach(function(modal) {
                if (event.target === modal) {
                    var modalId = modal.getAttribute('id');
                    closeModal(modalId);
                }
            });
        });

        // Event listener to show apply form when clicking "Apply Now" button
        document.querySelectorAll('.btn-apply').forEach(function(btnApply) {
            btnApply.addEventListener('click', function(e) {
                e.preventDefault();
                var modal = this.closest('.modal'); // Find the closest modal parent

                // Hide modal content except apply form
                modal.querySelectorAll('.modal-content > *:not(.apply-form)').forEach(function(element) {
                    element.style.display = 'none';
                });

                // Show apply form
                var applyForm = modal.querySelector('.apply-form'); // Find the apply form inside modal
                applyForm.style.display = 'block'; // Show apply form
            });
        });

  
    });
</script>