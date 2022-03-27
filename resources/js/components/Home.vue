<template>
    <div class="container">
        <div v-for="(item, blog) in blogs" :key="blog">
            <h3>{{ item.title }}</h3>
            <div>
                <p>{{ item.created_at }}</p>
                <p>{{ item.body }}</p>
                <p>{{ item.author }}</p>   
                <p>{{ item.likes }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('ello mounted.')
        },
        props: {
            blogs: Array
        }
    }
</script>
