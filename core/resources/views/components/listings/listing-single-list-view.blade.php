@if($listings->count() >0)
    @foreach($listings as $listing)
        <div class="singleFeatureCard">
            <div class="featureImg">
                <x-listings.favorite-item-add-remove :favorite="$listing->id ?? 0" />
                <a href="{{ route('frontend.listing.details', $listing->slug) }}" class="main-card-image">
                    {!! render_image_markup_by_attachment_id($listing->image, '','','thumb'); !!}
                </a>
            </div>
            <div class="featurebody">
                <h4> <a href="{{ route('frontend.listing.details', $listing->slug) }}" class="featureTittle head4 twoLine">{{ $listing->title }}</a> </h4>

                @if(!empty($listing))
                @if(!is_null($listing->user?->identity_verify) && $listing->user?->identity_verify?->status === 1)
                    <span class="varified bunny_varified">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.7775 4.37L9.0975 3.58C8.9675 3.43 8.8625 3.15 8.8625 2.95V2.1C8.8625 1.57 8.4275 1.135 7.8975 1.135H7.0475C6.8525 1.135 6.5675 1.03 6.4175 0.899999L5.6275 0.219999C5.2825 -0.0750012 4.7175 -0.0750012 4.3675 0.219999L3.5825 0.904999C3.4325 1.03 3.1475 1.135 2.9525 1.135H2.0875C1.5575 1.135 1.1225 1.57 1.1225 2.1V2.955C1.1225 3.15 1.0175 3.43 0.8925 3.58L0.2175 4.375C-0.0725 4.72 -0.0725 5.28 0.2175 5.625L0.8925 6.42C1.0175 6.57 1.1225 6.85 1.1225 7.045V7.9C1.1225 8.43 1.5575 8.865 2.0875 8.865H2.9525C3.1475 8.865 3.4325 8.97 3.5825 9.1L4.3725 9.78C4.7175 10.075 5.2825 10.075 5.6325 9.78L6.4225 9.1C6.5725 8.97 6.8525 8.865 7.0525 8.865H7.9025C8.4325 8.865 8.8675 8.43 8.8675 7.9V7.05C8.8675 6.855 8.9725 6.57 9.1025 6.42L9.7825 5.63C10.0725 5.285 10.0725 4.715 9.7775 4.37ZM7.0775 4.055L4.6625 6.47C4.5925 6.54 4.4975 6.58 4.3975 6.58C4.2975 6.58 4.2025 6.54 4.1325 6.47L2.9225 5.26C2.7775 5.115 2.7775 4.875 2.9225 4.73C3.0675 4.585 3.3075 4.585 3.4525 4.73L4.3975 5.675L6.5475 3.525C6.6925 3.38 6.9325 3.38 7.0775 3.525C7.2225 3.67 7.2225 3.91 7.0775 4.055Z" fill="white"/>
                    </svg>
                        {{ __('BUNNY VERIFIED') }}
                    </span>
                @endif
                <x-badge.membership-badge :listing="$listing"/>
            @endif
            
            @if(!empty($user))
                @if(!is_null($user->identity_verify) && $user->identity_verify->status === 1)
                    <span class="varified bunny_varified">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.7775 4.37L9.0975 3.58C8.9675 3.43 8.8625 3.15 8.8625 2.95V2.1C8.8625 1.57 8.4275 1.135 7.8975 1.135H7.0475C6.8525 1.135 6.5675 1.03 6.4175 0.899999L5.6275 0.219999C5.2825 -0.0750012 4.7175 -0.0750012 4.3675 0.219999L3.5825 0.904999C3.4325 1.03 3.1475 1.135 2.9525 1.135H2.0875C1.5575 1.135 1.1225 1.57 1.1225 2.1V2.955C1.1225 3.15 1.0175 3.43 0.8925 3.58L0.2175 4.375C-0.0725 4.72 -0.0725 5.28 0.2175 5.625L0.8925 6.42C1.0175 6.57 1.1225 6.85 1.1225 7.045V7.9C1.1225 8.43 1.5575 8.865 2.0875 8.865H2.9525C3.1475 8.865 3.4325 8.97 3.5825 9.1L4.3725 9.78C4.7175 10.075 5.2825 10.075 5.6325 9.78L6.4225 9.1C6.5725 8.97 6.8525 8.865 7.0525 8.865H7.9025C8.4325 8.865 8.8675 8.43 8.8675 7.9V7.05C8.8675 6.855 8.9725 6.57 9.1025 6.42L9.7825 5.63C10.0725 5.285 10.0725 4.715 9.7775 4.37ZM7.0775 4.055L4.6625 6.47C4.5925 6.54 4.4975 6.58 4.3975 6.58C4.2975 6.58 4.2025 6.54 4.1325 6.47L2.9225 5.26C2.7775 5.115 2.7775 4.875 2.9225 4.73C3.0675 4.585 3.3075 4.585 3.4525 4.73L4.3975 5.675L6.5475 3.525C6.6925 3.38 6.9325 3.38 7.0775 3.525C7.2225 3.67 7.2225 3.91 7.0775 4.055Z" fill="white"/>
                    </svg>
                        {{ __('BUNNY VERIFIED') }}
                    </span>
                @endif
                <x-badge.membership-badge :user="$user"/>
            @endif
            
            
                <style>
                    .varified {
                        padding: 1px 5px;
                      border-radius: 2px;
                      font-size:10px;
                      font-weight: 500;
                      color: #fff;
                      background: #22C55E;
                    }
                </style>





                <x-listings.listing-location :listing="$listing"/>

                <div class="btn-wrapper">
                    @if($listing->is_featured === 1)
                        <span class="pro-btn2">
                            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M4 0V3.88889H7L3 10V6.11111H0L4 0Z" fill="white"/>
                            </svg>  {{ __('FEATURED') }}
                        </span>
                    @endif
                </div>

                <span class="featurePricing d-flex justify-content-between align-items-center">
                {{-- <span class="money">{{ amount_with_currency_symbol($listing->price) }}</span> --}}
                {{-- <span class="date">
                    @if(!empty($listing->published_at))
                        {{ \Carbon\Carbon::parse($listing->published_at)->diffForHumans() }}
                    @endif
                </span> --}}
            </span>
            </div>
        </div>
    @endforeach
@else
    <p>{{ __('No listings found.') }}</p>
@endif
