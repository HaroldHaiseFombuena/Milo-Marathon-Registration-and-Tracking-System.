@extends('layouts.app')

@section('content')
@php $title = "Registrations" @endphp
<div class="row justify-content-center">
    <div class="col-xl-12">
        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4">
                <div class="row align-items-center g-3">
                    <div class="col-md-6">
                        <h3 class="fw-bold text-dark mb-1">Dashboard</h3>
                        <p class="text-secondary mb-3 small">Milo Marathon Registration & Tracking System</p>
                        <span class="badge milo-bg-green fs-6 px-3 py-2 rounded-pill shadow-sm">Total Participants: <span class="fw-extrabold text-warning ms-1">{{ $totalcount }}</span></span>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('registrations.search') }}" method="GET">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0 text-secondary">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                                <input type="text" name="search" class="form-control border-start-0 ps-0" placeholder="Search runner name or email..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-milo fw-bold px-4">Search</button>
                                    <a href="{{ route('registrations.index') }}" class="btn btn-outline-secondary"><i class="fa-solid fa-rotate-left"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class = "card border-0 shadow-sm rounded-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0 border">
                        <thead class="table-light text-secondary small uppercase fw-bold border-bottom">
                            <tr>
                                <th class="ps-4 py-3">id</th>
                                <th class="py-3">Runner Info</th>
                                <th class="py-3">Age & Gender</th>
                                <th class="py-3">Category</th>
                                <th class="py-3">Phone</th>
                                <th class="py-3">Address</th>
                                <th class="py-3">Custom Details</th>
                                <th class="py-3">Emergency Contact</th>
                                <th class="pe-4 py-3">Reg. Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registrations as $reg)
                                <tr class="border-bottom">
                                    <td class="ps-4 text-secondary font-monospace small">{{ $reg->id }}</td>
                                    <td>
                                        <div class="fw-bold text-dark">{{ $reg->Full_name }}</div>
                                        <div class="small text-secondary"><i class="fa-regular fa-envelope me-1"></i>{{ $reg->email }}</div>
                                    </td>
                                    <td>
                                        <div class="text-dark">{{ $reg->age }} yrs old</div>
                                        <div class="small text-secondary">{{ $reg->gender }}</div>
                                    </td>
                                    <td>
                                        @if ($reg->marathon_category === '3KM' || $reg->marathon_category === '5KM')
                                            <span class="badge bg-success px-3 py-2 fw-bold">{{ $reg->marathon_category }}</span>
                                        @elseif ($reg->marathon_category === '10KM')
                                            <span class="badge bg-warning text-dark px-3 py-2 fw-bold">{{ $reg->marathon_category }}</span>
                                        @else
                                            <span class="badge bg-danger px-3 py-2 fw-bold">{{ $reg->marathon_category }}</span>
                                        @endif
                                    </td>
                                    <td class="text-dark">{{ $reg->phone }}</td>
                                    <td class="text-dark">{{ $reg->address }}</td>
                                    <td>
                                        <div class="small mb-1"><span class="fw-semibold text-secondary">Shirt Size:</span> <span class="badge bg-light text-dark border">{{ $reg->Jersey_size }}</span></div>
                                        <div class="small mb-1"><span class="fw-semibold text-secondary">Runners Number:</span> <span class="badge bg-secondary text-light border">{{ $reg->runner_number}}</span></div>
                                        <div class="small"><span class="fw-semibold text-secondary">School/Organization:</span> <span class="badge bg-info-subtle text-info-emphasis border border-info-subtle">{{ $reg->school_organization }}</span></div>
                                    </td>
                                    <td>
                                        <div class="small mb-1"><span class="fw-semibold text-secondary">Name:</span> {{ $reg->emergency_contact_name }}</div>
                                        <div class="small mb-1"><span class="fw-semibold text-secondary">Phone:</span> {{ $reg->emergency_contact_phone }}</div>
                                        <div class="small"><span class="fw-semibold text-secondary">Relationship:</span> {{ $reg->emergency_contact_relationship }}</div>
                                    </td>
                                    <td class="pe-4 small text-secondary">
                                     {{ $reg->registration_date }}
                                    </td>
                                </tr>
                            @endforeach
                            @if($registrations->isEmpty())
                                <tr class = "pe-4">
                                    <td colspan="11" class="text-center text-secondary py-4">
                                        <i class="fa-solid fa-triangle-exclamation fa-2x mb-2"></i>
                                        <div class="fw-bold">No registrations found.</div>
                                        <div class="small">Try adjusting your search or check back later.</div>
                                    </td>
                                </tr>
                                @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class ="card-footer d-flex justify-content-end align-items-center bg-white border-top-0">
                <div class="ms-3">
                    {{ $registrations->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection