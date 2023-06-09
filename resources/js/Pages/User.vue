<template>
  <div>
    {{ user }}
  </div>
</template>

<script setup>
const props = defineProps({
  user: Object,
});
</script>
