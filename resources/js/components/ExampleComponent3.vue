<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>
 
                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

    import draggable from 'vuedraggable';
    export default{
        data(){
            return{
                playlist_id : 0,
                id_video : 0,
                id_usuario: 0,
                id_canal: 0,
                nombre_video : '',
                lenght: 0,
                usuario_id : 0,
                nombre_playlist: '',
                hora_inicio : 0,
                fecha_emision : 0,
                loop : 0,
                auto_start : 0,
                arrayPlaylist : [],
                arrayDetallePlaylist : [],
                arrayCanales: [],
                arrayUsers: [],
                arrayVideo : [],
                totalLength: 0
            }
        },
         components: {
      
            draggable
        },
        methods: {
            listarVideo(){
                let esto = this;
                var url= '/videos/listarVideos';
                axios.get(url).then(function(response){
              
                    esto.arrayVideo = response.data
                    console.log(response);

                })
                .catch(function(error){
                    console.log(error);

                })
            },
                registrarPlaylist(){
                    let esto = this;
                    axios.post("/playlist/registrar",{
                        'id_usuario': esto.id_usuario,
                        'nombre_playlist' : esto.nombre_playlist,
                        'hora_inicio': esto.hora_inicio,
                        'fecha_emision': esto.fecha_emision,
                        'loop': esto.loop,
                        'auto_start': esto.auto_start,
                        'data': esto.arrayDetallePlaylist
                    }).then(function (response) {
                        console.log(response);
                        console.log("ingresado correctamente");
                    }).catch(function (error) {
                        console.log(error);
                    });
                },
            agregarDetalleVideo(data =[]){
                let esto = this;
                esto.arrayDetallePlaylist.push({
                    id_video : data['id'],
                    nombre_video : data['nombre_video'],
                    lenght : data['lenght']
           
                });
            },
            eliminarDetalleVideo(index){
                let esto = this;
                esto.arrayDetallePlaylist.splice(index,1);

            },
            selectUsuarios(){
                let esto=this;
                var url= '/usuarios/selectUsuarios';
                axios.get(url).then(function (response) {
                    let respuesta = response.data;
                    esto.arrayUsers=respuesta.usuarios;

                })
                .catch(function (error) {
                    console.log(error);
                })
            },
            //  selectCanales(){
            //     let esto=this;
            //     var url= '/canales/selectCanales';
            //     axios.get(url).then(function (response) {
            //         let respuesta = response.data;
            //         esto.arrayCanales=respuesta.canales;

            //     })
            //     .catch(function (error) {
            //         console.log(error);
            //     })
            // },
            // getCanales(val1){
            //     let me = this;
            //     me.loading = true;
            //     me.id_canal = val1.id;
            // }

        },
            computed:{
             calcularTotalLengthVideo: function(){
                 var resultado = 0;
                 for(var i = 0; i<this.arrayDetallePlaylist.length; i++){
                     resultado = resultado + (this.arrayDetallePlaylist[i].lenght)
                 }

                  return resultado;
             }
           

        },
        mounted(){
            this.listarVideo();
            this.selectUsuarios();
        },
    
    }

</script>
 
