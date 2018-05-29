<section>
    @include('spa_Circuito_Termal')
    @include('spa_Balneario_Natural')
    @include('spa_Sauna')
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
                <p class="nombre">{{ trans('spa.nombre_1') }}<span class="rombo"> ♦ </span>{{ trans('spa.capacidad_1') }}</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('spa.titulo_1') }}</p>
                <p class="mindescrip">{{ trans('spa.descripcion_1') }}</p>
                <div class="hab">
                    <button onclick="location.href='{{ url('/reservaspa/' . 0 ) }}'" type="button">{{ trans('spa.reservarBtn') }}</button>
                    <a href="#miModalSpaCircuito" data-toggle="modal" data-target="#miModalSpaCircuito">{{ trans('spa.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="spa-img dcha-img">
                <img src="images/balneario4.jpg" class="img-fluid" alt="Balneario Natural">
            </div>
        </div>
        <div class="row ficha">
            <div class="spa-description dcha-description">
                <p class="nombre">{{ trans('spa.nombre_2') }}<span class="rombo"> ♦ </span>{{ trans('spa.capacidad_2') }}</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('spa.titulo_2') }}</p>
                <p class="mindescrip">{{ trans('spa.descripcion_2') }}</p>
                <div class="hab">
                    <button onclick="location.href='{{ url('/reservaspa/' . 1 ) }}'" type="button">{{ trans('spa.reservarBtn') }}</button>
                    <a href="#miModalSpaBalneario" data-toggle="modal" data-target="#miModalSpaBalneario">{{ trans('spa.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="spa-img">
                <img src="images/balneario1.jpg" class="img-fluid" alt="Circuito Termal">
            </div>
        </div>
        <div class="row ficha">
            <div class="spa-description">
                <p class="nombre">{{ trans('spa.nombre_3') }}<span class="rombo"> ♦ </span>{{ trans('spa.capacidad_3') }}</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('spa.titulo_3') }}</p>
                <p class="mindescrip">{{ trans('spa.descripcion_3') }}</p>
                <div class="hab">
                    <button onclick="location.href='{{ url('/reservaspa/' . 2 ) }}'" type="button">{{ trans('spa.reservarBtn') }}</button>
                    <a href="#miModalSpaSauna" data-toggle="modal" data-target="#miModalSpaSauna">{{ trans('spa.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="spa-img dcha-img">
                <img src="images/balneario8.jpg" class="img-fluid" alt="Sauna Purificante">
            </div>
        </div>
    </div>
</section>



