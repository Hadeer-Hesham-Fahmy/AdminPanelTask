<!-- Start retroy layout blog posts -->
<section class="section bg-light">
    <div class="container">
        <div class="row align-items-stretch retro-layout">
            
            
            @foreach ($companies as $company )
            @if ($company->path)
            <div class="col-md-4">
                <a href="single.html" class="h-entry mb-30 v-height gradient">
                    <div class="featured-img" style="background-image: url({{ asset('/storage/logo/'. $company->path) ?? ''}}); background-size:contain ;"></div>
                    <div class="text">
                        <h2>{{ $company->company_name }}</h2>
                    </div>
                </a>
            </div>
                    @endif
                    @endforeach
                    
            
        </div>
    </div>
</section>
<!-- End retroy layout blog posts -->
