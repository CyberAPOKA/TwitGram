<template>
  <div
    id="modalCreatePublication"
    tabindex="-1"
    aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
  >
    <button
      type="button"
      class="absolute top-0 right-0 text-white bg-transparent hover:text-red-600 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
      data-modal-hide="modalCreatePublication"
    >
      <svg
        aria-hidden="true"
        class="w-10 h-10"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
          clip-rule="evenodd"
        ></path>
      </svg>
      <span class="sr-only">Close modal</span>
    </button>
    <div class="relative w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <form @submit.prevent="submit" enctype="multipart/form-data">
          <!-- Modal header -->
          <div class="flex justify-between p-4 border-b rounded-t dark:border-gray-600">
            <!-- <button v-if="selectedImages.length != 0" @click="step--"> -->

            <!-- Modal toggle -->
            <button
              data-modal-target="goBackModal"
              data-modal-toggle="goBackModal"
              type="button"
              v-show="selectedImages.length != 0"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"
                />
              </svg>
            </button>

            <div
              id="goBackModal"
              tabindex="-1"
              aria-hidden="true"
              class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
              v-show="selectedImages.length != 0"
            >
              <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div
                    class="flex flex-col text-center p-4 border-b rounded-t dark:border-gray-600"
                  >
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Descartar publicação?
                    </h3>
                    <p>Se você sair agora, suas edições não serão salvas.</p>
                  </div>
                  <!-- Modal body -->
                  <div
                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600"
                  >
                    <button
                      data-modal-hide="goBackModal"
                      type="button"
                      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      @click="confirmGoBack"
                    >
                      Confirmar
                    </button>
                    <button
                      data-modal-hide="goBackModal"
                      type="button"
                      class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                      @click="showModal = false"
                    >
                      Cancelar
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
              Criar nova publicação {{ step }}
            </h3>
            <button @click="step++" type="button" v-if="step == 1">Avançar</button>
            <button
              data-modal-hide="modalCreatePublication"
              type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              v-else
            >
              Enviar
            </button>
          </div>

          <!-- Modal body -->
          <div
            class="flex flex-col items-center p-6 space-y-6"
            v-if="step == 1 && !selectedImages.length != 0"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 500 500"
              class="w-44 h-44"
            >
              <defs>
                <clipPath id="freepik--clip-path--inject-1--inject-64">
                  <path
                    d="M98,212.5s-2.07,2.27-1.24,6.82,11.38,35.38,14.07,40.35,5.17,4.13,7.45,2.89,22.34-14.27,28.13-17.79,16.14-9.52,16.14-9.52,9.51,4.35,9.31,2.28.83-6-2.07-9.1-8.07-.83-10.34.83-18.62,8.48-25.86,11-11,3.52-11,3.52l-9.52-19.66"
                    style="
                      fill: #fff;
                      stroke: #263238;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                    "
                  ></path>
                </clipPath>
                <clipPath id="freepik--clip-path-2--inject-1--inject-64">
                  <path
                    d="M137.19,197.13c-3.8,1.39-7.36,3-7.93,1.09-.62-2.07-2.69-8.89-2.69-8.89S112.5,178,110,180s8.07,20.69,6,21.51c-.74.3-3.36,1.17-6.34,2.41,1.34,2.19,4.46,6.1,11.31,10.21,10.34,6.21,12.62,7.86,12.62,7.86Z"
                    style="
                      fill: #fff;
                      stroke: #263238;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                    "
                  ></path>
                </clipPath>
                <clipPath id="freepik--clip-path-3--inject-1--inject-64">
                  <path
                    d="M131.74,188.29s-6.2,5.59-5.17,7,5.17-3.93,5.17-3.93l2.28,1.24a10.52,10.52,0,0,0-2.9,3.1c-.62,1.45,0,2.48,1.24,3.93s1.45,3.31,3.11,3.31,2.07-2.27,2.07-2.27a18.92,18.92,0,0,0,2.69,3.72c1,.83,3.93,1,3.93,1s10.55,29,13,33.31,3.1,7.66,10.34,6.83,4.76-6.83,2.49-12.21-16.55-24-20.28-28.34-5.38-6.41-9.72-11.79S133,187.05,131.74,188.29Z"
                    style="
                      fill: #fff;
                      stroke: #263238;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                    "
                  ></path>
                </clipPath>
                <clipPath id="freepik--clip-path-4--inject-1--inject-64">
                  <path
                    d="M143.53,345.17s-5.62,13.43-5.62,20.61.31,34.34-1.25,39.65-1.56,7.81.63,8.74,7.18.63,8.43,1.56,7.49,3.13,9.05,1.88-9.36-7.81-10.61-10.31,4.68-29.34,7.8-35.59,7.49-25.29,7.49-27.47S143.53,345.17,143.53,345.17Z"
                    style="
                      fill: #fff;
                      stroke: #263238;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                    "
                  ></path>
                </clipPath>
                <clipPath id="freepik--clip-path-5--inject-1--inject-64">
                  <path
                    d="M111.69,346.42s-5,5.94-6.87,17.8-2.19,47.14-2.5,52.14-.62,5.93,2.5,7.49,10.3,5,12.17,5,2.5-1.25,0-5.62-9.36-6.25-9.36-10,15.61-47.15,17.48-54A48.35,48.35,0,0,0,127,347.67Z"
                    style="
                      fill: #fff;
                      stroke: #263238;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                    "
                  ></path>
                </clipPath>
                <clipPath id="freepik--clip-path-6--inject-1--inject-64">
                  <path
                    d="M129.26,159.54a7.11,7.11,0,0,0-2.69-4.76c-2.48-1.86-11.58-2.28-15.51,2.69s-2.28,17.17-1.66,18.41c0,0-5.17-3.1-5.59,1.66s1.87,7,4.35,7a3.56,3.56,0,0,0,3.31-1.86s5.38,6.62,12.83,7.45,11.58-7.45,12.62-12.42S130.3,164.92,129.26,159.54Z"
                    style="
                      fill: #fff;
                      stroke: #263238;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                    "
                  ></path>
                </clipPath>
              </defs>
              <!--Photos-->
              <g id="freepik--background-simple--inject-1--inject-64">
                <path
                  d="M453.8,236.55c-1.59-8.37-6.94-15.45-12.14-22.2L354.38,101.13c-7-9.1-14.6-18.63-25.37-22.63-12.44-4.62-25.57-.86-38.36,4-6.06,1.72-12.74,4.66-19.91,7.59A225.29,225.29,0,0,1,233.14,99c-23.7-1.16-48-20.4-100.14-10-36.18,7.24-57.66,28-68.13,41.38A35.63,35.63,0,0,0,57,142.3c-4,9.87-4.05,20.93-2.64,31.49,3.92,29.34,18.47,56.83,19.56,86.41.72,19.36-4.42,38.48-11,56.69-4.56,12.62-9.9,26.32-5.59,39S75.09,376.69,88.51,378s26.76-3,39.13-8.33S152,357.79,165,354.22c26.55-7.3,54.9-1.74,81.23,6.31s52.2,18.62,79.58,21.53c15.24,1.62,31.95.36,43.73-9.44,18.65-15.5,17.32-44.81,30.8-65,8.61-12.89,22.55-21,34.29-31.11S456.7,251.78,453.8,236.55Z"
                  style="fill: #9a2f9a"
                ></path>
                <path
                  d="M453.8,236.55c-1.59-8.37-6.94-15.45-12.14-22.2L354.38,101.13c-7-9.1-14.6-18.63-25.37-22.63-12.44-4.62-25.57-.86-38.36,4-6.06,1.72-12.74,4.66-19.91,7.59A225.29,225.29,0,0,1,233.14,99c-23.7-1.16-48-20.4-100.14-10-36.18,7.24-57.66,28-68.13,41.38A35.63,35.63,0,0,0,57,142.3c-4,9.87-4.05,20.93-2.64,31.49,3.92,29.34,18.47,56.83,19.56,86.41.72,19.36-4.42,38.48-11,56.69-4.56,12.62-9.9,26.32-5.59,39S75.09,376.69,88.51,378s26.76-3,39.13-8.33S152,357.79,165,354.22c26.55-7.3,54.9-1.74,81.23,6.31s52.2,18.62,79.58,21.53c15.24,1.62,31.95.36,43.73-9.44,18.65-15.5,17.32-44.81,30.8-65,8.61-12.89,22.55-21,34.29-31.11S456.7,251.78,453.8,236.55Z"
                  style="fill: #fff; opacity: 0.7000000000000001"
                ></path>
              </g>
              <g id="freepik--Shadow--inject-1--inject-64">
                <ellipse
                  cx="249.5"
                  cy="422"
                  rx="198.5"
                  ry="15"
                  style="fill: #9a2f9a"
                ></ellipse>
                <ellipse
                  cx="249.5"
                  cy="422"
                  rx="198.5"
                  ry="15"
                  style="fill: #fff; opacity: 0.9"
                ></ellipse>
              </g>
              <g id="freepik--picture-3--inject-1--inject-64">
                <rect
                  x="220.91"
                  y="117.92"
                  width="203.86"
                  height="168.54"
                  style="fill: #9a2f9a; opacity: 0.5; mix-blend-mode: multiply"
                ></rect>
                <rect
                  x="229.39"
                  y="106.02"
                  width="201.23"
                  height="171.4"
                  style="
                    fill: #fff;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></rect>
                <rect
                  x="240.63"
                  y="115.39"
                  width="178.75"
                  height="152.67"
                  style="
                    fill: #fff;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></rect>
                <path
                  d="M419.38,157.38a44.56,44.56,0,0,1-6.79-.16c-28.06-2.8-38.68-50.29-71.59-32.59-24.45,13.13-13.53,38.17-14,59.37-.4,18.16-10.66,37.56-31.35,33.42-28.21-5.64-16.62-39.1-38.06-49.82a38.6,38.6,0,0,0-17-4V268.06H419.38Z"
                  style="
                    fill: #9a2f9a;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></path>
                <circle
                  cx="277.95"
                  cy="142.55"
                  r="14.99"
                  style="
                    fill: #9a2f9a;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></circle>
              </g>
              <g id="freepik--picture-2--inject-1--inject-64">
                <rect
                  x="183.99"
                  y="268.8"
                  width="160.52"
                  height="136.44"
                  style="
                    fill: #9a2f9a;
                    opacity: 0.6000000000000001;
                    mix-blend-mode: multiply;
                  "
                ></rect>
                <rect
                  x="190.05"
                  y="259.63"
                  width="161.64"
                  height="137.68"
                  style="
                    fill: #fff;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></rect>
                <rect
                  x="199.08"
                  y="267.15"
                  width="143.59"
                  height="122.64"
                  style="
                    fill: #9a2f9a;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></rect>
                <circle
                  cx="226.29"
                  cy="310.42"
                  r="12.04"
                  transform="translate(-116.48 483.86) rotate(-80.75)"
                  style="
                    fill: #fff;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></circle>
                <path
                  d="M342.67,270.08c-.68.2-1.35.4-2,.62-32.53,10.38-16.61,51.9-37.37,74s-46.36,9.69-73.35,4.85a68.92,68.92,0,0,0-30.83,1.23v39H342.67Z"
                  style="
                    fill: #fff;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></path>
              </g>
              <g id="freepik--picture-1--inject-1--inject-64">
                <rect
                  x="71.62"
                  y="81"
                  width="163.73"
                  height="171.75"
                  style="
                    fill: #9a2f9a;
                    opacity: 0.6000000000000001;
                    mix-blend-mode: multiply;
                  "
                ></rect>
                <rect
                  x="78.59"
                  y="74.18"
                  width="201.23"
                  height="171.4"
                  style="
                    fill: #fff;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></rect>
                <rect
                  x="89.83"
                  y="83.55"
                  width="178.75"
                  height="152.67"
                  style="
                    fill: #fff;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></rect>
                <path
                  d="M268.58,114.57l-76.8,64.51-23.64-28.66a10.61,10.61,0,0,0-15.52-.92L89.83,209.42v26.79H268.58Z"
                  style="
                    fill: #9a2f9a;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></path>
                <circle
                  cx="127.15"
                  cy="110.71"
                  r="14.99"
                  transform="translate(-9.95 208.82) rotate(-76.63)"
                  style="
                    fill: #9a2f9a;
                    stroke: #263238;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  "
                ></circle>
              </g>
            </svg>
            <p>Arraste as fotos e os vídeos aqui</p>

            <div class="flex items-center justify-center w-full">
              <label
                for="dropzone-file"
                class="flex flex-col items-center justify-center w-96 h-20 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
              >
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                    <span class="font-semibold">Selecione do computador</span> ou arraste
                    e solte
                  </p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">
                    SVG, PNG, JPG or GIF (MAX. 800x400px)
                  </p>
                </div>

                <input
                  id="dropzone-file"
                  type="file"
                  multiple
                  class="hidden"
                  @change="onPhotosSelected('photos', $event)"
                  accept="image/*"
                />
              </label>
            </div>
          </div>
          <div v-else v-if="step == 1">
            <div v-if="selectedImages != null || selectedImages.length != 0">
              <img v-for="image in selectedImages" :key="image" :src="image" alt="" />
            </div>
          </div>
          <div e v-if="step == 2">
            <input type="text" v-model="form.title" />
          </div>
          <!-- Modal footer -->
        </form>
      </div>
    </div>
  </div>
