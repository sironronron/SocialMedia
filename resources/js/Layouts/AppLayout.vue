<template>
    <div class="flex flex-row h-screen bg-gray-100">
        <sidebar />

        <div class="w-72 flex-none bg-gray-100 p-4 flex flex-col space-y-4">
            <div class="flex flex-row justify-between items-center mb-16">
                <h1 class="font-semibold text-2xl" v-if="route().current('show-profile')">My Profile</h1>
                <h1 class="font-semibold text-2xl" v-if="route().current('dashboard')">Newsfeed</h1>
                <h1 class="font-semibold text-2xl" v-if="route().current('messages')">Mesages</h1>
                <h1 class="font-semibold text-2xl" v-if="route().current('notifications')">Notifications</h1>
                <h1 class="font-femibold text-2xl" v-if="route().current('find-friends')">Find Friends</h1>
                <h1 class="font-femibold text-2xl" v-if="route().current('profile.show')">Profile Settings</h1>
                <svg class="flex-none w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>

            <div class="bg-red-200 h-64"></div>
            <div class="bg-red-200 h-64"></div>
        </div>

        <div class="flex flex-row flex-auto bg-white rounded-tl-xl border-l shadow-xl">
            <slot />
            <right-sidebar/>
        </div>

        <!-- Modal Portal -->
        <portal-target name="modal" multiple></portal-target>
    </div>
</template>

<script>
    import Sidebar from '@/Component/Sidebar.vue'
    import RightSidebar from '@/Component/RightSidebar'

    export default {
        components: {
            Sidebar, RightSidebar,
        },

        methods: {
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    }
</script>
