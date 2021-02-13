<div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
        <img src="{{ config('app.b2_assets_url').'img/certs/'.$src }}" class="img-fluid" alt="">
        <div class="portfolio-links">
            <a href="{{ asset($asset) }}" data-gall="portfolioGallery"
               class="venobox"
               title="{{ $title }}"><i class="bx bx-plus"></i></a>
            <a href="{{ $link }}"
               title="More Details"><i class="bx bx-link"></i></a>
        </div>

    </div>
    <h5>{{ $title }}</h5>
</div>
