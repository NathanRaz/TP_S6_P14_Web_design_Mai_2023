<div class = "container">
    <h2>@yield('title')</h2>
    <div class="row align-items-stretch retro-layout">
	    @forelse($contents as $content)
		    <div class="col-md-4">
            <a href="{{  route ('frontoffice.contents.show', ['slug' => Str::slug($content->title), 'content' => $content]) }}" alt="{{ $content->title }}" class="h-entry mb-30 v-height gradient">
                <div class="featured-img" style="background-image: url('/storage/{{ $content->image }}');"></div>
            </a>
            <div class="text">
                    <span class="date">{{ date_format ($content->created_at, 'd M Y') }}</span>
                    <h2>{{ $content->title  }}</h2>
                </div>
            </div>
	    @empty
		    <h2 class="mt-5 fw-bold text-danger text-center fst-italic">Aucune actualité pour le moment ...</h2>
	    @endforelse
    </div>
</div>