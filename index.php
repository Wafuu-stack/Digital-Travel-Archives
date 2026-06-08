<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Archives | Welcome</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="hero-bg min-h-screen flex items-center justify-center text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-8 py-12 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Content -->
            <div class="space-y-12">
                <!-- Logo -->
                <div class="flex justify-center lg:justify-start">
                    <div class="w-20 h-20 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20 hover:scale-110 transition-transform">
                        <i class="fa-solid fa-house text-5xl"></i>
                    </div>
                </div>

                <!-- Heading -->
                <div class="text-center lg:text-left">
                    <h1 class="title-font text-6xl lg:text-7xl leading-none font-bold tracking-tighter text-shadow">
                        WELCOME TO YOUR<br>
                        TRAVEL ARCHIVES
                    </h1>
                    <p class="mt-6 text-xl text-white/80 max-w-md lg:mx-0 mx-auto">
                        Your personal journey through the Philippines — memories, destinations, and stories preserved.
                    </p>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="login.php" 
                       class="group flex items-center justify-center gap-3 px-10 py-5 bg-white text-teal-900 rounded-2xl font-semibold text-lg hover:bg-white/90 active:scale-95 transition-all shadow-xl">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        LOG IN
                    </a>
                    
                    <a href="register.php" 
                       class="group flex items-center justify-center gap-3 px-10 py-5 border-2 border-white/80 hover:border-white rounded-2xl font-semibold text-lg transition-all active:scale-95 backdrop-blur-sm">
                        <i class="fa-solid fa-user-plus"></i>
                        SIGN UP
                    </a>
                </div>

                <!-- Trust signals -->
                <div class="flex items-center justify-center lg:justify-start gap-8 text-sm text-white/60">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-lock"></i>
                        <span>Secure</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-globe"></i>
                        <span>Philippines Focus</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-heart"></i>
                        <span>Memories Saved</span>
                    </div>
                </div>
            </div>

            <!-- Right Side - Map -->
            <div class="relative flex justify-center lg:justify-end">
                <div class="map-container relative w-full max-w-[480px]">
                    <svg width="480" height="620" viewBox="0 0 480 620" fill="none" xmlns="http://www.w3.org/2000/svg" class="drop-shadow-2xl transition-transform hover:scale-105">
                        <!-- Philippines Map -->
                        <path d="M380 80 Q420 120 410 200 Q430 280 380 340 Q340 420 280 480 Q220 520 150 480 Q100 400 80 320 Q90 180 140 120 Q200 60 280 50 Q340 40 380 80Z" 
                              fill="#334155" stroke="#64748b" stroke-width="18" stroke-linejoin="round"/>
                        <!-- Island details -->
                        <path d="M320 150 Q340 180 310 220" fill="none" stroke="#475569" stroke-width="22"/>
                        <path d="M240 280 Q270 310 200 360" fill="none" stroke="#475569" stroke-width="18"/>
                        <path d="M180 420 Q160 460 210 480" fill="none" stroke="#475569" stroke-width="15"/>
                    </svg>

                    <!-- Decorative badge -->
                    <div class="absolute top-12 -right-6 bg-white/10 backdrop-blur-md px-6 py-2 rounded-3xl text-sm flex items-center gap-2 border border-white/20">
                        <span class="text-yellow-300">★</span>
                        <span>1,234 islands explored</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="absolute bottom-0 left-0 right-0 text-center py-4 text-white/40 text-sm">
        © 2026 Travel Archives • Made with ❤️ for the Philippines
    </div>
</body>
</html>