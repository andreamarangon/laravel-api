let app = new Vue({
  el: '#app',
  data: {
    games: []
  },
  created() {
    axios.get('http://localhost:8000/api/games').then((response) => {
      console.log(response);
      this.games = response.data.data;
    })
  }
});
