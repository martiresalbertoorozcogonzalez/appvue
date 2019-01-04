<template>
   <div class="container">
        <div class="row mt-5" v-if="$gate.isAdminOrAuthor()">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Post Table</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newPost">Add New<i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>

                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>DescriptioPost</th>
                  </tr>
                  
                  <tr v-for="" :key="">
                    <td>Titulo1</td>
                    <td>Description uno</td>
                    <td>
                        <a href="#" @click="">
                            <i class="fas fa-edit blue"></i>
                        </a>
                        
                        <a href="#" @click="">
                            <i class="fas fa-trash red"></i>
                        </a>
                    </td>
                  </tr>
                  
                  
                </tbody></table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                 <pagination :data="users" 
                  @pagination-change-page="getResults">
                 </pagination>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>

    <div v-if="!$gate.isAdminOrAuthor()">
      <not-found></not-found>
    </div>  
        
<!-- Modal -->
<div class="modal fade" id="#" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Update User's Info</h5>
        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Add New</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form">

      <div class="modal-body">
        <div class="form-group">
          <input type="text" name="title"
            placeholder="title" 
            class="form-control">
        </div>

      

        <div class="form-group">
          <textarea  name="Descriptionn" id="Descriptionn"
            placeholder="Descriptio" 
            class="form-control"></textarea>
        </div>

      
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
        <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
      </div>

      </form>

    </div>
  </div>
</div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
