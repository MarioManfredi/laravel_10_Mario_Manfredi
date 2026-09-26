<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($article->img)}}" class="card-img-top img-fluid card-custom" alt="Immagine dell'articolo: {{$article->title}}">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <h4 class="lead">{{$article->subtitle}}</h4>
        <p class="card-text">{{$article->body}}</p>
    </div>
</div>