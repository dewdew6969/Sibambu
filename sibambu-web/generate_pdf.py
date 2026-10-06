import os
import sys
from reportlab.lib.pagesizes import A4
from reportlab.lib import colors
from reportlab.lib.units import cm, mm
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.platypus import (
    SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle, PageBreak, KeepTogether, HRFlowable
)
from reportlab.pdfgen import canvas

class NumberedCanvas(canvas.Canvas):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self._saved_page_states = []

    def showPage(self):
        self._saved_page_states.append(dict(self.__dict__))
        self._startPage()

    def save(self):
        num_pages = len(self._saved_page_states)
        for state in self._saved_page_states:
            self.__dict__.update(state)
            self.draw_page_decorations(num_pages)
            super().showPage()
        super().save()

    def draw_page_decorations(self, page_count):
        self.saveState()
        self.setFont("Helvetica", 8)
        self.setFillColor(colors.HexColor("#64748B"))
        
        # Header (Pages > 1)
        if self._pageNumber > 1:
            self.drawString(20 * mm, 285 * mm, "SiBambu | Buku Panduan Penggunaan Sistem Bank Sampah Terpadu")
            self.setStrokeColor(colors.HexColor("#CBD5E1"))
            self.setLineWidth(0.5)
            self.line(20 * mm, 282 * mm, 190 * mm, 282 * mm)
            
        # Footer
        footer_text = f"Halaman {self._pageNumber} dari {page_count}"
        self.drawRightString(190 * mm, 12 * mm, footer_text)
        self.drawString(20 * mm, 12 * mm, "Horizon University Indonesia • Inovasi Daerah PERIODA 2026")
        self.setStrokeColor(colors.HexColor("#E2E8F0"))
        self.setLineWidth(0.5)
        self.line(20 * mm, 16 * mm, 190 * mm, 16 * mm)
        self.restoreState()

