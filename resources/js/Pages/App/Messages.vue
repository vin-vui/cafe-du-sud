<template>
    <AppLayout>
        <div class="flex flex-row flex-wrap">
            <div v-for="message in messages" class="w-1/4 justify-evenly">
                <!-- ARTICLE CARD -->
                <div class="bg-slate-200 shadow-md border-2 border-slate-300 rounded-xl mx-4 my-2">
                    <!-- CARD CONTENT -->
                    <div class="mx-4 my-2 flex flex-col">
                        <!-- NAME + SURNAME -->
                        <div class="flex justify-center text-xl mb-4">
                            <h3 class="mr-6 capitalize"> {{ message.surname }} </h3>
                            <h3 class="uppercase">{{ message.name }} </h3>
                        </div>

                        <!-- PHONE + MAIL -->
                        <div class="flex justify-between mb-4 text-green-900">
                            <h3 class=""> {{ message.email }} </h3>
                            <h3 class=""> {{ message.phone }} </h3>
                        </div>

                        <!-- CONTENT   -->
                        <h3 class="mt-2 mb-6"> {{ message.content }} </h3>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import moment from 'moment'


export default {
    components: {
        AppLayout
    },

    props: ['messages', 'errors',],

    data: () => ({
        moment: moment
    }),

}
</script>
