<section>
    @include('hab_Suite_Presidencial')
    @include('hab_Suite_Superior')
    @include('hab_Suite_Estandar')
    @include('hab_Hab_Superior')
    @include('hab_Hab_Estandar')
    <div class="header-img">
        <img src="images/spaHeader2.jpg" class="img-fluid" alt="Spa">
    </div>
    <div class="container">
        <div class="description desc-bgcolor-spa">
            <p>{{ trans('spa.bienvenida') }}</p>
        </div>
        <div class="habitaciones text-center">{{ trans('spa.tituloPagina') }}</div>
        <div class="row justify-content-center">
            <div class="col-1 text-right">~ ♦ ~</div>
            <div class="col-1 hab-line align-self-center"></div>
            <div class="col-1">~ ♦ ~</div>
        </div>
        <div class="row ficha">
            <div class="spa-description">
                <p class="nombre">{{ trans('spa.nombre_1') }}<span class="rombo"> ♦ </span>56 mesas</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('spa.titulo_1') }}</p>
                <p class="mindescrip">{{ trans('spa.descripcion_1') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('spa.reservarBtn') }}</button>
                    <a href="#miModalSuitePres" data-toggle="modal" data-target="#miModalSuitePres">{{ trans('spa.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="spa-img dcha-img">
                <img src="images/spa1.jpg" class="img-fluid" alt="Suite Presidencial">
            </div>
        </div>
        <div class="row ficha">
            <div class="spa-description dcha-description">
                <p class="nombre">{{ trans('spa.nombre_2') }}<span class="rombo"> ♦ </span>89 mesas</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('spa.titulo_2') }}</p>
                <p class="mindescrip">{{ trans('spa.descripcion_2') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('spa.reservarBtn') }}</button>
                    <a href="#miModalSuiteSup" data-toggle="modal" data-target="#miModalSuiteSup">{{ trans('spa.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="spa-img">
                <img src="images/spa1.jpg" class="img-fluid" alt="Suite Superior">
            </div>
        </div>
        <div class="row ficha">
            <div class="spa-description">
                <p class="rest-nombre">{{ trans('spa.nombre_3') }}<span class="rombo"> ♦ </span>47 mesas</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('spa.titulo_3') }}</p>
                <p class="mindescrip">{{ trans('spa.descripcion_3') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('spa.reservarBtn') }}</button>
                    <a href="#miModalSuiteEst" data-toggle="modal" data-target="#miModalSuiteEst">{{ trans('spa.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="spa-img dcha-img">
                <img src="images/spa1.jpg" class="img-fluid" alt="Suite Estándar">
            </div>
        </div>
    </div>
</section>



