<div>
    <div class="row g-4">
        <div class="col-12">
            <input type="text" class="form-control" wire:model.live="search">
        </div>
        <div class="col-12">
            <h4>Articoli</h4>

            <ul>
                @foreach($articles as $article)
                <li>{{ $article->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>