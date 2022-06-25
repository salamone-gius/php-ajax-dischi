const app = new Vue({
    el: '#app',

    data: {
        albums: {},
    },

    created() {
        axios.get('http://localhost/D-Dischi/php-ajax-dischi/server/api.php')
        .then((response) => {
            this.albums = response.data;
            console.log(this.albums);
        })
        .catch((error) => {
            // console.log(error);
        })
    }
}) 