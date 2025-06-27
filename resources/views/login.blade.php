<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Gunungin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #2e7d32;
    }
    .login-container {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 2.5rem 3rem;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 400px;
      animation: fadeInScale 1s ease forwards;
      opacity: 0;
      transform: scale(0.95);
    }
    @keyframes fadeInScale {
      to {
        opacity: 1;
        transform: scale(1);
      }
    }
    h2 {
      text-align: center;
      color: #2e7d32;
      margin-bottom: 1.5rem;
      font-weight: 700;
      font-size: 2rem;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    form label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #1b5e20;
    }
    form input[type="text"],
    form input[type="password"] {
      width: 100%;
      padding: 0.7rem;
      margin-bottom: 1.2rem;
      border: 1px solid #a5d6a7;
      border-radius: 8px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }
    form input[type="text"]:focus,
    form input[type="password"]:focus {
      border-color: #2e7d32;
      outline: none;
      box-shadow: 0 0 8px #81c784;
    }
    button {
      width: 100%;
      background-color: #2e7d32;
      color: white;
      border: none;
      padding: 0.8rem;
      font-size: 1.1rem;
      font-weight: 700;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 8px rgba(46, 125, 50, 0.5);
    }
    button:hover {
      background-color: #1b5e20;
      box-shadow: 0 6px 15px rgba(27, 94, 32, 0.7);
    }
    .forgot-link {
      display: block;
      text-align: right;
      margin-top: -1rem;
      margin-bottom: 1.5rem;
      font-size: 0.9rem;
      color: #33691e;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .forgot-link:hover {
      color: #1b5e20;
    }
    .login-footer {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
      color: #4e4e4e;
    }
    .login-footer a {
      color: #2e7d32;
      text-decoration: none;
      font-weight: 600;
    }
    .login-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Gunungin</h2>

    @if ($errors->any())
    <div style="color: red; margin-bottom: 1rem; text-align: center;">
        {{ $errors->first() }}
    </div>
@endif

@if (session('status'))
    <div style="color: green; margin-bottom: 1rem; text-align: center;">
        {{ session('status') }}
    </div>
@endif

    <form method="POST" action="{{ route('login.process') }}">
      @csrf
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required autofocus />
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required />
      <a href="{{ route('forgot') }}" class="forgot-link">Lupa Password?</a>
      <button type="submit">Masuk</button>
    </form>
    <div class="login-footer">
      Belum punya akun? <a href="{{ route('signup') }}">Daftar di sini</a>
    </div>
  </div>
</body>
</html>
