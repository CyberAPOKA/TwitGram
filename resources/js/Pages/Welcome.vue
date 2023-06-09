<template>
  <Sidebar></Sidebar>

  <div class="p-4 sm:ml-64">{{ user.user }}</div>
</template>

<script setup>
import Sidebar from "@/Pages/Web/Layouts/Sidebar.vue";

const props = defineProps({
  user: Object,
});
</script>
<style>
.zoom {
  cursor: zoom-in;
  transition: transform 0.5s;
}
</style>
