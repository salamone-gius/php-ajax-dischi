const app = new Vue({
    el: '#app',

    data: {
        albums: [],
    },

    created() {
        axios.get('http://localhost/D%20-%20Dischi/php-ajax-dischi/server/api.php')
        .then((response) => {
            // console.log(typeof response.data);
            // JSON.parse('response.data');
            // console.log(typeof response.data);
            this.albums = response.data;
            console.log(this.albums);
        })
        .catch((error) => {
            console.log(error);
        })
    }
}) 