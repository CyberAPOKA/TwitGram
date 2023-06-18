<template>
  <div class="grid md:grid-cols-2">
    <div>
      <form @submit.prevent="submit" class="container mx-auto md:max-w-md">
        <label for="title">title</label>
        <input
          id="title"
          v-model="form.title"
          @change="form.validate('title')"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        />
        <span v-if="form.valid('title')"> ✅ Sussexo</span>

        <span v-else-if="form.invalid('title')"> ❌ {{ form.errors.title }} </span>
        <br />
        <label for="content">content</label>
        <input
          id="content"
          type="content"
          v-model="form.content"
          @change="form.validate('content')"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        />
        <div v-if="form.invalid('content')">
          {{ form.errors.content }}
        </div>

        <button class="bg-black text-white mt-6 p-4 rounded-lg">Create User</button>
      </form>
    </div>
    <div class="container mx-auto">
      <div v-for="post in posts" class="flex flex-col">
        <h1>{{ post.title }}</h1>
        <p>{{ post.content }}</p>
      </div>
    </div>
  </div>
</template>
<script setup>
import { useForm } from "laravel-precognition-vue";

const props = defineProps({
  posts: Array,
});

const form = useForm("post", route("precognition.post"), {
  title: "",
  content: "",
});

const submit = () => form.submit();
</script>
