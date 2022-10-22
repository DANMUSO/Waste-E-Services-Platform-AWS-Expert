<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row card-header justify-content-center">
                        <div class="col-md-10">
                            <div>Solid Waste Products</div>
                        </div>
                        <div class="col-md-2">
                          

                            <!-- Modal -->
                            <div class="modal fade" id="addNew" tabindex="-1" role="dialog"
                                aria-labelledby="addNewTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" v-show="!editmode" id="exampleModalLongTitle">Add
                                                post</h5>
                                            <h5 class="modal-title" v-show="editmode" id="exampleModalLongTitle">Update
                                                post's details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form @submit.prevent="editmode ? updatePost() : addPost()">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Title</label>
                                                        <input type="text" name="title" v-model="form.title"
                                                            class="form-control" placeholder="Title">
                                                        <div v-if="form.errors.has('title')"
                                                            v-html="form.errors.get('title')" style="color:red;" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Post Body</label>
                                                        <input type="text" name="body" v-model="form.body"
                                                            class="form-control" placeholder="Post Body">
                                                        <div v-if="form.errors.has('body')"
                                                            v-html="form.errors.get('body')" style="color:red;" />
                                                    </div>
                                                </div>
                                                <button v-show="editmode" type="submit"
                                                    class="btn btn-success">Update</button>
                                                <button v-show="!editmode" type="submit"
                                                    class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example1_filter" class="dataTables_filter">
                                        <label>Search by ID:<input type="search" v-model="keyword"
                                                class="form-control form-control-sm" placeholder="Search by ID"
                                                aria-controls="example1"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                            role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>Id</th>
                                                    <th>Sellers</th>
                                                    <th>Solid Waste Type</th>
                                                    <th>Quantity</th>
                                                    <th>Location</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                <td>1</td>
                                                <td>Nema</td>
                                                <td>Prastics</td>
                                                <td>45 Tonnes</td>
                                                <td>Dandora</td>
                                                <td>2022-10-20</td>
                                                <td><button type="button"  class="btn btn-warning" aria-label="Left Align">
                                                    Send SMS
                                                </button></td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>2</td>
                                                    <td>Enviromental Advocate</td>
                                                    <td>Cottons</td>
                                                    <td>100 Tonnes</td>
                                                    <td>Westlands</td>
                                                    <td>2022-10-20</td>
                                                    <td><button type="button"  class="btn btn-warning" aria-label="Left Align">
                                                        Send SMS
                                                    </button></td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>3</td>
                                                    <td>Water Resourcs Authority</td>
                                                    <td>Prastics & Cottons</td>
                                                    <td>405 Tonnes</td>
                                                    <td>Parklands</td>
                                                    <td>2022-10-20</td>
                                                    <td><button type="button" class="btn btn-warning" aria-label="Left Align">
                                                        Send SMS
                                                    </button>
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr role="row">
                                                    <th>Id</th>
                                                    <th>Sellers</th>
                                                    <th>Solid Waste Type</th>
                                                    <th>Quantity</th>
                                                    <th>Location</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            keyword: null,
            editmode: false,
            posts: {},
            form: new Form({
                id: '',
                title: '',
                body: ''
            })
        }
    },
    watch: {
        keyword(after, before) {
            this.loadposts();
        }
    },
    methods: {
        updatePost() {
            this.$Progress.start();
            this.form.put('api/posts/' + this.form.id).then(() => {
                toast.fire({
                    icon: 'success',
                    title: 'Updated successfully'
                })
            }).catch(() => {
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
        loadposts() {
            axios.get("api/posts", { params: { keyword: this.keyword } }).
                then(({ data }) => (this.posts = data.data))
        },
        addPost() {
            this.$Progress.start();
            this.form.post('api/posts').then(() => {
                toast.fire({
                    icon: 'success',
                    title: 'Added successfully'
                })
            }).catch(() => {

            })
            this.$Progress.finish();

        },
        deletePost(id) {
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                if (result.isConfirmed) {
                    this.form.delete('api/posts/' + id);
                    swal.fire(
                        'Deleted!',
                        'Post has been deleted.',
                        'success'
                    )
                }
            })

        }
    },
    created() {
        this.loadposts();
        setInterval(() => this.loadposts(), 4000);
    }
}
</script>
