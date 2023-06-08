<template>
  <v-app>
    <v-container>
      <v-data-table
        :items-per-page="itemsPerPage"
        :headers="headers"
        :items="desserts"
        item-value="name"
        class="elevation-1"
      >
      </v-data-table>
    </v-container>
  </v-app>
</template>

<script setup>
import { VDataTable } from "vuetify/labs/VDataTable";

const headers = [
  { title: "Name", key: "name" },
  { title: "Calories", key: "calories" },
  { title: "Fat (g)", key: "fat" },
  { title: "Carbs (g)", key: "carbs" },
  { title: "Protein (g)", key: "protein" },
];

const desserts = [
  { name: "Frozen Yogurt", calories: 1, fat: 1.0, carbs: 24, protein: 4.0 },
  { name: "Ice cream sandwich", calories: 2, fat: 2.0, carbs: 37, protein: 4.3 },
  { name: "Eclair", calories: 3, fat: 3.0, carbs: 24, protein: 6.0 },
  { name: "Cupcake", calories: 4, fat: 4.0, carbs: 67, protein: 4.3 },
  { name: "Gingerbread", calories: 5, fat: 5.0, carbs: 49, protein: 3.9 },
  { name: "Frozen Yogurt", calories: 1, fat: 1.0, carbs: 24, protein: 4.0 },
];

let itemsPerPage = 5;
</script>

<style>
.v-btn--icon[aria-label="First page"],
.v-btn--icon[aria-label="Previous page"],
.v-btn--icon[aria-label="Next page"],
.v-btn--icon[aria-label="Last page"] {
  background-color: black;
}
</style>
