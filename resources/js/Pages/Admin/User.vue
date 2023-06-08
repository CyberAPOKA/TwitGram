<template>
  <Sidebar></Sidebar>

  <div class="p-4 sm:ml-64">
    <div
      class="p-4 my-10 mx-10 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
    >
      <div class="text-center py-4 font-bold text-3xl">
        <span>Dados pessoais</span>
      </div>
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <InputLabel
            for="first_name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >E-mail</InputLabel
          >
          <TextInput
            type="text"
            id="first_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.email"
            disabled
          />
        </div>
        <div>
          <InputLabel
            for="name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Nome completo</InputLabel
          >
          <TextInput
            type="text"
            id="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.profile.name"
            disabled
          />
        </div>
      </div>
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <InputLabel
            for="first_name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Data de nascimento</InputLabel
          >
          <TextInput
            type="date"
            id="first_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.profile.birth_date"
            disabled
          />
        </div>
        <div>
          <InputLabel
            for="first_name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Nome da mãe</InputLabel
          >
          <TextInput
            type="text"
            id="first_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.profile.mothers_name"
            disabled
          />
        </div>
      </div>
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <InputLabel class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >CPF</InputLabel
          >
          <TextInput
            type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.profile.cpf"
            v-mask="['###.###.###-##']"
            disabled
          />
        </div>
        <div>
          <InputLabel class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Documento de identificação</InputLabel
          >
          <TextInput
            type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.profile.identification_document"
            v-mask="['###.###.###-##']"
            disabled
          />
        </div>
      </div>
      <div class="text-center py-4 font-bold text-3xl">
        <span>Endereço</span>
      </div>
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <InputLabel class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Estado</InputLabel
          >
          <TextInput
            type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.address.state"
            disabled
          />
        </div>
        <div>
          <InputLabel class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Cidade</InputLabel
          >
          <TextInput
            type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.address.city"
            disabled
          />
        </div>
      </div>
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <InputLabel class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >CEP</InputLabel
          >
          <TextInput
            type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.address.zip_code"
            v-mask="['#####-###']"
            disabled
          />
        </div>
        <div>
          <InputLabel class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Endereço</InputLabel
          >
          <TextInput
            type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.address.address"
            disabled
          />
        </div>
      </div>
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <InputLabel class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Número</InputLabel
          >
          <TextInput
            type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            v-model="user.address.number"
            disabled
          />
        </div>
      </div>
      <div class="text-center py-4 font-bold text-xl">
        <div class="flex justify-center gap-4 pb-12">
          <p>Baixar todos os arquivos</p>
          <a class="cursor-pointer" @click="downloadUserFiles(user.id)">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-8 h-8"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25"
              /></svg
          ></a>
        </div>

        <span>Arquivos únicos</span>
        <div class="grid pb-12">
          <div class="relative z-0 w-full mb-6 group">
            <div class="relative overflow-x-auto py-4">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                >
                  <tr>
                    <th scope="col" class="px-6 py-3">NOME DO ARQUIVO</th>
                    <th scope="col" class="px-6 py-3">Tipo</th>
                    <th scope="col" class="px-6 py-3">Download</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    v-for="file in files.filter(
                      (file) => file.type !== 'courses' && file.type !== 'receipts'
                    )"
                    :key="file.id"
                  >
                    <th
                      scope="row"
                      class="w-2/4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                      {{ file.name }}
                    </th>
                    <td class="px-6 py-4">
                      {{ file.type }}
                    </td>
                    <td class="px-6 py-4">
                      <a
                        @click="downloadFile(user.id, file.name, file.file_path)"
                        class="cursor-pointer"
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
                            d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25"
                          />
                        </svg>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <span>Arquivos atuais de Certificados de Cursos e Capacitações</span>
        <div class="grid pb-12">
          <div class="relative z-0 w-full mb-6 group">
            <div class="relative overflow-x-auto py-4">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                >
                  <tr>
                    <th scope="col" class="px-6 py-3">NOME DO ARQUIVO</th>
                    <th scope="col" class="px-6 py-3">Tipo</th>
                    <th scope="col" class="px-6 py-3">Download</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    v-for="file in files.filter((file) => file.type == 'courses')"
                    :key="file.id"
                  >
                    <th
                      scope="row"
                      class="w-2/4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                      {{ file.name }}
                    </th>
                    <td class="px-6 py-4">
                      {{ file.type }}
                    </td>
                    <td class="px-6 py-4">
                      <a
                        @click="downloadFile(user.id, file.name, file.file_path)"
                        class="cursor-pointer"
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
                            d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25"
                          />
                        </svg>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        Arquivos atuais de Certificados de Cursos e Capacitações
        <div class="grid pb-12">
          <div class="relative z-0 w-full mb-6 group">
            <div class="relative overflow-x-auto py-4">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                >
                  <tr>
                    <th scope="col" class="px-6 py-3">NOME DO ARQUIVO</th>
                    <th scope="col" class="px-6 py-3">Tipo</th>
                    <th scope="col" class="px-6 py-3">Download</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    v-for="file in files.filter((file) => file.type == 'receipts')"
                    :key="file.id"
                  >
                    <th
                      scope="row"
                      class="w-2/4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                      {{ file.name }}
                    </th>
                    <td class="px-6 py-4">
                      {{ file.type }}
                    </td>
                    <td class="px-6 py-4">
                      <a
                        @click="downloadFile(user.id, file.name, file.file_path)"
                        class="cursor-pointer"
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
                            d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25"
                          />
                        </svg>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Sidebar from "@/Pages/Admin/Layout/Sidebar.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

const props = defineProps({
  user: Object,
  files: Array,
});

function downloadFile(userId, name, file_path) {
  const user_id = userId;
  const file_path_without_curriculums = file_path.replace(`curriculums/${user_id}/`, "");
  //   event.preventDefault();
  const file_original_name = name;
  window.location.href = `/admin/user/download/file/${user_id}/${file_path_without_curriculums}/${file_original_name}`;
}

function downloadUserFiles(userId) {
  const user_id = userId;
  const url = `/admin/user/download/file/${user_id}`;
  window.location.href = url;
}
</script>
<script>
import { mask } from "vue-the-mask";
export default {
  directives: { mask },
};
</script>
