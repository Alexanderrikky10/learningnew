<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 10px;
      width: 300px;
      text-align: center;
    }

    .card-header {
      background-color: #f05050;
      color: #fff;
      padding: 15px;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }

    .card-body {
      padding: 20px;
    }

    .info-item {
      margin-bottom: 10px;
    }

    .info-label {
      font-weight: bold;
    }

    .info-value {
      margin-left: 10px;
    }

    .button-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .button-icon {
      margin-left: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
  <div class="card">
      <div class="card-header">
        INTERAKSI MANUSIA
        KOMPUTER
      </div>
      <div class="card-body">
        <div class="info-item">
          <span class="info-label">senin - 08:20-10:50</span>
        </div>
        <div class="info-item">
          <span class="info-label">Kode Dosen:</span>
          <span class="info-value">EMH</span>
        </div>
        <div class="info-item">
          <span class="info-label">Kode MTK:</span>
          <span class="info-value">667</span>
        </div>
        <div class="info-item">
          <span class="info-label">SKS:</span>
          <span class="info-value">3</span>
        </div>
        <div class="info-item">
          <span class="info-label">No Ruang:</span>
          <span class="info-value">EN4-P1</span>
        </div>
        <div class="info-item">
          <span class="info-label">Kel Praktek:</span>
        </div>
        <div class="info-item">
          <span class="info-label">Kode Gabung:</span>
        </div>
        <div class="button-container">
          <button class="button">Masuk Kelas</button>
          <i class="button-icon fas fa-comment"></i>
          <i class="button-icon fas fa-folder-open"></i>
          <i class="button-icon fas fa-folder"></i>
        </div>
      </div>
    </div>
  </div>
</body>
