<div class = "container mt-5">
    <h1>@yield('title')</h1>

    <form action = "{{ route($content->exists ? 'backoffice.contents.update' : 'backoffice.contents.store', $content) }}" method = "post" enctype="multipart/form-data">
        @csrf
	    @method($content->exists ? 'put' : 'post')
	
	    @if($content->image != null)
		    <div class="row align-items-stretch retro-layout">
				<div class="col-md-4">
					<a href="#" class="h-entry mb-30 v-height gradient">
						<div class="featured-img" style="background-image: url('/storage/{{ $content->image }}');"></div>
					</a>
				</div>
		    </div>
	    @endif
	    
	    <div class = "row p-3">
            @include('components.input', ['class' => 'col' ,'name' => 'title', 'label' => 'Titre', 'value' => $content->title])
        </div>

        <div class = "row p-3">
            @include('components.input', ['type' => 'textarea', 'class' => 'col' ,'name' => 'content', 'label' => 'Le contenu', 'value' => $content->content])
        </div>

        <div class = "row p-3">
            @include('components.input', ['type' => 'file',  'name' => 'image', 'label' => 'Image du contenu'])
        </div>

        <div class = "p-3">
            <button class = "btn btn-primary">
                @if($content->exists)
		            Modifier
	            @else
		            Créer
	            @endif
            </button>
        </div>

    </form>

</div>
