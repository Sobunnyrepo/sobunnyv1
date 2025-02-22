@extends('backend.admin-master')
@section('site-title')
    {{__('Guest Add Listing Template')}}
@endsection
@section('style')
    <x-media.css/>
    <x-summernote.css/>
@endsection
@section('content')
    <div class="row g-4 mt-0">
        <div class="col-xl-12 col-lg-12 mt-0">
            <div class="dashboard__card bg__white padding-20 radius-10">
                <div class="dashboard_orderDetails__header__flex">
                    <div class="dashboard_orderDetails__header__left">
                        <h2 class="dashboard__card__header__title mb-3">{{__('Guest Add Listing Template')}}</h2>
                    </div>
                    <div class="dashboard_orderDetails__header__right">
                        <a href="{{route('admin.email.template.all')}}" class="cmnBtn btn_5 btn_bg_info radius-5">{{__('All Email Templates')}}</a>
                    </div>
                </div>
                <x-validation.error/>
                <form action="{{route('admin.email.user.guest.add.listing.template')}}" method="POST">
                    @csrf
                    <div class="form__input__single">
                        <label for="guest_add_new_listing_subject" class="form__input__single__label">{{__('Email Subject')}}</label>
                        <input type="text" class="form__control radius-5" name="guest_add_new_listing_subject" value="{{get_static_option('guest_add_new_listing_subject') ?? 'Guest created new Listing'}}">
                    </div>
                    <div class="form__input__single">
                        <label for="guest_add_new_listing_message" class="form__input__single__label">{{__('Email Message for Guest')}}</label>
                        <textarea class="form__control summernote" name="guest_add_new_listing_message">{!! get_static_option('guest_add_new_listing_message') ?? '<p>Hello,</p></p> New listing is just created. Please check for approve, thanks. Listing ID: @listing_id </p>'  !!} </textarea>
                        <div class="d-grid">
                            <small class="form-text"><strong class="text-danger"> @listing_id </strong>{{__('will be replaced by dynamically with listing_id.')}}</small>
                        </div>
                    </div>

                    <div class="form__input__single">
                        <label for="guest_add_new_listing_message_for_admin" class="form__input__single__label">{{__('Email Message for Admin')}}</label>
                        <textarea class="form__control summernote" name="guest_add_new_listing_message_for_admin">{!! get_static_option('guest_add_new_listing_message_for_admin') ?? '<p>Hello,</p></p> New listing is just created. Please check for approve, thanks. Listing ID: @listing_id </p>'  !!} </textarea>
                        <div class="d-grid">
                            <small class="form-text"><strong class="text-danger"> @listing_id </strong>{{__('will be replaced by dynamically with listing_id.')}}</small>
                        </div>
                    </div>

                    <div class="btn_wrapper mt-4">
                        <button type="submit" id="update" class="cmnBtn btn_5 btn_bg_blue radius-5">{{ __('Update Changes') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <x-media.js />
    <x-summernote.js/>
@endsection
