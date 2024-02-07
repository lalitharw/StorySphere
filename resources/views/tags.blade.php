<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <title>Qurno - Minimal Blog HTML Template</title>

  <meta name="author" content="Platol">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
  <meta name="description" content="Minimal Blog HTML Template">

  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

  <!-- CSS Plugins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Work+Sans:wght@500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/tabler-icons/tabler-icons.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="header-height-fix"></div>
<header class="header-nav">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <!-- logo -->
          <a class='navbar-brand font-weight-bold mb-0' href='/qurno/' title='Qurno'>
            <img class="img-fluid" width="110" height="35" src="assets/images/logo.png" alt="Qurno">
          </a>

          <button class="search-toggle d-inline-block d-lg-none ms-auto me-1 me-sm-3" data-toggle="search" aria-label="Search Toggle">
            <span>Search</span>
            <svg width="22" height="22" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 15.5L19 19" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 11C5 14.3137 7.68629 17 11 17C12.6597 17 14.1621 16.3261 15.2483 15.237C16.3308 14.1517 17 12.654 17 11C17 7.68629 14.3137 5 11 5C7.68629 5 5 7.68629 5 11Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navHeader" aria-controls="navHeader" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-menu-2 menu-open"></i>
            <i class="ti ti-x menu-close"></i>
          </button>

          <div class="collapse navbar-collapse" id="navHeader">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item @@home">
                <a class='nav-link' href='/qurno/'>Home</a>
              </li>
              <li class="nav-item @@about">
                <a class='nav-link' href='/qurno/about'>About</a>
              </li>
              <li class="nav-item @@elements">
                <a class='nav-link' href='/qurno/elements'>Elements</a>
              </li>
              <li class="nav-item @@archive">
                <a class='nav-link' href='/qurno/archive'>Archive</a>
              </li>
              <li class="nav-item @@contact">
                <a class='nav-link' href='/qurno/contact'>Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class='dropdown-item' href='/qurno/author'>Author</a></li>
                  <li><a class='dropdown-item' href='/qurno/author-single'>Author Single</a></li>
                  <li><a class='dropdown-item' href='/qurno/tags'>Tags</a></li>
                  <li><a class='dropdown-item' href='/qurno/tag-single'>Tag Single</a></li>
                  <li><a class='dropdown-item' href='/qurno/categories'>Categories</a></li>
                  <li><a class='dropdown-item' href='/qurno/categories-single'>Category Single</a></li>
                  <li><a class='dropdown-item' href='/qurno/404-page'>404 Page</a></li>
                  <li><a class='dropdown-item' href='/qurno/privacy'>Privacy</a></li>
                </ul>
              </li>
            </ul>
            
            <div class="navbar-right d-none d-lg-inline-block">
              <ul class="social-links list-unstyled list-inline">
                <li class="list-inline-item ms-4 d-none d-lg-inline-block">
                  <button class="search-toggle" data-toggle="search" aria-label="Search Toggle">
                    <span>Search</span>
                    <svg width="22" height="22" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 15.5L19 19" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 11C5 14.3137 7.68629 17 11 17C12.6597 17 14.1621 16.3261 15.2483 15.237C16.3308 14.1517 17 12.654 17 11C17 7.68629 14.3137 5 11 5C7.68629 5 5 7.68629 5 11Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </button>
                </li>
              </ul>
            </div>
            
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

<div class="search-block">
  <div data-toggle="search-close">
    <span class="ti ti-x text-primary"></span>
  </div>
  
  <input type="text" id="js-search-input" placeholder="Type to search blog.." aria-label="search-query">

  <div class="mt-4 card-meta">
    <p class="h4 mb-3">See posts by tags</p>
    <ul class="card-meta-tag list-inline">
      <li class="list-inline-item me-1 mb-2">
        <a class='small' href='/qurno/tag-single'>Life</a>
      </li>
      <li class="list-inline-item me-1 mb-2">
        <a class='small' href='/qurno/tag-single'>Lifestyle</a>
      </li>
      <li class="list-inline-item me-1 mb-2">
        <a class='small' href='/qurno/tag-single'>Lighting</a>
      </li>
      <li class="list-inline-item me-1 mb-2">
        <a class='small' href='/qurno/tag-single'>Machine</a>
      </li>
      <li class="list-inline-item me-1 mb-2">
        <a class='small' href='/qurno/tag-single'>Startups</a>
      </li>
      <li class="list-inline-item me-1 mb-2">
        <a class='small' href='/qurno/tag-single'>Work</a>
      </li>
    </ul>
  </div>

  <div class="mt-4 card-meta">
    <p class="h4 mb-3">See posts by categories</p>
    <ul class="card-meta-tag list-inline">
      <li class="list-inline-item me-1 mb-2">
        <a class="small" href="categorie-single.html">AI</a>
      </li>
      <li class="list-inline-item me-1 mb-2">
        <a class="small" href="categorie-single.html">Earth</a>
      </li>
      <li class="list-inline-item me-1 mb-2">
        <a class="small" href="categorie-single.html">Tech</a>
      </li>
    </ul>
  </div>
