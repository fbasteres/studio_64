@include('layouts.style')

<div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <!-- BEGIN NAVBAR LOGO -->
        <a href="{{ route('inicio1') }}" class="navbar-brand">
			<img class="header--logo" src="{{ asset('src/img/Logo_web.svg') }}" alt="">
        </a>
        <!-- END NAVBAR LOGO -->
      </div>
      <div class="card card-md">
        <div class="card-body">
          <h2 class="h2 text-center mb-4">Inicio de Sesion en tu Cuenta</h2>
          <form action="./" method="get" autocomplete="off" novalidate="">
            <div class="mb-3">
              <label class="form-label">Correo Electronico</label>
              <input type="email" class="form-control" placeholder="tu@studio64.com" autocomplete="off">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Contrasena
                <span class="form-label-description">
                  <a href="./forgot-password.html">Olvide mi contrasena</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" placeholder="Tu contrasena" autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Mostrar contrasena" data-bs-original-title="Show password">
                    <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                      <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                      <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                    </svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox" class="form-check-input">
                <span class="form-check-label">Recordar contrasena en este dispositivo</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </div>
          </form>
        </div>
    </div>
