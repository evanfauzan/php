<style>
    /* Class kustom dengan awalan kaligrafi- */
    .modal.fade .kaligrafi-modal-dialog {
        transform: translate(0, -50px);
        opacity: 0;
        transition: transform 0.3s ease-out, opacity 0.3s ease-out;
    }
    .modal.show .kaligrafi-modal-dialog {
        transform: translate(0, 0);
        opacity: 1;
    }
    .kaligrafi-modal-content {
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }
    .kaligrafi-modal-header {
        background-color: rgba(255, 255, 255, 0.8); /* Sedikit transparan */
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 15px 15px 0 0;
        padding: 1.5rem 2rem;
    }
    .kaligrafi-modal-title {
        font-weight: 500;
    }
    .kaligrafi-modal-body {
        padding: 2rem;
    }
    .kaligrafi-form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
    }
    .kaligrafi-btn-primary {
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 123, 255, 0.3);
    }
    .kaligrafi-btn-outline-primary {
        border-radius: 10px;
    }
    .kaligrafi-navbar-brand {
        font-weight: 600;
    }
    .kaligrafi-nav-link {
        font-weight: 500;
        margin-right: 1rem;
        transition: color 0.3s ease-in-out;
    }
    .kaligrafi-nav-link:hover {
        color: #007bff;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand kaligrafi-navbar-brand" href="#">
            <!-- <img src="sample2.png" alt="Logo Kaligrafi" style="max-height: 40px;" class="me-2"> -->
            Kaligrafi Online
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavGradientLight" aria-controls="navbarNavGradientLight" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavGradientLight">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link kaligrafi-nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link kaligrafi-nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link kaligrafi-nav-link" href="#">Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link kaligrafi-nav-link" href="#">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link kaligrafi-nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <button type="button" class="btn btn-outline-primary rounded-pill me-2 kaligrafi-btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="bi bi-box-arrow-in-right me-1"></i> Masuk
            </button>
            <button type="button" class="btn btn-primary rounded-pill kaligrafi-btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                <i class="bi bi-person-plus-fill me-1"></i> Daftar
            </button>
        </div>
    </div>
</nav>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered kaligrafi-modal-dialog">
        <div class="modal-content kaligrafi-modal-content">
            <div class="modal-header kaligrafi-modal-header">
                <h5 class="modal-title kaligrafi-modal-title" id="loginModalLabel"><i class="bi bi-person-fill me-2"></i> Masuk ke Akun Anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body kaligrafi-modal-body">
                <form>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label"><i class="bi bi-envelope-fill me-2"></i> Email</label>
                        <input type="email" class="form-control kaligrafi-form-control" id="loginEmail" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label"><i class="bi bi-key-fill me-2"></i> Kata Sandi</label>
                        <input type="password" class="form-control kaligrafi-form-control" id="loginPassword" placeholder="Masukkan kata sandi Anda" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe"><i class="bi bi-check-square-fill me-1"></i> Ingat saya</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 kaligrafi-btn-primary">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Masuk
                    </button>
                    <div class="mt-3 text-center">
                        <a href="#" class="text-decoration-none text-muted">Lupa kata sandi?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered kaligrafi-modal-dialog">
        <div class="modal-content kaligrafi-modal-content">
            <div class="modal-header kaligrafi-modal-header">
                <h5 class="modal-title kaligrafi-modal-title" id="registerModalLabel"><i class="bi bi-person-plus-fill me-2"></i> Daftar Akun Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body kaligrafi-modal-body">
                <form>
                    <div class="mb-3">
                        <label for="registerNama" class="form-label"><i class="bi bi-person-fill me-2"></i> Nama Lengkap</label>
                        <input type="text" class="form-control kaligrafi-form-control" id="registerNama" placeholder="Masukkan nama lengkap Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label"><i class="bi bi-envelope-fill me-2"></i> Email</label>
                        <input type="email" class="form-control kaligrafi-form-control" id="registerEmail" placeholder="Masukkan alamat email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label"><i class="bi bi-key-fill me-2"></i> Kata Sandi</label>
                        <input type="password" class="form-control kaligrafi-form-control" id="registerPassword" placeholder="Buat kata sandi" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label"><i class="bi bi-key-fill me-2"></i> Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control kaligrafi-form-control" id="confirmPassword" placeholder="Konfirmasi kata sandi" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                        <label class="form-check-label" for="agreeTerms"><i class="bi bi-check-square-fill me-1"></i> Saya setuju dengan <a href="#" class="text-decoration-none text-muted">syarat dan ketentuan</a>.</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 kaligrafi-btn-primary">
                        <i class="bi bi-person-plus-fill me-2"></i> Daftar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>