<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #667eea, #764ba2);
        }
        .content-wrapper {
            background-color: #FFFFFF;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            overflow: hidden; /* Mengatasi bayangan yang tidak sesuai pada sudut */
        }
        .gradient-text {
            background: linear-gradient(45deg, #4CAF50, #2196F3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .info-item {
            margin-bottom: 12px;
            padding: 16px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .info-title {
            font-weight: bold;
            color: #333;
            font-size: 18px;
        }
        .info-value {
            font-size: 16px;
            color: #666;
        }
        .text-lg {
            font-size: 16px;
        }
        .text-xl {
            font-size: 18px;
        }
        .social-link {
            transition: transform 0.3s ease-in-out;
        }
        .social-link:hover {
            transform: translateY(-3px); /* Efek kecil saat hover */
        }
    </style>
</head>
<body class="bg-gradient-to-r from-gray-700 to-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="bg-gray-100 shadow-lg rounded-lg p-8 mx-4 md:w-3/4 lg:w-2/3 xl:w-1/2 content-wrapper">
        <div class="text-center mb-6">
            <img src="foto.jpg" alt="Your Photo" class="w-48 h-48 rounded-full mx-auto mb-4 shadow-md">

            <p class="text-lg text-gray-800 mt-4 font-bold">Halo, saya <strong class="gradient-text text-2xl">I Nyoman Widyam Rizqi Samkayana</strong>,</p>
            <div class="info-item">
                <p class="info-title">NIM: <span class="info-value font-normal">2215101025</span></p>
            </div>
            <div class="info-item">
                <p class="info-title">Kelas: <span class="info-value font-normal">A</span></p>
            </div>
            <div class="info-item">
                <p class="info-title">Program Studi: <span class="info-value font-normal">Ilmu Komputer</span></p>
            </div>
            <div class="info-item">
                <p class="info-title">Fakultas: <span class="info-value font-normal">Teknik dan Kejuruan</span></p>
            </div>
            <div class="info-item">
                <p class="info-title">Universitas: <span class="info-value font-normal">Pendidikan Ganesha</span></p>
            </div>
            <p class="text-lg text-gray-800 mt-4">Saya senang dapat mempelajari Docker di matakuliah Sistem Terdistribusi.</p>
        </div>
        <div class="flex justify-center mt-6 space-x-4">
            <a href="https://instagram.com/mangriski" target="_blank" class="text-gray-800 hover:text-gray-600 social-link">
                <span class="sr-only">Instagram</span>
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://wa.me/81236836570" target="_blank" class="text-gray-800 hover:text-gray-600 social-link">
                <span class="sr-only">WhatsApp</span>
                <i class="fab fa-whatsapp fa-2x"></i>
            </a>
            <a href="https://www.youtube.com/@inyomanwidyamrizqisamkayan7033" target="_blank" class="text-gray-800 hover:text-gray-600 social-link">
                <span class="sr-only">YouTube</span>
                <i class="fab fa-youtube fa-2x"></i>
            </a>
        </div>
    </div>
</body>
</html>
