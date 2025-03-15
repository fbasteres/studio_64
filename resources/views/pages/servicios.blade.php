@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-5"></div>
    <div class="col-md-6">
        <div class="card">
          <div class="card-body">

            <div class="pt-5"></div>

            <h3 class="card-title">Project ID</h3>
            <p class="card-subtitle">Used when interacting with the API.</p>
            <div class="input-icon">
              <input type="text" value="prj_5ae74426fe935327a8fa178b07d84ad9" class="form-control" placeholder="Search…" readonly="">
              <span class="input-icon-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                  <path d="M15 3v4a1 1 0 0 0 1 1h4"></path>
                  <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z"></path>
                  <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2"></path>
                </svg>
              </span>
            </div>
          </div>
          <div class="card-footer">
            <div class="row align-items-center">
              <div class="col">Learn more about <a href="#">Project ID</a></div>
              <div class="col-auto">
                <a href="#" class="btn btn-primary btn-2"> Save </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pt-5"></div>

      <div class="container">
        <div class="row">

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-stamp">
            <div class="card-stamp-icon bg-yellow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
              </svg>
            </div>
          </div>
          <div class="card-body">
            <h3 class="card-title">Card with icon bg</h3>
            <p class="text-secondary">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi
              nostrum recusandae reiciendis saepe.
            </p>
          </div>
        </div>


        
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-stamp">
            <div class="card-stamp-icon bg-yellow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
              </svg>
            </div>
          </div>
          <div class="card-body">
            <h3 class="card-title">Card with icon bg</h3>
            <p class="text-secondary">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi
              nostrum recusandae reiciendis saepe.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="ribbon ribbon-top bg-yellow">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
          </div>
          <div class="card-body">
            <h3 class="card-title">Card with top ribbon</h3>
            <p class="text-secondary">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi
              nostrum recusandae reiciendis saepe.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="ribbon bg-red">NEW</div>
          <div class="card-body">
            <h3 class="card-title">Card with text ribbon</h3>
            <p class="text-secondary">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi
              nostrum recusandae reiciendis saepe.
            </p>
          </div>
        </div>
      </div>

    </div>
</div> 

<div class="pt-5"></div>

<div class="video-container">
    <video id="video" autoplay="" loop="" muted="" playsinline="">
        <source src="http://localhost/studio_64/public/src/img/video/video_portada.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
    </video>
</div>

<div class="pt-5"></div>



    
</div>
@endsection