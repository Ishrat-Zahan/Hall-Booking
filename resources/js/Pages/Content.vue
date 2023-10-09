<script setup>
import Welcome from "@/Welcome.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
</script>

<template>
  <Head>
    <title>Welcome to Dashboard</title>
    <meta name="description" content="my custom SEO content" />
  </Head>

  <welcome>

    <h1>body</h1>
  </welcome>
</template>