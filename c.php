<?php
// Direktori utama yang ingin diperiksa
$directory = __DIR__; // Ubah ke direktori target jika berbeda

// Fungsi untuk mengganti ekstensi file secara rekursif
function changeExtensionRecursive($dir, $oldExt, $newExt) {
    if (!is_dir($dir)) {
        die("Direktori tidak ditemukan: $dir");
    }

    $files = scandir($dir);

    foreach ($files as $file) {
        // Lewati file "." dan ".."
        if ($file === '.' || $file === '..') {
            continue;
        }

        $filePath = $dir . DIRECTORY_SEPARATOR . $file;

        if (is_dir($filePath)) {
            // Rekursi ke subdirektori
            changeExtensionRecursive($filePath, $oldExt, $newExt);
        } elseif (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === $oldExt) {
            // Ganti ekstensi file
            $newFilePath = $dir . DIRECTORY_SEPARATOR . pathinfo($filePath, PATHINFO_FILENAME) . ".$newExt";
            if (rename($filePath, $newFilePath)) {
                echo "Berhasil mengganti: $filePath -> $newFilePath\n";
            } else {
                echo "Gagal mengganti: $filePath\n";
            }
        }
    }
}

// Panggil fungsi untuk mengganti ekstensi .phpt ke .txt secara rekursif
changeExtensionRecursive($directory, 'phpt', 'txt');
