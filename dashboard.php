<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frame 20% : 80% - Header Footer Ujung</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html, body {
            height: 100%;
            width: 100%;
        }

        body {
            background: #1a1a2e;
            display: flex;
            flex-direction: column;
        }

        /* HEADER DI UJUNG ATAS */
        .header {
            background: linear-gradient(135deg, #c92a2a 0%, #a51e1e 100%);
            padding: 20px 30px;
            border-bottom: 4px solid #ff8787;
            width: 100%;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .header-content {
            max-width: 1600px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-icon {
            width: 55px;
            height: 55px;
            background: rgba(255,255,255,0.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: white;
            border: 2px solid rgba(255,255,255,0.3);
        }

        .header-text h1 {
            color: white;
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .header-text p {
            color: #ffb8b8;
            font-size: 14px;
            margin-top: 5px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-date {
            background: rgba(0,0,0,0.3);
            padding: 10px 20px;
            border-radius: 40px;
            color: white;
            font-size: 15px;
            font-weight: 500;
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* TOMBOL LOGOUT - TANPA POPUP */
        .logout-btn {
            background: rgba(0,0,0,0.4);
            color: white;
            border: 2px solid rgba(255,255,255,0.3);
            padding: 10px 25px;
            border-radius: 40px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .logout-btn:hover {
            background: #000000;
            border-color: #ff8787;
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(255,255,255,0.3);
        }

        .logout-btn i {
            font-size: 18px;
        }

        /* MAIN CONTENT - Pake flex biar full */
        .main-content {
            flex: 1;
            width: 100%;
            background: #0f0f1a;
            display: flex;
            align-items: stretch;
            padding: 25px 30px;
            gap: 25px;
            max-width: 1600px;
            margin: 0 auto;
        }

        /* FRAME 1 - 20% */
        .frame-1 {
            width: 20%;
            background: #1e1e30;
            border: 2px solid #c92a2a;
            border-radius: 16px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 25px rgba(201, 42, 42, 0.2);
        }

        .frame-header {
            background: #2d2d44;
            padding: 15px;
            border-bottom: 2px solid #c92a2a;
        }

        .frame-header h3 {
            color: white;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .frame-header span {
            background: #c92a2a;
            padding: 3px 8px;
            border-radius: 20px;
            font-size: 11px;
        }

        .frame-content {
            padding: 15px;
            flex: 1;
            background: #1a1a2e;
        }

        /* Konten Frame 1 (20%) */
        .stat-item {
            background: #25253a;
            border-left: 4px solid #c92a2a;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        .stat-label {
            color: #a0a0c0;
            font-size: 12px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .stat-number {
            color: white;
            font-size: 28px;
            font-weight: 700;
        }

        .stat-change {
            color: #4ade80;
            font-size: 11px;
            background: #1a4731;
            display: inline-block;
            padding: 3px 8px;
            border-radius: 15px;
            margin-top: 8px;
        }

        .update-note {
            color: #6b7280;
            font-size: 11px;
            font-style: italic;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px dashed #2d2d44;
        }

        /* FRAME 2 - 80% */
        .frame-2 {
            width: 80%;
            background: #1e1e30;
            border: 2px solid #c92a2a;
            border-radius: 16px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 25px rgba(201, 42, 42, 0.2);
        }

        /* Konten Frame 2 (80%) */
        .activity-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .activity-card {
            background: #25253a;
            border-radius: 10px;
            padding: 15px;
            border: 1px solid #2d2d44;
        }

        .activity-time {
            color: #c92a2a;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .activity-title {
            color: white;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .activity-desc {
            color: #a0a0c0;
            font-size: 13px;
        }

        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
            margin-top: 10px;
        }

        .badge-red {
            background: #c92a2a;
            color: white;
        }

        .badge-green {
            background: #10b981;
            color: white;
        }

        .badge-yellow {
            background: #f59e0b;
            color: white;
        }

        .stats-row {
            display: flex;
            gap: 20px;
            margin: 20px 0;
            flex-wrap: wrap;
        }

        .stats-mini {
            background: #25253a;
            padding: 12px 18px;
            border-radius: 10px;
            border: 1px solid #2d2d44;
            flex: 1;
        }

        .stats-mini .label {
            color: #a0a0c0;
            font-size: 11px;
        }

        .stats-mini .value {
            color: white;
            font-size: 18px;
            font-weight: 600;
            margin-top: 5px;
        }

        .trend {
            color: #4ade80;
            font-size: 11px;
        }

        /* FOOTER DI UJUNG BAWAH */
        .footer {
            background: #1a1a2e;
            padding: 18px 30px;
            border-top: 4px solid #c92a2a;
            width: 100%;
            flex-shrink: 0;
        }

        .footer-content {
            max-width: 1600px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-links {
            display: flex;
            gap: 30px;
        }

        .footer-links a {
            color: #a0a0c0;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: #c92a2a;
        }

        .footer-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .copyright {
            color: #6b7280;
            font-size: 14px;
        }

        .live-time {
            background: #25253a;
            color: #c92a2a;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            border: 1px solid #c92a2a;
        }

        /* Responsive */
        @media (max-width: 1000px) {
            .main-content {
                flex-direction: column;
            }
            .frame-1, .frame-2 {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER DI UJUNG ATAS DENGAN TOMBOL LOGOUT -->
    <div class="header">
        <div class="header-content">
            <div class="header-left">
                <div class="header-icon">📊</div>
                <div class="header-text">
                    <h1>AKADEMI DAO DASHBOARD</h1>
                    <p>HEADER DI UJUNG ATAS • FRAME 20% : 80%</p>
                </div>
            </div>
            <div class="header-right">
                <div class="header-date" id="currentDate">
                    📅 Loading...
                </div>
                <!-- TOMBOL LOGOUT - TANPA POPUP, LANGSUNG KE login.php -->
                <a href="login.php" class="logout-btn">
                    <span>🚪</span> LOGOUT
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT dengan FRAME 20% : 80% -->
    <div class="main-content">
        <!-- FRAME 1 - 20% -->
        <div class="frame-1">
            <div class="frame-header">
                <h3>
                    📋 FRAME 1
                    <span>20%</span>
                </h3>
            </div>
            <div class="frame-content">
                <div class="stat-item">
                    <div class="stat-label">TOTAL SISWA</div>
                    <div class="stat-number">1.250</div>
                    <div class="stat-change">↑ 12%</div>
                </div>
                <div class="stat-item">
                    <div class="stat-label">TOTAL GURU</div>
                    <div class="stat-number">85</div>
                    <div class="stat-change">↑ 5%</div>
                </div>
                <div class="stat-item">
                    <div class="stat-label">KELAS AKTIF</div>
                    <div class="stat-number">42</div>
                    <div class="stat-change">↑ 15%</div>
                </div>
                <div class="stat-item">
                    <div class="stat-label">PRESTASI</div>
                    <div class="stat-number">156</div>
                    <div class="stat-change">↑ 8%</div>
                </div>
                
                <div class="update-note">
                    ⏱️ Update tiap 5 menit<br>
                    09:45 WIB
                </div>

                <div style="background: #25253a; padding: 10px; border-radius: 8px; margin-top: 15px;">
                    <div style="color: #a0a0c0; font-size: 11px;">SPP BULAN INI</div>
                    <div style="color: white; font-size: 16px; font-weight: 600;">Rp 42.5J</div>
                    <span class="stat-change" style="font-size: 9px;">↑ 15%</span>
                </div>
            </div>
        </div>

        <!-- FRAME 2 - 80% -->
        <div class="frame-2">
            <div class="frame-header">
                <h3>
                    📌 FRAME 2
                    <span>80%</span>
                </h3>
            </div>
            <div class="frame-content">
                <!-- Activity Grid 2 kolom -->
                <div class="activity-grid">
                    <div class="activity-card">
                        <div class="activity-time">09:20</div>
                        <div class="activity-title">Siswa Baru</div>
                        <div class="activity-desc">Ahmad Fauzi - XII IPA 1</div>
                        <span class="badge badge-red">Baru</span>
                    </div>
                    <div class="activity-card">
                        <div class="activity-time">09:05</div>
                        <div class="activity-title">Pembayaran SPP</div>
                        <div class="activity-desc">Budi Santoso - Lunas</div>
                        <span class="badge badge-green">Sukses</span>
                    </div>
                    <div class="activity-card">
                        <div class="activity-time">08:45</div>
                        <div class="activity-title">Rapat Guru</div>
                        <div class="activity-desc">Jadwal 10:00 WIB</div>
                        <span class="badge badge-yellow">Pengingat</span>
                    </div>
                    <div class="activity-card">
                        <div class="activity-time">08:30</div>
                        <div class="activity-title">Presensi</div>
                        <div class="activity-desc">95% Kehadiran</div>
                    </div>
                    <div class="activity-card">
                        <div class="activity-time">07:45</div>
                        <div class="activity-title">Backup Sistem</div>
                        <div class="activity-desc">Backup harian selesai</div>
                    </div>
                    <div class="activity-card">
                        <div class="activity-time">07:30</div>
                        <div class="activity-title">Dashboard</div>
                        <div class="activity-desc">Siap digunakan</div>
                    </div>
                    <div class="activity-card">
                        <div class="activity-time">07:00</div>
                        <div class="activity-title">Server</div>
                        <div class="activity-desc">Kondisi optimal</div>
                    </div>
                    <div class="activity-card">
                        <div class="activity-time">06:45</div>
                        <div class="activity-title">Maintenance</div>
                        <div class="activity-desc">Update keamanan</div>
                    </div>
                </div>

                <!-- Stats Mini Row -->
                <div class="stats-row">
                    <div class="stats-mini">
                        <div class="label">SISWA LAKI</div>
                        <div class="value">680 <span class="trend">↑ 8%</span></div>
                    </div>
                    <div class="stats-mini">
                        <div class="label">SISWA PEREMPUAN</div>
                        <div class="value">570 <span class="trend">↑ 10%</span></div>
                    </div>
                    <div class="stats-mini">
                        <div class="label">GURU TETAP</div>
                        <div class="value">65 <span class="trend">↑ 5%</span></div>
                    </div>
                    <div class="stats-mini">
                        <div class="label">GURU HONOR</div>
                        <div class="value">20 <span class="trend">↑ 3%</span></div>
                    </div>
                </div>

                <!-- Info Tambahan -->
                <div style="display: flex; gap: 20px; margin-top: 15px; flex-wrap: wrap;">
                    <span style="background: #1a4731; color: #4ade80; padding: 8px 16px; border-radius: 20px; font-size: 13px;">
                        ↑ 8% aktivitas dari kemarin
                    </span>
                    <span style="background: #442a2a; color: #c92a2a; padding: 8px 16px; border-radius: 20px; font-size: 13px;">
                        156 prestasi +15%
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER DI UJUNG BAWAH -->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="#">Tentang</a>
                <a href="#">Privasi</a>
                <a href="#">Kontak</a>
                <a href="#">Bantuan</a>
                <a href="#">FAQ</a>
            </div>
            <div class="footer-right">
                <span class="copyright">📝 FOOTER DI UJUNG BAWAH • © 2026</span>
                <span class="live-time" id="liveTime">🕐 Loading...</span>
            </div>
        </div>
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            
            // Header date
            const dateOptions = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            };
            document.getElementById('currentDate').textContent = 
                `📅 ${now.toLocaleDateString('id-ID', dateOptions)}`;
            
            // Footer time
            const timeOptions = { 
                hour: '2-digit', 
                minute: '2-digit',
                second: '2-digit'
            };
            document.getElementById('liveTime').textContent = 
                `🕐 ${now.toLocaleTimeString('id-ID', timeOptions)} WIB`;
        }
        
        updateDateTime();
        setInterval(updateDateTime, 1000);
    </script>
</body>
</html>