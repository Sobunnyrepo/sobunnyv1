<p class="featureCap d-flex align-items-center gap-1">
    @if(!empty($listing->address) && !is_null($listing->address)  || !empty($listing->country_id))
        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.99984 7.83332C5.99984 8.36376 6.21055 8.87246 6.58562 9.24754C6.9607 9.62261 7.4694 9.83332 7.99984 9.83332C8.53027 9.83332 9.03898 9.62261 9.41405 9.24754C9.78912 8.87246 9.99984 8.36376 9.99984 7.83332C9.99984 7.30289 9.78912 6.79418 9.41405 6.41911C9.03898 6.04404 8.53027 5.83332 7.99984 5.83332C7.4694 5.83332 6.9607 6.04404 6.58562 6.41911C6.21055 6.79418 5.99984 7.30289 5.99984 7.83332Z" stroke="#64748B" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.7712 11.6047L8.94251 14.4333C8.6925 14.6831 8.35356 14.8234 8.00017 14.8234C7.64678 14.8234 7.30785 14.6831 7.05784 14.4333L4.22851 11.6047C3.48265 10.8588 2.97473 9.90845 2.76896 8.8739C2.5632 7.83934 2.66883 6.767 3.07251 5.79247C3.47618 4.81795 4.15977 3.98501 5.03683 3.39899C5.91388 2.81297 6.94502 2.50018 7.99984 2.50018C9.05466 2.50018 10.0858 2.81297 10.9629 3.39899C11.8399 3.98501 12.5235 4.81795 12.9272 5.79247C13.3308 6.767 13.4365 7.83934 13.2307 8.8739C13.0249 9.90845 12.517 10.8588 11.7712 11.6047Z" stroke="#64748B" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    @endif

    @php
            $cities = [userListingLocation($listing)];
            $cityId = Cookie::get('city_id');

            $cityIdFilter = $_GET['city_id'] ?? null;
            if($cityIdFilter){
                Cookie::queue('city_id', $cityIdFilter, 60*24*30);
                $cityId = $cityIdFilter;
            }

            if(!empty($listing->secondaryCity) && $listing->secondaryCity->id == $cityId){ 
                $cities = [$listing->secondaryCity->city];
            }
            if(!empty($listing->tertiaryCity) && $listing->tertiaryCity->id == $cityId){
                $cities = [$listing->tertiaryCity->city];
            }
    @endphp

<span class="oneLine"> {{ implode(', ', $cities) }} </span>

    {{-- <span class="oneLine"> {{ userListingLocation($listing) }} </span> --}}
    {{-- @if(!empty($listing->secondaryCity))
        <span class="oneLine"> {{$listing->secondaryCity->city }} </span>
    @endif --}}

</p>
