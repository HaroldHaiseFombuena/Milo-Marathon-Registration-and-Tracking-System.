@extends('layouts.app')

@section('content')
@php $title = "register" @endphp
<div class="row justify-content-center">
    <div class="col-xl-10">
       <div class = "card shadow border-0 rounded-4 mb-5"> 
            <div class="card-header milo-bg-green text-white p-4 border-0 position-relative text-center">
                <p class="milo-text-yellow fw-bold tracking-wider text-uppercase small mb-1" style="letter-spacing: 2px;">
                    Building Champions in Life
                </p>
                <h2 class="fw-extrabold m-0 d-flex align-items-center justify-content-center display-6 text-uppercase">
                    <i class="fa-solid fa-clipboard-list me-3 milo-text-yellow"></i> 
                    Registration Form
                </h2>
                <p class="milo-text-gold small m-0 mt-2">Join the MILO Marathon and be a champion in life!</p>
            </div>
            <div class = "card-body p-5 bg-white">
                    <form action = "{{ route('register.store') }}" method = "post">
                        @csrf
                        <div class = "row g-4">
                            <div class = "col-lg-6 border-end-lg pe-lg-4">
                                <h5 class = "milo-text-green fw-bold text-uppercase mb-3 d-flex"><i class="fa-solid fa-user me-2"></i>Personal Information</h5>
                                
                                <div class = "mb-3">
                                    <label for = "Full_name" class = "form-label fw-semibold text-secondary small">Full Name</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-user-circle"></i></span>
                                        <input type = "text" name = "Full_name" id = "Full_name" class = "form-control bg-light border-start-0" placeholder = "Enter your full name" required>
                                    </div>
                                    @error('Full_name')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "row">
                                    <div class = "col-md-6 mb-3">
                                        <label for = "age" class = "form-label fw-semibold text-secondary small">Age</label>
                                        <div class = "input-group">
                                            <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-birthday-cake"></i></span>
                                            <input type = "number" name = "age" id = "age" class = "form-control bg-light border-start-0" placeholder = "Enter your age" required>
                                        </div>
                                    </div>
                                        <div class = "col-md-6 mb-3">
                                            <label for = "gender" class = "form-label fw-semibold text-secondary small">Gender</label>
                                            <div class = "input-group">
                                                <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-venus-mars"></i></span>
                                                <select name = "gender" id = "gender" class = "form-select bg-light border-start-0" required>
                                                    <option value = "" disabled selected>Select your gender</option>
                                                    <option value = "Male">Male</option>
                                                    <option value = "Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class = "mb-3">
                                    <label for = "email" class = "form-label fw-semibold text-secondary small">Email Address</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-envelope"></i></span>
                                        <input type = "email" name = "email" id = "email" class = "form-control bg-light border-start-0" placeholder = "Enter your email address" required>
                                    </div>
                                    @error('email')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "mb-4">
                                    <label for = "phone" class = "form-label fw-semibold text-secondary small">Phone Number</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-phone"></i></span>
                                        <input type = "tel" name = "phone" id = "phone" class = "form-control bg-light border-start-0" placeholder = "Enter your phone number" required>
                                    </div>
                                </div>
                                <div class = "mb-3">
                                    <label for = "address" class = "form-label fw-semibold text-secondary small">Address</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-location-dot"></i></span>
                                        <input type = "text" name = "address" id = "address" class = "form-control bg-light border-start-0" placeholder = "Enter your address" required>
                                    </div>
                                </div>
                                    <h5 class = "milo-text-green fw-bold text-uppercase mb-3 d-flex"><i class="fa-solid fa-person-running me-2"></i>Marathon Information</h5>
                                    
                                    <div class = "row">
                                        <div class = "col-md-6 mb-3">
                                            <label for = "marathon_category" class = "form-label fw-semibold text-secondary small">Category</label>
                                            <div class = "input-group">
                                                <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-list"></i></span>
                                                <select name = "marathon_category" id = "marathon_category" class = "form-select bg-light border-start-0" required>
                                                    <option value = "" disabled selected>--Select your category--</option>
                                                    <option value = "3KM">3K run</option>
                                                    <option value = "5KM">5K run</option>
                                                    <option value = "10KM">10K run</option>
                                                    <option value = "21KM">21K run</option>
                                                    <option value = "42KM">42K run</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class = "col-md-6 mb-3">
                                            <label for = "Jersey_size" class = "form-label fw-semibold text-secondary small">T-Shirt Size</label>
                                            <div class = "input-group">
                                                <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-shirt"></i></span>
                                                <select name = "Jersey_size" id = "Jersey_size" class = "form-select bg-light border-start-0" required>
                                                    <option value = "" disabled selected>--Select T-shirt size--</option>
                                                    <option value = "XS">Extra Small (XS)</option>
                                                    <option value = "S">Small (S)</option>
                                                    <option value = "M">Medium (M)</option>
                                                    <option value = "L">Large (L)</option>
                                                    <option value = "XL">Extra Large (XL)</option>
                                                    <option value = "XXL">Double Extra Large (XXL)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <div class = "mb-3">
                                    <label for = "school_organization" class = "form-label fw-semibold text-secondary small">School/Organization</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-building"></i></span>
                                        <input type = "text" name = "school_organization" id = "school_organization" class = "form-control bg-light border-start-0" placeholder = "Enter your school or organization name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ps-lg-4">
                                    <h5 class = "milo-text-green fw-bold text-uppercase mb-3 d-flex"><i class="fa-solid fa-ambulance me-2"></i>Emergency Contact</h5>
                                <div class = "mb-3">
                                    <label for = "emergency_name" class = "form-label fw-semibold text-secondary small">Contact Person</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-user-circle"></i></span>
                                        <input type = "text" name = "emergency_name" id = "emergency_name" class = "form-control bg-light border-start-0" placeholder = "Enter contact person's name" required>
                                    </div>
                                </div>
                                <div class = "mb-3">
                                    <label for = "emergency_phone" class = "form-label fw-semibold text-secondary small">Phone Number</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-phone"></i></span>
                                        <input type = "tel" name = "emergency_phone" id = "emergency_phone" class = "form-control bg-light border-start-0" placeholder = "09XXXXXXXXX" required>
                                    </div>
                                </div>
                                <div class = "mb-4">
                                    <label for = "emergency_relationship" class = "form-label fw-semibold text-secondary small">Relationship</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-heart"></i></span>
                                        <input type = "text" name = "emergency_relationship" id = "emergency_relationship" class = "form-control bg-light border-start-0" placeholder = "e.g., Parent, Guardian, Friend" required>
                                    </div>
                                </div>
                                    <h5 class = "milo-text-green fw-bold text-uppercase mb-3 d-flex"><i class="fa-solid fa-file-lines me-2"></i>Additional Information</h5>
                                
                                 <div class = "mb-3">
                                    <label for = "runner_number" class = "form-label fw-semibold text-secondary small">Runners Number</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-hashtag"></i></span>
                                        <input type = "text" name = "runner_number" id = "runner_number" class = "form-control bg-light border-start-0" required>
                                    </div>
                                    @error('runner_number')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "mb-3">
                                    <label for = "registration_date" class = "form-label fw-semibold text-secondary small">Registration Date</label>
                                    <div class = "input-group">
                                        <span class = "input-group-text bg-light border-end-0"><i class="fa-solid fa-calendar"></i></span>
                                        <input type = "date" name = "registration_date" id = "registration_date" class = "form-control bg-light border-start-0" value = "{{ date('Y-m-d') }}" required>
                                    </div>
                                </div>
                        </div>
                        @if(session('success'))
                            <div class="mt-4">
                                <div class="alert alert-success text-center py-2 mb-0" role="alert">
                                    {{ session('success') }}
                                </div>
                            </div>
                        @elseif(session('error'))
                            <div class="mt-4">
                                <div class="alert alert-danger text-center py-2 mb-0" role="alert">
                                    {{ session('error') }}
                                </div>
                            </div>
                        @endif
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-milo fw-bold btn-lg px-5 py-3 shadow rounded-3 text-uppercase tracking-wide" style="min-width: 280px;">
                                    <i class="fa-solid fa-paper-plane me-2"></i> Submit Registration
                                </button>
                            </div>
                    </form>
            </div>
       </div>
    </div>
</div>
@endsection