<!--Banner part Start-->
<div id="home-banner" class="home-banner homme-banner-img" data-padding-top="{{$padding_top}}" data-padding-bottom="{{$padding_bottom}}" {!! $background_image !!}>

     <div class="container-1920 position-relative plr">
        {{-- <div class="letf-part-img">
            <div class="img-wraper">
                @foreach ($banner_left_images_01['banner_left_images_'] as $key => $banner_left_image)
                    @php $image_key = $key+1  @endphp
                    <div class="img{{$image_key}} imges">
                        {!! render_image_markup_by_attachment_id($banner_left_images_01['banner_left_images_'][$key]) !!}
                    </div>
                @endforeach
            </div>
        </div> --}}
        {{-- <div class="right-part-img">
            <div class="img-wraper">
                @foreach ($banner_right_images_02['banner_right_images_'] as $key => $banner_right_image)
                    @php $image_right_key = $key+1  @endphp
                <div class="img{{$image_right_key}} imges">
                    {!! render_image_markup_by_attachment_id($banner_right_images_02['banner_right_images_'][$key]) !!}
                </div>
                @endforeach
            </div>
        </div> --}}
        <div class="banner-wraper">
            <div class="banner-text">
                <div class="top-text text-center">
                    {{-- {!! $top_image !!} --}}
                    {{-- {{ $top_title }} --}}
                </div>
                {{-- <h1 class="banner-main-head text-center"> {{ $title }} </h1>
                <p class="text text-center">{{$subtitle}}</p> --}}
            </div>
            <div class="banner-form">
                <form  action="{{get_static_option('listing_filter_page_url') ?? '/listings'}}" class="d-flex align-items-center banner-search-location" method="get">
                    <div class="banner-form-wraper align-items-center">
                        @if(!empty(get_static_option('google_map_settings_on_off')))
                            {{-- <div class="new_banner__search__input">
                                <div class="new_banner__search__location_left" id="myLocationGetAddress">
                                    <i class="fa-solid fa-location-crosshairs fs-4"></i>
                                </div>
                                <input class="form--control" name="change_address_new" id="change_address_new" type="hidden" value="">
                                <input class="banner-input-field w-100" name="autocomplete" id="autocompleteSearchText" type="text" placeholder="{{ __('Search location here') }}">
                            </div> --}}
                        @endif

                        
                        <div class="address-text">
                            <div class="city">
                                {{-- <label for="city">{{ __('Select Your City') }}</label> --}}
                                <select name="city_id" id="city_id" class="select2_activation">
                                    <option value="">{{ __('Select Location') }}</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->city }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <div class="search-with-any-texts">
                            <input class="banner-input-field w-100" type="text" name="home_search" id="home_search" placeholder="{{ __('What are you looking for?') }}">
                            <span id="all_search_result" class="search_with_text_section"></span>
                        </div> --}}
                    </div>
                    <div class="banner-btn">
                        <button type="submit" class="new-cmn-btn rounded-red-btn setLocation_btn border-0">{{ get_static_option('search_button_title') ?? __('Search') }} </button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
<!--Banner part End-->


{{-- <input id="autocompleteSearchText" type="text" placeholder="Escribe una ubicación" style="width: 300px;" /> --}}


{{-- <div class="modal-backdrop fade show"></div>
<div class="modal show" id="currencyModal" tabindex="-1" role="dialog" aria-labelledby="currencyModalLabel" aria-hidden="false" style="display: block;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="currencyModalLabel">Sobunny</h5>
            </div>
            <div class="modal-body">

                <p>This website contains adult content</p>

                <p>By continuing to use Sobunny, you agree you're over the age of 18 and have read and agreed to our terms.</p>
                <p>Parents/guardians, you can learn more about online safety in the Assembly Four parents guide to adult content.</p>
                <p>
                    Sobunny has a zero-tolerance policy toward human trafficking, prostitution, and any other illegal conduct. We cooperate with law enforcement, pursuant to appropriate process, such as a subpoena, in investigating criminal activity. Activity that violates our zero-tolerance policy may result in a referral to law enforcement. I have no intention to, and will not, use this site in violation of Eros’s policies or any federal, state, or local law, and I agree to report violations to the appropriate authorities.
                </p>
                <p>
                    I also agree to report suspected exploitation of minors and/or human trafficking to the appropriate authorities.

                </p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div> --}}
