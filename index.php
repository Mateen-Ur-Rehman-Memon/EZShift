<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/includes/app.php';
$page = $_GET['page'] ?? 'home';
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
if ($method === 'POST') handle_post();
$user = current_user();
$titleMap = ['admin-login'=>'Administrator sign in','home'=>'Moving Made Easy','services'=>'Moving services','about'=>'About EZShift','contact'=>'Contact','login'=>'Welcome back','register'=>'Create your account','quote'=>'Get a free quote','book'=>'Book a move','dashboard'=>'Your dashboard','bookings'=>'My bookings','booking'=>'Booking details','track'=>'Track your move','invoice'=>'Your invoice','profile'=>'Your profile','notifications'=>'Notifications','admin'=>'Operations dashboard','admin-bookings'=>'Booking management','admin-customers'=>'Customer directory','admin-workers'=>'Worker management','admin-vehicles'=>'Fleet management','admin-services'=>'Service management','admin-payments'=>'Payments','admin-reviews'=>'Customer reviews'];
$title = $titleMap[$page] ?? 'EZShift';
?><!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="description" content="Reliable, affordable and professional shifting services for homes and businesses."><title><?= e($title) ?> · EZShift</title><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet"><link rel="stylesheet" href="assets/css/style.css?v=20261020-footer-copyright"></head><body>
<?php render_header($page,$user); ?><main><?php render_page($page,$user); ?></main><?php render_footer(); ?><script src="assets/js/main.js?v=20261020-nav-indicator" defer></script></body></html>
