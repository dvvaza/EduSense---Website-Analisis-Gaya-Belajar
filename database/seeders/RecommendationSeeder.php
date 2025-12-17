<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class RecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan table sebelum seed ulang agar tidak duplikat jika dijalankan manual
        DB::table('recommendations')->truncate();

        $recommendations = [
            [
                'style' => 'visual',
                'content' => '
                <div class="mb-4">
                    <h5 class="fw-bold text-success"><i class="bi bi-eye me-2"></i>Strategi Inti</h5>
                    <p>Anda belajar paling baik dengan melihat. Informasi harus disajikan dalam bentuk gambar, diagram, atau format visual lainnya agar mudah dipahami.</p>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 border-success border-opacity-25 bg-success bg-opacity-10">
                            <div class="card-body">
                                <h6 class="fw-bold text-success">Media Belajar</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Gunakan diagram, grafik, dan peta konsep (mind maps).</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Tonton video pembelajaran, animasi, atau slide presentasi.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Gunakan simbol, tanda panah, dan hierarki visual dalam catatan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 border-success border-opacity-25 bg-success bg-opacity-10">
                            <div class="card-body">
                                <h6 class="fw-bold text-success">Teknik Mencatat</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Warnai catatan dengan stabilo (highlighter) untuk membedakan topik.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Ubah narasi teks menjadi gambar atau sketsa.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Sisakan banyak ruang kosong (white space) di catatan agar tidak terlihat padat.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <h5 class="fw-bold text-success"><i class="bi bi-lightbulb me-2"></i>Tips Tambahan</h5>
                    <ul>
                        <li>Bayangkan materi pelajaran seperti sedang menonton film di kepala Anda.</li>
                        <li>Tempelkan poster atau sticky notes berisi rumus/poin penting di dinding kamar.</li>
                        <li>Saat mengingat sesuatu, cobalah mengingat "posisi" informasi tersebut di halaman buku.</li>
                    </ul>
                </div>'
            ],
            [
                'style' => 'auditory',
                'content' => '
                <div class="mb-4">
                    <h5 class="fw-bold text-success"><i class="bi bi-ear me-2"></i>Strategi Inti</h5>
                    <p>Anda memproses informasi paling baik melalui pendengaran dan percakapan. Mendengarkan penjelasan dan mendiskusikannya adalah kunci pemahaman Anda.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 border-success border-opacity-25 bg-success bg-opacity-10">
                            <div class="card-body">
                                <h6 class="fw-bold text-success">Interaksi Sosial</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Diskusikan materi pelajaran dengan teman atau kelompok belajar.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Jelaskan kembali materi kepada orang lain (teknik Feynman).</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Ajukan pertanyaan dan terlibat aktif dalam diskusi kelas.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 border-success border-opacity-25 bg-success bg-opacity-10">
                            <div class="card-body">
                                <h6 class="fw-bold text-success">Pemanfaatan Audio</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Rekam penjelasan guru/dosen (dengan izin) dan dengarkan ulang.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Baca catatan atau buku teks dengan suara keras.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Dengarkan podcast atau audiobook terkait materi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <h5 class="fw-bold text-success"><i class="bi bi-lightbulb me-2"></i>Tips Tambahan</h5>
                    <ul>
                        <li>Gunakan jembatan keledai (mnemonics) berupa lagu atau rima untuk menghafal.</li>
                        <li>Hindari lingkungan yang terlalu bising saat belajar mandiri, atau gunakan musik instrumental yang menenangkan.</li>
                        <li>Bacalah pertanyaan ujian dengan ‘bibir bergerak’ atau suara pelan untuk memahaminya lebih baik.</li>
                    </ul>
                </div>'
            ],
            [
                'style' => 'reading_writing',
                'content' => '
                <div class="mb-4">
                    <h5 class="fw-bold text-success"><i class="bi bi-book me-2"></i>Strategi Inti</h5>
                    <p>Anda sangat nyaman dengan input dan output berupa teks. Membaca dan menulis adalah cara alami Anda menyerap dan menyusun informasi.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 border-success border-opacity-25 bg-success bg-opacity-10">
                            <div class="card-body">
                                <h6 class="fw-bold text-success">Membaca & Referensi</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Baca buku teks, artikel, jurnal, dan handout secara menyeluruh.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Cari definisi kata-kata kunci dan buat glosarium pribadi.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Bandingkan catatan Anda dengan buku sumber untuk melengkapi detail.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 border-success border-opacity-25 bg-success bg-opacity-10">
                            <div class="card-body">
                                <h6 class="fw-bold text-success">Menulis & Meringkas</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Buat ringkasan materi dengan kata-kata Anda sendiri (paraphrasing).</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Ubah diagram atau grafik menjadi penjelasan paragraf.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Buat daftar poin-poin (bullet points) untuk menstrukturkan informasi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <h5 class="fw-bold text-success"><i class="bi bi-lightbulb me-2"></i>Tips Tambahan</h5>
                    <ul>
                        <li>Gunakan flashcards berbasis teks untuk menghafal fakta atau kosakata.</li>
                        <li>Tulis ulang catatan penting berkali-kali untuk memperkuat ingatan.</li>
                        <li>Soal latihan berbentuk esai atau isian singkat sangat efektif untuk Anda.</li>
                    </ul>
                </div>'
            ],
            [
                'style' => 'kinesthetic',
                'content' => '
                <div class="mb-4">
                    <h5 class="fw-bold text-success"><i class="bi bi-person-walking me-2"></i>Strategi Inti</h5>
                    <p>Anda belajar melalui pengalaman nyata, praktik, dan gerakan fisik. Anda perlu "melakukan" untuk memahami.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 border-success border-opacity-25 bg-success bg-opacity-10">
                            <div class="card-body">
                                <h6 class="fw-bold text-success">Praktik Langsung</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Lakukan eksperimen lab, simulasi, atau role-play.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Gunakan contoh kasus nyata (case studies) untuk memahami teori.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Selesaikan soal latihan terdahulu (past papers) alih-alih hanya membaca materi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card h-100 border-success border-opacity-25 bg-success bg-opacity-10">
                            <div class="card-body">
                                <h6 class="fw-bold text-success">Aktivitas Fisik</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Kunjungi lapangan, muzium, atau lokasi terkait materi jika memungkinkan.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Belajar sambil bergerak (berjalan kaki, mengetuk jari, dll).</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Gunakan model fisik atau objek nyata (lego, alat peraga) untuk memvisualisasikan konsep.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <h5 class="fw-bold text-success"><i class="bi bi-lightbulb me-2"></i>Tips Tambahan</h5>
                    <ul>
                        <li>Pecah waktu belajar menjadi sesi pendek dengan istirahat aktif (berjalan, peregangan).</li>
                        <li>Gunakan banyak contoh konkret saat mencatat, bukan sekadar teori abstrak.</li>
                        <li>Mengajar orang lain sambil mempraktikkan materi juga sangat efektif.</li>
                    </ul>
                </div>'
            ],
        ];

        foreach ($recommendations as $data) {
            Recommendation::create($data);
        }
    }
}
