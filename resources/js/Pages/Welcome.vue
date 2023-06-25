<template>
  <Sidebar></Sidebar>
  <Rightbar :user="user"></Rightbar>
  <div class="p-4 sm:ml-64 sm:mr-96">
    <CreatePublication></CreatePublication>

    <div class="p-6">
      <div v-for="publication in publications">
        {{ publication.user.name }}
        {{ publication.title }}
        <div class="flex-col" v-for="photo in publication.photos">
          <div class="flex items-center gap-2 pl-2">
            <a :href="route('user', publication.user.user)">
              <img
                class="w-12 h-12 mb-1 rounded-full shadow-lg object-cover"
                :src="publication.user.profile_photo_url"
                :alt="publication.user.name"
            /></a>
            <a :href="route('user', publication.user.user)">
              <p>{{ publication.user.user }}</p>
            </a>
          </div>
          <div>
            <img
              class="w-full h-96 mb-3 rounded-md object-cover"
              :src="'../storage/' + photo.photo_path"
              :alt="photo.user_id"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Sidebar from "@/Pages/Web/Layouts/Sidebar.vue";
import Rightbar from "@/Pages/Web/Layouts/Rightbar.vue";
import CreatePublication from "@/Pages/Web/Components/CreatePublication.vue";
import "@mdi/font/css/materialdesignicons.min.css";
import { onMounted, ref } from "vue";
import moment from "moment";

const props = defineProps({
  user: Object,
  publications: Array,
});

const publications = ref(props.publications);

onMounted(() => {
  window.Echo.channel("public-publications").listen("PublicationEvent", (e) => {
    publications.value.push(e.publication);
  });
});
</script>
<style>
.zoom {
  cursor: zoom-in;
  transition: transform 0.5s;
}
</style>
