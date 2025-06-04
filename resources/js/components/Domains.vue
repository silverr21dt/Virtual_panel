<template>
  <div>
    <h2>Domény</h2>
    <ul>
      <li v-for="domain in domains" :key="domain.name">
        {{ domain.name }} – {{ domain.status }}
      </li>
    </ul>
  </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'

const domains = ref([])

onMounted(async () => {
  const res = await fetch('/api/virtualmin/domains')
  const data = await res.json()
  domains.value = data.data
})
</script>
