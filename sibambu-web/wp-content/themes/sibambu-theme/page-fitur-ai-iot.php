<?php
/**
 * Template Name: Fitur AI & IoT Page
 */
get_header();
?>

<!-- Inner Page Hero Banner -->
<div class="page-hero-banner">
    <div class="container">
        <div class="page-hero-badge">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <circle cx="12" cy="12" r="3"></circle>
                <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
            </svg>
            <span>Arsitektur &amp; Teknologi</span>
        </div>
        <h1 class="page-hero-title">Fitur Cerdas AI &amp; Timbangan IoT</h1>
        <p class="page-hero-desc">
            Integrasi multimodal computer vision Google Gemini dengan timbangan digital nirkabel berbasis mikrokontroler ESP32 untuk menjamin akurasi dan transparansi 100%.
        </p>
    </div>
</div>

<!-- 4 Pilar Teknologi (Bento Grid) -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">4 Lapisan Ekosistem</div>
            <h2 class="section-title">Teknologi Mutakhir Tanpa Human Error</h2>
            <p class="section-subtitle">Bagaimana komponen AI, perangkat keras IoT, dan sistem komputasi awan saling terhubung dalam hitungan detik.</p>
        </div>

        <div class="bento-grid">
            <div class="bento-item span-2">
                <div class="bento-icon-svg">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="3"></circle><path d="M3 7V5a2 2 0 0 1 2-2h2"></path><path d="M17 3h2a2 2 0 0 1 2 2v2"></path><path d="M21 17v2a2 2 0 0 1-2 2h-2"></path><path d="M7 21H5a2 2 0 0 1-2-2v-2"></path></svg>
                </div>
                <h3 class="bento-title">Cognitive Layer: Google Gemini Multimodal Vision AI</h3>
                <p class="bento-text">
                    Pengguna cukup mengambil foto sampah dengan kamera smartphone. Model kecerdasan buatan Google Gemini Vision langsung mengklasifikasikan jenis material (seperti Botol PET, Kardus Box, Kaleng, Besi, Aluminium) dalam hitungan detik secara otomatis dan objektif tanpa perlu input manual yang menyita waktu.
                </p>
            </div>

            <div class="bento-item">
                <div class="bento-icon-svg">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path><path d="M7 21h10"></path><path d="M12 3v18"></path><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path></svg>
                </div>
                <h3 class="bento-title">Perceptual Layer: Timbangan IoT ESP32</h3>
                <p class="bento-text">
                    Timbangan digital nirkabel berbasis sensor Load Cell, modul amplifier HX711, dan mikrokontroler Wi-Fi ESP32 membaca berat fisik absolut secara akurat dan mem-push data langsung ke server tanpa campur tangan petugas.
                </p>
            </div>

            <div class="bento-item">
                <div class="bento-icon-svg">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg>
                </div>
                <h3 class="bento-title">Mobile App: React Native &amp; Expo</h3>
                <p class="bento-text">
                    Antarmuka intuitif bagi nasabah dan petugas posko: alat pemindai kamera, dasbor buku kas digital, catatan riwayat setor, serta simulasi penukaran saldo instan.
                </p>
            </div>

            <div class="bento-item span-2">
                <div class="bento-icon-svg">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                </div>
                <h3 class="bento-title">Dynamic Pricing &amp; Smart Incentive (DaurPoin)</h3>
                <p class="bento-text">
                    Sistem otomatis mengalikan bobot riil timbangan IoT dengan indeks harga pasar pengepul terkini. Saldo <strong>DaurPoin</strong> bertambah seketika dan dapat dicairkan langsung ke dompet digital DANA, ShopeePay, atau uang tunai di kasir posko TPS.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     INTERACTIVE GENERATIVE AI & IOT WASTE SIMULATOR (GAME ENGINE)
     ============================================================ -->
