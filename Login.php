<?php
session_start();

if (!empty($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}

$loginError = $_SESSION['login_error'] ?? '';
unset($_SESSION['login_error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Travel Archives</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: linear-gradient(135deg, #1e5c6b 0%, #2a8a9e 100%);
        }
        
        .title-font {
            font-family: 'Playfair Display', serif;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        input {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
        }
        
        input:focus {
            outline: none;
            border-color: white;
            box-shadow: 0 0 0 3px rgba(255,255,255,0.2);
            background: rgba(255, 255, 255, 0.25);
        }

        .logo-link {
            transition: all 0.3s ease;
        }
        
        .logo-link:hover {
            transform: scale(1.1) rotate(5deg);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center text-white">
    <div class="max-w-md w-full px-6 py-12">
        
        <!-- Home Button Logo -->
        <div class="flex justify-center mb-8">
            <a href="index.php" class="logo-link flex flex-col items-center gap-1">
                <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20 hover:border-white/40">
                    <i class="fa-solid fa-house text-4xl"></i>
                </div>
                <span class="text-xs text-white/60 tracking-widest">HOME</span>
            </a>
        </div>

        <div class="card rounded-3xl p-10 shadow-2xl">
            <h1 class="title-font text-4xl font-bold text-center mb-2">Welcome Back</h1>
            <p class="text-center text-white/70 mb-8">Sign in to continue your journey</p>

            <?php if (!empty($loginError)): ?>
                <div class="mb-4 rounded-2xl bg-red-500/20 border border-red-400/40 px-4 py-3 text-sm text-red-100">
                    <?= htmlspecialchars($loginError) ?>
                </div>
            <?php endif; ?>

            <form action="login_process.php" method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Email Address</label>
                    <input type="email" name="email" required 
                           class="w-full px-5 py-4 rounded-2xl placeholder-white/50">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Password</label>
                    <input type="password" name="password" required 
                           class="w-full px-5 py-4 rounded-2xl placeholder-white/50">
                </div>

                <button type="submit" 
                        class="w-full py-4 bg-white text-teal-900 rounded-2xl font-semibold text-lg hover:bg-white/90 transition-all active:scale-95">
                    LOG IN
                </button>
            </form>

            <p class="text-center mt-8 text-white/70">
                Don't have an account? <a href="Register.php" class="font-semibold hover:underline">Sign Up</a>
            </p>
        </div>

        <div class="text-center mt-6 text-white/50 text-sm">
            Demo: user@example.com / 123456
        </div>
    </div>
</body>
</html>