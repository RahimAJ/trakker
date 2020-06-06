@extends('layouts.app')

@section('content')
<div class="normal_content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 normal_card">
                <h3 class="mb-30">Register</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mt-10">
                        <input id="name" type="text" class="single-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mt-10">
                        <input id="email" type="email" class="single-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mt-10">
                        <input id="password" type="password" class="single-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mt-10">
                        <input id="password-confirm" type="password" class="single-input form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    </div>

                    <div class="mt-30 pl-5">         
                        <input 
                        type="checkbox" 
                        name="terms-and-conditions"
                        id="terms-and-conditions"
                        required 
                        data-validation-required-message=
                            "You must agree to the terms and conditions"
                        >
                        <label for="terms-and-conditions">I agree to the <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><em>Terms and Conditions.</em></a></label>
                    </div>

                    <div class="mt-10">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <strong>PRIVACY</strong>
          <p>The information collected from this website will be viewed as strictly confidential. The University may use your contact information in order to send an e-mail and/or other communications regarding your status or updates about this service. We may also use your data for statistics, summaries, research and studies for the development of the University.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
