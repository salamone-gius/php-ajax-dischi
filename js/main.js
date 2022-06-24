const app = new Vue({
    el: '#app',

    data: {
        albums: [],
    },

    created() {
        axios.get('http://localhost/D%20-%20Dischi/php-ajax-dischi/server/api.php')
        .then((response) => {
          this.albums = response.data;
          console.log(typeof this.albums);
        })
        .catch((error) => {
          console.log(error);
        })
    }
}) 