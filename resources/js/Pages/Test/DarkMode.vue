<template>
  <!-- <div class="py-10 bg-pink dark:bg-gray-800 h-32 w-32"></div> -->

  <UseColorMode>
    <div>
      <button @click="mode = 'light'">CLARO {{ mode }}</button>
    </div>
    <div>
      <button @click="mode = 'dark'">ESCURO {{ mode }}</button>
    </div>
    <div>
      <button @click="mode = 'purple'">ROXO {{ mode }}</button>
    </div>
    <div>
      <button @click="mode = 'green'">theme-green {{ mode }}</button>
    </div>
  </UseColorMode>
  <div class="theme">
    <div class="w-96 h-96 border bg-white dark:bg-gray-800 purpl theme-green:bg-gray-800">
      <div class="p-6">
        <p class="font-normal text-gray-700 dark:text-gray-200 purple:text-white">
          Here are the biggest enterprise technology acquisitions of 2021 so far, in
          reverse chronological order.
        </p>
      </div>
    </div>
  </div>
</template>
<script setup>
import { useColorMode } from "@vueuse/core";

const mode = useColorMode({
  attribute: "class",
  modes: {
    light: "light",
    dark: "dark",
    purple: "purple",
    green: "theme-green",
  },
});
</script>