</template>
<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const step = ref(1);
const selectedImages = ref([]);

const showModal = ref(false);

const openModal = () => {
  showModal.value = true;
};

const confirmGoBack = () => {
  goBack();
  showModal.value = false;
};

const goBack = () => {
  selectedImages.value = [];
  //   step.value--;
};

const onPhotosSelected = (key, event) => {
  const files = event.target.files;
  if (files.length > 0) {
    if (files.length > 10) {
      alert("Por favor, selecione no máximo 10 arquivos.");
      return;
    }
    for (let i = 0; i < files.length; i++) {
      const file = files[i];
      const reader = new FileReader();
      if (!file.type.startsWith("image/")) {
        alert("Por favor, selecione apenas arquivos de imagem.");
        continue;
      }
      reader.onload = (e) => {
        selectedImages.value.push(e.target.result);
      };
      reader.readAsDataURL(file);
      form[key] = files;
    }
  }
};

// const onPhotosSelected = (key, event) => {
//   const files = event.target.files;
//   if (files.length > 0) {
//     if (files.length > 10) {
//       alert("Por favor, selecione no máximo 10 arquivos.");
//       return;
//     }
//     for (let i = 0; i < files.length; i++) {
//       const file = files[i];
//       if (file.size > 3 * 1024 * 1024) {
//         alert(`O arquivo ${file.name} excede o tamanho máximo de 3MB.`);
//         return;
//       }
//       //   if (file.type !== "application/pdf") {
//       //     alert(`O arquivo ${file.name} não é um arquivo PDF válido.`);
//       //     return;
//       //   }
//     }
//     form[key] = files;
//   }
// };

const form = useForm({
  _method: "POST",
  title: "",
  photos: [],
});

const submit = () => {
  form.post(route("create.publication"), {
    headers: {
      "Content-Type": "multipart/form-data",
    },
  });
};
</script>
