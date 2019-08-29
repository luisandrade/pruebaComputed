<template>
 
        <div class="row justify-content-center">
            
           
                                    <div class="col-lg-4">
                                            <div class="card">
                                                    <div class="card-body">
                                                            <div class="btn-group" role="group">
                                                                    <button  @click="listarVideo()" type="submit" class="btn btn-primary dropdown-toggle elegir">
                                                                      Categorias
                                                                    </button>
                                                                  

                                                                    <button type="button" class="btn btn-success elegir"><i class="ti-plus"></i> Live Event</button>
                                                                </div>
                                                            <div class="table-responsive">
                                                                    <table class="table table-sm m-0">
                                                                        <thead>
                                                                            <tr >
                                                                                <th>ID Video</th>
                                                                                <th>Nombre Video</th>
                                                                                <th>Length</th>
                                                                                <th>agregar</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr v-for="videos in arrayVideo.videos" :key="videos.id">
                                                                                <td v-text="videos.id"></td>
                                                                                <td v-text="videos.nombre_video"></td>
                                                                                <td v-text="videos.lenght"></td>
                                                                                <td>
                                                                                      <button @click="agregarDetalleVideo(videos)" class="btn btn-success form-control btnagregar"><i class="icon-plus">+</i></button>
                                                                                </td>
                                                                               
                                                                            </tr>
                                                                           
                                                                            
                                                                        </tbody>
                                                                    </table>
                        
                                                                </div>
                                                               
        
                                                    </div>
    
                                                            
                                           </div> 
                                    </div> 
                               
                                    <div class="col-lg-8">
                                            <div class="card">
                                                <div class="card-body">
                                                     

                                                                    <div class="form-group row ">
                                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nombre</label>
                                                                        <div class="col-sm-10">
                                                                            <input class="form-control" v-model="nombre_playlist" type="text" value="" placeholder="Nombre Lista de Reproducción" id="example-text-input">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Usuario</label>
                                                                        <div class="col-sm-10">
                                                                            <div class="form-group">
                                                                                <select class="form-control" v-model="id_usuario">         
                                                                                    <option value="0" disabled>Seleccione</option>
                                                                                    <option v-for="users in arrayUsers" :key="users.id" :value="users.id" v-text="users.name"></option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                     <!-- <div class="form-group row">
                                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Canal</label>
                                                                        <div class="col-sm-10">
                                                                            <div class="form-group">
                                                                                <select class="form-control" v-model="id_canal">         
                                                                                    <option value="0" disabled>Seleccione</option>
                                                                                    <option v-for="canales in arrayCanales" :key="canales.id" :value="canales.id" v-text="canales.nombre_canal"></option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->

                                                                    <div class="form-group row">
                                                                            <label for="example-time-input" class="col-sm-2 col-form-label">Hora Inicio</label>
                                                                            <div class="col-sm-10">
                                                                                <input class="form-control" type="time" v-model="hora_inicio" value="13:45:00" id="example-time-input">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                                <label for="example-date-input" class="col-sm-2 col-form-label">Emisión</label>
                                                                                <div class="col-sm-10">
                                                                                    <input class="form-control" v-model="fecha_emision" type="date" value="2011-08-19" id="example-date-input">
                                                                                </div>
                                                                            </div>
                                                                
                                                                    <div class="form-group row col-sm-12">
                                                                        <label for="example-time-input" class=" col-form-label">Loop</label>
                                                                       
                                                                        <input type="checkbox" id="switch7" v-model="loop" switch="info" checked/>
                                                                        <label class="loop" for="switch7" data-on-label="Si" data-off-label="No"></label>

                                                                                <label for="example-time-input" class=" col-form-label">AutoStart</label>
                                                                       
                                                                                <input type="checkbox" id="switch8" v-model="auto_start" switch="info" checked/>
                                                                                <label class="loop" for="switch8" data-on-label="Si" data-off-label="No"></label>
                                                                       
                                                                       
                                                                        
                                                                        
                                                                </div>
                                                                
                                                       
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                        <h3>Lista Videos</h3>

                                                                        <table class="table table-striped">
                                                                            <thead class="thead-dark">
                                                                            <tr>
                                                                                <th scope="col">Id</th>
                                                                                <th scope="col">Nombre video</th>
                                                                                <th scope="col">Duracion</th>
                                                                                <th scope="col">Opciones</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <draggable v-model="arrayDetallePlaylist" tag="tbody">
                                                                                    <tr v-for="(videoDetalle,index) in arrayDetallePlaylist" :key="index">
                                                                                        <td scope="row">{{videoDetalle.id_video}}</td>
                                                                                        <td>{{ videoDetalle.nombre_video }}</td>
                                                                                        <td>{{ videoDetalle.lenght }}</td>
                                                                                        <td>
                                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light mx-auto" @click="eliminarDetalleVideo(index)" >X</button>
                                                                                        </td>
                                                                                    </tr>
                                                                            </draggable>
                                                                        </table>
                                                                        </div>

                                                                        <rawDisplayer class="col-3" :value="arrayDetallePlaylist" title="List" />
                                                                    </div>
                                                                    <h4>Duración Playlist: {{totalLength = calcularTotalLengthVideo}} minutos</h4>

                                                                            
                                                                                <!-- <draggable v-model="arrayDetallePlaylist">
                                                                                    <transition-group>
                                                                                        <tr v-for="(videoDetalleS, index) in arrayDetallePlaylist" :key="index" class="table-primary">
                                                                                            <td v-text="videoDetalleS.id_video"></td>
                                                                                            <td v-text="videoDetalleS.nombre_video"></td>
                                                                                            <td v-text="videoDetalleS.lenght"></td>
                                                                                            <td>
                                                                                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1" @click="eliminarDetalleVideo(index)" >
                                                                                                    X
                                                                                                </button>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </transition-group>
                                                                                </draggable> -->
                        
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light mr-1" @click="registrarPlaylist()">
                                                                            Guardar Lista
                                                                        </button>   
                                                                        <button type="button" class="btn btn-dark waves-effect waves-light mr-1">
                                                                                <i class="ti-control-play"></i> Preview
                                                                            </button>                                      
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