def build_pdf(filename):
    doc = SimpleDocTemplate(
        filename,
        pagesize=A4,
        leftMargin=20 * mm,
        rightMargin=20 * mm,
        topMargin=22 * mm,
        bottomMargin=22 * mm
    )

    styles = getSampleStyleSheet()

    # Custom styles
    primary_color = colors.HexColor("#15803D")    # Forest Green
    dark_neutral = colors.HexColor("#0F172A")     # Slate 900
    body_color = colors.HexColor("#334155")       # Slate 700
    accent_green = colors.HexColor("#22C55E")

    styles.add(ParagraphStyle(
        'DocTitle',
        parent=styles['Normal'],
        fontName='Helvetica-Bold',
        fontSize=24,
        leading=28,
        textColor=primary_color,
        spaceAfter=6
    ))

    styles.add(ParagraphStyle(
        'DocSubTitle',
        parent=styles['Normal'],
        fontName='Helvetica',
        fontSize=12,
        leading=16,
        textColor=colors.HexColor("#475569"),
        spaceAfter=15
    ))

    styles.add(ParagraphStyle(
        'CoverBadge',
        parent=styles['Normal'],
        fontName='Helvetica-Bold',
        fontSize=9,
        leading=11,
        textColor=colors.HexColor("#15803D"),
        spaceAfter=8
    ))

    styles.add(ParagraphStyle(
        'H1',
        parent=styles['Normal'],
        fontName='Helvetica-Bold',
        fontSize=16,
        leading=20,
        textColor=primary_color,
        spaceBefore=14,
        spaceAfter=8,
        keepWithNext=True
    ))

    styles.add(ParagraphStyle(
        'H2',
        parent=styles['Normal'],
        fontName='Helvetica-Bold',
        fontSize=12,
        leading=16,
        textColor=dark_neutral,
        spaceBefore=10,
        spaceAfter=4,
        keepWithNext=True
    ))

    styles.add(ParagraphStyle(
        'BodyCustom',
        parent=styles['Normal'],
        fontName='Helvetica',
        fontSize=9.5,
        leading=14,
        textColor=body_color,
        spaceAfter=6
    ))

    styles.add(ParagraphStyle(
        'BulletCustom',
        parent=styles['Normal'],
        fontName='Helvetica',
        fontSize=9.5,
        leading=14,
        textColor=body_color,
        leftIndent=14,
        firstLineIndent=-10,
        spaceAfter=4
    ))

    styles.add(ParagraphStyle(
        'CalloutText',
        parent=styles['Normal'],
        fontName='Helvetica-Oblique',
        fontSize=9,
        leading=13,
        textColor=colors.HexColor("#166534")
    ))

    styles.add(ParagraphStyle(
        'TableHeader',
        parent=styles['Normal'],
        fontName='Helvetica-Bold',
        fontSize=9,
        leading=12,
        textColor=colors.white,
        alignment=1
    ))

    styles.add(ParagraphStyle(
        'TableCell',
        parent=styles['Normal'],
        fontName='Helvetica',
        fontSize=8.5,
        leading=11,
        textColor=dark_neutral
    ))

    styles.add(ParagraphStyle(
        'TableCellBold',
        parent=styles['Normal'],
        fontName='Helvetica-Bold',
        fontSize=8.5,
        leading=11,
        textColor=dark_neutral
    ))

    styles.add(ParagraphStyle(
        'TableCellCenter',
        parent=styles['Normal'],
        fontName='Helvetica',
        fontSize=8.5,
        leading=11,
        textColor=dark_neutral,
        alignment=1
    ))

    story = []

    # ===== HEADER / COVER BANNER =====
    story.append(Paragraph("MODUL RESMI & DOKUMENTASI SISTEM", styles['CoverBadge']))
    story.append(Paragraph("BUKU PANDUAN PENGGUNAAN (MANUAL BOOK)", styles['DocTitle']))
    story.append(Paragraph("SiBambu: Sistem Bank Sampah Terpadu Berbasis AI & Timbangan IoT untuk Mendukung Ekonomi Sirkular", styles['DocSubTitle']))
    
    meta_table_data = [
        [
            Paragraph("<b>Institusi:</b> Horizon University Indonesia", styles['TableCell']),
            Paragraph("<b>Lokasi Pilot:</b> Desa Warung Bambu, Karawang", styles['TableCell']),
            Paragraph("<b>Tahun:</b> 2026", styles['TableCell'])
        ],
        [
            Paragraph("<b>Pengembang:</b> Tim Inovasi Mahasiswa FICT x FHS", styles['TableCell']),
            Paragraph("<b>Kontak:</b> dewa.permana.fict@krw.horizon.ac.id", styles['TableCell']),
            Paragraph("<b>Versi:</b> 1.0.0 (Release)", styles['TableCell'])
        ]
    ]
    meta_table = Table(meta_table_data, colWidths=[60*mm, 65*mm, 45*mm])
    meta_table.setStyle(TableStyle([
        ('BACKGROUND', (0,0), (-1,-1), colors.HexColor("#F1F5F9")),
        ('BOX', (0,0), (-1,-1), 0.5, colors.HexColor("#CBD5E1")),
        ('INNERGRID', (0,0), (-1,-1), 0.5, colors.HexColor("#E2E8F0")),
        ('TOPPADDING', (0,0), (-1,-1), 5),
        ('BOTTOMPADDING', (0,0), (-1,-1), 5),
        ('LEFTPADDING', (0,0), (-1,-1), 8),
        ('RIGHTPADDING', (0,0), (-1,-1), 8),
    ]))
    story.append(meta_table)
    story.append(Spacer(1, 10))

    # ===== PENGENALAN SINGKAT =====
    story.append(Paragraph("1. Pengenalan Singkat", styles['H1']))
    story.append(Paragraph(
        "<b>SiBambu</b> (Sistem Bank Sampah Terpadu) adalah platform inovasi yang mengintegrasikan aplikasi mobile berbasis "
        "React Native, kecerdasan buatan visual <i>Google Gemini Vision</i>, dan perangkat timbangan digital nirkabel berbasis "
        "<i>Internet of Things (IoT ESP32 + Load Cell)</i>. Inovasi ini mengubah paradigma pengelolaan sampah rumah tangga "
        "menjadi tabungan ekonomi produktif (DaurPoin) yang dapat dicairkan langsung ke e-wallet (DANA, ShopeePay) maupun uang tunai.",
        styles['BodyCustom']
    ))
    story.append(Paragraph(
        "Sistem ini dirancang khusus untuk memotong rantai birokrasi penimbangan manual, menghilangkan potensi salah catat atau manipulasi, "
        "serta menyediakan data tonase sampah lingkungan secara real-time bagi perangkat Desa Warung Bambu dan Pemerintah Kabupaten Karawang.",
        styles['BodyCustom']
    ))

    # Callout Box
    callout_data = [[Paragraph(
        "<b>Pilar Utama:</b> 100% Otomatis dengan AI Image Recognition • Presisi Absolut Timbangan Digital IoT • "
        "Smart Incentive DaurPoin Terintegrasi Saldo E-Wallet.", styles['CalloutText'])]]
    callout_table = Table(callout_data, colWidths=[170*mm])
    callout_table.setStyle(TableStyle([
        ('BACKGROUND', (0,0), (-1,-1), colors.HexColor("#DCFCE7")),
        ('BOX', (0,0), (-1,-1), 1, colors.HexColor("#86EFAC")),
        ('LEFTPADDING', (0,0), (-1,-1), 10),
        ('RIGHTPADDING', (0,0), (-1,-1), 10),
        ('TOPPADDING', (0,0), (-1,-1), 6),
        ('BOTTOMPADDING', (0,0), (-1,-1), 6),
    ]))
    story.append(callout_table)
    story.append(Spacer(1, 10))

    # ===== PANDUAN WARGA =====
    story.append(Paragraph("2. Panduan Lengkap untuk Warga / Nasabah", styles['H1']))

    story.append(Paragraph("A. Pendaftaran Akun & Masuk (Login)", styles['H2']))
    story.append(Paragraph("• <b>Download Aplikasi:</b> Pasang aplikasi SiBambu melalui Google Play Store pada perangkat smartphone Android Anda.", styles['BulletCustom']))
    story.append(Paragraph("• <b>Buka Aplikasi:</b> Pada layar awal, klik tombol <i>'Daftar Sekarang'</i>.", styles['BulletCustom']))
    story.append(Paragraph("• <b>Isi Formulir Identitas:</b> Masukkan Nama Lengkap, Nomor HP/WhatsApp aktif (pastikan sama dengan nomor e-wallet Anda), Alamat Email, dan Kata Sandi.", styles['BulletCustom']))
    story.append(Paragraph("• <b>Pilih Posko TPS Terdekat:</b> Tentukan lokasi posko tempat Anda akan menyetor sampah (misalnya <i>TPS Bambu Raya Dusun Krajan</i> atau <i>TPS Beriman Dusun Sukamaju</i>).", styles['BulletCustom']))

    story.append(Paragraph("B. Memilah Sampah dari Rumah", styles['H2']))
    story.append(Paragraph("Agar nilai konversi sampah optimal, pilahlah sampah anorganik Anda sebelum dibawa ke posko:", styles['BodyCustom']))
    story.append(Paragraph("• <b>Plastik:</b> Botol air mineral bening (PET), gelas plastik kopi/teh, botol shampoo/sabun tebal, kantong kresek kering.", styles['BulletCustom']))
    story.append(Paragraph("• <b>Kardus & Kertas:</b> Kotak kardus cokelat, kertas HVS arsip kantor, buku tulis, karton dupleks.", styles['BulletCustom']))
    story.append(Paragraph("• <b>Logam & Seng:</b> Kaleng biskuit/susu, wajan aluminium rusak, kawat tembaga, besi potongan.", styles['BulletCustom']))
    story.append(Paragraph("• <b>Kaca:</b> Botol sirup dan botol kecap utuh.", styles['BulletCustom']))
    story.append(Paragraph("• <i>Perhatian:</i> Pastikan sampah tidak bercampur dengan sisa kuah/makanan organik, bahan medis, atau limbah berbahaya (B3).", styles['BulletCustom']))

    story.append(Paragraph("C. Pindai Sampah Menggunakan Kamera AI", styles['H2']))
    story.append(Paragraph("• Buka menu <b>Pindai (Scan)</b> di bagian tengah bawah navigasi aplikasi.", styles['BulletCustom']))
    story.append(Paragraph("• Izinkan akses kamera saat diminta oleh sistem Android.", styles['BulletCustom']))
    story.append(Paragraph("• Arahkan lensa kamera ke tumpukan sampah anorganik Anda dengan pencahayaan memadai.", styles['BulletCustom']))
    story.append(Paragraph("• Tekan tombol <b>Ambil Foto</b>. Dalam 2-3 detik model AI Google Gemini akan mengklasifikasikan jenis material serta menampilkan perkiraan nilai tukar per kilogram.", styles['BulletCustom']))

    story.append(Paragraph("D. Penimbangan Digital IoT & Akumulasi DaurPoin", styles['H2']))
    story.append(Paragraph("• Bawa kantong sampah yang telah dipilah ke Posko TPS SiBambu terdekat di desa.", styles['BulletCustom']))
    story.append(Paragraph("• Letakkan sampah di atas platform <b>Timbangan Pintar IoT</b>. Sensor Load Cell akan membaca bobot fisik secara absolut dan mengirimkannya nirkabel ke sistem.", styles['BulletCustom']))
    story.append(Paragraph("• Petugas TPS memvalidasi setoran. Layar aplikasi Anda akan menampilkan notifikasi <b>'Transaksi Berhasil!'</b> dan saldo DaurPoin Anda otomatis bertambah.", styles['BulletCustom']))

    story.append(Paragraph("E. Penukaran DaurPoin Menjadi Saldo Uang Tunai / E-Wallet", styles['H2']))
    story.append(Paragraph("• Buka menu <b>'Tukar Poin'</b> pada layar utama aplikasi.", styles['BulletCustom']))
    story.append(Paragraph("• Pilih metode penukaran yang diinginkan: <b>Uang Tunai</b> (ambil langsung di posko TPS), <b>DANA</b>, atau <b>ShopeePay</b>.", styles['BulletCustom']))
    story.append(Paragraph("• Masukkan jumlah poin yang ingin dicairkan dan nomor dompet digital tujuan.", styles['BulletCustom']))
    story.append(Paragraph("• Konfirmasi permintaan penukaran. Saldo e-wallet akan masuk ke akun Anda dalam hitungan menit hingga 1x24 jam kerja.", styles['BulletCustom']))

    story.append(Spacer(1, 10))

    # ===== PANDUAN PETUGAS =====
    story.append(Paragraph("3. Panduan Operasional Petugas & Admin TPS", styles['H1']))
    story.append(Paragraph(
        "Petugas dan pengelola Bank Sampah memegang peran krusial dalam memfasilitasi penimbangan fisik dan mengawasi jalannya ekosistem desa digital.",
        styles['BodyCustom']
    ))
    story.append(Paragraph("A. Prosedur Pengoperasian Timbangan Digital IoT (ESP32)", styles['H2']))
    story.append(Paragraph("1. <b>Nyalakan Daya:</b> Geser saklar daya baterai lithium 18650 ke posisi ON. Pastikan indikator lampu daya menyala.", styles['BulletCustom']))
    story.append(Paragraph("2. <b>Cek Konektivitas:</b> Mikrokontroler ESP32 akan menyambung otomatis ke hotspot Wi-Fi posko TPS. Lampu LED hijau menandakan koneksi internet aktif.", styles['BulletCustom']))
    story.append(Paragraph("3. <b>Kalibrasi Nol (Tare):</b> Pastikan plat timbangan bersih dari benda asing sebelum menimbang agar pembacaan sensor load cell berada pada 0.00 kg.", styles['BulletCustom']))
    story.append(Paragraph("4. <b>Pengiriman Data Nirkabel:</b> Saat sampah diletakkan dan pembacaan stabil, tekan tombol kirim. Data berat akan langsung ter-push via REST API ke server tanpa peluang manipulasi angka.", styles['BulletCustom']))

    story.append(Paragraph("B. Dasbor Admin TPS & Validasi Nasabah", styles['H2']))
    story.append(Paragraph("• Petugas masuk ke akun via menu login dengan hak akses Petugas/Admin TPS.", styles['BulletCustom']))
    story.append(Paragraph("• Melalui Dasbor Admin, petugas dapat melihat rekapitulasi tonase harian, daftar nama nasabah yang sedang menyetor, serta memverifikasi kesesuaian kategori fisik sampah.", styles['BulletCustom']))
    story.append(Paragraph("• Untuk nasabah yang memilih pencairan <i>Uang Tunai</i> di posko, petugas menyerahkan uang fisik dan menekan tombol konfirmasi pencairan pada dasbor.", styles['BulletCustom']))

    story.append(Spacer(1, 10))

    # ===== TABEL INDEKS HARGA =====
    story.append(Paragraph("4. Tabel Indeks Konversi Sampah Anorganik", styles['H1']))
    story.append(Paragraph("Berikut adalah acuan konversi DaurPoin berdasarkan kategori material yang terdaftar di sistem:", styles['BodyCustom']))

    table_content = [
        [
            Paragraph("No", styles['TableHeader']),
            Paragraph("Kategori Material", styles['TableHeader']),
            Paragraph("Satuan", styles['TableHeader']),
            Paragraph("Contoh Sampah", styles['TableHeader']),
            Paragraph("Nilai DaurPoin / Satuan", styles['TableHeader'])
        ],
        [
            Paragraph("1", styles['TableCellCenter']),
            Paragraph("<b>Botol Mineral (PET Bening)</b>", styles['TableCell']),
            Paragraph("kg", styles['TableCellCenter']),
            Paragraph("Botol Aqua, Le Minerale, dsb", styles['TableCell']),
            Paragraph("2.500 - 3.500 Poin", styles['TableCellCenter'])
        ],
        [
            Paragraph("2", styles['TableCellCenter']),
            Paragraph("<b>Gelas Plastik (PP)</b>", styles['TableCell']),
            Paragraph("kg", styles['TableCellCenter']),
            Paragraph("Gelas air cup, gelas boba/kopi", styles['TableCell']),
            Paragraph("2.000 - 3.000 Poin", styles['TableCellCenter'])
        ],
        [
            Paragraph("3", styles['TableCellCenter']),
            Paragraph("<b>Kardus Cokelat</b>", styles['TableCell']),
            Paragraph("kg", styles['TableCellCenter']),
            Paragraph("Kardus box mie, paket belanjaan", styles['TableCell']),
            Paragraph("1.500 - 2.200 Poin", styles['TableCellCenter'])
        ],
        [
            Paragraph("4", styles['TableCellCenter']),
            Paragraph("<b>Kertas Arsip / Buku</b>", styles['TableCell']),
            Paragraph("kg", styles['TableCellCenter']),
            Paragraph("Kertas HVS putih, majalah, koran", styles['TableCell']),
            Paragraph("1.200 - 1.800 Poin", styles['TableCellCenter'])
        ],
        [
            Paragraph("5", styles['TableCellCenter']),
            Paragraph("<b>Kaleng & Aluminium</b>", styles['TableCell']),
            Paragraph("kg", styles['TableCellCenter']),
            Paragraph("Kaleng minuman soda, kaleng susu", styles['TableCell']),
            Paragraph("7.000 - 12.000 Poin", styles['TableCellCenter'])
        ],
        [
            Paragraph("6", styles['TableCellCenter']),
            Paragraph("<b>Besi Super / Besi Cor</b>", styles['TableCell']),
            Paragraph("kg", styles['TableCellCenter']),
            Paragraph("Besi potongan tebal, rangka pagar", styles['TableCell']),
            Paragraph("3.500 - 5.000 Poin", styles['TableCellCenter'])
        ],
        [
            Paragraph("7", styles['TableCellCenter']),
            Paragraph("<b>Tembaga & Kuningan</b>", styles['TableCell']),
            Paragraph("kg", styles['TableCellCenter']),
            Paragraph("Kawat tembaga kabel, pipa kuningan", styles['TableCell']),
            Paragraph("60.000 - 85.000 Poin", styles['TableCellCenter'])
        ],
        [
            Paragraph("8", styles['TableCellCenter']),
            Paragraph("<b>Botol Kaca Utuh</b>", styles['TableCell']),
            Paragraph("pcs", styles['TableCellCenter']),
            Paragraph("Botol sirup marjan, botol kecap", styles['TableCell']),
            Paragraph("500 - 1.000 Poin", styles['TableCellCenter'])
        ],
        [
            Paragraph("9", styles['TableCellCenter']),
            Paragraph("<b>Minyak Jelantah</b>", styles['TableCell']),
            Paragraph("liter", styles['TableCellCenter']),
            Paragraph("Minyak sisa penggorengan dapur", styles['TableCell']),
            Paragraph("4.000 - 6.500 Poin", styles['TableCellCenter'])
        ]
    ]

    price_table = Table(table_content, colWidths=[10*mm, 50*mm, 15*mm, 55*mm, 40*mm])
    price_table.setStyle(TableStyle([
        ('BACKGROUND', (0,0), (-1,0), primary_color),
        ('ALIGN', (0,0), (-1,0), 'CENTER'),
        ('BOTTOMPADDING', (0,0), (-1,0), 6),
        ('TOPPADDING', (0,0), (-1,0), 6),
        ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, colors.HexColor("#F8FAFC")]),
        ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#E2E8F0")),
        ('VALIGN', (0,0), (-1,-1), 'MIDDLE'),
        ('TOPPADDING', (0,1), (-1,-1), 4),
        ('BOTTOMPADDING', (0,1), (-1,-1), 4),
        ('LEFTPADDING', (0,0), (-1,-1), 5),
        ('RIGHTPADDING', (0,0), (-1,-1), 5),
    ]))
    story.append(price_table)
    story.append(Spacer(1, 10))

    # ===== FAQ & TROUBLESHOOTING =====
    story.append(Paragraph("5. Tanya Jawab & Penanganan Kendala (FAQ)", styles['H1']))

    story.append(Paragraph("<b>Q: Apa yang harus dilakukan jika hasil deteksi AI tidak sesuai dengan fisik sampah?</b>", styles['H2']))
    story.append(Paragraph("A: Pastikan objek berada di tengah kamera dan pencahayaan cukup terang. Klik tombol <i>'Ulangi Scan'</i>. Petugas TPS juga memiliki wewenang untuk memilih kategori yang benar saat proses timbang fisik.", styles['BodyCustom']))

    story.append(Paragraph("<b>Q: Bagaimana jika koneksi Wi-Fi di posko TPS sedang mati?</b>", styles['H2']))
    story.append(Paragraph("A: Timbangan IoT SiBambu dapat dihubungkan ke fitur Personal Hotspot dari smartphone petugas. Sistem secara otomatis menyinkronkan data kembali begitu koneksi internet aktif.", styles['BodyCustom']))

    story.append(Paragraph("<b>Q: Apakah DaurPoin memiliki masa kedaluwarsa?</b>", styles['H2']))
    story.append(Paragraph("A: Tidak. Selama akun SiBambu Anda aktif, DaurPoin Anda tersimpan aman dan dapat dicairkan kapan saja.", styles['BodyCustom']))

    story.append(Paragraph("<b>Q: Ke mana saya dapat menghubungi bantuan resmi?</b>", styles['H2']))
    story.append(Paragraph("A: Hubungi sekretariat pengembang SiBambu di Horizon University Indonesia melalui WhatsApp <b>0896-7145-1167</b> atau email ke <b>dewa.permana.fict@krw.horizon.ac.id</b>.", styles['BodyCustom']))

    story.append(Spacer(1, 15))
    story.append(HRFlowable(width="100%", thickness=1, color=colors.HexColor("#CBD5E1"), spaceAfter=10))
    story.append(Paragraph(
        "<font size='8' color='#64748B'>Dokumen ini disusun secara resmi oleh Tim Pengembang SiBambu untuk Kompetisi Inovasi Daerah PERIODA Kabupaten Karawang 2026. Hak Cipta Dilindungi Undang-Undang.</font>",
        styles['BodyCustom']
    ))

    doc.build(story, canvasmaker=NumberedCanvas)
    print(f"PDF successfully generated at: {filename}")

if __name__ == '__main__':
    target = sys.argv[1] if len(sys.argv) > 1 else 'manual-book.pdf'
    build_pdf(target)
