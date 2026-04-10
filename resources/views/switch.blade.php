<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @switch($role)
    @case("admin")
    <p>Kamu adalah seorang adminitrasi.</p>
    @break

    @case("gamers")
    <h2>Kamu adalah pemain game </h2>
    @break

    @case("penulis")
    <h2>Kamu adalah seorang penulis</h2>
    <p>Penulis adalah seseorang yang menggunakan bahasa tulis untuk menyampaikan ide,</p>
    <p>gagasan, informasi, atau cerita, baik dalam bentuk fiksi (novel, puisi) maupun nonfiksi</p>
    <p>(artikel, jurnal, laporan). Mereka menciptakan karya orisinal melalui media cetak atau</p>
    <p>digital, sering kali berfungsi sebagai pembentuk pandangan dunia dan pendokumentasi budaya.</p>

    @break
    @default
    <p>Kamu adalah seorang pengguna</p>

    @endswitch
</body>
</html>