<template>
    <app-layout>
        <div class="w-4/5 border-l border-r border-gray-200 flex flex-col overflow-y-auto">
            <main class="profile-page">
                <section class="relative block" style="height: 400px">
                    <div class="absolute top-0 w-full h-full bg-center bg-cover"
                        style="background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80')"
                    >
                        <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
                    </div>
                </section>
            </main>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },

        props: [
            'data'
        ]
    }
</script>
