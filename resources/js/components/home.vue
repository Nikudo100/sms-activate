<template>
  <div class="row">
    <div class="col-md-6" id="country">
      <h1>Выберите страну</h1>
      <table>
        <thead>
          <tr>
            <!-- <th style="width: 20%">Номер страны</th> -->
            <th style="text-align: left">Название</th>
          </tr>
        </thead>
        <!-- <tbody> -->
        <!-- {{
            info
          }} -->
        <!-- <model-select 
              v-if="info.length"
              :options="info"
              v-model="item"
              placeholder="placeholder text"
              @searchchange="printSearchText"
            >
            </model-select> -->
        <!-- {{
          info
        }} -->
        <input type="text" v-model="search" @keyup="inputClick()" />
        {{
          search
        }}
        <br />
        <div v-show="show">
          <div
            v-for="counry in info"
            @click="getServices(counry.id, counry.rus)"
            :key="counry.rus"
          >
            {{ counry.rus }}
          </div>
          <!-- {{ info }} -->
          <!-- @click="getServices(item.value)" э -->
        </div>
        <!-- </tbody> -->
      </table>
    </div>
    <!-- <div v-if="info2 != null" class="col-md-6">
      <h1>Cервис и кл-во номеров по стране {{ info.countries[id].rus }}</h1>
      <tr v-for="(i, index) in info2" :key="i.keys">
        <th>Cервис "{{ index }}" кл-во номеров: {{ i }}</th>
        <br />
      </tr>
    </div> -->
  </div>
</template>
  <script>
// import 'vue-select/dist/vue-select.css';
export default {
  data() {
    return {
      show: false,
      search: "",
      options: ["foo", "bar", "baz"],
      info: [],
      id: 0,
      info2: [],
      searchText: "",
      item: {
        value: "",
        text: "",
      },
    };
  },
  // async
  beforeCreate() {
    // await
    axios.get("/api/numbers").then((response) => {
      this.info = response.data;
      this.info2 = response.data;
    });
  },
  // computed: {
  // },
  methods: {
    filteredList(info) {
      let serchebl = this.search.toLowerCase();

      return info.filter((counry) => {
        return counry.rus.toLowerCase().includes(serchebl);
      });
    },
    inputClick() {
      
      this.show = true;
      this.info = this.filteredList(this.info);
      if (!this.search.length) {
        this.info = this.info2;
      }
    },
    getServices(id, rus) {
      this.search = rus;
      this.show = !this.show;
      this.id = id;
      axios
        .get(`api/services/` + id)
        .then((response) => (this.info2 = response.data));
    },
    printSearchText(searchText) {
      this.searchText = searchText;
    },
  },
};
</script>