</div>

<section class="page-header section-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="section-title h2 mb-3">
          <span>Tags</span>
        </h1>
        <ul class="list-inline breadcrumb-menu mb-3">
          <li class="list-inline-item"><a href='/qurno/'><i class="ti ti-home"></i>  <span>Home</span></a></li>
          <li class="list-inline-item">• &nbsp; <a href='/qurno/tags'><span>Tags</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row g-4 justify-content-center text-center">
    <div class="col-lg-4 col-sm-6">
      <a class='p-4 rounded bg-white d-block is-hoverable' href='/qurno/tag-single'>
        <span class="h3"><i class="ti ti-tags mb-2"></i></span>
        <span class="h4 mt-2 mb-3 d-block"> Life</span>
        Total 2 posts
      </a>
    </div>
    
    <div class="col-lg-4 col-sm-6">
      <a class='p-4 rounded bg-white d-block is-hoverable' href='/qurno/tag-single'>
        <span class="h3"><i class="ti ti-tags mb-2"></i></span>
        <span class="h4 mt-2 mb-3 d-block"> Lifestyle</span>
        Total 5 posts
      </a>
    </div>
    
    <div class="col-lg-4 col-sm-6">
      <a class='p-4 rounded bg-white d-block is-hoverable' href='/qurno/tag-single'>
        <span class="h3"><i class="ti ti-tags mb-2"></i></span>
        <span class="h4 mt-2 mb-3 d-block"> Lighting</span>
        Total 1 posts
      </a>
    </div>
    
    <div class="col-lg-4 col-sm-6">
      <a class='p-4 rounded bg-white d-block is-hoverable' href='/qurno/tag-single'>
        <span class="h3"><i class="ti ti-tags mb-2"></i></span>
        <span class="h4 mt-2 mb-3 d-block"> Machine</span>
        Total 2 posts
      </a>
    </div>
    
    <div class="col-lg-4 col-sm-6">
      <a class='p-4 rounded bg-white d-block is-hoverable' href='/qurno/tag-single'>
        <span class="h3"><i class="ti ti-tags mb-2"></i></span>
        <span class="h4 mt-2 mb-3 d-block"> Startups</span>
        Total 2 posts
      </a>
    </div>
    
    <div class="col-lg-4 col-sm-6">
      <a class='p-4 rounded bg-white d-block is-hoverable' href='/qurno/tag-single'>
        <span class="h3"><i class="ti ti-tags mb-2"></i></span>
        <span class="h4 mt-2 mb-3 d-block"> Work</span>
        Total 2 posts
      </a>
    </div>
  </div>
</div>

<!-- start of footer -->
<footer>
  <div class="container">
    <div class="section">
      <div class="row justify-content-center align-items-center">
        <div class="col-xl-6 col-lg-8 col-md-10">
          <!-- newsletter block -->
          <div class="newsletter-block">
            <h2 class="section-title text-center mb-4">Get latest posts delivered right to your inbox</h2>
            <form action="#!" method="post" novalidate>
              <div class="input-group flex-column flex-sm-row flex-nowrap flex-sm-nowrap">
                <input type="email" name="email" class="form-control required email w-auto text-center text-sm-start" placeholder="Your email address" aria-label="Subscription" required>
                <div class="input-group-append d-flex d-sm-inline-block mt-2 mt-sm-0 ms-0 w-auto">
                  <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="input-group-text w-100 justify-content-center" aria-label="Subscription Button"><i class="ti ti-user-plus me-2"></i> Join today</button>
                </div>
              </div>
            </form>
          </div>
          <!-- newsletter block -->
        </div>
      </div>
    </div>
    <div class="pb-5">
      <div class="row g-2 g-lg-4 align-items-center">
        <div class="col-lg-6 text-center text-lg-start">
          <p class="mb-0 copyright-text content">&copy;2022 Qurno. All rights reserved.</p>
        </div>
        <div class="col-lg-6 text-center text-lg-end">
          <ul class="list-inline footer-menu">
            <li class="list-inline-item m-0"><a href='/qurno/privacy'>Privacy Policy</a></li>
            <li class="list-inline-item m-0"><a href='/qurno/404-page'>404 Page</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- end of footer -->

<!-- JS Plugins -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/lightense/lightense.min.js"></script>

<!-- Main Script -->
<script src="assets/js/script.js"></script>

</body></html>