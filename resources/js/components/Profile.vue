<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row card-header justify-content-center">
                   <div class="col-md-10">
                    <div >Solid Waste Bidders</div>
                    </div>
                    <div class="col-md-2">
                    <!-- Modal -->
                    <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" v-show="!editmode" id="exampleModalLongTitle">Add post</h5>
                            <h5 class="modal-title" v-show="editmode" id="exampleModalLongTitle">Update post's details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                         <form @submit.prevent="editmode ? updatePost() : addPost()">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" v-model="form.name" class="form-control" placeholder="Name">
                            <div v-if="form.errors.has('name')" v-html="form.errors.get('name')" style="color:red;"/>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Post Body</label>
                            <input type="text" name="email" v-model="form.email" class="form-control" placeholder="Email">
                           <div v-if="form.errors.has('email')" v-html="form.errors.get('email')" style="color:red;"/>
                            </div>
                        </div>
                        <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
                        <button v-show="!editmode" type="submit" class="btn btn-primary"></button>
                        </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="card-body">
              <div id="example1_wrapper" 
              class="dataTables_wrapper dt-bootstrap4">
              <div class="row">

              </div><div class="row"><div class="col-sm-12">
                  <div class="table-responsive">
                      
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                 <tr role="row">
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <tr class="odd" v-for="profile in profiles" :key="profile.id">
                    <td>{{profile.id}}</td>
                    <td>{{profile.name}}</td>
                    <td>{{profile.email}}</td>
                    <td>{{profile.phone}}</td>
                    <td>{{profile.created_at |myDate}}</td>
                    <td><button type="button" @click="EditModal(profile)" class="btn btn-warning" aria-label="Left Align">
                    Send SMS
                    </button> </td>
                  </tr>
                </tbody>
                <tfoot>
                <tr role="row">
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Action</th>
                  </tr>
                </tfoot>
              </table>
              </div></div></div></div>
            </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                editmode: false,
                profiles: {},
                form: new Form({
                    id : '',
                    name: '',
                    email: '',
                    phone: ''
                })
            }
        },
        methods: {
            updatePost() {
                this.$Progress.start();
                this.form.put('api/profile/'+this.form.id).then(() => {
                     toast.fire({
                    icon: 'success',
                    title: 'Updated successfully'
                })
                }).catch(() =>{
                    this.$Progress.fail();
                })
            },
            EditModal(post) {
            this.editmode = true;
            $('#addNew').modal('show');
            this.form.fill(post);
            },
            newModal() {
                this.editmode = false;
                $('#addNew').modal('show');
            },
            loadprofile(){
                axios.get("api/profile").then(({ data }) => (this.profiles = data.data))
            },
            addPost() {
                this.$Progress.start();
                this.form.post('api/profile').then(() =>{
                   toast.fire({
                    icon: 'success',
                    title: 'Added successfully'
                })
                }).catch(() => {
                    
                })
                this.$Progress.finish();
                
            }
        },
        created() {
            this.loadprofile();
            setInterval(() => this.loadprofile(), 4000);
        }
    }
</script>
