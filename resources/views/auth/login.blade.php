<body style="background-size: 100%;
            background: linear-gradient(to bottom, #FFAD60 0%,#D9534F 100%);">
<title>Laravel</title>
<div style="
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100%;">
        <a href="http://127.0.0.1:8000/"><img src="https://media.baamboozle.com/uploads/images/291632/1619760072_114659_gif-url.gif" style="margin:15px" width="150" height="150"></a>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form style = "background-color: #FFEEAD;
                       
                       border-radius: 10px;
                       margin: auto;
                       width: 30%;
                       padding-top:1px;
                       padding-bottom:15px;"
                       method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <h3 style = "
                text-align: left;          
                font-family: 'Courier New', monospace;
                font-size:24px;
                margin-left: 10%;">
                Email</h3>

                <input style="width: 80%;
                             height: 40px;
                             border-radius: 5px;" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <h3 style = "text-align: left;
                            font-family: 'Courier New', monospace;
                            font-size:24px;
                             margin-left: 10%">
                             Password</h3>
                <input style="width: 80%;
                             height: 40px;
                             border-radius: 5px;" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div style = "text-align: left;
                             margin-left: 10%;
                             font-family: 'Courier New', monospace;
                            font-size:18px;
                            font-weight:300;
                             margin-top: 10px;" class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a style="text-align: left;
                             margin-left: 5%;
                             font-family: 'Courier New', monospace;
                            font-size:18px;
                            font-weight:300;"class="underline" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button style="
                        background:#1B1717;
                        color:#D9534F;
                        border-radius:10px;                      
                        margin-Left: 50px;
                        padding-left:10px;
                        padding-right:10px;
                        padding-top: 5px;
                        padding-bottom:5px;
                        font-family: 'Courier New', monospace;
                        font-weight: 800;
                        font-size:24px;
                        text-shadow: 1px 1px 1px #FFFFFF;
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">Login
                </button>
            </div>
        </form>
</div>
        </body>
