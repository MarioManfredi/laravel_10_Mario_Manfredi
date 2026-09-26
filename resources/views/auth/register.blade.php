<x-layout>
    <header class="container-fluid min-vh-100 bg-success">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="text-center">Registrati</h1>
            </div>
               
            <x-layout-errors/>
            
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6 mt-5">
                    <form method="POST" action="{{route('register')}}" enctype="multipart/form-data" class="custom-shadow roundend-4 p-3">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation " class="form-label">Conferma Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Registrati</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
</x-layout>