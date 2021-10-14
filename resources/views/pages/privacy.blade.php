@extends('layouts.dashboard_externals')

@section('content')
<div id="privacy-policy" class="container mb-5">

    {{-- Tittle of page --}}
    <h2 class="text-center mt-5 mb-5" data-aos="fade-up" data-aos-delay="100">
        <strong>{{ __( 'investors.privacy_title') }}</strong>
    </h2>

    {{-- Introduction --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <p class="mb-4 m-3">{{ __( 'investors.intro_mergelabs') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.intro_privacy') }}</p>
    </div>

    {{-- Who is responsible for the websites and services? --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.responsible_title') }}</strong>
        </h4>
        <p class="mb-4 m-3">
            {{ __( 'investors.responsible_text1') }}<br>
            {{ __( 'investors.responsible_text2') }}<br>
            {{ __( 'investors.responsible_text3') }}<br>
            {{ __( 'investors.responsible_text4') }}<br>
            {{ __( 'investors.responsible_text5') }}<br>
            {{ __( 'investors.responsible_text6') }}<br>
            {{ __( 'investors.responsible_text7') }}<br>
        </p>
        <p class="mb-4 m-3">{{ __( 'investors.responsible_text8') }}</p>
    </div>

    {{-- When do we collect and process personal data about you? --}}
    <div data-aos="fade-up" data-aos-delay="100">

        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.collect_title') }}</strong>
        </h4>

        <div>
            <p class="mb-1 m-3"><strong>{{ __( 'investors.collect_ways') }}</strong></p>
            <ul class="privacy">
                <li>{{ __( 'investors.collect_ways1') }}</li>
                <li>{{ __( 'investors.collect_ways2') }}</li>
                <li>{{ __( 'investors.collect_ways3') }}</li>
            </ul>
            <p class="mb-4 m-3">{{ __( 'investors.collect_ways4') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.collect_form_title') }}</h5>
            <ul class="privacy">
                <li>{{ __( 'investors.collect_form_text1') }}</li>
                <li>{{ __( 'investors.collect_form_text2') }}</li>
            </ul>
        </div>

        <div>
            <p class="mb-1 m-3"><strong>{{ __( 'investors.collect_invoice') }}</strong></p>
            <ul class="privacy">
                <li>{{ __( 'investors.collect_invoice1') }}</li>
                <li>{{ __( 'investors.collect_invoice2') }}</li>
                <li>{{ __( 'investors.collect_invoice3') }}</li>
                <li>{{ __( 'investors.collect_invoice4') }}</li>
                <li>{{ __( 'investors.collect_invoice5') }}</li>
            </ul>
            <p class="mb-4 m-3">{{ __( 'investors.collect_invoice6') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.collect_invoice7') }}<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">{{ __( 'investors.collect_invoice8') }}</a></p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.collect_tools') }}</h5>
            <div>
                <h5 class="mb-1 m-3">{{ __( 'investors.collect_tools1') }}</h5>
                <p class="mb-4 m-3">{{ __( 'investors.collect_tools1_text') }}</p>
            </div>
            <div>
                <h5 class="mb-1 m-3">{{ __( 'investors.collect_tools2') }}</h5>
                <p class="mb-4 m-3">{{ __( 'investors.collect_tools2_text') }}</p>
            </div>
        </div>

    </div>

    {{-- Email communication --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.email_title') }}</strong>
        </h4>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.email_direct_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.email_direct_text1') }}<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">{{ __( 'investors.email_direct_text2') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.email_direct_text3') }}<a href="https://gdpr-info.eu/art-32-gdpr/" target="_blank">{{ __( 'investors.email_direct_text4') }}</a>{{ __( 'investors.email_direct_text5') }}</p>
            <ul class="privacy">
                <li>{{ __( 'investors.email_direct_text6') }}</li>
                <li>{{ __( 'investors.email_direct_text7') }}</li>
                <li>{{ __( 'investors.email_direct_text8') }}</li>
                <li>{{ __( 'investors.email_direct_text9') }}</li>
            </ul>
            <p class="mb-4 m-3">{{ __( 'investors.email_direct_text10') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_direct_text11') }}<a href="https://gsuite.google.com/security/?secure-by-design_activeEl=data-centers" target="_blank">{{ __( 'investors.email_direct_text12') }}</a>{{ __( 'investors.email_direct_text13') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_direct_text14') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_direct_text15') }}<a href="https://gdpr-info.eu/art-28-gdpr/" target="_blank">{{ __( 'investors.email_direct_text16') }}</a>{{ __( 'investors.email_direct_text17') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.email_notification_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.email_notification_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_notification_text2') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_notification_text3') }}<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">{{ __( 'investors.email_notification_text4') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.email_notification_text5') }}<a href="https://gdpr-info.eu/art-7-gdpr/" target="_blank">{{ __( 'investors.email_notification_text6') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.email_notification_text7') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_notification_text8') }}<a href="http://www.sparkpost.com/policies/privacy" target="_blank">{{ __( 'investors.email_notification_text9') }}</a></p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.email_newsletters_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.email_newsletters_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_newsletters_text2') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_newsletters_text3') }}<a href="https://mailchimp.com/legal/privacy/" target="_blank">{{ __( 'investors.email_newsletters_text4') }}</a></p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.email_double_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.email_double_text1') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_double_text2') }}<a href="https://gdpr-info.eu/art-7-gdpr/" target="_blank">{{ __( 'investors.email_double_text3') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.email_double_text4') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.email_statistical_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.email_statistical_text1') }}</p>
        </div>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.email_data_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.email_data_text1') }}<a href="https://mailchimp.com/legal/privacy/" target="_blank">{{ __( 'investors.email_data_text2') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.email_data_text3') }}<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">{{ __( 'investors.email_data_text4') }}</a></p>
            <p class="mb-4 m-3">{{ __( 'investors.email_data_text5') }}</p>
            <p class="mb-4 m-3">{{ __( 'investors.email_data_text6') }}<a href="https://gdpr-info.eu/art-7-gdpr/" target="_blank">{{ __( 'investors.email_data_text7') }}</a>{{ __( 'investors.email_data_text8') }}<a href="https://gdpr-info.eu/art-21-gdpr/" target="_blank">{{ __( 'investors.email_data_text9') }}</a>{{ __( 'investors.email_data_text10') }}<a href="mailto:datapolicy@mergelabs.io" target="_blank">{{ __( 'investors.email_data_text11') }}</a>{{ __( 'investors.email_data_text12') }}</p>

        </div>

    </div>

    {{-- Payment Processing Services --}}
    <div data-aos="fade-up" data-aos-delay="100">

        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.payment_title') }}</strong>
        </h4>

        <p class="mb-4 m-3">{{ __( 'investors.payment_text1') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.payment_text2') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.payment_text3') }}</p>
        <p class="mb-4 m-3">{{ __( 'investors.payment_text4') }}<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">{{ __( 'investors.payment_text5') }}</a>{{ __( 'investors.payment_text6') }}</p>
        <p class="mb-4 m-3">
            <a href="https://www.paypal.com/de/smarthelp/article/datenschutz-und-sicherheit-faq3712" target="_blank">{{ __( 'investors.payment_text7') }}</a>{{ __( 'investors.payment_text8') }}<br>
            <a href="https://stripe.com/en-de/guides/general-data-protection-regulation" target="_blank">{{ __( 'investors.payment_text9') }}</a>{{ __( 'investors.payment_text10') }}<br>
            <a href="https://transferwise.com/gb/legal/privacy-policy" target="_blank">{{ __( 'investors.payment_text11') }}</a>{{ __( 'investors.payment_text12') }}<br>
            <a href="https://www.klarna.com/international/privacy-policy/" target="_blank">{{ __( 'investors.payment_text13') }}</a>{{ __( 'investors.payment_text14') }}<br>
            <a href="https://www.klarna.com/uk/privacy-policy/" target="_blank">{{ __( 'investors.payment_text15') }}</a>{{ __( 'investors.payment_text16') }}<br>
        </p>

    </div>

    {{-- External Links --}}
    <div data-aos="fade-up" data-aos-delay="100">

        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.external_title') }}</strong>
        </h4>

        <p class="mb-4 m-3">{{ __( 'investors.external_text1') }}</p>

    </div>

    {{-- Video Call Services --}}
    <div data-aos="fade-up" data-aos-delay="100">

        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.video_title') }}</strong>
        </h4>

        <p class="mb-4 m-3">{{ __( 'investors.video_text1') }}</p>
        <p class="mb-4 m-3">
            {{ __( 'investors.video_text2') }}<a class="small-link" href="https://cloud.google.com/security/privacy" target="_blank">{{ __( 'investors.video_text3') }}</a></p>
        <p class="mb-4 m-3">{{ __( 'investors.video_text4') }}</p>
        <p class="mb-4 m-3">
            <a class="small-link" href="https://support.google.com/meet/answer/9852160?hl=en" target="_blank">{{ __( 'investors.video_text5') }}</a><br>
            <a class="small-link" href="https://jitsi.org/security/" target="_blank">{{ __( 'investors.video_text7') }}</a><br>
            <a class="small-link" href="https://www.paypal.com/de/smarthelp/article/datenschutz-und-sicherheit-faq3712" target="_blank">{{ __( 'investors.video_text9') }}</a><br>
        </p>

    </div>

    {{-- Interactions outside the boundaries of our websites --}}
    <div data-aos="fade-up" data-aos-delay="100">
        <h4 class="mt-5 m-3">
            <strong>{{ __( 'investors.interactions_title') }}</strong>
        </h4>

        <div>
            <h5 class="mb-1 m-3">{{ __( 'investors.interactions_internal_title') }}</h5>
            <p class="mb-4 m-3">{{ __( 'investors.interactions_internal_text1') }}</p>
            <p class="mb-4 m-3">
            {{ __( 'investors.interactions_internal_text2') }}<a href="https://slack.com/intl/en-de/privacy-policy" target="_blank">{{ __( 'investors.interactions_internal_text3') }}</a></p>
            <p class="mb-4 m-3">
            {{ __( 'investors.interactions_internal_text4') }}<a href="https://gsuite.google.com/security/?secure-by-design_activeEl=data-centers" target="_blank">{{ __( 'investors.interactions_internal_text5') }}</a></p>
        </div>
    </div>

</div>

@endsection
