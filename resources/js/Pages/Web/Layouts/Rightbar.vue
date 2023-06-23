<template>
  <aside
    id="sidebar-multi-level-sidebar"
    class="fixed top-0 right-0 z-40 w-96 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar"
  >
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <div href="" class="flex flex-row">
        <!-- Current Profile Photo -->
        <div v-show="user.profile_photo_url" class="mt-2">
          <a :href="route('user', user.user)">
            <img
              :src="user.profile_photo_url"
              :alt="user.name"
              class="rounded-full h-20 w-20 object-cover"
          /></a>
        </div>
        <div class="flex flex-col justify-center gap-2 pl-6">
          <p>{{ user.user }}</p>
          <p>{{ user.name }}</p>
        </div>
      </div>
    </div>
  </aside>
</template>
<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";

onMounted(() => {
  initFlowbite();
});

const props = defineProps({
  user: Object,
});
</script>
