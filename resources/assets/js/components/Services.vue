<template>
	<div>
		<nav class="panel column is-offset-2 is-8">
		  <p class="panel-heading">
		   Services
		    <button class="button is-primary is-outlined" @click="openAdd">
		    	Add New
		    </button>
		    <span class="is-pulled-right">
		    	<!-- <i class="fa fa-refresh fa-spin fa-1x fa-fw"></i> -->
		    	<!-- <i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i> -->
		    </span>
		  </p>

		  <div class="panel-block">
		    <p class="control has-icons-left">
		      <input class="input is-small" type="text" placeholder="search" >
		      <span class="icon is-small is-left">
		        <i class="fa fa-search" aria-hidden="true"></i>
		      </span>
		    </p>
		  </div>
		  
		  <a class="panel-block" >
		  	<span class="column is-9">
		  		Test
		  	</span>
		    
		    <span class="panel-icon column is-1">
		      <i class="has-text-danger fa fa-trash" aria-hidden="true" ></i>
		    </span>

		    <span class="panel-icon column is-1">
		      <i class="has-text-info fa fa-edit" aria-hidden="true" ></i>
		    </span>

		    <span class="panel-icon column is-1">
		      <i class="has-text-primary fa fa-eye" aria-hidden="true" ></i>
		    </span>
		    
		  </a>
		</nav>

		<AddService :openmodal='addActive'  @closeRequest="close"></AddService>
	</div>
</template>

<script>	

	let AddService = require('./AddService.vue');
	// let Show = require('./Show.vue');
	// let Update = require('./Update.vue');
	export default {

		components: {AddService},

		data(){

			return{
				addActive:'',
				lists: {},
				errors: {}
			}
		},
		methods: {

			openAdd() {
				this.addActive = 'is-active';
			},

			close(){
				this.addActive = '';
			}

		}
	}

</script>