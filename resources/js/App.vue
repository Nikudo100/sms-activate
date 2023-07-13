<template>
  <div>
    111111111
    <div v-for="i in info.countries" :key="i" class="card-body">
      <tr>
        <th style="width: 20%">{{ i.id }}</th>
        <td style="text-align: left">
          <p>{{ i.rus }}</p>
        </td>
      </tr>
    </div>
    <!-- {{ info }} -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      info: { countries: [] },
    };
  },
  beforeCreate() {
    axios
      .get("/api/numbers")
      .then((response) => (this.info = response.data.data));
  },
};
</script>
<style lang="">
</style>