<section class="section section-alt" id="simulator">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
                <span>Live Interactive Game Simulation</span>
            </div>
            <h2 class="section-title">Simulator Interaktif: Uji Coba Scan AI &amp; Timbangan IoT</h2>
            <p class="section-subtitle">
                Klik salah satu sampel sampah di bawah untuk menguji reaksi modul AI Gemini Vision, sensor beban load cell ESP32, dan algoritma konversi rupiah DaurPoin secara langsung!
            </p>
        </div>

        <div class="simulator-box">
            <div class="sim-header">
                <div class="sim-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4ADE80" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M3 7V5a2 2 0 0 1 2-2h2"></path><path d="M17 3h2a2 2 0 0 1 2 2v2"></path><path d="M21 17v2a2 2 0 0 1-2 2h-2"></path><path d="M7 21H5a2 2 0 0 1-2-2v-2"></path></svg>
                    <span>SiBambu AI &amp; IoT Live Station Simulator</span>
                </div>
                <div class="sim-status-badge">
                    <span class="sim-pulse-dot"></span>
                    <span id="sim-status-text">ESP32 Online &bull; Gemini Ready</span>
                </div>
            </div>

            <div class="sim-body">
                <!-- Left: Waste Selector Tray -->
                <div>
                    <div class="sim-tray-title">Pilih Sampah untuk Diletakkan di Timbangan:</div>
                    <div class="sim-items-grid">
                        <button type="button" class="sim-waste-btn active" data-id="pet" onclick="simulateWaste('pet')">
                            <div class="sim-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 2h10v4H7zM6 6h12v16H6z"></path></svg>
                            </div>
                            <div>
                                <div class="sim-item-name">Botol Plastik PET</div>
                                <div class="sim-item-cat">Anorganik Bersih</div>
                            </div>
                        </button>

                        <button type="button" class="sim-waste-btn" data-id="cardboard" onclick="simulateWaste('cardboard')">
                            <div class="sim-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path></svg>
                            </div>
                            <div>
                                <div class="sim-item-name">Kardus Cokelat</div>
                                <div class="sim-item-cat">Kertas &amp; Box</div>
                            </div>
                        </button>

                        <button type="button" class="sim-waste-btn" data-id="can" onclick="simulateWaste('can')">
                            <div class="sim-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v14a9 3 0 0 0 18 0V5"></path></svg>
                            </div>
                            <div>
                                <div class="sim-item-name">Kaleng Minuman</div>
                                <div class="sim-item-cat">Aluminium</div>
                            </div>
                        </button>

                        <button type="button" class="sim-waste-btn" data-id="copper" onclick="simulateWaste('copper')">
                            <div class="sim-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M2 12h20"></path></svg>
                            </div>
                            <div>
                                <div class="sim-item-name">Kawat Tembaga</div>
                                <div class="sim-item-cat">Logam Premium</div>
                            </div>
                        </button>

                        <button type="button" class="sim-waste-btn" data-id="oil" onclick="simulateWaste('oil')">
                            <div class="sim-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 16.1 5 18 5 15a7 7 0 0 0 7 7z"></path></svg>
                            </div>
                            <div>
                                <div class="sim-item-name">Minyak Jelantah</div>
                                <div class="sim-item-cat">Bahan Biodiesel</div>
                            </div>
                        </button>

                        <button type="button" class="sim-waste-btn" data-id="hazard" onclick="simulateWaste('hazard')">
                            <div class="sim-item-icon" style="color:#EF4444;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><line x1="12" x2="12" y1="9" y2="13"></line><line x1="12" x2="12.01" y1="17" y2="17"></line></svg>
                            </div>
                            <div>
                                <div class="sim-item-name">Baterai Bekas (B3)</div>
                                <div class="sim-item-cat" style="color:#EF4444;">Limbah Terlarang</div>
                            </div>
                        </button>
                    </div>

                    <!-- Live User Score Counter -->
                    <div style="margin-top:24px; padding:18px; background:#0F172A; border-radius:14px; border:1px solid #1E293B;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                            <span style="font-size:0.8rem; color:#94A3B8; text-transform:uppercase; font-weight:700;">Skor Menabung Warga</span>
                            <span id="sim-user-rank" style="font-size:0.78rem; font-weight:800; color:#F59E0B; background:rgba(245,158,11,0.15); padding:3px 8px; border-radius:6px;">Pemilah Pemula</span>
                        </div>
                        <div style="display:flex; justify-content:space-between; align-items:baseline;">
                            <div style="font-size:1.6rem; font-weight:800; color:#4ADE80; font-family:var(--font-heading);" id="sim-total-points">1.050 Poin</div>
                            <div style="font-size:0.85rem; color:#CBD5E1;">Beban TPA Berkurang: <strong id="sim-total-kg" style="color:#38BDF8;">0.35 kg</strong></div>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual Scanner & Digital Readout Stage -->
                <div class="sim-stage">
                    <div class="sim-camera-viewport" id="sim-viewport">
                        <div class="sim-target-reticle" id="sim-reticle">
                            <div class="sim-laser-line"></div>
                        </div>
                        <div class="sim-current-object">
                            <div id="sim-icon-display" style="font-size:3.5rem; transition:transform 0.3s ease;">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#4ADE80" stroke-width="1.8"><path d="M7 2h10v4H7zM6 6h12v16H6z"></path></svg>
                            </div>
                            <div class="sim-object-label" id="sim-obj-name">Botol Plastik PET</div>
                        </div>
                    </div>

                    <div class="sim-readout-grid">
                        <div class="sim-metric-card">
                            <div class="sim-metric-label">Deteksi AI (Gemini Vision)</div>
                            <div class="sim-metric-val" id="sim-ai-conf" style="color:#38BDF8;">99.4% Valid</div>
                        </div>

                        <div class="sim-metric-card">
                            <div class="sim-metric-label">Timbangan IoT (Load Cell)</div>
                            <div class="sim-metric-val" id="sim-weight-val" style="color:#F59E0B;">0.35 kg</div>
                        </div>

                        <div class="sim-payout-box" id="sim-payout-card">
                            <div>
                                <div style="font-size:0.75rem; text-transform:uppercase; color:#86EFAC; font-weight:700;">Konversi DaurPoin Terkumpul</div>
                                <div style="font-size:1.4rem; font-weight:800; color:#FFFFFF;" id="sim-reward-val">+1.050 DaurPoin (~Rp 1.050)</div>
                            </div>
                            <div style="background:#22C55E; color:#0F172A; font-weight:800; font-size:0.78rem; padding:6px 12px; border-radius:var(--radius-full);">
                                AUTO SYNC
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Simulation Script -->
<script>
const wasteData = {
    pet: { name: "Botol Plastik PET (Aqua/Mineral)", weight: 0.35, rate: 3000, conf: "99.4%", color: "#4ADE80", hazard: false, icon: '<svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#4ADE80" stroke-width="1.8"><path d="M7 2h10v4H7zM6 6h12v16H6z"></path></svg>' },
    cardboard: { name: "Kardus Cokelat Kemasan Box", weight: 1.20, rate: 2000, conf: "98.7%", color: "#F59E0B", hazard: false, icon: '<svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="1.8"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path></svg>' },
    can: { name: "Kaleng Minuman Aluminium", weight: 0.45, rate: 10000, conf: "99.1%", color: "#38BDF8", hazard: false, icon: '<svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#38BDF8" stroke-width="1.8"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v14a9 3 0 0 0 18 0V5"></path></svg>' },
    copper: { name: "Kabel Kawat Tembaga Logam", weight: 0.50, rate: 70000, conf: "97.9%", color: "#F97316", hazard: false, icon: '<svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><path d="M12 2v20M2 12h20"></path></svg>' },
    oil: { name: "Minyak Jelantah Dapur (Liter)", weight: 1.00, rate: 5500, conf: "99.6%", color: "#EAB308", hazard: false, icon: '<svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#EAB308" stroke-width="1.8"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 16.1 5 18 5 15a7 7 0 0 0 7 7z"></path></svg>' },
    hazard: { name: "Limbah Medis / Baterai B3", weight: 0.20, rate: 0, conf: "DITOLAK!", color: "#EF4444", hazard: true, icon: '<svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="1.8"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><line x1="12" x2="12" y1="9" y2="13"></line><line x1="12" x2="12.01" y1="17" y2="17"></line></svg>' }
};

