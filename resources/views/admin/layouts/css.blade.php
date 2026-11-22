<head>
   <base href="./">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
   <meta name="author" content="Łukasz Holeczek">
   <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
   <title>Futbook - Admin - Dashboard</title>
   <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
   <link rel="manifest" href="{{ asset('assets/favicon/manifest.json') }}">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png') }}">
   <meta name="theme-color" content="#ffffff">
   <!-- Vendors styles-->
   <link rel="stylesheet" href="{{ asset('admin/vendors/simplebar/css/simplebar.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/css/vendors/simplebar.css') }}">
   <!-- Main styles for this application-->
   <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
   <!-- We use those styles to show code examples, you should remove them in your application.-->
   <link href="{{ asset('admin/css/examples.css') }}" rel="stylesheet">

   <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <script src="{{ asset('admin/js/config.js') }}"></script>

   {{-- The admin panel always opens in dark mode. --}}
   <script>
      localStorage.setItem('coreui-free-bootstrap-admin-template-theme', 'dark');
   </script>

   <script src="{{ asset('admin/js/color-modes.js') }}"></script>
   <link href="{{ asset('admin/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
   @vite(['resources/css/app.css', 'resources/js/app.js'])

   <style>
      html,
      body {
         height: 100%;
         overflow: hidden;
      }

      /* ==========================================================
         Admin palette - dark by default, light kept as an option
         ========================================================== */
      :root,
      [data-coreui-theme=dark] {
         --admin-body: #0b1220;
         --admin-surface: #111c30;
         --admin-surface-alt: #17243b;
         --admin-border: #263550;
         --admin-text: #e2e8f0;
         --admin-muted: #94a3b8;
         --admin-accent: #60a5fa;
         --admin-accent-soft: rgba(59, 130, 246, 0.15);

         --cui-body-bg: var(--admin-body);
         --cui-body-bg-rgb: 11, 18, 32;
         --cui-body-color: var(--admin-text);
         --cui-body-color-rgb: 226, 232, 240;
         --cui-emphasis-color: #f8fafc;
         --cui-emphasis-color-rgb: 248, 250, 252;
         --cui-secondary-color: var(--admin-muted);
         --cui-tertiary-color: #64748b;
         --cui-tertiary-bg: var(--admin-surface-alt);
         --cui-border-color: var(--admin-border);
         --cui-border-color-rgb: 38, 53, 80;
         --cui-border-color-translucent: rgba(226, 232, 240, 0.1);
         --cui-card-bg: var(--admin-surface);
         --cui-table-bg: var(--admin-surface);
         --cui-table-hover-bg: var(--admin-surface-alt);

         --cui-primary: #3b82f6;
         --cui-primary-rgb: 59, 130, 246;
         --cui-primary-text-emphasis: #93c5fd;
         --cui-primary-bg-subtle: #172554;
         --cui-primary-border-subtle: #1e40af;
         --cui-light: #f8fafc;
         --cui-light-rgb: 248, 250, 252;
         --cui-dark: #0b1220;
         --cui-dark-rgb: 11, 18, 32;
         --cui-border-radius: 0;
         --cui-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.35);
      }

      [data-coreui-theme=light] {
         --admin-body: #e2e8f0;
         --admin-surface: #ffffff;
         --admin-surface-alt: #f8fafc;
         --admin-border: #cbd5e1;
         --admin-text: #0f172a;
         --admin-muted: #475569;
         --admin-accent: #2563eb;
         --admin-accent-soft: #dbeafe;

         --cui-body-bg: var(--admin-body);
         --cui-body-bg-rgb: 226, 232, 240;
         --cui-body-color: var(--admin-text);
         --cui-body-color-rgb: 15, 23, 42;
         --cui-emphasis-color: #0f172a;
         --cui-emphasis-color-rgb: 15, 23, 42;
         --cui-secondary-color: var(--admin-muted);
         --cui-tertiary-color: #64748b;
         --cui-tertiary-bg: #f1f5f9;
         --cui-border-color: var(--admin-border);
         --cui-border-color-rgb: 203, 213, 225;
         --cui-card-bg: var(--admin-surface);
         --cui-table-bg: var(--admin-surface);
         --cui-table-hover-bg: #f1f5f9;

         --cui-primary: #2563eb;
         --cui-primary-rgb: 37, 99, 235;
         --cui-primary-text-emphasis: #1d4ed8;
         --cui-primary-bg-subtle: #dbeafe;
         --cui-primary-border-subtle: #93c5fd;
         --cui-box-shadow: 0 1px 3px rgba(15, 23, 42, 0.08);
      }

      .wrapper {
         height: 100vh;
         background: var(--admin-body);
         color: var(--admin-text);
      }

      .body {
         overflow-y: auto;
         background: var(--admin-body);
         color: var(--admin-text);
      }

      /* Sidebar stays dark in both modes */
      .sidebar.sidebar-dark {
         --cui-body-bg: #0f172a;
         --cui-body-color: rgba(226, 232, 240, 0.9);
         --cui-emphasis-color: #ffffff;
         --cui-secondary-color: #94a3b8;
         --cui-tertiary-color: #64748b;
         --cui-secondary-bg: #1e293b;
         --cui-tertiary-bg: #1e293b;
         --cui-border-color: #1e293b;
      }

      .sidebar-header,
      .sidebar-footer {
         background: #0f172a;
      }

      .sidebar-header .sidebar-brand {
         display: inline-flex;
         align-items: center;
         gap: 0.75rem;
         color: #ffffff;
      }

      /* Small square "F" mark, same idea as the frontend header logo */
      .sidebar-header .sidebar-brand::before {
         content: "F";
         display: inline-flex;
         align-items: center;
         justify-content: center;
         width: 2.5rem;
         height: 2.5rem;
         background: #1e293b;
         border: 1px solid #334155;
         color: #ffffff;
         font-size: 1.125rem;
         font-weight: 700;
         transition: background-color 0.2s, border-color 0.2s;
      }

      .sidebar-header:hover .sidebar-brand::before {
         background: #2563eb;
         border-color: #2563eb;
      }

      .sidebar-header .sidebar-brand strong {
         font-size: 1.125rem;
         font-weight: 700;
         letter-spacing: -0.02em;
      }

      .sidebar-dark .sidebar-nav {
         --cui-sidebar-nav-link-color: #cbd5e1;
         --cui-sidebar-nav-link-hover-color: #ffffff;
         --cui-sidebar-nav-link-hover-bg: rgba(59, 130, 246, 0.18);
         --cui-sidebar-nav-link-active-color: #ffffff;
         --cui-sidebar-nav-link-active-bg: #2563eb;
         --cui-sidebar-nav-link-icon-color: #94a3b8;
      }

      /* Header, cards and footer */
      .header,
      .header .container-fluid,
      .footer {
         background: var(--admin-surface);
         color: var(--admin-text);
      }

      .header {
         box-shadow: var(--cui-box-shadow);
      }

      .card {
         background: var(--admin-surface);
         border-color: var(--admin-border);
         box-shadow: var(--cui-box-shadow);
         color: var(--admin-text);
      }

      .card-header {
         background: var(--admin-surface-alt);
         border-bottom: 1px solid var(--admin-border);
         color: var(--admin-text);
         font-weight: 600;
      }

      .footer {
         border-top: 1px solid var(--admin-border);
         color: var(--admin-muted);
      }

      /* Tables */
      .table thead th {
         background: var(--admin-surface-alt);
         border-bottom: 1px solid var(--admin-border);
         color: var(--admin-muted);
         font-size: 0.75rem;
         font-weight: 600;
         letter-spacing: 0.05em;
         text-transform: uppercase;
      }

      .table > :not(caption) > * > * {
         border-bottom-color: var(--admin-border);
         color: var(--admin-text);
      }

      /* Buttons */
      .btn-primary {
         --cui-btn-color: #ffffff;
         --cui-btn-bg: #3b82f6;
         --cui-btn-border-color: #3b82f6;
         --cui-btn-hover-color: #ffffff;
         --cui-btn-hover-bg: #2563eb;
         --cui-btn-hover-border-color: #2563eb;
         --cui-btn-focus-shadow-rgb: 59, 130, 246;
         --cui-btn-active-color: #ffffff;
         --cui-btn-active-bg: #1d4ed8;
         --cui-btn-active-border-color: #1d4ed8;
         --cui-btn-disabled-bg: #3b82f6;
         --cui-btn-disabled-border-color: #3b82f6;
         box-shadow: none;
      }

      .btn-outline-primary {
         --cui-btn-color: var(--admin-accent);
         --cui-btn-bg: transparent;
         --cui-btn-border-color: var(--admin-accent);
         --cui-btn-hover-color: #ffffff;
         --cui-btn-hover-bg: #3b82f6;
         --cui-btn-hover-border-color: #3b82f6;
         --cui-btn-active-color: #ffffff;
         --cui-btn-active-bg: #1d4ed8;
         --cui-btn-active-border-color: #1d4ed8;
         --cui-btn-disabled-color: var(--admin-accent);
         box-shadow: none;
      }

      .btn-secondary {
         --cui-btn-color: var(--admin-text);
         --cui-btn-bg: var(--admin-surface-alt);
         --cui-btn-border-color: var(--admin-border);
         --cui-btn-hover-color: var(--admin-text);
         --cui-btn-hover-bg: var(--admin-border);
         --cui-btn-hover-border-color: var(--admin-border);
         --cui-btn-focus-shadow-rgb: 100, 116, 139;
         --cui-btn-active-color: var(--admin-text);
         --cui-btn-active-bg: var(--admin-border);
         --cui-btn-active-border-color: var(--admin-border);
         --cui-btn-disabled-bg: var(--admin-surface-alt);
         --cui-btn-disabled-border-color: var(--admin-border);
         box-shadow: none;
      }

      .btn-outline-secondary {
         --cui-btn-color: var(--admin-text);
         --cui-btn-bg: transparent;
         --cui-btn-border-color: var(--admin-border);
         --cui-btn-hover-color: var(--admin-text);
         --cui-btn-hover-bg: var(--admin-surface-alt);
         --cui-btn-hover-border-color: var(--admin-border);
         --cui-btn-disabled-color: var(--admin-text);
         box-shadow: none;
      }

      /* Forms */
      .form-control,
      .form-select {
         background-color: var(--admin-surface);
         border-color: var(--admin-border);
         color: var(--admin-text);
      }

      .form-control:focus,
      .form-select:focus {
         background-color: var(--admin-surface);
         border-color: var(--admin-accent);
         box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
         color: var(--admin-text);
      }

      .form-control::placeholder {
         color: var(--admin-muted);
         opacity: 1;
      }

      .form-label {
         color: var(--admin-text);
         font-weight: 500;
      }

      /* Dashboard extras */
      .dashboard-hero {
         border-left: 4px solid var(--admin-accent);
      }

      .dashboard-hero-icon {
         display: inline-flex;
         align-items: center;
         justify-content: center;
         width: 3rem;
         height: 3rem;
         background: var(--admin-accent-soft);
         color: var(--admin-accent);
         font-size: 1.5rem;
      }

      .dashboard-link {
         color: var(--admin-text);
         text-decoration: none;
         transition: border-color 0.2s, box-shadow 0.2s, background-color 0.2s;
      }

      .dashboard-link:hover {
         background: var(--admin-surface-alt);
         border-color: var(--admin-accent);
         box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
      }

      .dashboard-link-icon {
         display: inline-flex;
         align-items: center;
         justify-content: center;
         width: 2.5rem;
         height: 2.5rem;
         background: var(--admin-surface-alt);
         color: var(--admin-accent);
         font-size: 1.25rem;
      }
   </style>
</head>
