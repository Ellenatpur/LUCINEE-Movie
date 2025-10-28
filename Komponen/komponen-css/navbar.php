<style>
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
    
</style>