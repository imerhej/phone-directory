<template>
<div class="modal" :class="openmodal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Add New Service</p>
      <button class="delete" aria-label="close" @click="close"></button>
    </header>
    <section class="modal-card-body">

      <div class="field">
        <label class="label">Service Name</label>
        <div class="control">
          <input class="input" :class="{'is-danger':errors.name}" type="text" placeholder="Service Name" >
        </div>
        <small v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Type</label>
        <div class="control">
          <input class="input" :class="{'is-danger':errors.type}" type="text" placeholder="Service Type" >
        </div>
        <small v-if="errors.type" class="has-text-danger">{{ errors.type[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Location</label>
        <div class="control">
          <input class="input" :class="{'is-danger':errors.location}" type="text" placeholder="Service Location" >
        </div>
        <small v-if="errors.location" class="has-text-danger">{{ errors.location[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Email</label>
        <div class="control">
          <input class="input" :class="{'is-danger':errors.email}" type="email" placeholder="Email" >
        </div>
        <small v-if="errors.email" class="has-text-danger">{{ errors.email[0] }}</small>
      </div>

    </section>
    <footer class="modal-card-foot">
      <button class="button is-success" @click="save">Save</button>
      <button class="button" @click="close">Cancel</button>
    </footer>
  </div>
</div>
</template>

<script>
  export default {
    props: ['openmodal'],

    data(){

      return{

        list: {
              name: '',
              type: '',
              location: '',
              email: ''
        },
        errors:{}
      }

    },

    methods:{

      close(){

        this.$emit('closeRequest')
       },

        save() {
          axios.post('/service',this.$data.list).then((response) => {
            this.close()
            this.$parent.lists.push(response.data)
            this.$parent.lists.sort(function(a,b) {
              if (a.name > b.name) {
                  return 1;
              } else if (a.name < b.name) {
                  return -1;
              }
            })
            this.list = "";
          })
          .catch((error) => this.errors = error.response.data.errors);
      }
    }

  }
</script>