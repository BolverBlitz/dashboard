<div class="tab-pane mt-3 active" id="invoices">
    <form method="POST" enctype="multipart/form-data" class="mb-3"
        action="{{ route('admin.settings.update.invoicesettings') }}">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-md-3 p-3">
                <!-- Name -->
                <div class="form-group mb-3">
                    <div class="custom-control p-0">
                        <label for="company-name">{{ __('Company Name') }}:</label>
                        <input x-model="company-name" id="company-name" name="company-name" type="text" required
                            value="{{ $settings->invoice->company_name }}"
                            class="form-control @error('company-name') is-invalid @enderror">
                    </div>
                </div>
                <!-- address -->
                <div class="form-group mb-3">
                    <div class="custom-control  p-0">
                        <label for="company-address">{{ __('Company Address') }}:</label>
                        <input x-model="company-address" id="company-address" name="company-address" type="text"
                            value="{{ $settings->invoice->company_address }}"
                            class="form-control @error('company-address') is-invalid @enderror">
                    </div>
                </div>
                <!-- Phone -->
                <div class="form-group mb-3">
                    <div class="custom-control p-0">
                        <label for="company-phone">{{ __('Company Phonenumber') }}:</label>
                        <input x-model="company-phone" id="company-phone" name="company-phone" type="text"
                            value="{{ $settings->invoice->company_phone }}"
                            class="form-control @error('company-phone') is-invalid @enderror">
                    </div>
                </div>

                <!-- VAT -->
                <div class="form-group mb-3">
                    <div class="custom-control p-0">
                        <label for="company-vat">{{ __('VAT ID') }}:</label>
                        <input x-model="company-vat" id="company-vat" name="company-vat" type="text"
                            value="{{ $settings->invoice->company_vat }}"
                            class="form-control @error('company-vat') is-invalid @enderror">
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-3">
                <!-- email -->
                <div class="form-group mb-3">
                    <div class="custom-control p-0">
                        <label for="company-mail">{{ __('Company E-Mail Address') }}:</label>
                        <input x-model="company-mail" id="company-mail" name="company-mail" type="text"
                            value="{{ $settings->invoice->company_mail }}"
                            class="form-control @error('company-mail') is-invalid @enderror">
                    </div>
                </div>
                <!-- website -->
                <div class="form-group mb-3">
                    <div class="custom-control p-0">
                        <label for="company-web">{{ __('Company Website') }}:</label>
                        <input x-model="company-web" id="company-web" name="company-web" type="text"
                            value="{{ $settings->invoice->company_website }}"
                            class="form-control @error('company-web') is-invalid @enderror">
                    </div>
                </div>

                <!-- prefix -->
                <div class="form-group mb-3">
                    <div class="custom-control p-0">
                        <label for="invoice-prefix">{{ __('Invoice Prefix') }}:</label>
                        <input x-model="invoice-prefix" id="invoice-prefix" name="invoice-prefix" type="text" required
                            value="{{ $settings->invoice->prefix }}"
                            class="form-control @error('invoice-prefix') is-invalid @enderror">
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-3">
                <div class="custom-control mb-3 p-0">
                    <div class="col m-0 p-0 d-flex justify-content-between align-items-center">
                        <div>
                            <input value="true" id="enable-invoices" name="enable-invoices"
                                {{ $settings->invoice->enabled == 'true' ? 'checked' : '' }} type="checkbox">
                            <label for="enable-invoices">{{ __('Enable Invoices') }} </label>
                        </div>
                    </div>
                </div>
                <!-- logo -->
                <div class="form-group mb-3">
                    <div class="custom-control p-0">
                        <label for="logo">{{ __('Logo') }}:</label>
                        <div class="custom-file mb-3">
                            <input type="file" accept="image/png,image/jpeg,image/jpg" class="custom-file-input"
                                name="logo" id="logo">
                            <label class="custom-file-label selected"
                                for="favicon">{{ __('Select Invoice Logo') }}</label>
                        </div>
                    </div>
                    @error('logo')
                        <span class="text-danger">
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <button class="btn btn-primary mt-3 ml-3">{{ __('Submit') }}</button>
        </div>
    </form>
</div>
