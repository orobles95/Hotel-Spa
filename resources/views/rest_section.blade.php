<section>
    @include('rest_Spring_Space')
    @include('rest_Delicias_Supremas')
    @include('rest_Media_Luna')
    @include('rest_Sunset_ChillOut')
    <div class="header-img">
        <img src="images/restauranteHeader.jpg" class="img-fluid" alt="Restaurantes">
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
        <div class="row ficha">
            <div class="rest-description">
                <p class="nombre">{{ trans('restaurante.nombre_1') }}<span class="rombo"> ♦ </span>56 mesas</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('restaurante.titulo_1') }}</p>
                <p class="mindescrip">{{ trans('restaurante.descripcion_1') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('restaurante.reservarBtn') }}</button>
                    <a href="#miModalSpring" data-toggle="modal" data-target="#miModalSpring">{{ trans('restaurante.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="rest-img dcha-img">
                <img src="images/restaurante4.jpg" class="img-fluid" alt="Restaurante Spring Space">
            </div>
        </div>
        <div class="row ficha">
            <div class="rest-description dcha-description">
                <p class="nombre">{{ trans('restaurante.nombre_2') }}<span class="rombo"> ♦ </span>89 mesas</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('restaurante.titulo_2') }}</p>
                <p class="mindescrip">{{ trans('restaurante.descripcion_2') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('restaurante.reservarBtn') }}</button>
                    <a href="#miModalDelicias" data-toggle="modal" data-target="#miModalDelicias">{{ trans('restaurante.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="rest-img">
                <img src="images/restaurante8.jpg" class="img-fluid" alt="Restaurante Delicias Supremas">
            </div>
        </div>
        <div class="row ficha">
            <div class="rest-description">
                <p class="nombre">{{ trans('restaurante.nombre_3') }}<span class="rombo"> ♦ </span>47 mesas</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('restaurante.titulo_3') }}</p>
                <p class="mindescrip">{{ trans('restaurante.descripcion_3') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('restaurante.reservarBtn') }}</button>
                    <a href="#miModalMediaLuna" data-toggle="modal" data-target="#miModalMediaLuna">{{ trans('restaurante.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="rest-img dcha-img">
                <img src="images/restaurante1.jpg" class="img-fluid" alt="Restaurante Media Luna">
            </div>
        </div>
        <div class="row ficha">
            <div class="rest-description dcha-description">
                <p class="nombre">{{ trans('restaurante.nombre_4') }}<span class="rombo"> ♦ </span>36 mesas</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('restaurante.titulo_4') }}</p>
                <p class="mindescrip">{{ trans('restaurante.descripcion_4') }}</p>
                <div class="hab">
                    <button type="button">{{ trans('restaurante.reservarBtn') }}</button>
                    <a href="#miModalSunsetChillOut" data-toggle="modal" data-target="#miModalSunsetChillOut">{{ trans('restaurante.descubrelaBtn') }}</a>
                </div>
            </div>
            <div class="rest-img">
                <img src="images/restaurante10.jpg" class="img-fluid" alt="Sunset Chill Out">
            </div>
        </div>
    </div>
</section>

