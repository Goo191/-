<x-filament-panels::page>
    <!-- PWA Meta Tags -->
    <x-slot name="head">
        <link rel="manifest" href="/manifest.json">
        <meta name="theme-color" content="#667eea">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="apple-mobile-web-app-title" content="إدارة المخازن">
        <link rel="apple-touch-icon" href="/icon-192.png">
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
    </x-slot>

    <style>
        .welcome-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .feature-card {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .stats-card {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .tech-card {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .developer-card {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        /* Mobile optimizations */
        @media (max-width: 640px) {
            .welcome-card, .stats-card, .feature-card, .developer-card, .tech-card {
                margin: 0.5rem;
            }
            
            .floating {
                animation-duration: 2s;
            }
            
            .pulse-glow {
                animation-duration: 1.5s;
            }
        }
        
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes pulse-glow {
            from { box-shadow: 0 0 20px rgba(102, 126, 234, 0.4); }
            to { box-shadow: 0 0 30px rgba(102, 126, 234, 0.8); }
        }
    </style>
    
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50">
        <div class="space-y-4 sm:space-y-6 lg:space-y-8 p-3 sm:p-4 lg:p-6">
            <!-- تحية المطور -->
            <div class="welcome-card p-4 sm:p-6 lg:p-8 text-center text-white">
                <div class="floating">
                    <div class="text-4xl sm:text-5xl lg:text-6xl mb-2 sm:mb-4">👨‍💻</div>
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-2 sm:mb-4">مرحباً بك يوسف طارق</h1>
                    <p class="text-sm sm:text-lg lg:text-xl mb-4 sm:mb-6 opacity-90">مطور ومصمم نظام إدارة المخازن</p>
                    <div class="pulse-glow inline-block px-3 sm:px-6 py-2 sm:py-3 bg-white bg-opacity-20 rounded-full">
                        <span class="text-sm sm:text-base lg:text-lg font-semibold">مبروك على إنجازك الرائع! 🎉</span>
                    </div>
                </div>
            </div>

            <!-- إحصائيات النظام -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 lg:gap-6">
                <div class="stats-card p-4 sm:p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm sm:text-base lg:text-lg font-semibold">إجمالي المخازن</p>
                            <p class="text-2xl sm:text-3xl font-bold">{{ $totalStores }}</p>
                        </div>
                        <div class="text-3xl sm:text-4xl">🏪</div>
                    </div>
                </div>
                
                <div class="stats-card p-4 sm:p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm sm:text-base lg:text-lg font-semibold">إجمالي المنتجات</p>
                            <p class="text-2xl sm:text-3xl font-bold">{{ $totalProducts }}</p>
                        </div>
                        <div class="text-3xl sm:text-4xl">📦</div>
                    </div>
                </div>
                
                <div class="stats-card p-4 sm:p-6 text-white sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm sm:text-base lg:text-lg font-semibold">إجمالي الكميات</p>
                            <p class="text-2xl sm:text-3xl font-bold">{{ $totalQuantities }}</p>
                        </div>
                        <div class="text-3xl sm:text-4xl">📊</div>
                    </div>
                </div>
            </div>

            <!-- مميزات النظام -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 lg:gap-6">
                <div class="feature-card p-4 sm:p-6 text-white">
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl mb-2 sm:mb-4">🔍</div>
                        <h3 class="text-lg sm:text-xl font-bold mb-1 sm:mb-2">بحث متقدم</h3>
                        <p class="text-xs sm:text-sm opacity-90">بحث شامل ومحلي في جميع المخازن</p>
                    </div>
                </div>
                
                <div class="feature-card p-4 sm:p-6 text-white">
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl mb-2 sm:mb-4">💰</div>
                        <h3 class="text-lg sm:text-xl font-bold mb-1 sm:mb-2">إدارة الأسعار</h3>
                        <p class="text-xs sm:text-sm opacity-90">أسعار جملة وقطاعي منفصلة</p>
                    </div>
                </div>
                
                <div class="feature-card p-4 sm:p-6 text-white">
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl mb-2 sm:mb-4">📈</div>
                        <h3 class="text-lg sm:text-xl font-bold mb-1 sm:mb-2">تتبع الكميات</h3>
                        <p class="text-xs sm:text-sm opacity-90">مراقبة المخزون في الوقت الفعلي</p>
                    </div>
                </div>
                
                <div class="feature-card p-4 sm:p-6 text-white">
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl mb-2 sm:mb-4">🎨</div>
                        <h3 class="text-lg sm:text-xl font-bold mb-1 sm:mb-2">واجهة جميلة</h3>
                        <p class="text-xs sm:text-sm opacity-90">تصميم عصري وسهل الاستخدام</p>
                    </div>
                </div>
            </div>

            <!-- معلومات المطور -->
            <div class="developer-card p-4 sm:p-6 lg:p-8 text-white">
                <div class="text-center">
                    <div class="text-4xl sm:text-5xl mb-2 sm:mb-4">🚀</div>
                    <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold mb-2 sm:mb-4">تم تطوير النظام بواسطة</h2>
                    <div class="bg-white bg-opacity-20 rounded-2xl p-4 sm:p-6 inline-block">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold mb-1 sm:mb-2">يوسف طارق</h3>
                        <p class="text-sm sm:text-base lg:text-lg mb-3 sm:mb-4">مطور Full Stack</p>
                        <div class="flex flex-wrap justify-center gap-2 sm:gap-4 text-xs sm:text-sm">
                            <span class="bg-white bg-opacity-30 px-2 sm:px-3 py-1 rounded-full">Laravel</span>
                            <span class="bg-white bg-opacity-30 px-2 sm:px-3 py-1 rounded-full">Filament</span>
                            <span class="bg-white bg-opacity-30 px-2 sm:px-3 py-1 rounded-full">Livewire</span>
                            <span class="bg-white bg-opacity-30 px-2 sm:px-3 py-1 rounded-full">Tailwind CSS</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- التقنيات المستخدمة -->
            <div class="tech-card p-4 sm:p-6 lg:p-8 text-white">
                <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-center mb-4 sm:mb-6">التقنيات المستخدمة</h2>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4">
                    <div class="text-center">
                        <div class="text-2xl sm:text-3xl mb-1 sm:mb-2">🐘</div>
                        <p class="text-sm sm:text-base font-semibold">PHP</p>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl sm:text-3xl mb-1 sm:mb-2">⚡</div>
                        <p class="text-sm sm:text-base font-semibold">Laravel</p>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl sm:text-3xl mb-1 sm:mb-2">🎯</div>
                        <p class="text-sm sm:text-base font-semibold">Filament</p>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl sm:text-3xl mb-1 sm:mb-2">💨</div>
                        <p class="text-sm sm:text-base font-semibold">Tailwind</p>
                    </div>
                </div>
            </div>

            <!-- تحويل إلى تطبيق محمول -->
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl p-4 sm:p-6 lg:p-8 text-white">
                <div class="text-center mb-6">
                    <div class="text-3xl sm:text-4xl mb-2 sm:mb-4">📱</div>
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold mb-2 sm:mb-4">حول الموقع إلى تطبيق محمول</h2>
                    <p class="text-sm sm:text-base lg:text-lg opacity-90 mb-6">
                        يمكنك تحويل هذا الموقع إلى تطبيق محمول على هاتفك
                    </p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                    <!-- Chrome Instructions -->
                    <div class="bg-white bg-opacity-20 rounded-xl p-4">
                        <div class="text-center">
                            <div class="text-2xl mb-2">🌐</div>
                            <h3 class="font-bold mb-2">Chrome (أندرويد)</h3>
                            <ol class="text-sm text-right space-y-1">
                                <li>1. اضغط على القائمة (⋮)</li>
                                <li>2. اختر "إضافة إلى الشاشة الرئيسية"</li>
                                <li>3. اضغط "إضافة"</li>
                            </ol>
                        </div>
                    </div>
                    
                    <!-- Safari Instructions -->
                    <div class="bg-white bg-opacity-20 rounded-xl p-4">
                        <div class="text-center">
                            <div class="text-2xl mb-2">🍎</div>
                            <h3 class="font-bold mb-2">Safari (آيفون)</h3>
                            <ol class="text-sm text-right space-y-1">
                                <li>1. اضغط على زر المشاركة (⬆️)</li>
                                <li>2. اختر "إضافة إلى الشاشة الرئيسية"</li>
                                <li>3. اضغط "إضافة"</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- رسالة شكر -->
            <div class="bg-gradient-to-r from-green-400 to-blue-500 rounded-2xl p-4 sm:p-6 lg:p-8 text-white text-center">
                <div class="text-3xl sm:text-4xl mb-2 sm:mb-4">🙏</div>
                <h2 class="text-lg sm:text-xl lg:text-2xl font-bold mb-2 sm:mb-4">شكراً لك على ثقتك</h2>
                <p class="text-sm sm:text-base lg:text-lg opacity-90">
                    تم تطوير هذا النظام بعناية فائقة ليكون أداة فعالة لإدارة مخازنك
                    <br class="hidden sm:block">
                    نتمنى أن يحقق لك النجاح والازدهار في أعمالك
                </p>
            </div>
        </div>
    </div>

    <!-- PWA Service Worker Registration -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js')
                    .then(function(registration) {
                        console.log('ServiceWorker registration successful');
                    })
                    .catch(function(err) {
                        console.log('ServiceWorker registration failed');
                    });
            });
        }
    </script>
</x-filament-panels::page>
