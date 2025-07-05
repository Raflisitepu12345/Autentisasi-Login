<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gunungin - Pemesanan Tiket dan Daftar Gunung</title>
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
      background: linear-gradient(135deg, #4a90e2 0%, #50e3c2 50%, #9013fe 100%), url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem 1rem;
      animation: fadeInBackground 2s ease forwards;
    }
    @keyframes fadeInBackground {
      from {opacity: 0;}
      to {opacity: 1;}
    }
    header {
      width: 100%;
      max-width: 1200px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: rgba(0, 40, 0, 0.85);
      border-radius: 10px;
      margin-bottom: 2rem;
      box-shadow: 0 4px 25px rgba(0,0,0,0.8);
    }
    header .logo {
      font-size: 2.6rem;
      font-weight: 700;
      font-style: italic;
      letter-spacing: 1.5px;
      color: #a5d6a7;
      text-shadow: 0 0 14px #4caf50;
    }
    nav {
      display: flex;
      gap: 2rem;
    }
    nav a {
      color: #a5d6a7;
      font-weight: 600;
      text-decoration: none;
      font-size: 1.1rem;
      padding: 0.6rem 1.3rem;
      border-radius: 8px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    nav a:hover {
      background-color: #4caf50;
      color: white;
    }
    .content {
      width: 100%;
      max-width: 1200px;
      background-color: rgba(0, 60, 0, 0.9);
      border-radius: 20px;
      padding: 3rem 3rem 2rem 3rem;
      box-shadow: 0 10px 35px rgba(0,0,0,0.9);
      animation: fadeInContent 1.5s ease forwards;
    }
    @keyframes fadeInContent {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
    }
    h1, h2 {
      color: #a5d6a7;
      text-shadow: 0 0 16px #81c784;
    }
    h1 {
      font-size: 3.4rem;
      margin-bottom: 2rem;
      text-align: center;
    }
    h2 {
      font-size: 2.2rem;
      margin-bottom: 1.2rem;
      border-bottom: 3px solid #4caf50;
      padding-bottom: 0.4rem;
    }
    .booking-form {
      background-color: rgba(255, 255, 255, 0.12);
      padding: 2rem;
      border-radius: 18px;
      margin-bottom: 3rem;
      box-shadow: 0 8px 28px rgba(0,0,0,0.85);
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }
    .booking-form label {
      display: block;
      margin-bottom: 0.6rem;
      font-weight: 600;
      color: #c8e6c9;
    }
    .booking-form select,
    .booking-form input[type="date"],
    .booking-form input[type="number"] {
      width: 100%;
      padding: 0.7rem;
      margin-bottom: 1.5rem;
      border-radius: 10px;
      border: none;
      font-size: 1.1rem;
      background-color: rgba(255,255,255,0.15);
      color: white;
    }
    .booking-form select option {
      color: black;
    }
    .booking-form button {
      background-color: #4caf50;
      color: white;
      border: none;
      padding: 1rem 1.8rem;
      font-size: 1.2rem;
      font-weight: 700;
      border-radius: 12px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
    }
    .booking-form button:hover {
      background-color: #388e3c;
    }
    .mountain-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 2.5rem;
      margin-bottom: 3rem;
    }
    .mountain-card {
      background-color: rgba(255, 255, 255, 0.12);
      border-radius: 20px;
      padding: 1.5rem;
      box-shadow: 0 8px 28px rgba(0,0,0,0.85);
      transition: transform 0.35s ease, box-shadow 0.35s ease;
      cursor: default;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    .mountain-card:hover {
      transform: translateY(-14px);
      box-shadow: 0 14px 40px rgba(0,0,0,1);
    }
    .mountain-card img {
      width: 100%;
      height: 190px;
      object-fit: cover;
      border-radius: 16px;
      margin-bottom: 1.5rem;
      box-shadow: 0 6px 18px rgba(0,0,0,0.7);
      filter: brightness(0.9);
      transition: filter 0.3s ease;
    }
    .mountain-card img:hover {
      filter: brightness(1);
    }
    .mountain-card h3 {
      margin-bottom: 0.8rem;
      color: #a5d6a7;
      font-size: 1.8rem;
      text-shadow: 0 0 12px #4caf50;
    }
    .mountain-card p {
      font-size: 1.1rem;
      color: #dcedc8;
      line-height: 1.6;
      min-height: 80px;
      margin-bottom: 1rem;
    }
    .mountain-details {
      text-align: left;
      background-color: rgba(0, 40, 0, 0.7);
      border-radius: 12px;
      padding: 1rem;
      width: 100%;
      color: #c8e6c9;
      font-size: 1rem;
      margin-top: 0.5rem;
    }
    .mountain-details h4 {
      margin-bottom: 0.4rem;
      color: #81c784;
      text-shadow: 0 0 8px #4caf50;
    }
    .contact-section {
      background-color: rgba(255, 255, 255, 0.12);
      padding: 2rem 2.5rem;
      border-radius: 18px;
      box-shadow: 0 8px 28px rgba(0,0,0,0.85);
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      color: #c8e6c9;
    }
    .contact-section h2 {
      margin-bottom: 1rem;
    }
    .contact-info {
      font-size: 1.1rem;
      line-height: 1.6;
    }
    .contact-info p {
      margin-bottom: 0.8rem;
    }
    footer {
      margin-top: 3.5rem;
      width: 100%;
      max-width: 1200px;
      text-align: center;
      color: #a5d6a7;
      font-size: 1.1rem;
      padding: 1.2rem 0;
      border-top: 1px solid rgba(165, 214, 167, 0.6);
      user-select: none;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }
      nav {
        flex-direction: column;
        gap: 1rem;
        margin-top: 1rem;
      }
      h1 {
        font-size: 2.5rem;
      }
      h2 {
        font-size: 1.8rem;
      }
      .mountain-card h3 {
        font-size: 1.5rem;
      }
      .mountain-card p {
        font-size: 1rem;
      }
    }

    @media (max-width: 480px) {
      header .logo {
        font-size: 2rem;
      }
      nav a {
        font-size: 1rem;
      }
      h1 {
        font-size: 2rem;
      }
      h2 {
        font-size: 1.5rem;
      }
    }

    .social-icons a {
  margin: 0 10px;
  color: #a5d6a7;
  font-size: 1.5rem;
  transition: color 0.3s;
}
.social-icons a:hover {
  color: #4caf50;
}

  </style>
