<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="{{ asset('backend/admin/css/admin-css.css') }}"/>
    </head>
        <body class="container">  
            <div class="login-container">
                <div class="login-content">
                  <h1 class="welcome-text">Welcome Back</h1>
                    @if(session()->has('error'))
                        <p style="color:red">{{ session()->get('error') }}</p>
                    @endif
                    <form class="login-form" action="{{ url('/admin/create') }}" method="POST">
                        @csrf
                        <input type="text" name="email" placeholder="Username" class="input-field">
                        <input type="password" name="password" placeholder="Password" class="input-field">
                        <button type="submit" class="login-button">Login</button>
                    </form>
                </div>
            </div>
    </body>
</html>