<template>
  <div id="app">
    <cropper
      class="cropper"
      :src="img"
      :stencil-props="{
        aspectRatio: 10 / 12,
      }"
      @change="change"
    ></cropper>
  </div>
</template>
<script>
import Vue from "vue";
import { Cropper } from "vue-advanced-cropper";
import "vue-advanced-cropper/dist/style.css";

new Vue({
  el: "#app",
  data: {
    img: "https://images.pexels.com/photos/226746/pexels-photo-226746.jpeg",
  },
  methods: {
    change({ coordinates, canvas }) {
      console.log(coordinates, canvas);
    },
  },
  components: {
    Cropper,
  },
});
</script>
