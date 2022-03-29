<template>
    <div>
        <h1 class="leading-tight text-5xl mt-0 mb-2 text-emerald-700 mb-2 text-center">{{ title }}</h1>
        <Search :categories=categories />
    </div>
</template>

<script>
import Search from './SearchBar';

    export default {
        components: {
            Search
        },
        props: {
            title: String,
            categories: Array
        }
    }
</script>
