<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El Movie</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f5f5f5;
      font-family: Arial, sans-serif;
      margin: 0;

    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #333333; /* Lebih gelap sesuai Figma */
      padding: 12px 30px;
      height: 60px;
    }

    /* Logo */
    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      height: 35px;
      width: auto;
    }

    .logo-text {
      color: white;
      font-size: 20px;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .logo-text .highlight {
      color: #ff4444; /* Warna merah untuk aksen */
    }

    /* Search bar */
    .search-box {
      display: flex;
      align-items: center;
      background: #fff;
      border-radius: 25px;
      padding: 8px 15px;
      width: 300px;
      position: relative;
    }

    .search-box input {
      border: none;
      outline: none;
      flex: 1;
      padding: 5px 10px;
      font-size: 14px;
      background: transparent;
    }

    .search-box input::placeholder {
      color: #999;
    }

    .search-box button {
      background: none;
      border: none;
      cursor: pointer;
      color: #666;
      padding: 5px;
    }

    .search-box button:hover {
      color: #333;
    }

    /* Menu kanan */
 .menu {
  display: flex;
  align-items: center;
  gap: 40px;
  color: white;
  font-size: 13px;
}

    .menu-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: white;
      cursor: pointer;
      text-decoration: none;
      padding: 5px 0;
      transition: color 0.3s ease;
    }

    .menu-item i {
      font-size: 18px;
      margin-bottom: 4px;
    }

    /* Styling untuk gambar icon */
    .menu-item img {
      width: 20px;
      height: 20px;
      margin-bottom: 4px;
      filter: brightness(0) invert(1); /* Membuat gambar jadi putih */
    }

    .menu-item:hover img {
      filter: brightness(0) invert(1) sepia(1) saturate(5) hue-rotate(340deg); /* Hover jadi merah */
    }

    .menu-item:hover {
      color: #ff4444;
    }

    /* Tombol VIP */
    .vip-btn {
      background: white;
      border: none;
      padding: 8px 20px;
      border-radius: 20px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      font-weight: bold;
      color: #333;
      transition: all 0.3s ease;
    }

    .vip-btn:hover {
      background: #f0f0f0;
      transform: translateY(-1px);
    }

    .vip-btn i {
      color: #ffd700;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .navbar {
        padding: 10px 20px;
      }
      
      .search-box {
        width: 200px;
      }
      
      .menu {
        gap: 15px;
        font-size: 12px;
      }
      
      .menu-item {
        display: none;
      }
      
      .menu-item:last-child {
        display: block;
      }
    }
    
    body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #000;
  color: #fff;
}

/* Container utama */
.container {
  display: flex;
  gap: 20px;
  padding: 30px 40px;
}

.left {
  flex: 2;
}

.left img {
  width: 100%;
  border-radius: 10px;
}

.right {
  flex: 1;
  background: #1c1c1c;
  border-radius: 15px;
  padding: 20px;
}

.right h3 {
  margin-bottom: 15px;
}

/* Kalender */
.calendar {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 10px;
}

.calendar div {
  background: #333;
  text-align: center;
  padding: 8px 0;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.2s;
}

.calendar div:hover {
  background: #ff4747;
}

/* Sinopsis */
.sinopsis {
  padding: 20px 40px;
  line-height: 1.6;
}

/* Aktor */
.actors {
  padding: 20px 40px;
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.actor {
  text-align: center;
  width: 120px;
}

.actor img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid #444;
  margin-bottom: 8px;
  transition: 0.3s;
}

/* Hover efek aktor */
.actor img:hover {
  border-color: #ff4747;
  transform: scale(1.05);
}

.actor span {
  font-size: 14px;
}

.circle-img {
  width: 120px;        
  height: 120px;
  border-radius: 50%;  
  object-fit: cover;   
  object-position: center; 
  border: 2px solid #444; 
}



    .footer {
      background: #fff;
      padding: 30px 50px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
      flex-wrap: wrap;
      flex-direction: row;
    }

    /* Logo Teks */
    .logo-text {
      font-size: 28px;
      font-weight: bold;
      font-family: 'Georgia', serif;
      margin-bottom: 10px;
    }

    .logo-text .el {
      color: red;
    }

    .logo-text .movie {
      color: black;
    }

    .footer .logo-section {
      max-width: 250px;
    }

    .footer .logo-section p {
      font-size: 14px;
      margin: 10px 0;
    }

    .footer .store-buttons img {
      width: 120px;
      margin: 5px 0;
      cursor: pointer;
    }

    .footer .column {
      min-width: 150px;
    }

    .footer .column h4 {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .footer .column ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer .column ul li {
      margin: 6px 0;
    }

    .footer .column ul li a {
      text-decoration: none;
      color: #000;
      font-size: 14px;
    }

    .footer .social-icons {
      display: flex;
      gap: 15px;
      margin-top: 5px;
      font-size: 24px;
    }

    .footer .social-icons a {
      color: #000;
      transition: 0.3s;
    }

    .footer .social-icons a:hover {
      color: red;
    }

    /* Bagian bawah di dalam box putih */
    .footer-bottom {
      width: 100%;
      text-align: center;
      margin-top: 20px;
      padding-top: 15px;
      border-top: 1px solid #ddd;
      font-size: 14px;
    }
  </style>

  <!-- Font Awesome icons -->
  <script src="https://kit.fontawesome.com/4fce9b3f3e.js" crossorigin="anonymous"></script>
</head>