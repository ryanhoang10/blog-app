
<template>
   <div class="text-center">
        <select name="Category" class="px-2 py-1">
            <option value="">Category</option>
            <option v-for="(category, index) in categories" :key="index" value="">{{ category.category }}</option>
        </select>
        <input type="text" name="Search" class="border border-solid border-gray-300 rounded px-2 py-1 ml-1">
        <button class="bg-blue-500 rounded p-1 text-white">Seach</button>  
    </div> 
</template>

<script>
export default {
    props: {
        categories: Array
    }
}
</script>