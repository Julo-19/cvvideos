<x-app-layout>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" 
        class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
    
        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" 
        class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-600 lg:translate-x-0 lg:static lg:inset-0">
            <nav class="mt-10"> 
                <a class="flex items-center px-6 py-2 mt-4 text-white fw-600" href="{{ route('admin.accueil')}}"
                onmouseover="this.style.background='rgb(219, 225, 234)';this.style.color='#FF0000';" onmouseout="this.style.background='';this.style.color='';">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
                      </svg>
    
                    <span class="mx-3">Dashboard</span>
                </a>
    
                <a class="flex items-center px-6 py-2 mt-4 text-white" href="{{ route('admin.list')}}"
                onmouseover="this.style.background='rgb(219, 225, 234)';this.style.color='#FF0000';" onmouseout="this.style.background='';this.style.color='';">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                    </svg>
    
                    <span class="mx-3">Liste Utilisateurs</span>
                </a>
    
                <a class="flex items-center px-6 py-2 mt-4 text-white" href="../welcome.blade.php"
                onmouseover="this.style.background='rgb(219, 225, 234)';this.style.color='#FF0000';" onmouseout="this.style.background='';this.style.color='';">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                      </svg>
    
                    <span class="mx-3">Accueil</span>
                </a>
            </nav>
        </div>
        <div class="flex flex-col flex-1">
            
            <main class="flex-1   bg-gray-200">
                <div class="container px-6 py-8 mx-auto">
                    <div class="py-6">
                        <div class="max-w-7xl mx-auto ">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6" style="color: rgb(255, 119, 0); text-align:center;font-weight:800; font-size:30px; ">
                                    {{ __("LISTE DES UTILISATEURS") }}
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="flex flex-col mt-8">
                        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                                <table class="min-w-full mx-auto">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Nom
                                            </th>
                                            <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Prenom
                                            </th>
                                            <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Email
                                            </th>
                                            <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Adresse
                                            </th>
                                            <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Type d'utilisateurs
                                            </th>
                                            <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Photo de profil
                                            </th>
                                            <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>

                                    
                                    <tbody class="bg-white">
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                <div class="flex items-center">
                                                                    
                                                                    <div class="ml-4">
                                                                        <div class="text-sm font-medium leading-5 text-gray-900">{{$user->nom}}</div>
                                                                    </div>
                                                                </div>
                                                            </td>
                    
                                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                <div class="text-sm leading-5 text-gray-900">{{$user->prenom}}</div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                <div class="flex items-center">
                                                                    
                                                                    <div class="ml-4">
                                                                        <div class="text-sm font-medium leading-5 text-gray-900">{{$user->email}}</div>
                                                                    </div>
                                                                </div>
                                                            </td>
                    
                                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                <div class="text-sm leading-5 text-gray-900">{{$user->adresse}}</div>
                                                            </td>
                    
                                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                <span
                                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">{{$user->user_type}}</span>
                                                            </td>
                                                            
                                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                @if($user->image)
                                                                    <img src="{{ asset('storage/' . $user->image) }}" alt="Photo de profil" style="width:60px; height:60px; border-radius:50%">
                                                                @else
                                                                <p>Aucune photo de profil disponible.</p>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @csrf
                                                                @method('delete')
                                                                <a href="/admin/list/delete/{{ $user->id }}" class="btn p-2 text-white" style="background-color: rgba(255, 0, 0, 0.869); 
                                                                border-radius:5px; font-weight:600;">Supprimer</a>
                                                            </td>
                                                        </tr> 
                                                    @endforeach
                                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
</x-app-layout>