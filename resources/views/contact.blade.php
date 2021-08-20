@extends('layouts.site')

@section('content')
<!-- Start Breadcrumb Area -->
<div class="breadcrumb-area pt-250 pb-250 pt_md-150 pb_md-150 pt_sm-150 pb_sm-150 breadcrumb-title-bar breadcrumb-title-white bg-cover bg-center bg-norepeat z-index-3" data-overlay="2" data-bg-image="https://images.pexels.com/photos/544966/pexels-photo-544966.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="padding-bottom: 50px; padding-top: 200px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h2 class="heading">Contacto</h2>
                    <div class="breadcrumb-insite">
                        <ul class="core-breadcrumb">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li class="current">Contacto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area -->
<!-- Contact us start -->
<section class="position-relative z-index-3 ptb-100 ptb-sm-60 ptb-md-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="section-title text-center text-md-left pr_lp-40 pr_sm-0">
                    <h2 class="mb-3">Estar En Contacto</h2>
                    <p class="font-size-18">
                        En Hapec nos gusta estar en contacto con nuestros clientes y nuevos propectos. Déjanos un mensaje y un especialista Hapec te contactará en unos momentos.
                    </p>
                    <ul class="list-unstyled font-size-18">
                        <li class="pt-3 pb-3 d-flex align-items-center justify-content-center justify-content-md-start"><i class="text-color-12 font-size-28 mr-3 ti-email"></i>info@hapec.com.mx</li>
                        <li class="pt-3 pb-3 d-flex align-items-center justify-content-center justify-content-md-start"><i class="text-color-12 font-size-28 mr-3 ti-mobile"></i>(81) 1038 2831</li>
                        <li class="pt-3 pb-3 d-flex align-items-center justify-content-center justify-content-md-start"><i class="text-color-12 font-size-28 mr-3 ti-location-pin"></i>Álvaro Obregón 327 Centro, Monterrey, N.L.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <form id="appointment-form" action="{{ route('contact.send') }}" method="POST" class="card p-3 p-lg-5 border-0 shadow-large">
                    <h3 class="mb-4 text-center text-md-left">Tu Mensaje</h3>
                    @if (session('success'))
                    <p class="alert alert-success font-size-18 text-center mt-2" role="alert">
                        {{ session('success') }}
                    </p>
                    @endif
                    @if (session('error'))
                    <p class="alert alert-danger font-size-18 text-center mt-2" role="alert">
                        {{ session('error') }}
                    </p>
                    @endif

                    @csrf
                    <div class="field-wrapper mb-4">
                        <label for="name" class="sr-only">Nombre Completo</label>
                        <input type="text" class="rounded-0" name="name" id="name" minlength="10" value="">
                        <span class="field-placeholder">Nombre Completo</span>
                        @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                        @enderror
                    </div>
                    <div class="field-wrapper mb-4">
                        <label for="email" class="sr-only">Correo Electrónico</label>
                        <input type="email" class="rounded-0" name="email" id="email" minlength="8" value="">
                        <span class="field-placeholder">Correo Electrónico</span>
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                        @enderror
                    </div>
                    <div class="field-wrapper mb-4">
                        <label for="phone" class="sr-only">Teléfono</label>
                        <input type="phone" class="rounded-0" name="phone" minlength="10" maxlength="15" value="">
                        <span class="field-placeholder">Teléfono</span>
                        @error('phone')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                        @enderror
                    </div>
                    <div class="field-wrapper mb-4">
                        <label for="message" class="sr-only">Mensaje</label>
                        <textarea cols="50" id="message" name="message" class="rounded-0" rows="5" minlength="20"></textarea>
                        <span class="field-placeholder">Ingresa Tu Mensaje</span>
                        @error('message')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                        @enderror
                    </div>
                    <button type="submit" class="btn p-0">
                        <span class="icon-button-rl btn-ex-small active rounded-0 w-100 bg-color border-color">
                            <span>Enviar Mensaje</span>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact us end -->
<!-- Google Map -->
<!-- End Contact area -->
{{-- <div class="google-map-area section text-center">
    <div class="sl-gmap3" id="slmap2" data-height="500" data-width="100%" data-zoom_enable="" data-zoom="10" data-map_type="roadmap" data-map_style="style11">
    </div>
</div> --}}
@endsection