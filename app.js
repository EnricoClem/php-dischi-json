const { createApp } = Vue

createApp({
  data() {
    return {
        allAlbum: []
    }
  },
  methods: {
    fetchData() {
        axios.get('server.php').then((res) => {
            this.allAlbum = res.data.results;
        })
    }
  },
  created() {
    this.fetchData()
  }
}).mount('#app')