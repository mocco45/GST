@extends('home')
@section('contents')
@if(session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif.
    <div class="container">
        <form action="{{ route('post') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="card mb-3" style="max-width: 900px;" >
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div id="imageContainer" style="width: 400px; height: 400px; cursor: pointer; display: flex; justify-content: center; align-items: center;">
                                    <input type="file" name="postImage" id="fileInput" accept="image/*" style="display: none;" onchange="displayImage(event)">
                                    <img class="img-account-profile rounded-circle mb-2"
                                         src="{{ asset('assets/img/demo/user-placeholder.svg') }}"
                                         alt=""
                                         id="selectedImage"
                                    >
                                    {{-- <img  style="display: none; max-width: 100%; max-height: 100%; object-fit: contain;" /> --}}
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="card-body">
                                       <div class="mb-3">
                                        <label for="" class="form-label">Title</label>
                                        <input
                                            type="text"
                                            name="title"
                                            id=""
                                            class="form-control"
                                            style="border-bottom: 1px solid blue; transition: border-bottom-color 0.8s;"
                                            placeholder="Enter title"
                                            aria-describedby="helpId"
                                        />
                                       </div>
                                        <textarea name="message" cols="55" class="mb-3" style="border: 1px solid rgba(0, 0, 255, 0.137)" placeholder="  write message" rows="10"></textarea>
                                       
                                       <div class="mb-3" style="margin-left: 40%;">
                                       <button
                                        type="submit"
                                        class="btn btn-primary btn-md"
                                       >
                                        Button
                                       </button>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="col-6 bg-primary">
                        hey
                    </div>
                    <div class="col-6 bg-success">
                       <div class="mb-3 mt-3">
                        <label for="" class="form-label">Name</label>
                        <input
                            type="text"
                            name=""
                            id=""
                            class="form-control"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                       </div>
                       <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input
                            type="text"
                            name=""
                            id=""
                            class="form-control"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                       </div><div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="text"
                            name=""
                            id=""
                            class="form-control"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                       </div><div class="mb-3">
                        <label for="" class="form-label">Contact</label>
                        <input
                            type="text"
                            name=""
                            id=""
                            class="form-control"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                       </div><div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input
                            type="text"
                            name=""
                            id=""
                            class="form-control"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                       </div>
                       <div class="mb-3" style="margin-left: 40%;">
                       <button
                        type="submit"
                        class="btn btn-primary btn-md"
                       >
                        Button
                       </button>
                       </div>
                    </div> --}}
                </div>
            </div>
        </form>
    </div>
    <script>
    document.getElementById('imageContainer').addEventListener('click', function() {
    document.getElementById('fileInput').click();
});

function displayImage(event) {
    const file = event.target.files[0];
    const image = document.getElementById('selectedImage');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            image.src = e.target.result;
            image.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
}

    </script>
@endsection