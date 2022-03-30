<template>
<div>
    <h3>Test</h3>
    <form action="post">
        Title: <input type="text" id="title" v-model="this.title">
        Category: <input type="text" id="category" v-model="this.category">
        Body: <input type="text" id="body" v-model="this.body">
        Author: <input type="text" v-model="this.author">
        <input type="button" value="submit">
    </form>   
</div>

</template>

<script>
export default {
    mounted() {

    },
    data() {
        return {
            title: null,
            category: null,
            body: null,
            author: null,  
        }
        
    }
}
</script>