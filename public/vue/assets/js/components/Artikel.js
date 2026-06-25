const apiUrl = "http://localhost:8080/post";

const Artikel = {

template:`

<div class="container">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2>Artikel VueJS</h2>

<button
class="btn btn-primary"
@click="resetForm()"
data-bs-toggle="modal"
data-bs-target="#modalArtikel">

+ Tambah Artikel

</button>

</div>

<!-- Modal -->

<div class="modal fade" id="modalArtikel" tabindex="-1">

<div class="modal-dialog modal-lg">

<div class="modal-content">

<div class="modal-header bg-primary text-white">

<h4 class="modal-title">

{{ editMode ? 'Edit Artikel' : 'Tambah Artikel' }}

</h4>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<div class="mb-3">

<label>Judul</label>

<input
type="text"
class="form-control"
v-model="form.judul">

</div>

<div class="mb-3">

<label>Isi Artikel</label>

<textarea
rows="5"
class="form-control"
v-model="form.isi">
</textarea>

</div>

<div class="mb-3">

<label>Status</label>

<select
class="form-select"
v-model="form.status">

<option value="0">Draft</option>
<option value="1">Publish</option>

</select>

</div>

</div>

<div class="modal-footer">

<button
class="btn btn-secondary"
data-bs-dismiss="modal">

Tutup

</button>

<button
v-if="!editMode"
class="btn btn-primary"
@click="simpanData">

Simpan

</button>

<button
v-else
class="btn btn-success"
@click="updateData">

Update

</button>

</div>

</div>

</div>

</div>

<div class="card shadow">

<div class="card-header bg-dark text-white">

<h4 class="mb-0">

Daftar Artikel

</h4>

</div>

<div class="table-responsive">

<table class="table table-striped table-hover mb-0">

<thead class="table-primary">

<tr>

<th>ID</th>
<th>Judul</th>
<th>Isi Artikel</th>
<th>Status</th>
<th width="170">Aksi</th>

</tr>

</thead>

<tbody>

<tr
v-for="item in artikel"
:key="item.id">

<td>{{item.id}}</td>

<td>{{item.judul}}</td>

<td>{{item.isi}}</td>

<td>

<span
v-if="item.status==1"
class="badge bg-success">

Publish

</span>

<span
v-else
class="badge bg-warning text-dark">

Draft

</span>

</td>

<td>

<button
class="btn btn-warning btn-sm me-2"
@click="editData(item)">

Edit

</button>

<button
class="btn btn-danger btn-sm"
@click="hapusData(item.id)">

Hapus

</button>

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>
`,
data(){

return{

artikel:[],

editMode:false,

form:{

id:"",
judul:"",
isi:"",
status:0

}

}

},

mounted(){

this.loadData();

},

methods:{

loadData(){

axios.get(apiUrl)

.then(res=>{

this.artikel=res.data.artikel;

});

},

simpanData(){

axios.post(apiUrl,{

judul:this.form.judul,

isi:this.form.isi,

status:this.form.status

})

.then(()=>{

alert("Data berhasil ditambahkan");

this.loadData();

bootstrap.Modal.getInstance(
document.getElementById("modalArtikel")
).hide();

this.resetForm();

});

},

editData(item){

this.editMode=true;

this.form.id=item.id;

this.form.judul=item.judul;

this.form.isi=item.isi;

this.form.status=item.status;

new bootstrap.Modal(
document.getElementById("modalArtikel")
).show();

},

updateData(){

axios.put(apiUrl+"/"+this.form.id,{

judul:this.form.judul,

isi:this.form.isi,

status:this.form.status

})

.then(()=>{

alert("Data berhasil diupdate");

this.loadData();

bootstrap.Modal.getInstance(
document.getElementById("modalArtikel")
).hide();

this.resetForm();

});

},

hapusData(id){

if(!confirm("Yakin ingin menghapus data?")) return;

axios.delete(apiUrl+"/"+id)

.then(()=>{

alert("Data berhasil dihapus");

this.loadData();

});

},

resetForm(){

this.editMode=false;

this.form={

id:"",

judul:"",

isi:"",

status:0

};

}

}

};