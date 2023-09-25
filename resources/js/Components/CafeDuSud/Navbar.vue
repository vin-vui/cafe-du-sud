<template>
    <nav class="bg-slate-700 bg">
      <div class="top-8 h-[70px] w-full  flex backdrop-blur-xl backdrop-opacity-10">
        <a class="my-auto mx-8 text-xl font-medium text-gray-50 relative group " href="/articles">
          <span>Articles</span>
          <span class="absolute left-0 w-full h-0.5 bg-blue-500 rounded bottom-0 transform scale-x-0 transition-transform origin-left group-hover:scale-x-100"></span>
        </a>

        <a class="my-auto mx-8 text-xl font-medium text-gray-50 relative group " href="/tags">
          <span>Tags</span>
          <span class="absolute left-0 w-full h-0.5 bg-green-500 rounded bottom-0 transform scale-x-0 transition-transform origin-left group-hover:scale-x-100"></span>
        </a>

        <a class="my-auto mx-8 text-xl font-medium text-gray-50 relative group " href="/commentaires">
          <span>Commentaires</span>
          <span class="absolute left-0 w-full h-0.5 bg-red-500 rounded bottom-0 transform scale-x-0 transition-transform origin-left group-hover:scale-x-100"></span>
        </a>
      </div>
    </nav>
  </template>
