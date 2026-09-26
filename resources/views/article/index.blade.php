<x-layout>
    <header class="container-fluid min-vh-100 bg-success">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="text-center">I miei Articoli</h1>
            </div>
        </div>
        
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 d-flex justify-content-center my-3">
                <x-card
                :article='$article'
                />
            </div>
            @endforeach
        </div>
    </header>
</x-layout>