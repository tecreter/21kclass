@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">

        <div class="position-relative">
            <div class="bg-img-hero" style="background-image: url('images/coaching/svg/components/abstract-shapes-12.svg'');">
                <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
                    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
                        <h1>Contact us</h1>
                        <p>We'd love to talk about how we can help you.</p>
                    </div>

                    <div class="row">

                        <div class="col-md-8 mx-auto mb-3 mb-md-0 mb-md-n11">
                            <div class="card text-center h-100">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <img class="img-fluid" src="/images/coaching/svg/icons/icon-15.svg" alt="SVG">
                                    </figure>
                                    <h3 class="h4">Learningbot Education Private Limited</h3>
                                    <p class="text">Registered address: No. 148 Unit No. 203 II Floor, Embassy Square, Infantry Road Bangalore Karnataka, 560001 India</p>
                                    <p class="text-body mb-0">Email:<a class="ml-1" href="mailto:hello@21kclass.com">hello@21kclass.com</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <figure class="position-absolute bottom-0 right-0 left-0">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
                </svg>
            </figure>
        </div>

        <div class="container space-2 space-lg-3">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <h2>Tell us about yourself</h2>
                <p>Whether you have questions or you would just like to say hello, contact us.</p>
            </div>

            <div class="w-lg-80 mx-auto">
{{--                <form class="js-validate">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-6 mb-4">--}}
{{--                            <div class="js-form-message">--}}
{{--                                <label class="input-label">Your name</label>--}}
{{--                                <input type="text" class="form-control" name="name" placeholder="Enter your name" aria-label="Enter your name" required data-msg="Please enter your name.">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-sm-6 mb-4">--}}
{{--                            <div class="js-form-message">--}}
{{--                                <label class="input-label">Your email address</label>--}}
{{--                                <input type="email" class="form-control" name="email" placeholder="Enter your email address" aria-label="Enter your email address" required data-msg="Please enter a valid email address.">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="w-100"></div>--}}

{{--                        <div class="col-sm-6 mb-4">--}}
{{--                            <div class="js-form-message">--}}
{{--                                <label class="input-label">Subject</label>--}}
{{--                                <input type="text" class="form-control" name="subject" placeholder="Enter message title" aria-label="Enter message title" required data-msg="Please enter a subject.">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-sm-6 mb-4">--}}
{{--                            <div class="js-form-message">--}}
{{--                                <label class="input-label">Your phone number</label>--}}
{{--                                <input type="number" class="form-control" name="phone" placeholder="Enter your phone number" aria-label="Enter your phone number" required data-msg="Please enter a valid phone number.">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="js-form-message mb-6">--}}
{{--                        <label class="input-label">How can we help you?</label>--}}
{{--                        <div class="input-group">--}}
{{--              <textarea class="form-control" rows="4" name="text" placeholder="Hi there, I would like to ..." aria-label="Hi there, I would like to ..." required--}}
{{--                        data-msg="Please enter a reason."></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="text-center">--}}
{{--                        <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>--}}
{{--                        <p class="small">We'll get back to you in 1-2 business days.</p>--}}
{{--                    </div>--}}
{{--                </form>--}}


                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4" data-toggle="modal" data-target="#applyNow">Get in touch</button>
                    <p class="small">We'll get back to you in 1-2 business days.</p>
                </div>
            </div>
        </div>

        <div id="contactsSection" class="position-relative mx-0">
            <div class="container space-1 space-lg-3 d-none d-lg-block">
                <div class="row justify-content-md-end">
                    <div class="col-md-6 col-lg-5">
                        <div class="card bg-white position-relative z-index-999 p-5 p-sm-7">
                            <div class="mb-5">
                                <h2>Learningbot Education Private Limited</h2>
                            </div>

                            <!--            &lt;!&ndash; Contacts &ndash;&gt;-->
                            <!--            <div class="media mb-5">-->
                            <!--            <span class="icon icon-xs icon-soft-primary icon-circle mr-3">-->
                            <!--              <i class="fas fa-phone"></i>-->
                            <!--            </span>-->
                            <!--              <div class="media-body">-->
                            <!--                <h5 class=" mb-1">Call us</h5>-->
                            <!--                <span class="d-block text-body font-size-1">+1 (062) 109-9222</span>-->
                            <!--              </div>-->
                            <!--            </div>-->
                            <!--            &lt;!&ndash; End Contacts &ndash;&gt;-->

                            <div class="media mb-5">
            <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
              <i class="fas fa-map-marker-alt"></i>
            </span>
                                <div class="media-body">
                                    <h5 class=" mb-1">Visit us</h5>
                                    <span class="d-block text-body font-size-1">Registered address: No. 148 Unit No. 203 II Floor, Embassy Square, Infantry Road Bangalore Karnataka, 560001 India</span>
                                </div>
                            </div>

                            <div class="media">
            <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
              <i class="fas fa-envelope"></i>
            </span>
                                <div class="media-body text-truncate">
                                    <h5 class=" mb-1">Email us</h5>
                                    <span class="d-block text-body font-size-1">hello@21kclass.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="position-md-absolute top-0 right-0 bottom-0 left-0">
                <div id="map" class="min-h-300rem h-100 rounded-lg"
                     data-hs-leaflet-options='{
                           "map": {
                             "scrollWheelZoom": false,
                             "coords": [12.9837496, 77.5937948],
                             "zoom": 17
                           },
                           "marker": [
                             {
                               "coords": [12.9837496, 77.5937948],
                               "icon": {
                                 "iconUrl": "/images/coaching/svg/components/map-pin.svg",
                                 "iconSize": [50, 45]
                               },
                               "popup": {
                                 "text": "<b>Learningbot Education Private Limited</b><br>Registered address: No. 148 Unit No. 203 II Floor, Embassy Square, Infantry Road Bangalore Karnataka, 560001 India",
                                 "title": "Address"
                               }
                             }
                           ]
                          }'>
                </div>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-coaching')


@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#map').each(function () {
                var leaflet = $.HSCore.components.HSLeaflet.init($(this)[0]);

                leaflet.fire('movestart');
                leaflet._rawPanBy([leaflet.getCenter().lng - 50, leaflet.getCenter().lat]);
                leaflet.fire('move');
                leaflet.fire('moveend');

                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    id: 'mapbox/light-v9'
                }).addTo(leaflet);
            });
        });
    </script>
@endsection