let userTotalPoints = 1050;
let userTotalKg = 0.35;

function simulateWaste(type) {
    const data = wasteData[type];
    if (!data) return;

    document.querySelectorAll('.sim-waste-btn').forEach(btn => {
        btn.classList.toggle('active', btn.getAttribute('data-id') === type);
    });

    const reticle = document.getElementById('sim-reticle');
    const statusText = document.getElementById('sim-status-text');
    const objName = document.getElementById('sim-obj-name');
    const iconDisplay = document.getElementById('sim-icon-display');
    const aiConf = document.getElementById('sim-ai-conf');
    const weightVal = document.getElementById('sim-weight-val');
    const rewardVal = document.getElementById('sim-reward-val');
    const payoutCard = document.getElementById('sim-payout-card');

    reticle.style.transform = "scale(1.15)";
    setTimeout(() => { reticle.style.transform = "scale(1)"; }, 300);

    iconDisplay.innerHTML = data.icon;
    objName.textContent = data.name;
    aiConf.textContent = data.conf;
    aiConf.style.color = data.color;
    weightVal.textContent = data.weight + " kg";

    if (data.hazard) {
        statusText.textContent = "BAHAYA: Sampah B3 Tidak Diterima!";
        payoutCard.style.background = "rgba(239, 68, 68, 0.2)";
        payoutCard.style.borderColor = "#EF4444";
        rewardVal.innerHTML = '<span style="color:#EF4444;">0 Poin (Limbah B3 Harus ke Fasilitas Khusus)</span>';
    } else {
        const earned = Math.round(data.weight * data.rate);
        statusText.textContent = "Validasi Sukses • Tersimpan";
        payoutCard.style.background = "rgba(34, 197, 94, 0.15)";
        payoutCard.style.borderColor = "rgba(74, 222, 128, 0.4)";
        rewardVal.innerHTML = `+${earned.toLocaleString('id-ID')} DaurPoin (~Rp ${earned.toLocaleString('id-ID')})`;

        userTotalPoints += earned;
        userTotalKg = Math.round((userTotalKg + data.weight) * 100) / 100;

        document.getElementById('sim-total-points').textContent = userTotalPoints.toLocaleString('id-ID') + " Poin";
        document.getElementById('sim-total-kg').textContent = userTotalKg.toFixed(2) + " kg";

        const rankBadge = document.getElementById('sim-user-rank');
        if (userTotalPoints > 15000) {
            rankBadge.textContent = "Pahlawan Warung Bambu";
            rankBadge.style.background = "rgba(34, 197, 94, 0.25)";
            rankBadge.style.color = "#4ADE80";
        } else if (userTotalPoints > 5000) {
            rankBadge.textContent = "Pejuang Sirkular";
            rankBadge.style.background = "rgba(56, 189, 248, 0.2)";
            rankBadge.style.color = "#38BDF8";
        }
    }
}
</script>

<?php
get_footer();
