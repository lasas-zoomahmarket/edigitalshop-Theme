<?php
// أداة معاينة محلية فقط (ليست جزءًا من الثيم المُسلَّم) — تخدم ملفات assets/ الثابتة
// ثم تمرر الباقي لـ index.php الرسمي من توسّع تمامًا كما هو، بدون أي تعديل على منطق الثيم.
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false; // serve the requested resource as-is (static file).
}

require __DIR__ . '/index.php';
