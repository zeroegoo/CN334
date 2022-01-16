<body style="background-size: 100%;
            background-image: url('https://st.depositphotos.com/1482106/1380/i/600/depositphotos_13809554-stock-photo-beige-suede-texture-background.jpg');">
<div style="
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100%;">
        <a href="http://127.0.0.1:8000/"><img src="https://media.baamboozle.com/uploads/images/291632/1619760072_114659_gif-url.gif" style="margin:15px" width="300" height="300"></a>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form style = "background-color: #4CAF50;
                       border-radius: 5px;
                       margin: auto;
                       margin-bottom: 30px;
                       width: 30%;
                       padding-bottom:15px;
                       padding-top:1px;" method="POST" action="{{ route('password.email') }}">
            @csrf
            <h4 style = "text-align: left;
                             margin-left: 10%;
                             margin-right: 10%;">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h4>
            <div class="block">
            <h3 style = "text-align: left;
                         margin-left: 10%;">Email</h3>
                <input style="width: 80%;
                             height: 40px;
                             border-radius: 5px;
                             margin-bottom: 10px;" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                
                <button style = "background-color: #4CAF50;
                                border-radius: 5px;
                                color: white;
                                padding: 5px;
                                text-align: center;
                                margin-left : 10px;
                                display: inline-block;
                                font-size: 16px; " 
                        type = "submit">Email Password Reset Link
            </div>
        </form>
        </div>
        </body>
