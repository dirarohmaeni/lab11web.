const Login = {

template:`

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h4>Login User</h4>

</div>

<div class="card-body">

<div class="mb-3">

<label>Email</label>

<input
type="email"
class="form-control"
v-model="email">

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
class="form-control"
v-model="password">

</div>

<button
class="btn btn-primary w-100"
@click="login">

Login

</button>

</div>

</div>

</div>

</div>

</div>

`,

data(){

return{

email:"",
password:""

}

},

methods:{

login(){

    axios.post("http://localhost:8080/login",{

        useremail:this.email,

        userpassword:this.password

    })

    .then((res)=>{

        if(res.data.status==200){

            // Status Login
            localStorage.setItem("isLoggedIn","true");

            // Token (sementara sesuai praktikum)
            localStorage.setItem("userToken","token123456");

            // Simpan data user jika ada
            if(res.data.user){
                localStorage.setItem(
                    "user",
                    JSON.stringify(res.data.user)
                );
            }

            alert("Login berhasil");

            router.push("/artikel");

        }else{

            alert(res.data.message);

        }

    })

    .catch((err)=>{

        console.log(err);

        alert("Login gagal");

    });

}
}
}