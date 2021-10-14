@extends('layouts.dashboard')

@section('content')
<div id="terms" class="container mb-5">

    {{-- Tittle of page --}}
    <h2 class="text-center mt-5 mb-5" data-aos="fade-up" data-aos-delay="100">
        <strong>{{ __( 'investors.terms_conditions') }}</strong>
    </h2>

    {{-- Introduction --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <p class="mb-4 m-3">{{ __( 'investors.welcome') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.these_terms') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.engaging_services') }}</p>
    </div>

    {{-- Privacy Policy --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.privacy_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.privacy_text') }}</p>
    </div>

    {{-- Right of withdrawal --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.right_withdrawal_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.right_withdrawal_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.right_withdrawal_text2') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.right_withdrawal_text3') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.right_withdrawal_text4') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.right_withdrawal_text5') }}</p>
    </div>

    {{-- Copyright --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.copyright_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.copyright_text') }}</p>
    </div>

    {{-- Content --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.content_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.content_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.content_text2') }}</p>
    </div>

    {{-- Changes --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.changes_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.changes_text') }}</p>
    </div>

    {{-- Provision --}}
    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.provision_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.provision_text') }}</p>
    </div>

</div>

@endsection
