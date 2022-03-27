<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col">
                <h4 class="card-title">{{ __('forms.general.name') }}</h4>
            </div><!--end col-->
            <div class="col-auto">
                <i class="fa fa-refresh" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <form action="{{ route('general.store') }}" method="POST">
                @error('msg')
                <div class="alert alert-primary border-0" role="alert">{{ __($message) }}</div>
                @enderror
                @csrf
                <div class="col-lg-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('siteText') is-invalid @enderror" id="siteText" required name="siteText"  placeholder="Site Başlığı" value="{{ $general->siteText }}">
                        <label class="form-label" for="siteText">{{ __('forms.general.siteText') }}</label>
                        @error('siteText')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('slogan') is-invalid @enderror" id="slogan" name="slogan" aria-describedby="slogan" required  placeholder="slogan" value="{{ $general->slogan }}">
                        <label class="form-label" for="slogan">{{ __('forms.general.slogan') }}</label>
                        @error('slogan')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" name="email" placeholder="Yönetim Eposta Adresi" value="{{ $general->email }}">
                        <label class="form-label" for="email">{{ __('forms.general.email') }}</label>
                        @error('email')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <div class="form-check">
                            <label class="form-check-label" for="InlineCheckbox">{{ __('forms.general.register') }}</label>
                            <input type="checkbox" class="form-check-input" id="InlineCheckbox" name="register" @isset($general->register) @if($general->register) checked @endif @endisset>
                            @error('register')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select @error('selectedWeekly') is-invalid @enderror" id="floatingSelect" aria-label="{{ __('forms.general.selectedWeekly') }}" name="selectedWeekly">
                            <option value="1" @if($general->selectedWeekly == "1") selected @endif>{{ __('time.week.sunday') }}</option>
                            <option value="2" @if($general->selectedWeekly == "2") selected @endif>{{ __('time.week.monday') }}</option>
                            <option value="3" @if($general->selectedWeekly == "3") selected @endif>{{ __('time.week.tuesday') }}</option>
                            <option value="4" @if($general->selectedWeekly == "4") selected @endif>{{ __('time.week.wednesday') }}</option>
                            <option value="5" @if($general->selectedWeekly == "5") selected @endif>{{ __('time.week.thursday') }}</option>
                            <option value="6" @if($general->selectedWeekly == "6") selected @endif>{{ __('time.week.friday') }}</option>
                            <option value="7" @if($general->selectedWeekly == "7") selected @endif>{{ __('time.week.saturday') }}</option>
                        </select>
                        <label for="floatingSelect">{{ __('forms.general.selectedWeekly') }}</label>
                        @error('title')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div><!-- end col -->

                    <div class="mb-3 ms-auto text-end">
                        <button type="submit" class="btn btn-primary">{{ __('forms.submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--end card-body-->
</div>
