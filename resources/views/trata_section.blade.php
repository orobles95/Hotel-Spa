<section>
    @include('hab_Suite_Presidencial')
    @include('hab_Suite_Superior')
    @include('hab_Suite_Estandar')
    @include('hab_Hab_Superior')
    @include('hab_Hab_Estandar')
    <div class="header-img">
        <img src="images/tratamientosHeader.jpg" class="img-fluid" alt="Tratamientos">
    </div>
    <div class="container">
        <div class="description desc-bgcolor-trata">
            <p>{{ trans('tratamientos.bienvenida') }}</p>
        </div>
        <div class="habitaciones text-center">{{ trans('tratamientos.tituloPagina') }}</div>
        <div class="row justify-content-center">
            <div class="col-1 text-right">~ ♦ ~</div>
            <div class="col-1 hab-line align-self-center"></div>
            <div class="col-1">~ ♦ ~</div>
        </div>
        <div class="row ficha">
            <div class="trata-description">
                <p class="nombre">{{ trans('tratamientos.nombre_1') }}<span class="rombo"> ♦ </span>92 m²</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('tratamientos.titulo_1') }}</p>
                <p class="mindescrip">{{ trans('tratamientos.descripcion_1') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('tratamientos.reservarBtn') }}</button>
                    <a href="#miModalSuitePres" data-toggle="modal" data-target="#miModalSuitePres">{{ trans('tratamientos.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="trata-img dcha-img">
                <img src="images/suitePresidencial.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
        <div class="row ficha">
            <div class="trata-description dcha-description">
                <p class="nombre">{{ trans('tratamientos.nombre_2') }}<span class="rombo"> ♦ </span>76 m²</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('tratamientos.titulo_2') }}</p>
                <p class="mindescrip">{{ trans('tratamientos.descripcion_2') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('tratamientos.reservarBtn') }}</button>
                    <a href="#miModalSuiteSup" data-toggle="modal" data-target="#miModalSuiteSup">{{ trans('tratamientos.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="trata-img">
                <img src="images/suiteSuperior.jpg" class="img-fluid" alt="Suite Superior">
            </div>
        </div>
        <div class="row ficha">
            <div class="trata-description">
                <p class="nombre">{{ trans('tratamientos.nombre_3') }}<span class="rombo"> ♦ </span>64 m²</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('tratamientos.titulo_3') }}</p>
                <p class="mindescrip">{{ trans('tratamientos.descripcion_3') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('tratamientos.reservarBtn') }}</button>
                    <a href="#miModalSuiteEst" data-toggle="modal" data-target="#miModalSuiteEst">{{ trans('tratamientos.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="trata-img dcha-img">
                <img src="images/suiteStandar.jpg" class="img-fluid" alt="Suite Estándar">
            </div>
        </div>
        <div class="row ficha">
            <div class="trata-description dcha-description">
                <p class="nombre">{{ trans('tratamientos.nombre_4') }}<span class="rombo"> ♦ </span>35 m²</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('tratamientos.titulo_4') }}</p>
                <p class="mindescrip">{{ trans('tratamientos.descripcion_4') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('tratamientos.reservarBtn') }}</button>
                    <a href="#miModalHabSup" data-toggle="modal" data-target="#miModalHabSup">{{ trans('tratamientos.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="trata-img">
                <img src="images/habitacionSuperior.jpg" class="img-fluid" alt="Habitación Superior">
            </div>
        </div>
        <div class="row ficha">
            <div class="trata-description">
                <p class="nombre">{{ trans('tratamientos.nombre_5') }}<span class="rombo"> ♦ </span>28 m²</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('tratamientos.titulo_5') }}</p>
                <p class="mindescrip">{{ trans('tratamientos.descripcion_5') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('tratamientos.reservarBtn') }}</button>
                    <a href="#miModalHabEst" data-toggle="modal" data-target="#miModalHabEst">{{ trans('tratamientos.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="trata-img dcha-img">
                <img src="images/habitacionStandar.jpg" class="img-fluid" alt="Habitación Estándar">
            </div>
        </div>
    </div>
</section>



