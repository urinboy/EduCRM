<!-- resources/views/contacts/create.blade.php -->

@extends('layouts.app')

@section('name', __('contacts'))
@section('title', ucfirst(__('contact')))

@section('heading')
    <h1 class="h3">@yield('title')</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none"
                    href="{{ route('home') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')


    @session('success')
        <div class="alert alert-success" role="alert" id="success-alert">
            {{ $value }}
        </div>
    @endsession

    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center">
        <div class="col-12 col-lg-6">
            <div class="border overflow-hidden  bg-white shadow-sm rounded">

                <form method="POST" action="{{ route($__env->yieldContent('name') . '.store') }}">
                    @csrf

                    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                        <div class="col-12">
                            <label for="full_name" class="form-label">{{ __('Full Name') }}:<span
                                    class="text-danger">*</span></label>
                            <input type="text" id="full_name" name="full_name" placeholder="{{ __('Full Name') }}"
                                class="form-control @error('full_name') is-invalid @enderror" required
                                value="{{ old('full_name') }}">
                            @error('full_name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="email" class="form-label">{{ __('Email') }}: <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                                        </path>
                                    </svg>
                                </span>
                                <input type="email" id="email" name="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" required
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="phone_number" class="form-label">{{ __('Phone Number') }}: <span
                                    class="text-danger">*</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                                        </path>
                                    </svg>
                                </span>
                                <input type="tel" id="phone_number" name="phone_number" placeholder="{{ __('Phone Number') }}"
                                    class="form-control @error('phone_number') is-invalid @enderror"
                                    value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="subject" class="form-label">{{ __('Subject') }}: <span
                                    class="text-danger">*</span></label>
                            <input type="text" id="subject" name="subject" placeholder="Subject"
                                class="form-control w-100 @error('subject') is-invalid @enderror" required
                                value="{{ old('subject') }}">
                            @error('subject')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">{{ __("Full Message") }}: <span class="text-danger">*</span></label>
                            <textarea id="message" name="message" placeholder="Message"
                            class="form-control w-100 @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">{{ __('crud.btn_submit') }}</button>
                                
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row justify-content-xl-center">
                <div class="col-12 col-xl-11">
                    <div class="mb-4 mb-md-5">
                        <div class="mb-3 text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-geo" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="mb-2">Office</h4>
                            <p class="mb-2">Please visit us to have a discussion.</p>
                            <hr class="w-50 mb-3 border-dark-subtle">
                            <address class="m-0 text-secondary">Uzbekistan, Republic Karakalpakstan, Takhiatash</address>
                        </div>
                    </div>
                    <div class="row mb-sm-4 mb-md-5">
                        <div class="col-12 col-sm-6">
                            <div class="mb-4 mb-sm-0">
                                <div class="mb-3 text-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-2">Phone</h4>
                                    <p class="mb-2">Please speak with us directly.</p>
                                    <hr class="w-75 mb-3 border-dark-subtle">
                                    <p class="mb-0">
                                        <a class="link-secondary text-decoration-none" href="tel:+998913731196">+998 (91)
                                            373-11-96</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="mb-4 mb-sm-0">
                                <div class="mb-3 text-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                        <path
                                            d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z">
                                        </path>
                                        <path
                                            d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-2">Email</h4>
                                    <p class="mb-2">Please write to us directly.</p>
                                    <hr class="w-75 mb-3 border-dark-subtle">
                                    <p class="mb-0">
                                        <a class="link-secondary text-decoration-none"
                                            href="mailto:urinboydev@gmail.com">urinboydev@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // var deleteModal = document.getElementById('deleteModal');
            // deleteModal.addEventListener('show.bs.modal', function(event) {
            //     var button = event.relatedTarget;
            //     var sectionId = button.getAttribute('data-sectionid');
            //     var action = '{{ url($__env->yieldContent('name')) }}/' + sectionId;
            //     var form = deleteModal.querySelector('#deleteForm');
            //     form.setAttribute('action', action);
            // });

            // Hide success alert after 3 seconds
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 5000);
            }
        });
    </script>
@endsection
