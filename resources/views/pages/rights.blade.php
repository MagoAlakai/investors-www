@extends('layouts.dashboard_externals')

@section('content')
<div id="rights" class="container mb-5">

    {{-- Tittle of page --}}
    <h2 class="text-center mt-5 mb-5" data-aos="fade-up" data-aos-delay="100">
        <strong>{{ __( 'investors.rights_title') }}</strong>
    </h2>
    <p class="mb-4 m-3">{{ __( 'investors.rights_text1') }}</p>

    {{-- Right to information --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_information_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text2') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text3') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text4') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text5') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text6') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text7') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text8') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text9') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text10') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_information_text1'1) }}</p>
    </div>

    {{-- Right to rectification --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_rectification_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.rights_rectification_text1') }}</p>
    </div>

    {{-- Right to restriction of processing --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_restriction_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.rights_restriction_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_restriction_text2') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_restriction_text3') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_restriction_text4') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_restriction_text5') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_restriction_text6') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_restriction_text7') }}</p>
    </div>

    {{-- Right to erasure --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_erasure_title') }}</strong>
        </h4>

        <div>
            <h5 class="mb-1 m-3">
                <strong>{{ __( 'investors.rights_erasure_obligation_title') }}</strong>
            </h5>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_obligation_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_obligation_text2') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_obligation_text3') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_obligation_text4') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_obligation_text5') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_obligation_text6') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_obligation_text7') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">
                <strong>{{ __( 'investors.rights_erasure_third_title') }}</strong>
            </h5>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_third_text1') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">
                <strong>{{ __( 'investors.rights_erasure_exceptions_title') }}</strong>
            </h5>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_exceptions_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_exceptions_text2') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_exceptions_text3') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_exceptions_text4') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_exceptions_text5') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.rights_erasure_exceptions_text6') }}</p>
        </div>

    </div>

    {{-- Right to be informed --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_informed_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.rights_informed_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_informed_text2') }}</p>
    </div>

    {{-- Right to data portability --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_data_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.rights_data_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_data_text2') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_data_text3') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_data_text4') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_data_text5') }}</p>
    </div>

    {{-- Right to object --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_object_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.rights_object_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_object_text2') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_object_text3') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_object_text4') }}</p>
    </div>

    {{-- Right to withdraw the data protection declaration of consent --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_withdraw_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.rights_withdraw_text1') }}</p>
    </div>

    {{-- Automated individual decision-making, including profiling --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_automated_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.rights_automated_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_automated_text2') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_automated_text3') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_automated_text4') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_automated_text5') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_automated_text6') }}</p>
    </div>

    {{-- Right to lodge a complaint with a supervisory authority --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.rights_lodge_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.rights_lodge_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.rights_lodge_text2') }}</p>

    </div>

</div>

@endsection
