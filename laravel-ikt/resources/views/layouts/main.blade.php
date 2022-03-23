<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>@yield('title')</title>
    @yield('head')
</head>
<body>
    <div id="navbar">
        <h1>IKT Webshop</h1>
        @auth
            <div style="display: inline;">
                <span style="margin-right: 1rem">You are logged in as <b>{{ \Illuminate\Support\Facades\Auth::user()->name }}</b></span>
                <button class="navButton" onclick=""><b>Profile</b></button>
                <button class="navButton" onclick=""><b>Cart</b></button>
            </div>
            
        @else
            <div style="disply: inline;">
                <button class="navButton" onclick="loginModal();"><b>Login</b></button>
                <button class="navButton" onclick="signUpModal();"><b>Sign Up</b></button>
            </div>
        @endauth

    </div>
    @if(Session::has('success'))
        <div class="alert alert-success my-2">{{ Session::get('success') }}</div>
    @endif
    @if(session('danger'))
        <div class="alert alert-danger my-2">{{ session('danger') }}</div>
    @endif
    <div id="content">
    <!-- @if($errors->any)
                @foreach($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            @endif -->

        @yield('content')
    </div>
    <div id="footer">

    </div>
    <script>
        function loginModal(){
            let modal = document.getElementById("authModal");
            modal.querySelector("div>div>h5").innerHTML = "Login";

            let content = document.getElementById("modalBodyLogin");
            let clone = content.content.querySelector("div").cloneNode(true);

            modal.querySelector("div>div.modal-body").innerHTML = "";
            modal.querySelector("div>div.modal-body").appendChild(clone);

            var myModal = new bootstrap.Modal(modal);
            myModal.show();
        }

        function signUpModal(){
            let modal = document.getElementById("authModal");
            modal.querySelector("div>div>h5").innerHTML = "Sign up";

            let content = document.getElementById("modalBodyRegister");
            let clone = content.content.querySelector("div").cloneNode(true);

            modal.querySelector("div>div.modal-body").innerHTML = "";
            modal.querySelector("div>div.modal-body").appendChild(clone);

            var myModal = new bootstrap.Modal(modal);
            myModal.show();
        }
    </script>
    @yield('innerjs')
    <div class="modal" tabindex="-1" id="authModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
            </div>
        </div>
    </div>

    {{-- <template id="modalBodyRegister">
        <div>
            {!! Form::open(['route' => 'register']) !!}
                <div class="mb-3">
                    {{ Form::label('name', 'Name', $attributes = ["class" => "form-label"]) }}
                    {{ Form::text('name', $value = old('name'), $attributes = ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('email', 'Email', $attributes = ["class" => "form-label"]) }}
                    {{ Form::text('email', $value = old('email'), $attributes = ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('password', 'Password', $attributes = ["class" => "form-label"]) }}
                    @error('password')
                        {{ Form::password('password', $attributes = ["class" => "form-control is-invalid"]) }}
                        <div id="passwordFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @else
                         {{ Form::password('password', $attributes = ["class" => "form-control"]) }}
                    @enderror
                </div>
                <div class="mb-3">
                    {{ Form::label('password2', 'Confirm password', $attributes = ["class" => "form-label"]) }}
                    {{ Form::password('password2', $attributes = ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('birthdate', 'Birthdate', $attributes = ["class" => "form-label"]) }}
                    {{ Form::date('birthdate', $value = old('name'), $attributes = ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    {{ Form::submit('Sign up', $attributes = ["class" => "btn btn-success"]) }}
                </div>
            {!! Form::close() !!}
            @if($errors->any)
                @foreach($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            @endif
        </div>
    </template> 
    --}}

    <template id="modalBodyLogin">
        <div>
            <form action="{{route('auth')}}" method="post">
                @csrf
                <div class="mb-3">
                    {{ Form::label('email', 'Email', $attributes = ["class" => "form-label"]) }}
                    {{ Form::text('email', $value = old('email'), $attributes = ["class" => "form-control"])}}
                </div>
                <div class="mb-3">
                    {{ Form::label('password', 'Password', $attributes = ["class" => "form-label"]) }}
                    {{ Form::password('password', $attributes = ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                        {{ Form::submit('Login', ["class" => "btn btn-success", 'name' => 'gomb', 'value' => 'gomb']) }}
                </div>
            </form>
            @if($errors->any)
                @foreach($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            @endif
        </div>
    </template>
</body>
</html>
