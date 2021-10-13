// Prima Milestone:
// Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
// Seconda Milestone:
// Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
// Bonus:
// Attraverso un’altra chiamata api, filtrare gli album per genere


var app = new Vue({
    el: '#app',
    data() {
        return {
            endPoint: "api.php",
            albums: [],
            genres: [],
            selected: ' ',
        }
    },
    created() {
        this.getData();

    },
    methods: {
        getData() {
            axios
                .get(this.endPoint)
                .then(res => {
                    this.albums = res.data;
                    this.albums.forEach(album => {
                        (!this.genres.includes(album.genre)) ? this.genres.push(album.genre): null;

                    });
                    // Popolo la select
                    // this.populateSelect();
                });

        },
        // "deprecata"
        populateSelect() {
            const search = document.getElementById("genre");
            search.innerHTML = ` `;
            this.genres.forEach((type) => {
                search.innerHTML += `
               <option value="${type}">${type.toUpperCase()}</option>    
          `
            });
        },
        search(event){
            this.selected = event.target.value;
            axios
                .get(this.endPoint)
                .then(res => {
                    this.albums = res.data;
                   

                })

            console.log(this.selected);
        }
    }
})