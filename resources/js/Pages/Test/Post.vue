<template>
  <div class="container mx-auto">
    <div class="grid md:grid-cols-2 gap-4 pt-20">
      <div>
        <p>Usuário logado: {{ user.user }}</p>
        <form @submit.prevent="submit">
          <div class="py-2">
            <label for="title">title</label>
            <input
              id="title"
              type="text"
              v-model="form.title"
              name="title"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />
          </div>
          <div class="py-2">
            <label for="content">content</label>
            <input
              id="content"
              type="text"
              v-model="form.content"
              name="content"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />
          </div>
          <button type="submit" class="btn bg-blue-500 text-white py-2">Submit</button>
        </form>
      </div>

      <div class="grid md:grid-cols-2 gap-2">
        <div v-for="post in posts">
          <h1>title: {{ post.title }}</h1>
          <p>content: {{ post.content }}</p>
          <p>
            escrita por {{ post.user.user }} no dia
            {{ moment(post.created_at).format("DD/MM/YYYY [às] HH:mm:ss") }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import moment from "moment";
import Echo from "laravel-echo";

const props = defineProps({
  user: Object,
  posts: Array,
});

const posts = ref(props.posts);

onMounted(() => {
  window.Echo.channel("public-posts").listen("PostEvent", (e) => {
    posts.value.push(e.post);
  });
});

const form = useForm({
  title: "",
  content: "",
});

const submit = () => {
  form.post(route("post.create"));
};
</script>
