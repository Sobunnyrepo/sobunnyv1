<!-- Country Edit Modal -->
<div class="modal fade" id="editCountryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Edit Department') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('admin.department.edit')}}" method="POST">
                @csrf
                <input type="hidden" name="department_id" id="department_id" value="">
                <div class="modal-body">
                    <div class="single-input mb-3">
                        <label for="title" class="label-title">{{__('Department')}}</label>
                        <input type="text" name="edit_name" id="edit_name" value="{{ old('name') }}" placeholder="{{ __('Enter a department name') }}" class="form-control" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="cmnBtn btn_5 btn_bg_danger radius-5" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="cmnBtn btn_5 btn_bg_blue radius-5">{{__('update')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
