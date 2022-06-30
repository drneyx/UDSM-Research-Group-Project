@extends('auth.main')

@section('content')
<main class="login-form">
    <div class="cotainer">
      
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include('auth.messages')
                <div class="card">
                    <h3 class="card-header text-center" style="color: #022950">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-4">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                           

                            <div class="d-grid mx-auto">
                                <button type="submit" style="background-color: #022950" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection