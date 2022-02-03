@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

  <div class="container p-4">

    <div id="containerPerfil" class="row p-4 d-flex align-items-baseline">
      <div class="col-md-2">
        @if($perfil->imagen)
          <img src="/storage/{{$perfil->imagen}}" class="w-20 rounded-circle" alt="foto perfil" width="150px" height="150px">
        @endif
      </div>
      <div class="col-md-10">
        <h4 class=" text-primary-dark">{{$perfil->usuario->name}}</h4>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item"><i class="fas fa-user-circle"></i> Admin </li>
          <li class="list-group-item"><i class="fas fa-address-card"></i> 210021016 </li>
          <li class="list-group-item"><i class="fas fa-envelope"></i>  {{$perfil->usuario->email}} </li>
        </ul>
        {{-- <a href="{{$perfil->usuario->url}}"> visitar Sitio Web</a> --}}
      </div>
    </div>
    <div id="navPerfil" class="row p-4">
      <div class="col-md-12">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-informacion-tab" data-bs-toggle="pill" data-bs-target="#pills-informacion" type="button" role="tab" aria-controls="pills-informacion" aria-selected="true">Información</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-dadmin-tab" data-bs-toggle="pill" data-bs-target="#pills-dadmin" type="button" role="tab" aria-controls="pills-dadmin" aria-selected="false">Datos Administrativos</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-nombramientos-tab" data-bs-toggle="pill" data-bs-target="#pills-nombramientos" type="button" role="tab" aria-controls="pills-nombramientos" aria-selected="false">Nombramientos</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-cuenta-tab" data-bs-toggle="pill" data-bs-target="#pills-cuenta" type="button" role="tab" aria-controls="pills-cuenta" aria-selected="false">Cuenta</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-archivos-tab" data-bs-toggle="pill" data-bs-target="#pills-archivos" type="button" role="tab" aria-controls="pills-archivos" aria-selected="false">Archivos</button>
          </li>
        </ul>

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tab-content my-5" id="pills-tabContent">
          {{-- INFORMACION --}}
          <div class="tab-pane fade show active" id="pills-informacion" role="tabpanel" aria-labelledby="pills-informacion-tab">
            <!--DATOS PERSONALES-->
            <div class="row navPerfil2">
                <div class="col-md-12 borderB p-5">
                  <h5 class="perfTitle">Datos Personales</h5>
                </div>
               
                <div class="col-md-12 p-3" id="datosPersonales">
                  <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
              
              <div class="col-md-9" id="datosPersonales">
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="staticNombre" class="form-label">NOMBRE</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticNombre" value="Perla">
                  </div>
                  <div class="col-md-4">
                    <label for="staticApaterno" class="form-label">APELLIDO PATERNO</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticApaterno" value="Mendoza">
                  </div>
                  <div class="col-md-4">
                    <label for="staticAmaterno" class="form-label">APELLIDO MATERNO</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticAmaterno" value="Osorio">
                  </div>
                </div>
                <div class="row g-3 mt-2">
                  <div class="col-md-4">
                    <label for="staticCurp" class="form-label">CURP</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticCurp" value="MEOP950706MMCNSR07">
                  </div>
                  <div class="col-md-4">
                    <label for="staticRfc" class="form-label">RFC</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticRfc" value="MEOP9507061Z3">
                  </div>
                  <div class="col-md-4">
                    <label for="staticSexo" class="form-label">SEXO</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticSexo" value="Femenino">
                  </div>
                </div>
              </div>
            </div>
            <div class="row navPerfil2 p-3" >
              <div class="co-md-6">
                <h5 class="perfTitle">Datos Personales</h5>
              </div>
              <div class="co-md-6">
            
              </div>
              <div class="col-md-2">
                <span class="h6 sp1">DATOS PERSONALES</span>
              </div>
              <div class="col-md-9" id="datosPersonales">
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="staticNombre" class="form-label">NOMBRE</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticNombre" value="Perla">
                  </div>
                  <div class="col-md-4">
                    <label for="staticApaterno" class="form-label">APELLIDO PATERNO</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticApaterno" value="Mendoza">
                  </div>
                  <div class="col-md-4">
                    <label for="staticAmaterno" class="form-label">APELLIDO MATERNO</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticAmaterno" value="Osorio">
                  </div>
                </div>
                <div class="row g-3 mt-2">
                  <div class="col-md-4">
                    <label for="staticCurp" class="form-label">CURP</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticCurp" value="MEOP950706MMCNSR07">
                  </div>
                  <div class="col-md-4">
                    <label for="staticRfc" class="form-label">RFC</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticRfc" value="MEOP9507061Z3">
                  </div>
                  <div class="col-md-4">
                    <label for="staticSexo" class="form-label">SEXO</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticSexo" value="Femenino">
                  </div>
                </div>
              </div>
            </div>
            <!--DATOS DE CONTACTO-->
            <div class="row py-5">
              <div class="col-md-2">
                <span class="h6 sp1">DATOS CONTACTO</span>
              </div>
              <div class="col-md-9" id="datosContacto">
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="staticEmail" class="form-label">EMAIL</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticEmail" value="{{$perfil->usuario->email}}">
                  </div>
                  <div class="col-md-4">
                    <label for="staticTelefono" class="form-label">TELEFONO</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticTelefono" value="{{$perfil->usuario->dcontacto->telefono}}">
                  </div>
                  <div class="col-md-4">
                    <label for="staticTelefono2" class="form-label">TELEFONO OFICINA</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticTelefono2" value="{{$perfil->usuario->dcontacto->telefono_contacto}}">
                  </div>
                </div>
                <div class="row g-3 mt-2">
                  <div class="col-md-6">
                    <label for="staticCalle" class="form-label">CALLE</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticCalle" value="{{$perfil->usuario->dcontacto->calle}}">
                  </div>
                  <div class="col-md-3">
                    <label for="staticNumero" class="form-label">NUMERO</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticNumero" value="{{$perfil->usuario->dcontacto->numero}}">
                  </div>
                  <div class="col-md-3">
                    <label for="staticColonia" class="form-label">COLONIA</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticColonia" value="{{$perfil->usuario->dcontacto->colonia}}">
                  </div>
                </div>
                <div class="row g-3 mt-2">
                  <div class="col-md-4">
                    <label for="staticMunicipio" class="form-label">MUNICIPIO</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticMunicipio" value="{{$perfil->usuario->dcontacto->municipio}}">
                  </div>
                  <div class="col-md-4">
                    <label for="staticEstado" class="form-label">ESTADO</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEstado" value="{{$perfil->usuario->dcontacto->estado}}">
                  </div>
                  <div class="col-md-4">
                    <label for="staticCp" class="form-label">C.P.</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticCp" value="{{$perfil->usuario->dcontacto->cp}}">
                  </div>
                </div>
                <div class="row g-3 mt-2">
                  <div class="col-md-6">
                    <label for="staticFb" class="form-label">FACEBOOK</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticFb" value="{{$perfil->usuario->dcontacto->fb}}">
                  </div>
                  <div class="col-md-6">
                    <label for="staticTwitter" class="form-label">TWITTER</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticTwitter" value="{{$perfil->usuario->dcontacto->twitter}}">
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- DATOS ADMINISTRATIVOS --}}
          <div class="tab-pane fade" id="pills-dadmin" role="tabpanel" aria-labelledby="pills-dadmin-tab">
            <div class="row py-5">
              <div class="col-md-2">
                <span class="h6 sp1">DATOS ADMINISTRATIVOS</span>
              </div>
              <div class="col-md-9" id="datosAdmin">
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="staticCsp" class="form-label">CLAVE SERVIDOR PUBLICO</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticCsp" value="210021016">
                  </div>
                  <div class="col-md-4">
                    <label for="staticTipoIngreso" class="form-label">TIPO DE INGRESO</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticTipoIngreso" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="statiUsicamm" class="form-label">USICAMM</label>
                    <input type="text" readonly class="form-control-plaintext " id="statiUsicamm" value="">
                  </div>
                </div>
                <div class="row g-3 mt-2">
                  <div class="col-md-4">
                    <label for="staticFGobierno" class="form-label">FECHA INGRESO GOBIERNO</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticFGobierno" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="staticFNivel" class="form-label">FECHA INGRESO NIVEL</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticFNivel" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="staticFInstitucion" class="form-label">FECHA INGRESO INSTITUCION</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticFInstitucion" value="">
                  </div>
                </div>
                <div class="row g-3 mt-2">
                  <div class="col-md-4">
                    <label for="staticPuestoF" class="form-label">PUESTO FUNCIONAL</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticPuestoF" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="staticCategoria" class="form-label">CATEGORIA</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticCategoria" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="staticAservicio" class="form-label">AÑOS SERVICIO</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticAservicio" value="">
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- CUENTA --}}
          <div class="tab-pane fade" id="pills-cuenta" role="tabpanel" aria-labelledby="pills-cuenta-tab">
            <div class="row py-5">
              <div class="col-md-2">
                <span class="h6 sp1">DATOS USUARIO</span>
              </div>
              <div class="col-md-9" id="datosAdmin">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="staticUsuario" class="form-label">NOMBRE USUARIO</label>
                    <input type="text" readonly class="form-control-plaintext " id="staticUsuario" value="{{$perfil->usuario->name}}">
                  </div>
                  <div class="col-md-6">
                    <label for="staticEmail" class="form-label">EMAIL</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$perfil->usuario->email}}">
                  </div>
                </div>
              </div>
            </div>

            <div class="row py-5">
              <div class="col-md-2">
                <span class="h6 sp1">CONTRASEÑA</span>
              </div>
              <div class="col-md-9" id="datosAdmin">
                <div class="row g-3">
                  <div class="col-md-12">
                    <label for="Contraseña" class="form-label">CONTRASEÑA</label>
                    <input type="text" readonly class="form-control-plaintext " id="Contraseña" value="">
                  </div>
                </div>
              </div>
            </div>

          </div>

          {{-- ARCHIVOS --}}
          <div class="tab-pane fade" id="pills-archivos" role="tabpanel" aria-labelledby="pills-archivos-tab">Archivos</div>
        </div>
      </div>
    </div>

  </div>

@stop