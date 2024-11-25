@extends('backend.admin-master')
@section('title', __('All Cities'))
@section('content')
    <div class="row g-4 mt-0">
        <div class="col-xl-12 col-lg-12">
            <div class="dashboard__card bg__white padding-20 radius-10">
                <div class="dashboard__inner__header">
                    <div class="dashboard__inner__header__flex">
                        <div class="dashboard__inner__header__left">
                            <h4 class="dashboard__inner__header__title">{{ __('All Cities') }}</h4>
                            @can('city-bulk-delete')
                                <x-bulk-action.bulk-action/>
                            @endcan
                        </div>
                        <div class="dashboard__inner__header__right">
                            @can('city-edit')
                                <x-btn.add-modal :title="__('Add City')" />
                            @endcan
                            <div class="d-flex text-right w-100 mt-3">
                                <input class="form__control blog_string_search" name="string_search" id="string_search" placeholder="{{ __('Search') }}">
                            </div>
                        </div>
                    </div>
                    <x-validation.error/>
                </div>
                <div class="tableStyle_three mt-4">
                    <div class="table_wrapper custom_Table">
                        <div class="search_result">
                            @include('countrymanage::city.search-result')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('countrymanage::city.add-modal')
    @include('countrymanage::city.edit-modal')
@endsection
@section('scripts')
    @can('city-bulk-delete')
        <x-bulk-action.bulk-delete-js :url="route('admin.city.delete.bulk.action')"/>
    @endcan
    @include('countrymanage::city.city-js')
@endsection
