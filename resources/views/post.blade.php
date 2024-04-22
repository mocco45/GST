@extends('home')
@section('contents')
    <div
        class="table-responsive"
    >
        @if ($posts->count() > 0)
        <table
        class="table table-bordered"
        >
        <thead>
            <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Post Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Message</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td><div class="image-contain"><img src="{{ asset('storage/images/posts/'.$post->image) }}" alt="image"></div></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->message }} </td>
                        <td>{{ $post->user->name }} </td>
                        <td>
                        <button
                            type="button"
                            class="btn btn-primary btn-lg"
                            data-bs-toggle="modal"
                            data-bs-target="#modalId-{{$post->id}}"
                        >
                            view
                        </button>
                        
                        <!-- Modal Body-->
                        <div
                            class="modal fade"
                            id="modalId-{{$post->id}}"
                            tabindex="-1"
                            role="dialog"
                            aria-labelledby="modalTitleId"
                            aria-hidden="true"
                        >
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">
                                            {{ $post->title }}
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
                                                        src="{{ asset('storage/images/posts/'.$post->image) }}"
                                                        class="img-fluid rounded-start"
                                                        alt="Card title"
                                                    />
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            {{ $post->message }}
                                                        </p>
                                                        <p class="card-text">
                                                            <small class="text-muted"
                                                                >posted {{  $post->created_at->format('d-m-Y H:i:s') }}</small
                                                            >
                                                        </p>
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
                                        <a href="{{ route('delPost', $post) }}" class="btn btn-danger">delete</a>
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
            <p class="text-center">No post yet</p>
        @endif
    </div>
        
@endsection