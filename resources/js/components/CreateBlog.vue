<template>
<div>
    <form action="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 text-center" @submit.prevent="onSubmit">
        <div class="mb-4">
            <label for="title">Title:</label>
            <input type="text" id="title" v-model="this.title" class="mr-1 appearance-none border rounded py-1 px-3 text-gray-700">
        </div>
        <div class="mb-4">
            <label for="category">Category: </label>
            <select id="category" class="border rounded py-1 px-2">
                <option value="">Category</option>
                <option v-for="category in categories" :key="category.id">{{ category.category }}</option>
            </select>  
        </div>
        <label class="mb-2" for="body">Body:</label>
        <div class="mb-4">
            <textarea class="shadow appearance-none border" cols="50" rows="10" v-model="this.body"></textarea>
        </div>
        <div class="mb-4">
            <label for="author">Author:</label>
            <input type="text" v-model="this.author" class="mr-1 appearance-none border rounded py-1 px-3 text-gray-700">
        </div>
        <div>
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Create</button>
        </div>
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
        
    }, 
    props: {
        categories: Array
    },
    methods: {
        onSubmit() {
            alert('sub')
        }
    }
}
</script>