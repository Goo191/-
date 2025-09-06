# 🏪 نظام إدارة المخازن المتقدم

نظام إدارة مخازن متطور ومتكامل تم تطويره باستخدام Laravel و Filament PHP.

## 👨‍💻 المطور
**يوسف طارق** - مطور Full Stack

## 🚀 المميزات

### 📊 إدارة المخازن
- إضافة وتعديل وحذف المخازن
- عرض تفاصيل كل مخزن
- إحصائيات شاملة للمخازن

### 📦 إدارة المنتجات
- إضافة منتجات جديدة يدوياً
- تصنيف المنتجات حسب الفئة
- إدارة وحدات القياس

### 💰 إدارة الأسعار
- أسعار الجملة والقطاعي منفصلة
- تحديث الأسعار بسهولة
- تتبع التغيرات في الأسعار

### 🔍 البحث المتقدم
- بحث محلي داخل كل مخزن
- بحث شامل عبر جميع المخازن
- عرض النتائج في modal منظم

### 📱 تطبيق محمول (PWA)
- يعمل كتطبيق محمول على الهاتف
- تصميم متجاوب لجميع الشاشات
- إمكانية إضافة التطبيق للشاشة الرئيسية

## 🛠️ التقنيات المستخدمة

- **Backend**: Laravel 10
- **Admin Panel**: Filament PHP
- **Frontend**: Livewire + Tailwind CSS
- **Database**: SQLite
- **PWA**: Service Worker + Manifest

## 📋 متطلبات النظام

- PHP 8.1 أو أحدث
- Composer
- Node.js & NPM
- SQLite

## 🚀 التثبيت

### 1. استنساخ المشروع
```bash
git clone https://github.com/yourusername/storage-management.git
cd storage-management
```

### 2. تثبيت التبعيات
```bash
composer install
npm install
```

### 3. إعداد البيئة
```bash
cp .env.example .env
php artisan key:generate
```

### 4. تشغيل المايجريشن
```bash
php artisan migrate
php artisan db:seed
```

### 5. بناء الأصول
```bash
npm run build
```

### 6. تشغيل الخادم
```bash
php artisan serve
```

## 📱 استخدام التطبيق المحمول

### على Android (Chrome):
1. افتح الموقع في Chrome
2. اضغط على القائمة (⋮)
3. اختر "إضافة إلى الشاشة الرئيسية"
4. اضغط "إضافة"

### على iOS (Safari):
1. افتح الموقع في Safari
2. اضغط على زر المشاركة (⬆️)
3. اختر "إضافة إلى الشاشة الرئيسية"
4. اضغط "إضافة"

## 🗂️ هيكل المشروع

```
storage/
├── app/
│   ├── Filament/
│   │   └── Pages/
│   │       ├── Dashboard.php
│   │       └── StoreManagement.php
│   └── Models/
│       ├── Product.php
│       ├── Store.php
│       └── StoreProduct.php
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── manifest.json
│   ├── sw.js
│   └── icon-*.png
├── resources/
│   ├── css/
│   └── views/
│       └── filament/
│           └── pages/
│               ├── dashboard.blade.php
│               └── store-management.blade.php
└── routes/
```

## 🔧 الإعدادات

### قاعدة البيانات
المشروع يستخدم SQLite كقاعدة بيانات افتراضية. يمكن تغييرها في ملف `.env`:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### PWA
تم إعداد PWA بالكامل مع:
- `manifest.json` - تعريف التطبيق
- `sw.js` - Service Worker للتخزين المؤقت
- أيقونات التطبيق (192x192, 512x512)

## 📊 الإحصائيات

- **عدد المخازن**: 6 مخازن
- **عدد المنتجات**: 12 منتج
- **إجمالي الكميات**: 110 وحدة

## 🎨 التصميم

- تصميم متجاوب يعمل على جميع الأجهزة
- ألوان جذابة وتدرجات احترافية
- تأثيرات حركية سلسة
- واجهة سهلة الاستخدام

## 🔄 التحديثات المستقبلية

- [ ] إضافة تتبع الكميات عبر الفترات الزمنية
- [ ] إضافة تقارير مفصلة
- [ ] إضافة نظام إشعارات
- [ ] إضافة تصدير البيانات
- [ ] إضافة نظام المستخدمين

## 📄 الترخيص

هذا المشروع مطور خصيصاً لـ **يوسف طارق** - جميع الحقوق محفوظة.

## 📞 التواصل

- **المطور**: يوسف طارق
- **التقنيات**: Laravel, Filament, Livewire, Tailwind CSS

---

**مبروك على إنجازك الرائع! 🎉**