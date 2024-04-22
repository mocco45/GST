@extends('home')
@section('contents')
    <div
        class="table-responsive"
    >
    @if ($staffs->count() > 0)
        <table
            class="table table-bordered"
        >
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Personal Details</th>
                    <th scope="col">Title</th>
                    <th scope="col">contact</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $staff)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td><img src="{{ asset('storage/images/staff/'.$staff->photo) }}" class="object-fit-md-contain border rounded" alt="image"> <br> <span class="text-upercase">{{ $staff->name }}</span></td>
                        <td>{{ $staff->title }}</td>
                        <td>{{ $staff->email }} <br> {{ $staff->contact }}</td>
                        <td>
                            <button
                            type="button"
                            class="btn btn-primary btn-lg"
                            data-bs-toggle="modal"
                            data-bs-target="#modalId-{{$staff->id}}"
                        >
                            view
                        </button>
                        
                        <!-- Modal Body-->
                        <div
                            class="modal fade"
                            id="modalId-{{$staff->id}}"
                            tabindex="-1"
                            role="dialog"
                            aria-labelledby="modalTitleId"
                            aria-hidden="true"
                        >
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">
                                            Staff
                                        </h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card mb-3" >
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img
                                                        src="{{ asset('storage/images/staff/'.$staff->photo) }}"
                                                        class="img-fluid rounded-start"
                                                        alt="Card title"
                                                    />
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div>
                                                            <h3 class="card-title">Name</h3>
                                                            <span class="card-text">{{ $staff->name }}</span>
                                                        </div>
                                                        <div>
                                                            <h3 class="card-title">Title</h3>
                                                            <span class="card-text">{{ $staff->title }}</span>
                                                        </div>
                                                        <div>
                                                            <h3 class="card-title">Contacts</h3>
                                                            <span class="card-text">{{ $staff->contact }}</span><br>
                                                            <span class="card-text">{{ $staff->email }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Close
                                        </button>
                                        <a href="{{ route('delStaff', $staff) }}" class="btn btn-danger">delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p class="text-center">No Staff Created</p>
        @endif
    </div>
        
@endsection