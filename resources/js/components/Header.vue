<template>
    <h1 class="leading-tight text-5xl mt-0 mb-2 text-emerald-700 mb-2 text-center">Welcome to The Blog Page</h1>
    <!-- <Search /> -->
    
</template>

<script>
import Search from './SearchBar';

    export default {
        // Search,
        mounted() {
            console.log('testing mounted.')
        },
        components: {
            'Search': Search
        }
    }
</script>
