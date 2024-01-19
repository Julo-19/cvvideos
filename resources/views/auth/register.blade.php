<x-guest-layout>

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf


        <div class="d-flex flex-direction-column justify-content-around">
            <!-- Nom -->
            <div>
                <x-input-label for="nom" :value="__('Nom')" />
                <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required 
                autofocus autocomplete="nom" />
                <x-input-error :messages="$errors->get('nom')" class="mt-2" />
            </div>

            <!-- Prenom -->
            <div>
                <x-input-label for="prenom" :value="__('Prenom')" />
                <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required 
                autofocus autocomplete="prenom" />
                <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
            </div>
        </div>

        <div class="d-flex flex-direction-column justify-content-around mt-2">
            <!-- Adresse -->
            <div>
                <x-input-label for="adresse" :value="__('Adresse')" />
                <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required 
                autofocus autocomplete="adresse" />
                <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" 
                required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="d-flex flex-direction-column justify-content-around mt-2">
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <!-- type d'utilisateurs -->
            <div class="mt-2">
                <label for="user_type" class="form-label">Type d'utilisateur</label>
                <select name="user_type" id="user_type" class="form-select" required>
                    <option value="Stagiaire">Stagiaire</option>
                    <option value="Coach">Coach</option>
                    <option value="Membre RDL">Membre RDL</option>
                </select>
            </div>

            <!-- photo de profil -->
            <div class="mt-2">
                <label for="image" class="form-label">Choisir une image de profil</label>
                <input type="file" name="image">
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 
            focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
