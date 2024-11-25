@extends('backend.admin-master')
@section('site-title')
    {{ __('All Reasons') }}
@endsection
@section('content')
    <div class="row g-4 mt-0">
        <div class="col-xl-12 col-lg-12">
            <div class="dashboard__card bg__white padding-20 radius-10">
                <div class="dashboard__inner__header">
                    <div class="dashboard__inner__header__flex">
                        <div class="dashboard__inner__header__left">
                            <h4 class="dashboard__inner__header__title">{{ __('All Reasons') }}</h4>
                            @can('report-reason-bulk-delete')
                                <x-bulk-action.bulk-action/>
                            @endcan
                        </div>
                        <div class="dashboard__inner__header__right">
                            <div class="btn-wrapper">
                                <x-btn.add-modal :title="__('Add Reason')" />
                            </div>
                            <div class="d-flex text-right w-100 mt-3">
                                <input class="form__control" name="string_search" id="string_search" placeholder="{{ __('Search') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <x-validation.error/>
                <div class="tableStyle_three mt-4">
                    <div class="table_wrapper custom_Table">
                        <div class="custom_table style-04 search_result">
                            @include('backend.pages.listings.reasons.search-result')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend.pages.listings.reasons.add-modal')
    @include('backend.pages.listings.reasons.edit-modal')
@endsection
@section('scripts')
    @can('report-reason-bulk-delete')
        <x-bulk-action.bulk-delete-js :url="route('admin.report.reason.delete.bulk.action')"/>
    @endcan
    <x-media.js/>
    @include('backend.pages.listings.reasons.reason-js')
@endsection
