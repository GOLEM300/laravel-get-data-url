<template>
  <div class="container">
    <div v-for="good in goods"></div>
    <h1>{{ good }}</h1>
  </div>
</template>

<script>
export default {
  data() {
    return {
      goods: [],
    };
  },
  mounted() {
    this.loadGoods();
  },
  methods: {
    async loadGoods() {
      await fetch("http://localhost/api/index")
        .then((response) => {
          response.json().then((data) => {
            this.goods = data.data;
            console.log(this.goods);
          });
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>
