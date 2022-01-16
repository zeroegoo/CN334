<body style="background-size: 100%;
            background-image: url('https://st.depositphotos.com/1482106/1380/i/600/depositphotos_13809554-stock-photo-beige-suede-texture-background.jpg');">
    <div style="
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100%;">
        <a href="http://127.0.0.1:8000/"><img src="https://media.baamboozle.com/uploads/images/291632/1619760072_114659_gif-url.gif" style="margin:15px" width="300" height="300"></a>

        <form style = "background-color: #4CAF50;
                       border-radius: 5px;
                       margin: auto;
                       margin-bottom: 30px;
                       width: 50%;
                       padding-bottom:15px;
                       padding-top:1px;"
               method="POST" action="{{ route('register') }}">
            @csrf

            <div>
            <h3 style = "text-align: left;
                             margin-left: 10%">Name</h3>
                <input style="width: 80%;
                             height: 40px;
                             border-radius: 5px;" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <h3 style = "text-align: left;
                             margin-left: 10%">Email</h3>
                <input style="width: 80%;
                             height: 40px;
                             border-radius: 5px;" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
            <h3 style = "text-align: left;
                             margin-left: 10%">Password</h3>
                <input style="width: 80%;
                             height: 40px;
                             border-radius: 5px;" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
            <h3 style = "text-align: left;
                             margin-left: 10%">Confirm Password</h3>
                <input style="width: 80%;
                             height: 40px;
                             border-radius: 5px;
                             margin-bottom: 10px;" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button style = "background-color: #4CAF50;
                                border-radius: 5px;
                                color: white;
                                padding: 5px;
                                text-align: center;
                                margin-left : 10px;
                                display: inline-block;
                                font-size: 16px; " 
                        type = "submit">Register
                </button>
            </div>
        </form>
        </div>
        </body>

