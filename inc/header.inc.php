<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/simple.css" />
  <link rel="stylesheet" href="./styles/custom.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Culinary Cove &bull;<?php echo $pageTitle ?></title>
</head>

<body class="!block">
  <!-- //* phones -->
  <div class=" btn-r right-200 fixed bg-black opacity-96 !w-full !h-full z-1000 sm:hidden">
    <ul class="grid  justify-center p-5 text-center [&_li]:py-4 [&_li]:!my-5 [&_li]:!w-[200px] [&_li]:border-b-5 [&_li]:[&_a]:!text-[#FFF] [&_li]:[&_a]:transition-all [&_li]:[&_a]:duration-400">
      <button id="btn-x" class="absolute left-83 !p-[8px] !text-bold !text-2xl">X</button>
      <li><a class="hover:!text-[#ffee00]" href="menu.php">Menu</a></li>
      <li><a class="hover:!text-[#ffee00]" href="our-mission.php">Home</a></li>
      <li><a class="hover:!text-[#ffee00]" href="">About</a></li>
      <li><a class="hover:!text-[#ffee00]" href="">Contact</a></li>
    </ul>
  </div>
  <!-- //* pc -->
  <nav class="z-999 sticky !w-full top-0 p-4 mb-1 flex justify-between items-center bg-[#0a0a0af2]">
    <h1 class="!text-[25px] sm:!text-2xl md:!text-3xl" style=" color: #ffee00">Culinary Cove</h1>
    <button id="btn-r" class="!block sm:!hidden !m-0 !ml-10 !p-1">
      <i class="fa-solid fa-grip-lines !p-0 text-[25px]"></i>
    </button>
    <ul class="hidden sm:flex justify-center items-center [&_li]:px-5 [&_li]:[&_a]:!text-[#FFF] [&_li]:[&_a]:transition-all [&_li]:[&_a]:duration-400">
      <li><a class="hover:!text-[#ffee00]" href="menu.php">Menu</a></li>
      <li><a class="hover:!text-[#ffee00]" href="our-mission.php">Home</a></li>
      <li><a class="hover:!text-[#ffee00]" href="">About</a></li>
      <li><a class="hover:!text-[#ffee00]" href="">Contact</a></li>
    </ul>
    <button class="!hidden sm:!block !rounded-2xl !bg-white text-black transition-all duration-500 hover:!backdrop-blur-md hover:!bg-[#ffee00]">
      <p class="!m-0 sm:!text-base !text-center font-bold px-2">Reserve Now</p>
    </button>
  </nav>
  <header id="header"
    class=" header-with-background"
    style="background-image:<?php echo $OurHeadImg ?>">
    <h1 class="text-black font-bold">The Restaurant That Put You First</h1>
    <p class="font-bold " style="color: #000">Your sanctuary for exceptional flavors</p>
    <nav>
      <a class="!no-underline !font-bold bg-white !p-[5px] !border-2 !rounded " style="color: #000" href="our-mission.php">Our mission</a>
      <a class="!no-underline !font-bold bg-white !p-[5px] !border-2 !rounded " style="color: #000" href="ingredients.php">Ingredients</a>

    </nav>
  </header>
  <div class="grid justify-center items-center p-5 text-center">
    <main>