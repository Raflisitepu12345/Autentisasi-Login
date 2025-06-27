<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Halaman Pendaftaran</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      color: #2e7d32;
      line-height: 1.6;
    }

    .navbar {
      background-color: rgba(0, 100, 0, 0.9);
      padding: 15px 30px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.3);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar a {
      color: white;
      margin-right: 25px;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.1rem;
      transition: color 0.3s ease;
    }

    .navbar a:hover,
    .navbar a:focus {
      color: #a5d6a7;
      outline: none;
    }

    .header {
      text-align: center;
      padding: 40px 20px 20px;
      color: #a5d6a7;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.7);
    }

    .mountain-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto 15px;
      fill: #a5d6a7;
      filter: drop-shadow(0 0 3px rgba(0,0,0,0.5));
      display: block;
    }

    .header h1 {
      font-size: 2.2rem;
      margin-bottom: 10px;
      font-weight: 700;
    }

    .header p {
      font-style: italic;
      letter-spacing: 1.2px;
      font-size: 1.1rem;
      max-width: 400px;
      margin: 0 auto;
    }

    .error-messages {
      background-color: rgba(255, 0, 0, 0.1);
      border: 1px solid red;
      color: red;
      padding: 10px 15px;
      border-radius: 6px;
      max-width: 450px;
      margin: 20px auto;
      font-size: 0.9rem;
      box-shadow: 0 0 8px rgba(255, 0, 0, 0.2);
    }

    .signup-container {
      background-color: rgba(255, 255, 255, 0.95);
      max-width: 450px;
      margin: 30px auto 60px;
      padding: 35px 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 100, 0, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .signup-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0, 100, 0, 0.5);
    }

    .signup-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #2e7d32;
      font-weight: 700;
      font-size: 1.8rem;
      letter-spacing: 1px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #2e7d32;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 14px 15px;
      margin-bottom: 20px;
      border: 1.5px solid #a5d6a7;
      border-radius: 8px;
      font-size: 1rem;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #2e7d32;
      box-shadow: 0 0 8px #2e7d32aa;
      outline: none;
    }

    .terms {
      display: flex;
      align-items: center;
      margin-bottom: 25px;
      font-size: 0.95rem;
      color: #2e7d32;
    }

    .terms input {
      margin-right: 12px;
      width: 18px;
      height: 18px;
      cursor: pointer;
    }

    .terms a {
      color: #2e7d32;
      text-decoration: underline;
      transition: color 0.3s ease;
    }

    .terms a:hover,
    .terms a:focus {
      color: #1b5e20;
      outline: none;
    }

    .signup-btn {
      width: 100%;
      padding: 14px;
      background-color: #2e7d32;
      color: white;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      font-size: 1.1rem;
      font-weight: 700;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 10px rgba(46, 125, 50, 0.4);
    }

    .signup-btn:hover,
    .signup-btn:focus {
      background-color: #1b5e20;
      box-shadow: 0 6px 14px rgba(27, 94, 32, 0.7);
      outline: none;
    }

    @media (max-width: 600px) {
      .signup-container {
        margin: 20px 15px 50px;
        padding: 30px 25px;
      }

      .header h1 {
        font-size: 1.8rem;
      }

      .header p {
        font-size: 1rem;
        max-width: 100%;
        padding: 0 10px;
      }

      .navbar {
        padding: 12px 20px;
      }

      .navbar a {
        font-size: 1rem;
        margin-right: 15px;
      }
    }
  </style>
</head>
<body>

  <div class="navbar">
    <a href="/">Home</a>
    <a href="{{ route('login') }}">Login</a>
  </div>

  <div class="header" role="banner" aria-label="Mountain website introduction">
    <svg class="mountain-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-hidden="true" focusable="false" style="width: 60px; height: 60px; margin: 0 auto 15px; fill: #a5d6a7; filter: drop-shadow(0 0 2px rgba(0,0,0,0.5));">
      <path d="M2 54 L22 14 L32 34 L42 14 L62 54 Z" />
    </svg>
    <h1 style="text-align: center; color: #a5d6a7; text-shadow: 1px 1px 4px rgba(0,0,0,0.7); margin-bottom: 10px;">Selamat Datang di Website Gunung</h1>
    <p style="text-align: center; color: #a5d6a7; font-style: italic; letter-spacing: 1.2px;">Temukan petualangan dan keindahan alam pegunungan bersama kami</p>
  </div>

  @if ($errors->any())
  <div style="color: red; margin-bottom: 10px;">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


  <div class="signup-container">
    <h2>Buat Akun Baru</h2>
   <form method="POST" action="{{ route('signup.process') }}">
      @csrf
      <label for="fullname">Nama Lengkap</label>
      <input type="text" id="fullname" name="fullname" placeholder="Masukkan nama lengkap" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email aktif" required>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Pilih username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Buat password" required>

      <label for="confirm-password">Konfirmasi Password</label>
      <input type="password" id="confirm-password" name="confirm-password" placeholder="Ulangi password" required>

      <div class="terms">
        <input type="checkbox" id="terms" name ="terms" required>
        <label for="terms">Saya menyetujui <a href="/terms">syarat & ketentuan</a>
        </label>
      </div>

      <button type="submit" class="signup-btn">Daftar</button>
    </form>
  </div>

</body>
</html>
