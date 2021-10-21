@extends('layouts.dashboard_externals')

@section('content')
<div id="cookie-consent" class="container mb-5">

    {{-- Tittle of page --}}
    <h2 class="text-center mt-5 mb-5" data-aos="fade-up" data-aos-delay="100">
        <strong>{{ __( 'investors.cookie_title') }}</strong>
    </h2>

    {{-- Introduction --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <p class="mb-4 m-3">{{ __( 'investors.cookie_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.cookie_text2') }}</p>
    </div>

    {{-- The 3 types of Cookies are --}}
    <div data-aos="fade-up" data-aos-delay="100">

        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.cookie_types_title') }}</strong>
        </h4>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_types_session_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_types_session_text1') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_types_persistent_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_types_persistent_text1') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_types_local_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_types_local_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_types_local_text2') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_types_local_text3') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_types_information_title') }}</h5>
            <p class="mb-1 m-3"><strong>{{ __( 'investors.cookie_types_information_text1') }}</strong></p>
            <ol class="privacy">
                <li><strong>{{ __( 'investors.cookie_types_information_text2') }}</strong>{{ __( 'investors.cookie_types_information_text3') }}</li>
                <li><strong>{{ __( 'investors.cookie_types_information_text4') }}</strong>{{ __( 'investors.cookie_types_information_text5') }}</li>
                <li><strong>{{ __( 'investors.cookie_types_information_text6') }}</strong>{{ __( 'investors.cookie_types_information_text7') }}</li>
                <li><strong>{{ __( 'investors.cookie_types_information_text8') }}</strong>{{ __( 'investors.cookie_types_information_text9') }}</li>
                <li><strong>{{ __( 'investors.cookie_types_information_text10') }}</strong>{{ __( 'investors.cookie_types_information_text11') }}</li>

            </ol>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_types_party_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_types_party_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_types_party_text2') }}</p>
        </div>

        <div>
            <p class="mb-4 m-3"><strong>{{ __( 'investors.cookie_types_our_text1') }}</strong></p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_types_our_text2') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_types_our_text3') }}</p>
        </div>

    </div>

    {{-- Data Collection --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.cookie_data_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">{{ __( 'investors.cookie_data_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.cookie_data_text2') }}</p>
    </div>

    {{-- Third-party services we use:  --}}
    <div data-aos="fade-up" data-aos-delay="100">

        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.cookie_third_title') }}</strong>
        </h4>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_third_cloudfare_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_cloudfare_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_cloudfare_text2') }}<a href="https://www.cloudflare.com/security-policy/" target="_blank">{{ __( 'investors.cookie_third_cloudfare_text3') }}</a></p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_third_encryption_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_encryption_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_encryption_text2') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_third_XSRF_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_XSRF_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_XSRF_text2') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_third_mailchimp_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_mailchimp_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_mailchimp_text2') }}<a href="https://mailchimp.com/legal/privacy/" target="_blank">{{ __( 'investors.cookie_third_mailchimp_text3') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_mailchimp_text4') }}<a href="https://mailchimp.com/legal/cookies/#Cookies_served_through_our_Mailchimp_Sites" target="_blank">{{ __( 'investors.cookie_third_mailchimp_text5') }}</a></p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_third_video_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_video_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_video_text2') }}<a href="https://www.google.de/intl/de/policies/privacy/" target="_blank">{{ __( 'investors.cookie_third_video_text3') }}</a>{{ __( 'investors.cookie_third_video_text4') }}<a href="https://vimeo.com/privacy" target="_blank">{{ __( 'investors.cookie_third_video_text5') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_video_text6') }}<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">{{ __( 'investors.cookie_third_video_text7') }}</a></p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_third_tag_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_tag_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_tag_text2') }}<a href="https://support.google.com/tagmanager/answer/9323295?hl=en" target="_blank">{{ __( 'investors.cookie_third_tag_text3') }}</a></p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_third_analytics_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_analytics_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_analytics_text2') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_analytics_text3') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_analytics_text4') }}<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">{{ __( 'investors.cookie_third_analytics_text5') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_analytics_text6') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_analytics_text7') }}<p> 
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_analytics_text8') }}<a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">{{ __( 'investors.cookie_third_analytics_text9') }}</a>{{ __( 'investors.cookie_third_analytics_text10') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_analytics_text11') }}<a href="https://policies.google.com/privacy?hl=en-US" target="_blank">{{ __( 'investors.cookie_third_analytics_text12') }}</a></p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.cookie_third_font_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_font_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_font_text2') }}<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">{{ __( 'investors.cookie_third_font_text3') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.cookie_third_font_text4') }}</p>
            <p class="mb-4 m-3"><a href="https://www.google.com/policies/privacy/" target="_blank">{{ __( 'investors.cookie_third_font_text5') }}</a></p>
        </div>

    </div>

</div>

@endsection
