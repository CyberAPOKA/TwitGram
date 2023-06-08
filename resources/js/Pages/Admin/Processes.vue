<template>
  <Sidebar></Sidebar>

  <div class="p-4 sm:ml-64">
    <div
      class="p-4 my-10 mx-10 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
    >
      <Form @submit="submit" class="space-y-6">
        <div class="grid gap-6 md:grid-cols-2">
          <div>
            <label
              for="name"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >Nome</label
            >
            <Field
              type="text"
              id="name"
              name="name"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Nome do Processo Seletivo"
              v-model="form.name"
            />
            <ErrorMessage name="name" />
          </div>
          <div>
            <label
              for="group"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >Grupo</label
            >
            <input
              type="text"
              id="group"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Nome do Processo Seletivo"
              v-model="admin.type"
              readonly
            />
          </div>
          <div>
            <label
              for="initial_date"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >Data Inicial</label
            >
            <Field
              type="date"
              name="initial_date"
              id="initial_date"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              v-model="form.initial_date"
            />
            <ErrorMessage name="initial_date" />
          </div>
          <div>
            <label
              for="final_date"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >Data Final</label
            >
            <Field
              type="date"
              name="final_date"
              id="final_date"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              v-model="form.final_date"
            />
            <ErrorMessage name="final_date" />
          </div>
          <div>
            <label
              for="result_date"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >Data de Resultados</label
            >
            <Field
              type="date"
              name="result_date"
              id="result_date"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              v-model="form.result_date"
            />
            <ErrorMessage name="result_date" />
          </div>
        </div>
        <div class="flex w-full justify-end">
          <PrimaryButton
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Criar
          </PrimaryButton>
        </div>
      </Form>
    </div>
  </div>
</template>

<script setup>
import Sidebar from "@/Pages/Admin/Layout/Sidebar.vue";
import { Field, Form, ErrorMessage } from "vee-validate";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const props = defineProps({
  admin: Object,
});

const form = useForm({
  name: "",
  initial_date: "",
  final_date: "",
  result_date: "",
});

const submit = () => {
  form.post(route("admin.process.create"));
};
</script>
