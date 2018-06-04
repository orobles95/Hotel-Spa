<section>
    <div class="header-img">
        <img src="images/tratamientosHeader.jpg" class="img-fluid" alt="Tratamientos">
    </div>
    <div class="container">
        <div class="description desc-bgcolor-trata">
            <p>{{ trans('tratamientos.bienvenida') }}</p>
        </div>
        <div class="habitaciones text-center">{{ trans('tratamientos.tituloPagina') }}</div>
        <div class="row justify-content-center mindescrip">
            <div class="col-1 text-right">~ ♦ ~</div>
            <div class="col-1 hab-line align-self-center"></div>
            <div class="col-1">~ ♦ ~</div>
        </div>
        <div class="row ficha">
            <div class="trata-description">
                <p class="nombre">{{ trans('tratamientos.tiempo_1') }}<span class="rombo"> ♦ </span>{{ trans('tratamientos.precio_1') }}</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('tratamientos.titulo_1') }}</p>
                <p class="mindescrip">{{ trans('tratamientos.descripcion_1') }}</p>
                <div class="hab">
                    <button onclick="location.href ='{{ url('/reservatratamientos/' . 0 ) }}'" type="button">{{ trans('tratamientos.reservarBtn') }}</button>
                </div>
            </div>
            <div class="trata-img dcha-img">
                <img src="images/tratamientos1.jpg" class="img-fluid" alt="Masaje Corporal">
            </div>
        </div>
        <div class="row ficha">
            <div class="trata-description dcha-description">
                <p class="nombre">{{ trans('tratamientos.tiempo_2') }}<span class="rombo"> ♦ </span>{{ trans('tratamientos.precio_2') }}</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('tratamientos.titulo_2') }}</p>
                <p class="mindescrip">{{ trans('tratamientos.descripcion_2') }}</p>
                <div class="hab">
                    <button onclick="location.href ='{{ url('/reservatratamientos/' . 1 ) }}'" type="button">{{ trans('tratamientos.reservarBtn') }}</button>
                </div>
            </div>
            <div class="trata-img">
                <img src="images/tratamientos2.jpg" class="img-fluid" alt="Tratamiento Facial">
            </div>
        </div>
        <div class="row ficha">
            <div class="trata-description">
                <p class="nombre">{{ trans('tratamientos.tiempo_3') }}<span class="rombo"> ♦ </span>{{ trans('tratamientos.precio_3') }}</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('tratamientos.titulo_3') }}</p>
                <p class="mindescrip">{{ trans('tratamientos.descripcion_3') }}</p>
                <div class="hab">
                    <button onclick="location.href ='{{ url('/reservatratamientos/' . 2 ) }}'" type="button">{{ trans('tratamientos.reservarBtn') }}</button>
                </div>
            </div>
            <div class="trata-img dcha-img">
                <img src="images/tratamientos3.jpg" class="img-fluid" alt="Drenaje Linfático">
            </div>
        </div>
        <div class="row ficha">
            <div class="trata-description dcha-description">
                <p class="nombre">{{ trans('tratamientos.tiempo_4') }}<span class="rombo"> ♦ </span>{{ trans('tratamientos.precio_4') }}</p>
                <div class="line"></div>
                <p class="titulo">{{ trans('tratamientos.titulo_4') }}</p>
                <p class="mindescrip">{{ trans('tratamientos.descripcion_4') }}</p>
                <div class="hab">
                    <button onclick="location.href ='{{ url('/reservatratamientos/' . 3 ) }}'" type="button">{{ trans('tratamientos.reservarBtn') }}</button>
                </div>
            </div>
            <div class="trata-img">
                <img src="images/tratamientos4.jpg" class="img-fluid" alt="Terapia Geotermal">
            </div>
        </div>
    </div>
</section>



