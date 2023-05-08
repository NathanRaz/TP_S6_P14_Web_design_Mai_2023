<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('/storage/{{ $content->image }}');">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4">{{ $content->title }}</h1>
            <div class="post-meta align-items-center text-center">
              <span> {{ date_format ($content->created_at, 'd M Y') }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    <div class="container">
        <div class="row mt-5">
            <p>{{  $content->content  }}</p>
        </div>
    </div>