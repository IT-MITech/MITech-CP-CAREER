<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MiTech Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans">
  <!-- Navbar -->
  <header class="flex justify-between items-center px-6 py-4 shadow-md">
    <img src="/images/logo.png" alt="MiTech Logo" class="h-10">
    <nav class="flex gap-6 text-[#2978B6] font-semibold">
      <a href="#">Home</a>
      <a href="#">About Us</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="bg-[#F3F8FC] px-6 py-16 text-center">
    <h1 class="text-3xl md:text-5xl font-bold text-[#2978B6] mb-6">Your Partner in Accelerating Digital Transformation</h1>
    <p class="max-w-2xl mx-auto mb-8">We build efficient digital solutions to empower businesses with innovative technologies.</p>
    <button class="bg-[#2978B6] text-white px-6 py-3 rounded-full hover:bg-[#1f5f91]">Explore More</button>
    <div class="mt-10">
      <img src="/images/hero-image.png" alt="Hero Illustration" class="mx-auto max-w-md">
    </div>
  </section>

  <!-- Logo & Values -->
  <section class="py-16 px-6 bg-white text-center">
    <p class="text-xl font-semibold mb-8">We build efficient solutions to empower businesses</p>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-[#F3F8FC] p-6 rounded-lg">
        <img src="/images/icon1.png" class="mx-auto h-16 mb-4" alt="">
        <h3 class="font-bold text-[#2978B6] mb-2">Innovation</h3>
        <p>Delivering future-ready tech that adapts and evolves.</p>
      </div>
      <div class="bg-[#F3F8FC] p-6 rounded-lg">
        <img src="/images/icon2.png" class="mx-auto h-16 mb-4" alt="">
        <h3 class="font-bold text-[#2978B6] mb-2">Efficiency</h3>
        <p>Boosting business processes through optimized systems.</p>
      </div>
      <div class="bg-[#F3F8FC] p-6 rounded-lg">
        <img src="/images/icon3.png" class="mx-auto h-16 mb-4" alt="">
        <h3 class="font-bold text-[#2978B6] mb-2">Support</h3>
        <p>Always here to assist with reliable, ongoing support.</p>
      </div>
    </div>
  </section>

  <!-- Solutions Section -->
  <section class="bg-white py-16 px-6">
    <h2 class="text-2xl md:text-3xl text-center font-bold mb-12">Innovative IT Solutions for Secure & Efficient IT Backing</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="text-center">
        <img src="/images/sol1.png" alt="" class="h-24 mx-auto mb-4">
        <h4 class="text-lg font-semibold text-[#2978B6] mb-2">Cloud Integration</h4>
        <p>Seamless migration and management in the cloud.</p>
      </div>
      <div class="text-center">
        <img src="/images/sol2.png" alt="" class="h-24 mx-auto mb-4">
        <h4 class="text-lg font-semibold text-[#2978B6] mb-2">Cybersecurity</h4>
        <p>End-to-end protection for digital assets.</p>
      </div>
      <div class="text-center">
        <img src="/images/sol3.png" alt="" class="h-24 mx-auto mb-4">
        <h4 class="text-lg font-semibold text-[#2978B6] mb-2">Infrastructure</h4>
        <p>Robust IT infrastructure for scalable operations.</p>
      </div>
    </div>
  </section>

  <!-- Expert Section -->
  <section class="bg-[#1B2A49] text-white py-16 px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-bold mb-6">Expert IT Services & Digital Business Solutions</h2>
    <img src="/images/robot.png" alt="Robot" class="mx-auto h-48 mb-6">
    <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
      <div class="bg-[#24385b] p-6 rounded-lg">Consulting</div>
      <div class="bg-[#24385b] p-6 rounded-lg">Application Dev</div>
      <div class="bg-[#24385b] p-6 rounded-lg">Networking</div>
      <div class="bg-[#24385b] p-6 rounded-lg">IT Audit</div>
      <div class="bg-[#24385b] p-6 rounded-lg">Hosting</div>
      <div class="bg-[#24385b] p-6 rounded-lg">Data Migration</div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="bg-white py-16 px-6">
    <h2 class="text-2xl md:text-3xl font-bold text-center mb-10">FAQ - Frequently Asked Questions</h2>
    <div class="max-w-2xl mx-auto">
      <details class="mb-4 border-b pb-2">
        <summary class="cursor-pointer font-medium text-[#2978B6]">What services does MiTech offer?</summary>
        <p class="mt-2">We provide end-to-end digital transformation, IT support, infrastructure setup, cybersecurity, and more.</p>
      </details>
      <details class="mb-4 border-b pb-2">
        <summary class="cursor-pointer font-medium text-[#2978B6]">How can I get in touch?</summary>
        <p class="mt-2">Use the contact form or reach us at info@mitech.id</p>
      </details>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-[#1B2A49] text-white py-6 text-center">
    <p class="text-sm">&copy; 2025 MiTech. All rights reserved.</p>
  </footer>
</body>
</html>