</head>
<body>
  <header>
    <div class="logo">Gunungin</div>
    <nav>
      <a href="/">Beranda</a>
      <a href="/inweb">Daftar Gunung</a>
    </nav>
  </header>
  <div class="content">
    <h1>Pemesanan Tiket dan Daftar Gunung</h1>
    <div class="booking-form">
      <h2>Form Pemesanan</h2>
      <form method="POST" action="{{ route('booking.process') }}">
        @csrf
        <label for="mountain">Pilih Gunung</label>
        <select id="mountain" name="mountain" required>
          <option value="" disabled selected>-- Pilih Gunung --</option>
          <option value="gunung semeru">Gunung Semeru</option>
          <option value="gunung rinjani">Gunung Rinjani</option>
          <option value="gunung bromo">Gunung Bromo</option>
          <option value="gunung merapi">Gunung Merapi</option>
          <option value="gunung kerinci">Gunung Kerinci</option>
          <option value="gunung lawu">Gunung Lawu</option>
          <option value="gunung slamet">Gunung Slamet</option>
          <option value="gunung papandayan">Gunung Papandayan</option>
          <option value="gunung gede">Gunung Gede</option>
          <option value="gunung ciremai">Gunung Ciremai</option>
          <option value="gunung ijen">Gunung Ijen</option>
          <option value="gunung batur">Gunung Batur</option>
          <option value="gunung sempu">Gunung Sempu</option>
          <option value="gunung tambora">Gunung Tambora</option>
          
        </select>
        <label for="date">Tanggal Kunjungan</label>
        <input type="date" id="date" name="date" required />
        <label for="tickets">Jumlah Tiket</label>
        <input type="number" id="tickets" name="tickets" min="1" max="10" value="1" required />
        <button type="submit">Pesan Sekarang</button>
      </form>
    </div>
    <h2>Informasi Gunung</h2>
    <div class="mountain-list">
      <div class="mountain-card">
        <img src="/gambar/semeru.jpg" alt="Gunung Semeru" />
        <h3>Gunung Semeru</h3>
        <p>Gunung tertinggi di Pulau Jawa dengan pemandangan yang menakjubkan dan jalur pendakian yang menantang.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendakian utama melalui Ranu Pani, dengan medan yang bervariasi dari hutan tropis hingga puncak berpasir.</p>
          <h4>Level Kesulitan</h4>
          <p>Sulit - Memerlukan fisik prima dan pengalaman pendakian.</p>
        </div>
      </div>
      <div class="mountain-card">
        <img src="/gambar/rinjani.jpg" alt="Gunung Rinjani" />
        <h3>Gunung Rinjani</h3>
        <p>Gunung berapi aktif di Lombok dengan danau kawah yang indah dan pemandangan alam yang memukau.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendakian melalui Senaru dan Sembalun, dengan pemandangan danau Segara Anak yang menawan.</p>
          <h4>Level Kesulitan</h4>
          <p>Sangat Sulit - Pendakian panjang dan medan berat.</p>
        </div>
      </div>
      <div class="mountain-card">
        <img src="/gambar/bromo.jpg" alt="gunung bromo" />
        <h3>Gunung Bromo</h3>
        <p>Gunung berapi yang terkenal dengan pemandangan matahari terbit yang spektakuler dan lautan pasir yang luas.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendek dan mudah, cocok untuk pendaki pemula dan wisatawan.</p>
          <h4>Level Kesulitan</h4>
          <p>Mudah - Cocok untuk semua kalangan.</p>
        </div>
      </div>
      <div class="mountain-card">
        <img src="/gambar/merapi.jpg" alt="Gunung Merapi" />
        <h3>Gunung Merapi</h3>
        <p>Gunung berapi aktif di Jawa Tengah yang memiliki sejarah letusan yang sering dan pemandangan alam yang indah.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendakian melalui Selo dengan medan berbatu dan tanjakan curam.</p>
          <h4>Level Kesulitan</h4>
          <p>Sulit - Memerlukan pengalaman dan fisik kuat.</p>
        </div>
      </div>
      <div class="mountain-card">
        <img src="/gambar/kerinci.jpg" alt="Gunung Kerinci" />
        <h3>Gunung Kerinci</h3>
        <p>Gunung tertinggi di Sumatra dengan hutan tropis yang lebat dan keanekaragaman hayati yang kaya.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendakian melalui Kayu Aro dengan hutan lebat dan medan menantang.</p>
          <h4>Level Kesulitan</h4>
          <p>Sulit - Pendakian panjang dan medan berat.</p>
        </div>
      </div>
      <div class="mountain-card">
        <img src="/gambar/lawu.jpg" alt="Gunung Lawu" />
        <h3>Gunung Lawu</h3>
        <p>Gunung berapi yang terletak di perbatasan Jawa Tengah dan Jawa Timur dengan jalur pendakian yang menantang.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendakian melalui Cemoro Sewu dengan pemandangan hutan dan bukit.</p>
          <h4>Level Kesulitan</h4>
          <p>Sedang - Cocok untuk pendaki dengan pengalaman dasar.</p>
        </div>
      </div>
      <div class="mountain-card">
        <img src="/gambar/slamet.jpg" alt="Gunung Slamet" />
        <h3>Gunung Slamet</h3>
        <p>Gunung tertinggi di Jawa Tengah dengan pemandangan alam yang memukau dan jalur pendakian yang populer.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendakian melalui Bambangan dengan medan yang bervariasi dan pemandangan indah.</p>
          <h4>Level Kesulitan</h4>
          <p>Sulit - Memerlukan fisik prima dan pengalaman pendakian.</p>
        </div>
      </div>
      <div class="mountain-card">
        <img src="/gambar/papandayan.jpg" alt="Gunung Papandayan" />
        <h3>Gunung Papandayan</h3>
        <p>Gunung berapi yang terkenal dengan kawah dan pemandangan alam yang indah di Jawa Barat.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendakian yang mudah dengan pemandangan kawah dan padang edelweiss.</p>
          <h4>Level Kesulitan</h4>
          <p>Mudah - Cocok untuk pendaki pemula.</p>
        </div>
      </div>
      <div class="mountain-card">
        <img src="/gambar/gede.jpg" alt="Gunung Gede" />
        <h3>Gunung Gede</h3>
        <p>Gunung yang populer untuk pendakian dengan hutan tropis dan pemandangan alam yang menawan di Jawa Barat.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendakian melalui Cibodas dengan medan hutan dan air terjun.</p>
          <h4>Level Kesulitan</h4>
          <p>Sedang - Cocok untuk pendaki dengan pengalaman dasar.</p>
        </div>
      </div>
      <div class="mountain-card">
        <img src="/gambar/ciremai.jpg" alt="Gunung Ciremai" />
        <h3>Gunung Ciremai</h3>
        <p>Gunung tertinggi di Jawa Barat dengan jalur pendakian yang menantang dan pemandangan alam yang indah.</p>
        <div class="mountain-details">
          <h4>Detail Jalur Pendakian</h4>
          <p>Jalur pendakian melalui Linggarjati dengan medan berbatu dan tanjakan curam.</p>
          <h4>Level Kesulitan</h4>
          <p>Sulit - Memerlukan fisik prima dan pengalaman pendakian.</p>
        </div>
      </div>
    </div>
    <div class="contact-section">
      <h2>Kontak Kami</h2>
      <div class="contact-info">
        <p><i class="fas fa-phone-alt"></i> Telepon: +62 812 6007 7845</p>
        <p><i class="fas fa-envelope"></i> Email: info@gunungin.com</p>
        <p><i class="fas fa-map-marker-alt"></i> Alamat: Jl. Gatot Subroto, Medan, Indonesia</p>
        <p><i class="fas fa-clock"></i> Jam Operasional: Senin - Jumat, 08:00 - 17:00 WIB</p>
      </div>
    </div>
  </div>
  
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
