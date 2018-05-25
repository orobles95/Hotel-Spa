<section>
    @include('hab_Suite_Presidencial')
    <div class="header-img">
        <img src="images/habitacionesHeader.jpg" class="img-fluid" alt="Habitaciones">
    </div>
    <div class="container">
        <div class="description">
            <p>{{ trans('habitaciones.bienvenida') }}</p>
        </div>
        <div class="habitaciones text-center">{{ trans('habitaciones.tituloPagina') }}</div>
        <div class="row justify-content-center">
            <div class="col-1 text-right">~ ♦ ~</div>
            <div class="col-1 hab-line align-self-center"></div>
            <div class="col-1">~ ♦ ~</div>
        </div>
        <div class="row hab-ficha">
            <div class="hab-description">
                <p class="hab-nombre">{{ trans('habitaciones.nombre_1') }}<span class="hab-rombo"> ♦ </span>92 m²</p>
                <div class="line"></div>
                <p class="hab-titulo">{{ trans('habitaciones.titulo_1') }}</p>
                <p class="hab-mindescrip">{{ trans('habitaciones.descripcion_1') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('habitaciones.reservarBtn') }}</button>
                    <a href="#miModalSuitePres" data-toggle="modal" data-target="#miModalSuitePres">{{ trans('habitaciones.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="hab-img dcha-img">
                <img src="images/suitePresidencial.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
        <div class="row hab-ficha">
            <div class="hab-description dcha-description">
                <p class="hab-nombre">{{ trans('habitaciones.nombre_2') }}<span class="hab-rombo"> ♦ </span>76 m²</p>
                <div class="line"></div>
                <p class="hab-titulo">{{ trans('habitaciones.titulo_2') }}</p>
                <p class="hab-mindescrip">{{ trans('habitaciones.descripcion_2') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('habitaciones.reservarBtn') }}</button>
                    <a href="#miModalSuitePres" data-toggle="modal" data-target="#miModalSuitePres">{{ trans('habitaciones.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="hab-img">
                <img src="images/suiteSuperior.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
        <div class="row hab-ficha">
            <div class="hab-description">
                <p class="hab-nombre">{{ trans('habitaciones.nombre_3') }}<span class="hab-rombo"> ♦ </span>64 m²</p>
                <div class="line"></div>
                <p class="hab-titulo">{{ trans('habitaciones.titulo_3') }}</p>
                <p class="hab-mindescrip">{{ trans('habitaciones.descripcion_3') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('habitaciones.reservarBtn') }}</button>
                    <a href="#miModalSuitePres" data-toggle="modal" data-target="#miModalSuitePres">{{ trans('habitaciones.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="hab-img dcha-img">
                <img src="images/suiteStandar.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
        <div class="row hab-ficha">
            <div class="hab-description dcha-description">
                <p class="hab-nombre">{{ trans('habitaciones.nombre_4') }}<span class="hab-rombo"> ♦ </span>35 m²</p>
                <div class="line"></div>
                <p class="hab-titulo">{{ trans('habitaciones.titulo_4') }}</p>
                <p class="hab-mindescrip">{{ trans('habitaciones.descripcion_4') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('habitaciones.reservarBtn') }}</button>
                    <a href="#miModalSuitePres" data-toggle="modal" data-target="#miModalSuitePres">{{ trans('habitaciones.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="hab-img">
                <img src="images/habitacionSuperior.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
        <div class="row hab-ficha">
            <div class="hab-description">
                <p class="hab-nombre">{{ trans('habitaciones.nombre_5') }}<span class="hab-rombo"> ♦ </span>28 m²</p>
                <div class="line"></div>
                <p class="hab-titulo">{{ trans('habitaciones.titulo_5') }}</p>
                <p class="hab-mindescrip">{{ trans('habitaciones.descripcion_5') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('habitaciones.reservarBtn') }}</button>
                    <a href="#miModalSuitePres" data-toggle="modal" data-target="#miModalSuitePres">{{ trans('habitaciones.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="hab-img dcha-img">
                <img src="images/habitacionStandar.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
    </div>
</section>

