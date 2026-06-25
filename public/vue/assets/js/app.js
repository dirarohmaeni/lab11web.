// ======================================================
// AXIOS INTERCEPTORS
// ======================================================

axios.interceptors.request.use(

(config)=>{

const token = localStorage.getItem("userToken");

if(token){

config.headers["Authorization"] = "Bearer " + token;

}

return config;

},

(error)=>{

return Promise.reject(error);

}

);

axios.interceptors.response.use(

(response)=>{

return response;

},

(error)=>{

if(error.response && error.response.status===401){

alert("Sesi telah berakhir, silakan login kembali.");

localStorage.clear();

window.location.href="#/login";

window.location.reload();

}

return Promise.reject(error);

}

);

// ======================================================
// ROUTER
// ======================================================

const routes=[

{
path:'/',
component:Home
},

{
path:'/login',
component:Login
},

{
path:'/artikel',
component:Artikel,
meta:{requiresAuth:true}
},

{
path:'/about',
component:About
}

];

const router = VueRouter.createRouter({

history:VueRouter.createWebHashHistory(),

routes

});

router.beforeEach((to,from,next)=>{

const isAuthenticated =
localStorage.getItem("isLoggedIn")==="true";

if(

to.matched.some(

record=>record.meta.requiresAuth

)

&& !isAuthenticated){

alert("Silakan login terlebih dahulu.");

next("/login");

}else{

next();

}

});

// ======================================================
// VUE APP
// ======================================================

const app = Vue.createApp({

    data() {

        return {

            title: "Portal Artikel",

            isLoggedIn: false

        };

    },

    mounted() {

        this.isLoggedIn =
            localStorage.getItem("isLoggedIn") === "true";

    },

    methods: {

        logout() {

            if (confirm("Apakah Anda yakin ingin logout?")) {

                localStorage.clear();

                this.isLoggedIn = false;

                this.$router.push("/");

            }

        }

    }

});

app.use(router);

app.mount("#app");