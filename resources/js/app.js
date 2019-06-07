new Vue({
    el:'#app',
    created: function(){
        this.getHabilidades();
    },
    data: {
        habilidades:[],
        //crear
        newHabilidad:'',
        //llenar campo
        fillHabilidad:{'id':'','habilidad':''},
        //errores
        errors:[]
        
    },
    methods:{
        getHabilidades:function(){
            var urlHabilidades = 'habilidades';
            axios.get(urlHabilidades).then(response=>{
                this.habilidades = response.data
            });
        },
        createHabilidad:function(){
            var url = 'habilidades';
            axios.post(url,{
                habilidad: this.newHabilidad

            }).then(response =>{
                this.getHabilidades();
                this.newHabilidad = '';
                this.errors = [];
                $('#create').modal('hide');
                toastr.success('Agregado correctamente');
            }).catch(error =>{
                this.errors = error.response.data
            });
        },
        editHabilidad:function(habilidad){
            this.fillHabilidad.id = habilidad.id;
            this.fillHabilidad.habilidad = habilidad.habilidad;
            $('#edit').modal('show');
        },
        updateHabilidad:function(id){
            var url = 'habilidades/' + id;
            axios.put(url,this.fillHabilidad).then(response =>{
                this.getHabilidades();
                this.fillHabilidad = {'id':'','habilidad':''}
                this.errors = [];
                $('#edit').modal('hide');
                toastr.success('Editado correctamente');
            }).catch(error =>{
                this.errors = error.response.data
            });
        },
        deleteHabilidad:function(habilidad){
            var url = 'habilidades/' + habilidad.id;
            axios.delete(url).then(response=>{
                this.getHabilidades();
                toastr.success('Eliminado correctamente');
            });
        }
        
    }


})