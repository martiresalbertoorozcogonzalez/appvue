<template>



<div class="container-fluid gedf-wrapper mt-5">


<div class="row">


<div class="col-md-3">
    <div class="card">
        <div class="card-body">
            <div class="h5">@LeeCross</div>
            <div class="h7 text-muted">Fullname : Miracles Lee Cross</div>
            <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                etc.
            </div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="h6 text-muted">Followers</div>
                <div class="h5">5.2342</div>
            </li>
            <li class="list-group-item">
                <div class="h6 text-muted">Following</div>
                <div class="h5">6758</div>
            </li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
</div>

<div class="col-md-6 gedf-main">

    <!--- \\\\\\\Post-->
    <div class="card gedf-card">
        <div class="card-header">
             
          <div class="h7 text-muted">Crear Post</div>
        </div>
        <div class="card-body">
            
<div class="d-flex justify-content-between align-items-center" @click="newModalPost">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-2">
                        <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="h7 text-muted">Publica un Post ?</div>
                    </div>
                </div>
               
            </div>

            
        </div>
        <div class="card-footer">
               
        </div>
    </div>
    <!-- Post /////-->
 
    
    <form @submit.prevent="editmode ? updatePost() : creatPost()">

    <!-- Modal -->
	<div class="modal fade" id="addNewPost" tabindex="-1" role="dialog" aria-labelledby="addNewPostLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" v-show="!editmode" id="addNewPostLabel">What do you think?</h5>
	        <h5 class="modal-title" v-show="editmode" id="addNewPostLabel">Update Post !</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="form-group">
                <input v-model="form.postName" type="text" name="postName" placeholder="postName" class="form-control" :class="{'is-invalid': form.errors.has('postName') }">
                <has-error :form="form" field="postName"></has-error>  
	        </div>
<div class="form-group">
<textarea v-model="form.postDescription" type="textarea" name="postDescription" placeholder="postDescription" class="form-control" :class="{'is-invalid': form.errors.has('postDescription') }"></textarea>
<has-error :form="form" field="postDescription"></has-error>  
</div>	

	      
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        <button v-show="editmode" type="submit" class="btn btn-success">Editar</button>
	        <button v-show="!editmode" type="submit" class="btn btn-primary">Crear</button>
	      </div>
	    </div>
	  </div>
	</div>
 
    </form>
    
<!--- \\\\\\\Post y toda la dat que viene de la base de datos Mysql y laravel-->
<div class="card gedf-card" v-for="post in posts" :key="post.id">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mr-2">
                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                </div>
                <div class="ml-2">
                    <div class="h5 m-0">@LeeCross</div>
                    <div class="h7 text-muted">Miracles Lee Cross</div>
                </div>
            </div>
            <div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-h"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                       
                        <a class="dropdown-item" href="#" @click="editModalPost(post)">Edit</a>
                        <a class="dropdown-item" href="#" @click="deletePost(post.id)">Delete</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card-body">
        
        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{ post.created_at | myDate }}</div>
        <a class="card-link" href="#">
            <h5 class="card-title">{{ post.postName | upText }}</h5>
        </a>

        <p class="card-text">
            {{ post.postDescription }}
        </p>
         
        <span class="badge badge-primary">Android</span>
        <span class="badge badge-primary">PHP</span>
        <span class="badge badge-primary">Node.js</span>
        <span class="badge badge-primary">Ruby</span>
        <span class="badge badge-primary">Paython</span>
        <span class="badge badge-primary">JavaScript</span>
        
           

    </div>
    <div class="card-footer">
        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
    </div>
</div>
<!-- Post /////-->

</div>

<div class="col-md-3">
    <div class="card gedf-card">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
    <div class="card gedf-card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
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
	editmode : false,
	posts : {},
	form: new Form({
        id : '',
		postName : '',
		postDescription : ''
	})
}
},
methods: {
updatePost(){
  this.$Progress.start();
  // console.log('Editing data');    
  this.form.put('api/post/'+this.form.id)
  .then(()=>{

     //succes
    $('#addNewPost').modal('hide');
     swal(
          'Updated!',
          'Post has been Updated.',
          'success'
         )
         this.$Progress.finish();
         Fire.$emit('AfterCreate');                    
  })
  .catch(()=>{
    this.$Progress.fail();   
  });   

},	 
editModalPost(post){
    this.editmode =true;
    this.form.reset();
    $('#addNewPost').modal('show');
     this.form.fill(post);
},
newModalPost(){
    this.editmode =false;
    this.form.reset();
    $('#addNewPost').modal('show');
},	
deletePost(id){
 swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      
      // Send request to the server
  if (result.value) {
      this.form.delete('api/post/'+id).then(()=>{
        swal(
          'Deleted!',
          'Your file has been deleted.',
          'success'
         )
    Fire.$emit('AfterCreate');                    
    }).catch(()=>{
         swal("Failed!", "There was something wronge.", "warning");
    });
  }
})
}, 	 
loadPosts(){
    axios.get("api/post").then(({ data }) => (this.posts = data));
},	

creatPost(){
	this.$Progress.start();

	this.form.post('api/post')
    .then(()=>{
    Fire.$emit('AfterCreate'); 
  
    $('#addNewPost').modal('hide')
   
    toast({
        type: 'success',
        title: 'Post created in successfully'
      })

    this.$Progress.finish();
    
    })
    .catch(()=>{
      
    })
    
}    
},

created() {
 this.loadPosts();
 Fire.$on('AfterCreate',() => {
     this.loadPosts();
 });
 //setInterval(() => this.loadPosts(), 3000);
}
}
</script>
