<?php
session_start();

if (empty($_SESSION['user'])) {
    header('Location: Login.php');
    exit;
}

$userName = $_SESSION['user']['name'] ?? 'Traveler';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Archives • Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: linear-gradient(135deg, #1e5c6b 0%, #2a8a9e 100%);
            min-height: 100vh;
        }
        
        .title-font {
            font-family: 'Playfair Display', serif;
        }

        .map-container {
            filter: drop-shadow(0 25px 25px rgba(0, 0, 0, 0.35));
        }
    </style>
</head>
<body class="text-white overflow-hidden">
    
    <!-- Top Bar -->
    <div class="flex items-center justify-between px-8 py-6">
        <!-- Left: Menu + Home -->
        <div class="flex items-center gap-6">
            <button onclick="toggleSidebar()" class="text-3xl hover:text-white/80 transition-colors">
                <i class="fa-solid fa-bars"></i>
            </button>
            <a href="index.php" class="flex items-center gap-3 hover:scale-110 transition-transform">
                <div class="w-11 h-11 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/30">
                    <i class="fa-solid fa-house text-3xl"></i>
                </div>
            </a>
        </div>

        <!-- User -->
        <div class="flex items-center gap-3 bg-white/10 backdrop-blur-md px-5 py-2 rounded-3xl border border-white/20">
            <div class="text-right">
                <p class="font-medium"><?= htmlspecialchars($userName) ?></p>
                <p class="text-xs text-white/60">Explorer</p>
            </div>
            <div class="w-9 h-9 bg-white/20 rounded-2xl flex items-center justify-center text-2xl">
                👤
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-8 flex flex-col lg:flex-row items-center justify-between gap-12 mt-8">
        
        <!-- Left Content -->
        <div class="lg:w-5/12 space-y-8">
            <div>
                <h1 class="title-font text-6xl lg:text-7xl font-bold leading-none tracking-tighter">
                    WELCOME BACK,<br>
                    <span class="text-white"><?= htmlspecialchars($userName) ?></span>
                </h1>
                <p class="mt-6 text-xl text-white/80">
                    Ready to continue your Philippine adventure?
                </p>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-3 gap-6">
                <div class="text-center bg-white/10 backdrop-blur-md rounded-3xl py-6 border border-white/20">
                    <p class="text-4xl font-bold">24</p>
                    <p class="text-sm text-white/70 mt-1">Islands</p>
                </div>
                <div class="text-center bg-white/10 backdrop-blur-md rounded-3xl py-6 border border-white/20">
                    <p class="text-4xl font-bold">187</p>
                    <p class="text-sm text-white/70 mt-1">Memories</p>
                </div>
                <div class="text-center bg-white/10 backdrop-blur-md rounded-3xl py-6 border border-white/20">
                    <p class="text-4xl font-bold">12</p>
                    <p class="text-sm text-white/70 mt-1">Friends</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
                <button onclick="alert('New Memory feature coming soon!')" 
                        class="flex-1 bg-white text-teal-900 py-5 rounded-3xl font-semibold flex items-center justify-center gap-3 hover:bg-white/90 transition-all">
                    <i class="fa-solid fa-plus"></i>
                    ADD NEW MEMORY
                </button>
                <button onclick="alert('Add Friend feature coming soon!')" 
                        class="flex-1 border border-white/60 py-5 rounded-3xl font-semibold flex items-center justify-center gap-3 hover:bg-white/10 transition-all">
                    <i class="fa-solid fa-user-plus"></i>
                    ADD FRIEND
                </button>
            </div>
        </div>

        <!-- Right Side - Big Philippines Map -->
        <div class="lg:w-6/12 flex justify-center lg:justify-end">
            <div class="map-container relative">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Philippines_%28orthographic_projection%29.svg/800px-Philippines_%28orthographic_projection%29.svg.png" 
                     alt="Philippines Map"
                     class="w-full max-w-lg lg:max-w-2xl h-auto drop-shadow-2xl">
                
                <div class="absolute top-8 right-8 bg-white/10 backdrop-blur-md px-6 py-3 rounded-3xl text-sm border border-white/20">
                    <span class="text-yellow-300">★</span> 7,641 Islands
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar (Hidden by default) -->
    <div id="sidebar" class="fixed top-0 left-0 h-full w-72 bg-[#1e5c6b] transform -translate-x-full transition-transform duration-300 shadow-2xl z-50">
        <div class="p-6">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-2xl font-bold">Menu</h2>
                <button onclick="toggleSidebar()" class="text-3xl">✕</button>
            </div>
            
            <div class="space-y-2">
                <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl bg-white/20 font-medium">
                    <i class="fa-solid fa-house"></i> Home
                </a>
                <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">
                    <i class="fa-solid fa-user"></i> Profile
                </a>
                <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">
                    <i class="fa-solid fa-gear"></i> Settings
                </a>
                <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">
                    <i class="fa-solid fa-user-plus"></i> Add Friend
                </a>
                <a href="logout.php" class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-red-500/20 text-red-200 mt-10">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        }
    </script>
</body>
</html>