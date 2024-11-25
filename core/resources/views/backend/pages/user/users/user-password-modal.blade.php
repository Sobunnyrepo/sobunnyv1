<div class="modal fade" id="userPasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Change Password') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" id="userPasswordModalForm">
                <input type="hidden" name="user_id_for_change_password" id="user_id_for_change_password" value="">
                @csrf
                <div class="modal-body">
                    <span class="email_send_message d-none"></span>
                    <x-form.password :title="__('Enter new password')" :name="'password'" :id="'password'" :class="'form-control'" :placeholder="__('Enter New password')"/>
                    <x-form.password :title="__('Confirm new password')" :name="'confirm_password'" :id="'confirm_password'" :class="'form-control'" :placeholder="__('Confirm new password')"/>
                    <span id="new_password_match"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="cmnBtn btn_5 btn_bg_danger radius-5 " data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="cmnBtn btn_5 btn_bg_blue radius-5 change_user_password">{{__('Change Password')}}</button>
                    <x-form.info :info="__('User will get his password via an automated email once password has changed.')"/>
                </div>
            </form>
        </div>
    </div>
</div>
