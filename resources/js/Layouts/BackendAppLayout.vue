<template>
    <div></div>
</template>

<script>
    export default {
        methods: {
            logout() {
                this.$inertia.post(route('logout'));
            }
        }
    }
</script>

<style>

</style>