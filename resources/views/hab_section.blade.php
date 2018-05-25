<section>
    <div class="header-img">
        <img src="images/habitacionesHeader.jpg" class="img-fluid" alt="Habitaciones">
    </div>
    <div class="container">
        <div class="description">
            <p>{{ trans('habitaciones.bienvenida') }}</p>
        </div>
        <div class="habitaciones text-center">HABITACIONES</div>
        <div class="row justify-content-center">
            <div class="col-1 text-right"> ♦ </div>
            <!--<div class="col-1 line align-self-end"></div>-->
            <div class="col-1 hab-line align-self-center"></div>
            <div class="col-1"> ♦ </div>
        </div>
        <div class="row hab-ficha">
            <div class="hab-description">
                <p class="hab-nombre">{{ trans('habitaciones.titulo_1') }}<span class="hab-rombo"> ♦ </span>92 m²</p>
                <div class="line"></div>
                <p class="hab-titulo">{{ trans('habitaciones.descripcion_1') }}</p>
                <p class="hab-mindescrip">{{ trans('habitaciones.descripcion_1_2') }}</p>
                <div class="hab">
                    <button type="button" class="hab-button">{{ trans('habitaciones.reservarBtn') }}</button>
                    <a href="#">{{ trans('habitaciones.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="hab-img dcha-img">
                <img src="images/suitePresidencial.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
        <div class="row hab-ficha">
            <div class="hab-description dcha-description">
                <p class="hab-nombre">{{ trans('habitaciones.titulo_2') }}<span class="hab-rombo"> ♦ </span>{{ trans('habitaciones.detalles_2') }}</p>
                <div class="line"></div>
                <p class="hab-titulo">{{ trans('habitaciones.descripcion_2') }}</p>
                <p class="hab-mindescrip">{{ trans('habitaciones.descripcion_2_2') }}</p>
                <div class="hab">
                    <button type="button" class="hab-button">{{ trans('habitaciones.reservarBtn') }}</button>
                    <a href="#">{{ trans('habitaciones.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="hab-img">
                <img src="images/suitePresidencial.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
    </div>
</section>

