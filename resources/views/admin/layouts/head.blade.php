<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Adminr</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  <style>
  :root {
    --admin-bg: #FAF6F0; /* Cassava Cream */
    --admin-primary: #E74C3C; /* Spicy Balado */
    --admin-secondary: #F1C40F; /* Banana Gold */
    --admin-sidebar: #2C3E50; /* Deep Charcoal */
    --admin-text: #2C3E50;
    
    --font-display: 'Outfit', sans-serif;
    --font-body: 'Plus Jakarta Sans', sans-serif;
  }
  
  body, .wrapper, .content-wrapper, .main-header, .main-sidebar, .nav-link, .btn {
    font-family: var(--font-body) !important;
  }
  
  h1, h2, h3, h4, h5, h6, .card-title, .brand-text {
    font-family: var(--font-display) !important;
    font-weight: 700 !important;
  }
  
  /* Sidebar Overrides */
  .main-sidebar {
    background-color: var(--admin-sidebar) !important;
    box-shadow: 0 0 20px rgba(0,0,0,0.1) !important;
  }
  .brand-link {
    background-color: rgba(0,0,0,0.1) !important;
    border-bottom: 1px solid rgba(255,255,255,0.05) !important;
    color: #fff !important;
  }
  .nav-sidebar .nav-item > .nav-link {
    margin-bottom: 0.2rem;
  }
  .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    background-color: var(--admin-primary) !important;
    color: #fff !important;
    border-radius: 10px !important;
    box-shadow: 0 4px 10px rgba(231, 76, 60, 0.3) !important;
  }
  .nav-pills .nav-link:not(.active):hover {
    background-color: rgba(255,255,255,0.05) !important;
    border-radius: 10px !important;
  }
  
  /* Layout Overrides */
  .content-wrapper {
    background-color: var(--admin-bg) !important;
  }
  .main-header {
    border-bottom: 1px solid rgba(44, 62, 80, 0.05) !important;
    background-color: #fff !important;
  }
  .main-footer {
    background-color: var(--admin-bg) !important;
    border-top: 1px solid rgba(44, 62, 80, 0.05) !important;
    color: #7f8c8d !important;
  }
  
  /* Card Overrides */
  .card {
    border-radius: 20px !important;
    box-shadow: 0 10px 30px rgba(44, 62, 80, 0.04) !important;
    border: none !important;
    margin-bottom: 1.5rem;
  }
  .card-header {
    background-color: transparent !important;
    border-bottom: 1px solid rgba(44, 62, 80, 0.05) !important;
    border-top-left-radius: 20px !important;
    border-top-right-radius: 20px !important;
    padding: 1.5rem !important;
  }
  .card-body {
    padding: 1.5rem !important;
  }
  
  /* Button Overrides */
  .btn-primary {
    background-color: var(--admin-primary) !important;
    border-color: var(--admin-primary) !important;
  }
  .btn-primary:hover {
    background-color: #C0392B !important;
    border-color: #C0392B !important;
  }
  .btn-success {
    background-color: #27ae60 !important;
    border-color: #27ae60 !important;
  }
  .btn {
    border-radius: 10px !important;
    font-weight: 600 !important;
    padding: 0.5rem 1rem !important;
    transition: all 0.2s ease;
  }
  .btn-sm {
    padding: 0.25rem 0.75rem !important;
    border-radius: 6px !important;
  }
  
  /* Table Overrides */
  .table {
    color: var(--admin-text) !important;
  }
  .table thead th {
    border-bottom: 2px solid rgba(44, 62, 80, 0.05) !important;
    border-top: none !important;
    color: #7f8c8d;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 1px;
  }
  .table td {
    border-top: 1px solid rgba(44, 62, 80, 0.05) !important;
    vertical-align: middle !important;
  }
  
  /* Form Controls */
  .form-control {
    border-radius: 10px !important;
    border: 1px solid rgba(44, 62, 80, 0.15) !important;
    padding: 0.6rem 1rem !important;
  }
  .form-control:focus {
    border-color: var(--admin-primary) !important;
    box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.1) !important;
  }
  </style>

  <style>
  /* ===== Dashboard Stat Cards ===== */
  .card-stat {
    border-radius: 24px !important;
    overflow: hidden;
    position: relative;
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
    border: none;
  }
  .card-stat:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,0.12) !important;
  }
  .card-stat .inner {
    padding: 1.8rem 1.5rem;
    position: relative;
    z-index: 1;
  }
  .card-stat .inner h3 {
    font-size: 2.5rem;
    font-weight: 800;
    color: #fff;
    margin-bottom: 0.2rem;
    font-family: var(--font-display);
  }
  .card-stat .inner p {
    color: rgba(255,255,255,0.85);
    font-weight: 500;
    margin-bottom: 0;
    font-size: 0.95rem;
  }
  .card-stat .stat-icon {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 3rem;
    opacity: 0.2;
    color: #fff;
    transition: all 0.5s ease;
  }
  .card-stat:hover .stat-icon {
    transform: scale(1.3) rotate(-10deg);
    opacity: 0.35;
  }
  .card-stat .small-box-footer {
    display: block;
    padding: 0.6rem 1.5rem;
    background: rgba(0,0,0,0.08);
    color: rgba(255,255,255,0.85);
    text-decoration: none;
    font-weight: 500;
    font-size: 0.85rem;
    transition: background 0.3s ease;
  }
  .card-stat .small-box-footer:hover {
    background: rgba(0,0,0,0.15);
    color: #fff;
  }

  /* Stat Card Variants */
  .card-stat-products {
    background: linear-gradient(135deg, #E74C3C 0%, #C0392B 100%);
    box-shadow: 0 10px 30px rgba(231, 76, 60, 0.25);
  }
  .card-stat-messages {
    background: linear-gradient(135deg, #3498DB 0%, #2980B9 100%);
    box-shadow: 0 10px 30px rgba(52, 152, 219, 0.25);
  }
  .card-stat-total {
    background: linear-gradient(135deg, #27AE60 0%, #1E8449 100%);
    box-shadow: 0 10px 30px rgba(39, 174, 96, 0.25);
  }
  .card-stat-ratings {
    background: linear-gradient(135deg, #9B59B6 0%, #8E44AD 100%);
    box-shadow: 0 10px 30px rgba(155, 89, 182, 0.25);
  }
  .card-stat-reviews {
    background: linear-gradient(135deg, #E67E22 0%, #D35400 100%);
    box-shadow: 0 10px 30px rgba(230, 126, 34, 0.25);
  }

  /* ===== Charts: Message Trend ===== */
  .chart-bars {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 8px;
    height: 200px;
    padding: 1rem 0;
  }
  .chart-bar-group {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100%;
  }
  .chart-bar-label {
    font-size: 0.75rem;
    font-weight: 600;
    color: #7f8c8d;
    text-transform: uppercase;
    margin-top: 0.5rem;
    letter-spacing: 0.5px;
  }
  .chart-bar-track {
    flex: 1;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
  }
  .chart-bar-fill {
    width: 60%;
    max-width: 50px;
    background: linear-gradient(180deg, var(--admin-primary) 0%, #C0392B 100%);
    border-radius: 8px 8px 0 0;
    min-height: 4px;
    position: relative;
    transition: height 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  .chart-bar-fill:hover {
    opacity: 0.85;
    transform: scaleX(1.1);
  }
  .chart-bar-value {
    position: absolute;
    top: -22px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 0.85rem;
    font-weight: 700;
    color: var(--admin-text);
  }

  /* ===== Charts: Rating Distribution ===== */
  .rating-bars {
    display: flex;
    flex-direction: column;
    gap: 12px;
    padding: 0.5rem 0;
  }
  .rating-bar-row {
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .rating-bar-label {
    min-width: 180px;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .stars-display {
    display: flex;
    gap: 1px;
  }
  .stars-display i {
    font-size: 0.8rem;
  }
  .rating-bar-track {
    flex: 1;
    height: 28px;
    background: rgba(44, 62, 80, 0.05);
    border-radius: 14px;
    overflow: hidden;
  }
  .rating-bar-fill {
    height: 100%;
    background: linear-gradient(90deg, var(--rating-gradient-start, #f39c12) 0%, var(--rating-gradient-end, #e74c3c) 100%);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding-right: 10px;
    transition: width 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  .rating-bar-count {
    font-size: 0.75rem;
    font-weight: 700;
    color: var(--rating-count-color, #fff);
  }
  .star-active {
    color: var(--rating-star-active, #f1c40f);
  }
  .star-inactive {
    color: var(--rating-star-inactive, rgba(255, 255, 255, 0.25));
  }
  .rating-bar-row-1 .star-active {
    color: #e74c3c;
  }
  .rating-bar-row-2 .star-active {
    color: #e67e22;
  }
  .rating-bar-row-3 .star-active {
    color: #f1c40f;
  }
  .rating-bar-row-4 .star-active {
    color: #2ecc71;
  }
  .rating-bar-row-5 .star-active {
    color: #27ae60;
  }

  /* ===== Product Cards (Admin) ===== */
  .product-card-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .product-card-item {
    display: flex;
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 16px rgba(44, 62, 80, 0.06);
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(44, 62, 80, 0.04);
  }
  .product-card-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(44, 62, 80, 0.1);
  }
  .product-card-image {
    width: 140px;
    min-height: 120px;
    flex-shrink: 0;
    overflow: hidden;
    background: var(--admin-bg);
  }
  .product-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .product-card-image-placeholder {
    width: 100%;
    height: 100%;
    min-height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: #bdc3c7;
  }
  .product-card-body {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 1.5rem;
    gap: 1rem;
  }
  .product-card-info {
    flex: 1;
    min-width: 0;
  }
  .product-card-name {
    font-family: var(--font-display);
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 0.25rem;
    color: var(--admin-text);
  }
  .product-card-desc {
    font-size: 0.85rem;
    color: #7f8c8d;
    margin-bottom: 0.5rem;
    line-height: 1.4;
  }
  .product-card-meta {
    display: flex;
    align-items: center;
    gap: 0.75rem;
  }
  .product-card-price {
    font-weight: 700;
    font-size: 1rem;
    color: var(--admin-primary);
    font-family: var(--font-display);
  }
  .product-card-actions {
    display: flex;
    gap: 0.4rem;
    flex-shrink: 0;
  }

  @media (max-width: 768px) {
    .product-card-item {
      flex-direction: column;
    }
    .product-card-image {
      width: 100%;
      height: 180px;
    }
    .product-card-body {
      flex-direction: column;
      align-items: flex-start;
    }
    .product-card-actions {
      align-self: flex-end;
    }
  }

  /* ===== Pulse Badge Animation ===== */
  .pulse-badge {
    animation: pulse-anim 2s ease-in-out infinite;
  }
  @keyframes pulse-anim {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); box-shadow: 0 0 15px rgba(231, 76, 60, 0.4); }
    100% { transform: scale(1); }
  }
  .badge-pulse {
    animation: badge-pulse 1.5s ease-in-out infinite;
  }
  @keyframes badge-pulse {
    0% { opacity: 1; }
    50% { opacity: 0.6; }
    100% { opacity: 1; }
  }

  /* ===== Avatar Circles ===== */
  .avatar-circle {
    width: 38px;
    height: 38px;
    border-radius: 12px;
    background: linear-gradient(135deg, #E74C3C, #C0392B);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.9rem;
    font-family: var(--font-display);
    flex-shrink: 0;
  }
  .avatar-unread {
    box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.2);
  }

  /* ===== Unread Row Highlight ===== */
  .unread-row {
    background-color: rgba(231, 76, 60, 0.03) !important;
    border-left: 3px solid var(--admin-primary);
  }
  .unread-row td:first-child {
    padding-left: 0.5rem;
  }
  .table-hover .unread-row:hover {
    background-color: rgba(231, 76, 60, 0.06) !important;
  }
  /* ===== Settings Page ===== */
  .settings-card {
    border-radius: 24px !important;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid rgba(44, 62, 80, 0.04) !important;
    position: relative;
    overflow: hidden;
  }
  .settings-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 16px 40px rgba(44, 62, 80, 0.08) !important;
  }
  .settings-icon-wrapper {
    width: 48px;
    height: 48px;
    border-radius: 16px;
    background: linear-gradient(135deg, var(--admin-primary), #C0392B);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(231, 76, 60, 0.25);
  }
  .settings-preview {
    border-radius: 16px;
    overflow: hidden;
    position: relative;
    background: #f8f9fa;
    min-height: 200px;
    border: 2px dashed rgba(44, 62, 80, 0.08);
    transition: border-color 0.3s ease;
  }
  .settings-preview:hover {
    border-color: rgba(231, 76, 60, 0.25);
  }
  .settings-preview-img {
    width: 100%;
    height: 200px;
    display: block;
  }
  .settings-preview-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.6));
    padding: 1rem 1rem 0.8rem;
    color: #fff;
    font-size: 0.85rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .settings-preview-overlay i {
    font-size: 1rem;
  }
  .settings-empty-state {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 200px;
    text-align: center;
    padding: 2rem;
  }
  .empty-icon-wrapper {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: rgba(44, 62, 80, 0.04);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0.75rem;
  }
  .empty-icon-wrapper i {
    font-size: 1.8rem;
    color: #bdc3c7;
  }
  .empty-title {
    font-weight: 700;
    color: #7f8c8d;
    font-size: 0.95rem;
  }
  .empty-subtitle {
    color: #bdc3c7;
    font-size: 0.8rem;
    margin-top: 0.2rem;
  }
  .settings-upload-area {
    background: rgba(44, 62, 80, 0.02);
    border-radius: 14px;
    padding: 0.75rem;
    border: 1px dashed rgba(44, 62, 80, 0.1);
    transition: all 0.3s ease;
  }
  .settings-upload-area:hover {
    background: rgba(231, 76, 60, 0.03);
    border-color: rgba(231, 76, 60, 0.2);
  }
  .settings-upload-trigger {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem;
    border-radius: 12px;
    cursor: pointer;
    color: #7f8c8d;
    font-weight: 500;
    font-size: 0.9rem;
    transition: all 0.2s ease;
  }
  .settings-upload-trigger i {
    font-size: 1.2rem;
    color: var(--admin-primary);
  }
  .settings-upload-trigger:hover {
    background: rgba(231, 76, 60, 0.06);
    color: var(--admin-primary);
  }
  .settings-file-input {
    display: none;
  }
  .btn-upload {
    border-radius: 12px !important;
    padding: 0.5rem 1.5rem !important;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(231, 76, 60, 0.2);
  }
  .btn-upload:hover {
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(231, 76, 60, 0.3);
  }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<style>
  /* Ensure footer sticks to bottom when content is short */
  html, body {
    height: 100%;
  }
  .wrapper {
    min-height: 100%;
    display: flex;
    flex-direction: column;
  }
  .content-wrapper, .main-footer {
    flex-shrink: 0;
  }
  .content {
    flex: 1 0 auto;
  }
</style>
<div class="wrapper">