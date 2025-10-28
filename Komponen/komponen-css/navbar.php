<style>
        .logo-text {
      font-size: 28px;
      font-weight: bold;
      font-family: 'Georgia', serif;
      margin-bottom: 10px;
    }

      .search-box {
        width: 200px;
      }

          .vip-btn i {
      color: #ffd700;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .navbar {
        padding: 10px 20px;
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
    .logo-text {
      color: white;
      font-size: 20px;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .logo-text .highlight {
      color: #ff4444; /* Warna merah untuk aksen */
    }
       .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #333333; /* Lebih gelap sesuai Figma */
      padding: 12px 30px;
      height: 60px;
    }

</style>