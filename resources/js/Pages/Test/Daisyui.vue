<template>
  <div>
    <button class="btn">Button</button>
    <button class="btn btn-neutral">Neutral</button>
    <button class="btn btn-primary">Button</button>
    <button class="btn btn-secondary">Button</button>
    <button class="btn btn-accent">Button</button>
    <button class="btn btn-ghost">Button</button>
    <button class="btn btn-link">Button</button>
  </div>
  <div>
    <UseColorMode>
      <div>
        <button @click="mode = 'light'">light {{ mode }}</button>
      </div>
      <div>
        <button @click="mode = 'dark'">dark {{ mode }}</button>
      </div>
      <div>
        <button @click="mode = 'cupcake'">cupcake {{ mode }}</button>
      </div>
      <div>
        <button @click="mode = 'emerald'">emerald {{ mode }}</button>
      </div>
      <div>
        <button @click="mode = 'cyberpunk'">cyberpunk {{ mode }}</button>
      </div>
    </UseColorMode>
  </div>
  <div>
    <div class="card w-96 bg-base-100 shadow-xl">
      <div class="card-body">
        <h2 class="card-title">Card title!</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="card-actions justify-end">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { useColorMode } from "@vueuse/core";

const mode = useColorMode({
  attribute: "data-theme",
  modes: {
    light: "light",
    dark: "dark",
    cupcake: "cupcake",
    emerald: "emerald",
    cyberpunk: "cyberpunk",
  },
});
</script>
