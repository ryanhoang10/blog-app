<template>
    <div>
        <h1 class="leading-tight text-5xl mt-0 mb-2 text-emerald-700 mb-2 text-center cursor-pointer" v-on:click="returnToHome">{{ title }}</h1>
    </div>
</template>

<script>
    export default {
        props: {
            title: String,
        }, 
        methods: {
            returnToHome: function() {
                window.location = "/";
            }
        }
    }
</script>
