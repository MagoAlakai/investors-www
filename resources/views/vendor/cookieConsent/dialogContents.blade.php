
{{-- Cookies Consent Banner --}}
<div class="cookie-disclaimer js-cookie-consent cookie-consent">
    <div class="cookie-close accept-cookie"><i class="fas fa-times"></i></div>
    <div class="container" data-aos="fade-up">

        <div class="mt-4 col-10 mx-auto">
            <span class="cookie-consent__message m-2 h5 text-center">
                {!! trans('cookieConsent::texts.message_1') !!}
                <a href="https://investors-www.internal.local/cookie-consent">{!! trans('cookieConsent::texts.message_2') !!}</a>
            </span>
        </div>

        <div class="d-flex justify-content-center">

            <div class="m-3">
                <button class="btn btn-sm btn-lg-lg btn-secondary m-2 text-center c-white">
                    <a id="more-info" href="https://investors-www.internal.local/cookie-consent">{{ trans('cookieConsent::texts.info') }}</a>
                </button>
            </div>

            <div class="m-3">
                <button class="js-cookie-consent-agree cookie-consent__agree btn btn-sm btn-lg-lg btn-primary m-2 text-center">
                    {{ trans('cookieConsent::texts.agree') }}
                </button>
            </div>

        </div>

    </div>
</div>


