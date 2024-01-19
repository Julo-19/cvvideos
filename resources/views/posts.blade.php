@extends('components.navbar')


@section('content')
    <div class="m-5 row text-center d-flex align-items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary b-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Commencer votre Post
                </button>

                <!-- Modal -->
                <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Partage CV video</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-body">
                                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Description de votre post</label>
                                            <input type="text" name="content" class="form-control" rows="3"
                                                cols="3">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Choisissez une video</label>
                                            <input type="file" name="video">
                                        </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Publier</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="d-flex align-items-center justify-content-center flex-direction-column my-4">
            <div class="card text-center" style="width:40%;margin-bottom:20px">
                @foreach ($posts as $post)
                    <div class="card-header">
                        @if ($post->author->image)
                            <img src="{{ asset('storage/' . $post->author->image) }}" alt="Photo de profil"
                                style="width:60px; height: 60px; border-radius:50%">
                        @else
                            <!-- Ajoutez une image par défaut ou un texte alternatif si l'image n'est pas présente -->
                            <div style="width: 60px; height: 60px; background-color: #ccc; border-radius: 50%;"></div>
                        @endif
                        <strong>{{ $post->author->prenom }} {{ $post->author->nom }}</strong>
                    </div>
                    <div class="card-body row">
                        <p class="lead text-start">
                            {{ $post->content }}
                        </p>
                        @if ($post->video)
                            <video width="720" height="420" controls class="py-2">
                                <source src="{{ asset('storage/' . $post->video) }}" type="video/mp4">
                                Video non pris en charge
                            </video>
                        @endif
                    </div>
               
                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                <a href="{{ route('post.details.show', $post->id) }}" class="btn btn-primary p-2" style="border-radius: 10px; border:none; background-color: #F76300;">Voir le post</a>
                  </div>
        </div>
                @endforeach
            </div>
@endsection
