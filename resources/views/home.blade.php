


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gunungin - Jelajahi Keindahan Gunung Indonesia</title>
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
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      background-size: cover;
      animation: backgroundShift 15s ease-in-out infinite alternate;
      color: #2e7d32;
    }
    @keyframes backgroundShift {
      0% {
        background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      }
      50% {
        background: url('https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      }
      100% {
        background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      }
    }
    header {
      background-color: rgba(34, 139, 34, 0.9);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
      box-shadow: 0 2px 8px rgba(0,0,0,0.3);
      position: sticky;
      top: 0;
      z-index: 1000;
      backdrop-filter: saturate(180%) blur(10px);
    }
    header .logo {
      font-size: 1.8rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-shadow: 0 0 5px rgba(0,0,0,0.3);
      font-family: 'Poppins', sans-serif;
      font-style: italic;
    }
    nav a {
      color: white;
      margin-left: 1rem;
      text-decoration: none;
      font-weight: 600;
      font-size: 1rem;
      transition: color 0.3s ease;
    }
    nav a:hover {
      color: #c8e6c9;
    }
    .main-content {
      flex: 1;
      padding: 3rem 2rem;
      text-align: center;
      background-color: rgba(255, 255, 255, 0.85);
      margin: 2rem;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      animation: fadeInUp 1s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }
    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .main-content h1 {
      font-size: 2.8rem;
      margin-bottom: 1rem;
      color: #2e7d32;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
    }
    .main-content p {
      font-size: 1.3rem;
      color: #4e4e4e;
      margin-top: 1rem;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      line-height: 1.6;
    }
    footer {
      background-color: rgba(0, 100, 0, 0.95);
      color: white;
      text-align: center;
      padding: 2rem 1rem;
      box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.3);
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      font-size: 1.1rem;
      position: relative;
      overflow: hidden;
      animation: fadeInUp 1.4s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }
    .social-icons {
      margin-top: 1rem;
      display: flex;
      justify-content: center;
      gap: 1.5rem;
    }
    .social-icons a {
      color: white;
      margin: 0 0.6rem;
      font-size: 1.5rem;
      text-decoration: none;
      transition: transform 0.3s;
      box-shadow: 0 2px 6px rgba(0,0,0,0.3);
      border-radius: 50%;
      padding: 0.2rem;
      background-color: rgba(255, 255, 255, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .social-icons a:hover {
      transform: scale(1.2);
      background-color: rgba(200, 230, 201, 0.6);
      box-shadow: 0 4px 12px rgba(165, 214, 167, 0.6);
    }
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }
      nav {
        margin-top: 0.5rem;
      }
      nav a {
        display: inline-block;
        margin: 0.5rem 0;
      }
      .main-content {
        margin: 1rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Gunungin</div>
    <nav>
      <a href="login">Login</a>
      <a href="/signup">Sign-Up</a>
    </nav>
  </header>

  <section class="main-content">
    <h1>Selamat Datang di Gunungin</h1>
    <p>Gunungin adalah platform pemesanan tiket liburan ke gunung-gunung di Indonesia dengan informasi lengkap dan terpercaya. Jelajahi keindahan alam dan rencanakan petualangan Anda bersama kami.</p>
  </section>

  <footer>
    
    <div class="social-icons">
      <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <div style="margin-top: 1rem;">&copy; 2025 Gunungin. Semua Hak Dilindungi.</div>
   
  </footer>
</body>
</html>