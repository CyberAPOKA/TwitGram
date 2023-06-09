<template>
  <Sidebar></Sidebar>

  <div class="p-4 sm:ml-64">
    <div
      class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 dark"
      v-if="apod"
    >
      <div class="text-center text-3xl">
        <h1>Astronomy Picture of the Day is {{ apod?.title }}</h1>
      </div>
      <div class="py-12">
        <img
          :src="apod?.hdurl"
          alt="image"
          class="max-h-max zoom"
          :style="{ transform: zoomStyle }"
          @click="toggleZoom"
        />
      </div>
      <div>{{ apod?.explanation }}</div>
    </div>
    <div
      class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 dark"
      v-else="apod"
    >
      <p>{{ message }}</p>
    </div>
  </div>
</template>

<script setup>
import Sidebar from "@/Pages/Web/Layouts/Sidebar.vue";
import { computed } from "vue";
const props = defineProps({
  apod: Object,
  message: Object,
});

let zoomLevel = 3;

const zoomImage = (event) => {
  const imageElement = event.target;
  const zoomFactor = getZoomFactor();
  const boundingRect = imageElement.getBoundingClientRect();
  const offsetX = event.clientX - boundingRect.left;
  const offsetY = event.clientY - boundingRect.top;

  const adjustedOffsetX = offsetX / zoomFactor;
  const adjustedOffsetY = offsetY / zoomFactor;

  const zoomOriginX = (adjustedOffsetX / imageElement.clientWidth) * 200;
  const zoomOriginY = (adjustedOffsetY / imageElement.clientHeight) * 200;

  imageElement.style.transformOrigin = `${zoomOriginX}% ${zoomOriginY}%`;
  imageElement.style.transform = `scale(${zoomFactor})`;
};

const getZoomFactor = () => {
  switch (zoomLevel) {
    case 1:
      return 2;
    case 2:
      return 3;
    case 3:
      return 1;
    default:
      return 1;
  }
};

const toggleZoom = (event) => {
  zoomLevel = (zoomLevel % 3) + 1;
  zoomImage(event);
};

const zoomStyle = computed(() => {
  const zoomFactor = getZoomFactor();
  return `scale(${zoomFactor})`;
});
</script>
<style>
.zoom {
  cursor: zoom-in;
  transition: transform 0.5s;
}
</style>
