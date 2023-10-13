<template >
    <UserLayout>
        <div>
            <h2 class="mt-20 text-6xl font-alumni text-center">Contact</h2>
        </div>

    </UserLayout>
</template>

<script>
import UserLayout from '@/Layouts/UserLayout.vue'

export default {
    props: ['articles'],

    components: {
        UserLayout,
    },
}
</script>
