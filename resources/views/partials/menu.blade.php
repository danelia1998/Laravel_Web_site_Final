<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">Enjoy My Car Selling Site For PHP Final</h4>
                <p class="text-muted">{{ config('custom.header_text') }}</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Car Category:</h4>

                <ul class="list-unstyled">
                    @foreach ($_CATEGORIES as $category)
                    <li><a href="{{ route('front.category', ['slug' => $category->slug]) }}" class="text-white">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-dark  box-shadow" style="background-color: #ff8600;">
    <div class="container d-flex justify-content-between">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <div style="    font-size: 38px;
    margin-top: -23px;">🏎️</div>
            <strong>{{ config('app.name') }}</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>