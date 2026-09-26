<x-layout>
    <header class="container-fluid min-vh-100 bg-success">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="text-center">Crea un Articolo</h1>
            </div>
            
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            
           <x-layout-errors/>
            
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6 mt-5">
                    <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data" class="custom-shadow roundend-4 p-3">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sottotitolo</label>
                            <input type="text" name="subtitle" value="{{old('subtitle')}}" class="form-control" id="subtitle">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Contenuto</label>
                            <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{old('body')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Immagine</label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Crea Articolo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
</x-layout>