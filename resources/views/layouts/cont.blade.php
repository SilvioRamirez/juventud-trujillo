  <div class="container col-md-10 row offset-md-1">
    @can('personas.index')
      <div class="col-md-4">
          <div class="card border-light mb-3 shadow">
              <div class="card-body">
                  <div class="col-md-12 container-fluid no-padding row">
                      <div class="col-md-4 no-padding">
                          <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-id-card-alt fa-stack-1x fa-inverse"></i>
                          </span>
                      </div>
                      <div class="col-md-8 no-padding">
                          <h1 class="text-center text-success">
                              <div id="cont_carnetizados">
                              {{ $contPersona }}
                              </div>
                          </h1>
                          <h4 class="text-center text-success no-padding">Carnetizados</h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endcan
@can('users.index')
  <div class="col-md-4"> <!-- Tamaño de Panel-->
    <div class="card border-light mb-3 shadow"> <!-- Inicia el card -->
      <div class="card-body">
        <div class="col-md-12 container-fluid no-padding row"> <!-- Primera Linea -->
            <div class="col-md-4 no-padding">
              <span class="fa-stack fa-3x">
                <i class="fa fa-circle fa-stack-2x text-info"></i>
                <i class="fa fa-users fa-stack-1x fa-inverse"></i>
              </span>
            </div>
            <div class="col-md-8 no-padding">
              <h1 class="text-center text-info">
                <div id="cont_usuarios">
                {{ $contUser }}
              </div></h1>
              <h4 class="text-center text-info no-padding">Usuarios</h4>
            </div>
        </div> <!-- Fin Primera Linea -->  
      </div>
    </div><!-- Fin del panel -->
  </div><!-- Fin Tamaño de Panel--> 
@endcan
  <div class="col-md-4"> <!-- Tamaño de Panel-->
    <div class="card border-light mb-3 shadow"> <!-- Inicia el card -->
      <div class="card-body">
        <div class="col-md-12 container-fluid no-padding row"> <!-- Primera Linea -->
            <div class="col-md-4 no-padding">
              <span class="fa-stack fa-3x">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-map fa-stack-1x fa-inverse"></i>
              </span>
            </div>
            <div class="col-md-8 no-padding">
              <h1 class="text-center text-primary">
                <div id="location">
                {{ Auth::user()->municipio }}
                </div>
              </h1>
            </div>
        </div> <!-- Fin Primera Linea -->  
      </div>
    </div><!-- Fin del panel -->
  </div><!-- Fin Tamaño de Panel--> 

  </div>