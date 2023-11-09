<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

defineProps({
    title: String,
});

</script>

<template>
    <div>

        <Head :title="title" />

        <div class="">
            <nav class="backdrop-blur-sm bg-blanc-orange-1/60 w-full fixed top-0 z-50">
                <Banner />
                <div class="w-10/12 mx-auto py-2 flex justify-between">
                    <img src="/images/logo.png" alt="Logo de L'Atelier du Sud">

                    <!-- <NavLink :href="route('/')" :active="route().current('/')">
                        Accueil
                    </NavLink> -->
                    <NavLink :href="route('accueil')" :active="route().current('accueil')">
                        Accueil
                    </NavLink>

                    <NavLink :href="route('blog')" :active="route().current('blog')">
                        Blog
                    </NavLink>

                    <NavLink :href="route('calendrier')" :active="route().current('calendrier')">
                        Calendrier
                    </NavLink>

                    <NavLink :href="route('contact')" :active="route().current('contact')">
                        Contact
                    </NavLink>
                </div>
            </nav>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                    @click="showingNavigationDropdown = !showingNavigationDropdown">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }" class="sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <ResponsiveNavLink :href="route('accueil')" :active="route().current('accueil')">
                        Accueil
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('blog')" :active="route().current('blog')">
                        Blog
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('calendrier')" :active="route().current('calendrier')">
                        Calendrier
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('contact')" :active="route().current('contact')">
                        Contact
                    </ResponsiveNavLink>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url"
                                :alt="$page.props.auth.user.name">
                        </div>

                        <div>
                            <div class="font-medium text-base text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
                            Profile
                        </ResponsiveNavLink>

                        <ResponsiveNavLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')"
                            :active="route().current('api-tokens.index')">
                            API Tokens
                        </ResponsiveNavLink>

                        <!-- Authentication -->
                        <form method="POST" @submit.prevent="logout">
                            <ResponsiveNavLink as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </form>

                    </div>
                </div>
            </div>





            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
