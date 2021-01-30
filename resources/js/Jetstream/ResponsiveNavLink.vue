<template>
    <inertia-link :href="href" :class="classes">
        <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['active', 'href', 'as'],

        computed: {
            classes() {
                return this.active
                            ? 'block relative w-full h-16 w-16 flex justify-center items-center bg-gray-100'
                            : 'block relative w-full h-16 w-16 flex justify-center items-center'
            }
        }
    }
</script>
