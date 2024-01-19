@extends('components.navbar')


@section('content')
    <div class="m-5 row text-center d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-center flex-direction-column my-4">
            <div class="card text-center" style="width:50%;margin-bottom:20px">
                    <div class="card-header">
                        @if ($po->author->image)
                            <img src="{{ asset('storage/' . $po->author->image) }}" alt="Photo de profil"
                                style="width:60px; height: 60px; border-radius:50%">
                        @else
                            <!-- Ajoutez une image par défaut ou un texte alternatif si l'image n'est pas présente -->
                            <div style="width: 60px; height: 60px; background-color: #ccc; border-radius: 50%;"></div>
                        @endif
                        <strong>{{ $po->author->prenom }} {{ $po->author->nom }}</strong>
                    </div>
                    <div class="card-body row">
                        <p class="lead text-start">
                            {{ $po->content }}
                        </p>
                        @if ($po->video)
                            <video width="720" height="420" controls class="py-2">
                                <source src="{{ asset('storage/' . $po->video) }}" type="video/mp4">
                                Video non pris en charge
                            </video>
                        @endif
                    </div>
                    <div class="card-footer text-body-secondary">
                        <form action="{{ route('post.details.comment', ['post' => $po]) }}" method="post">
                            @csrf
                            <div class="d-flex h-15">
                                <input class="w-100 bg-light rounded-lg px-5" style="border-radius: 10px; border:none;outline: none" 
                                       type="text" name="commentaire" placeholder="Ajouter votre commentaire..." autocomplete="off">
                                {{-- <button class="ms-2 w-12 d-flex justify-content-center align-items-center flex-shrink-0 bg-primary rounded-circle text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon bi bi-code" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                        <path d="M10 9l-2 2l2 2" />
                                        <path d="M14 9l2 2l-2 2" />
                                    </svg>
                                </button> --}}
                                <button style="border: none">
                                    <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' viewBox="0 0 24 24">
                                        <title>Commenter</title>
                                        <g id="message_1_line" fill='none' fill-rule='nonzero'>
                                            <path
                                                d='M24 0v24H0V0h24ZM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01-.184-.092Z' />
                                            <path fill='#5E5E5EFF'
                                                d='M19 3a3 3 0 0 1 2.995 2.824L22 6v10a3 3 0 0 1-2.824 2.995L19 19h-3.697l-2.61 1.74a1.25 1.25 0 0 1-1.257.075l-.13-.075L8.698 19H5a3 3 0 0 1-2.995-2.824L2 16V6a3 3 0 0 1 2.824-2.995L5 3h14Zm0 2H5a1 1 0 0 0-.993.883L4 6v10a1 1 0 0 0 .883.993L5 17h3.697a2 2 0 0 1 .965.248l.145.088L12 18.798l2.193-1.462a2 2 0 0 1 .941-.329l.169-.007H19a1 1 0 0 0 .993-.883L20 16V6a1 1 0 0 0-.883-.993L19 5ZM8.5 10a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm7 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z' />
                                        </g>
                                    </svg>
                                </button>
                            </div>
                             
                        </form>
                </div>
        </div>
            </div>
            <div class="w-50" style="margin-left: 25%">
                {{-- <form action="{{ route('post.details.comment', ['post' => $po]) }}" method="post">
                    @csrf
                    <div class="d-flex h-15">
                        <input class="w-50 bg-light rounded-lg px-5 text-dark focus-outline focus-outline-2 focus-outline-primary" 
                               type="text" name="commentaire" placeholder="Ajouter votre commentaire..." autocomplete="off">
                        <button class="ms-2 w-12 d-flex justify-content-center align-items-center flex-shrink-0 bg-primary rounded-circle text-light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon bi bi-code" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                <path d="M10 9l-2 2l2 2" />
                                <path d="M14 9l2 2l-2 2" />
                            </svg>
                        </button>
                    </div>
                     
                </form> --}}
                <div class="">
                    @foreach ($commentaires as $comment)
                        <div class="d-flex bg-light rounded">
                            <img class="rounded-circle" style="width: 5%;"
                                src="{{ $comment->user->image ? asset('storage/' . $comment->user->image) : asset('defaulte/userdefaulte.jpg') }}"
                                alt="Image de profil de {{ $comment->user->prenom }} {{ $comment->user->nom }}">
                            <div class="ms-4 d-flex flex-column">
                                <div class="d-flex flex-column sm:flex-row sm:align-items-center">
                                    <h6 class="font-weight-bold text-dark text-2xl">{{ $comment->user->prenom }}
                                        {{ $comment->user->nom }}</h6>
                                    <time class="mt-2 sm:mt-0 ms-4 text-xs text-secondary"
                                        datetime="{{ $comment->created_at }}">{{ $comment->created_at }}</time>
                                </div>
                                <p class="mt-2 text-dark sm:leading-loose">{{ $comment->contenu }}</p>
                                @if (Auth::user()->id === $comment->user->id)
                                    <a href="{{ route('commentaire.delete', $comment->id)}}"><i class="far fa-trash-alt"></i></a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    {{ $commentaires->links() }}
                </div>
                
            </div>
             

        
                @endsection
