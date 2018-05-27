<section>
    @include('hab_Suite_Presidencial')
    @include('hab_Suite_Superior')
    @include('hab_Suite_Estandar')
    @include('hab_Hab_Superior')
    @include('hab_Hab_Estandar')
    <div class="header-img">
        <img src="images/restauranteHeader.jpg" class="img-fluid" alt="Habitaciones">
    </div>
    <div class="container">
        <div class="description desc-bgcolor-rest">
            <p>{{ trans('restaurante.bienvenida') }}</p>
        </div>
        <div class="habitaciones text-center">{{ trans('restaurante.tituloPagina') }}</div>
        <div class="row justify-content-center">
            <div class="col-1 text-right">~ ♦ ~</div>
            <div class="col-1 hab-line align-self-center"></div>
            <div class="col-1">~ ♦ ~</div>
        </div>
        <div class="row rest-ficha">
            <div class="rest-description">
                <p class="rest-nombre">{{ trans('restaurante.nombre_1') }}<span class="rest-rombo"> ♦ </span>56 mesas</p>
                <div class="line"></div>
                <p class="rest-titulo">{{ trans('restaurante.titulo_1') }}</p>
                <p class="rest-mindescrip">{{ trans('restaurante.descripcion_1') }}</p>
                <div class="rest">
                    <button type="button">{{ trans('restaurante.reservarBtn') }}</button>
                    <a href="#miModalSuitePres" data-toggle="modal" data-target="#miModalSuitePres">{{ trans('restaurante.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="rest-img dcha-img">
                <img src="images/restaurante4.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
        <div class="row rest-ficha">
            <div class="rest-description dcha-description">
                <p class="rest-nombre">{{ trans('restaurante.nombre_2') }}<span class="rest-rombo"> ♦ </span>89 mesas</p>
                <div class="line"></div>
                <p class="rest-titulo">{{ trans('restaurante.titulo_2') }}</p>
                <p class="rest-mindescrip">{{ trans('restaurante.descripcion_2') }}</p>
                <div class="rest">
                    <button type="button">{{ trans('restaurante.reservarBtn') }}</button>
                    <a href="#miModalSuiteSup" data-toggle="modal" data-target="#miModalSuiteSup">{{ trans('restaurante.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="rest-img">
                <img src="images/restaurante7.jpg" class="img-fluid" alt="Suite Superior">
            </div>
        </div>
        <div class="row rest-ficha">
            <div class="rest-description">
                <p class="rest-nombre">{{ trans('restaurante.nombre_3') }}<span class="rest-rombo"> ♦ </span>47 mesas</p>
                <div class="line"></div>
                <p class="rest-titulo">{{ trans('restaurante.titulo_3') }}</p>
                <p class="rest-mindescrip">{{ trans('restaurante.descripcion_3') }}</p>
                <div class="rest">
                    <button type="button">{{ trans('restaurante.reservarBtn') }}</button>
                    <a href="#miModalSuiteEst" data-toggle="modal" data-target="#miModalSuiteEst">{{ trans('restaurante.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="rest-img dcha-img">
                <img src="images/restaurante1.jpg" class="img-fluid" alt="Suite Estándar">
            </div>
        </div>
        <div class="row rest-ficha">
            <div class="rest-description dcha-description">
                <p class="rest-nombre">{{ trans('restaurante.nombre_4') }}<span class="rest-rombo"> ♦ </span>36 mesas</p>
                <div class="line"></div>
                <p class="rest-titulo">{{ trans('restaurante.titulo_4') }}</p>
                <p class="rest-mindescrip">{{ trans('restaurante.descripcion_4') }}</p>
                <div class="rest">
                    <button type="button">{{ trans('restaurante.reservarBtn') }}</button>
                    <a href="#miModalSuiteSup" data-toggle="modal" data-target="#miModalSuiteSup">{{ trans('restaurante.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="rest-img">
                <img src="images/restaurante10.jpg" class="img-fluid" alt="Suite Superior">
            </div>
        </div>
    </div>
</section>

