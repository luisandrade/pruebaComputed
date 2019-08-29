<template>
            
                    <div class="row">
                        <div class="col-lg-4">
                                <div class="card">
                                        <div class="card-body">

                                <div class="btn-group m-b-15" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success"><i class="ion ion-md-add-circle"></i> Agregar Live</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                                    <table class="table table-sm  m-0 ">
                                        <thead>
                                            <tr>
                                                <th>Tiempo</th>
                                                <th>Nombre Video</th>
                                                <th>Agregar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">00:20:00</th>
                                                <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                <td><center><i class="ion ion-md-add-circle "></i></center></td>
                                                
                                            </tr>
                                            <tr>
                                                    <th scope="row">00:20:00</th>
                                                    <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                    <td><center><i class="ion ion-md-add-circle "></i></center></td>
                                                </tr>
                                                <tr>
                                                        <th scope="row">00:20:00</th>
                                                        <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                        <td><center><i class="ion ion-md-add-circle "></i></center></td>
                                                    </tr> 
                                            <tr>
                                                            <th scope="row">00:20:00</th>
                                                            <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                            <td><center><i class="ion ion-md-add-circle "></i></center></td>
                                                        </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                        </div> 
                               
                                    <div class="col-lg-8">
                                            <div class="card">
                                                <div class="card-body">
                                                        <form class="" action="#">

                                                                <div class="form-group row ">
                                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nombre</label>
                                                                        <div class="col-sm-10">
                                                                            <input class="form-control" type="text" value="" placeholder="Nombre Lista de Reproducción" id="example-text-input">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Canal</label>
                                                                            <div class="col-sm-10">
                                                                                    <select class="form-control">
                                                                                            <option>Seleccionar Canal</option>
                                                                                            <option>Large select</option>
                                                                                            <option>Small select</option>
                                                                                        </select>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                            <label for="example-time-input" class="col-sm-2 col-form-label">Hora Inicio</label>
                                                                            <div class="col-sm-10">
                                                                                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                                <label for="example-date-input" class="col-sm-2 col-form-label">Emisión</label>
                                                                                <div class="col-sm-10">
                                                                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                                                                </div>
                                                                            </div>
                                                                
                                                                    <div class="form-group row col-sm-12">
                                                                        <label for="example-time-input" class=" col-form-label">Loop</label>
                                                                       
                                                                        <input type="checkbox" id="switch7" switch="info" checked/>
                                                                        <label class="loop" for="switch7" data-on-label="Si"
                                                                                data-off-label="No"></label>

                                                                                <label for="example-time-input" class=" col-form-label">AutoStart</label>
                                                                       
                                                                                <input type="checkbox" id="switch8" switch="info" checked/>
                                                                                <label class="loop" for="switch8" data-on-label="Si"
                                                                                        data-off-label="No"></label>
                                                                       
                                                                       
                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                                                Crear
                                                                            </button>
                                                                        
                                                                </div>
                                                                
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-striped">
                                                                    <table class="table table-sm m-10 table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Mover</th>
                                                                                <th>Hora de Inicio</th>
                                                                                <th>Salida</th>
                                                                                <th>Nombre de Vídeo</th>
                                                                                <th>Duración</th>
                                                                                <th>Borrar</th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="table-striped">
                                                                            <tr>
                                                                            <th><center><i class="ion ion-md-move"></i></center> </th>
                                                                                <th scope="row">00:00:00 am</th>
                                                                                <td>00:40:00 am</td>
                                                                                <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                <td>00:20:00</td>
                                                                                <td><center><i class="ion ion-md-close-circle "></i></center></td>
                                                                            </tr>
                                                                            <tr>
                                                                            <th><center><i class="ion ion-md-move"></i></center> </th>
                                                                                    <th scope="row">00:20:00 am</th>
                                                                                    <td>00:40:00 am</td>
                                                                                    <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                    <td>00:20:00</td>
                                                                                    <td><center><i class="ion ion-md-close-circle "></i></center></td>
                                                                                </tr>
                                                                                <tr>
                                                                                <th><center><i class="ion ion-md-move"></i></center> </th>
                                                                                        <th scope="row">00:40:00 am</th>
                                                                                        <td>01:20:00 am</td>
                                                                                        <td>LIVE EVENT</td>
                                                                                        <td>01:00:00</td>
                                                                                        <td><center><i class="ion ion-md-close-circle "></i></center></td>
                                                                                    </tr>
                                     
                            
                                                                                <tr>
                                                                                <th><center><i class="ion ion-md-move"></i></center> </th>
                                                                                        <th scope="row">01:20:00 am</th>
                                                                                        <td>01:40:00 am</td>
                                                                                        <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                        <td>00:20:00</td>
                                                                                        <td><center><i class="ion ion-md-close-circle"></i></center></td>
                                                                                    </tr>


                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                              <td></td>
                                                                              <td></td>
                                                                              <td></td>
                                                                              <td><i class="ion ion-md-clock "></i> 00:00:00</td>
                                                                              <td></td>
                                                                            </tr>
                                                                          </tfoot>
                                                                    </table>
                                                                </div>
                        
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                                            Guardar Lista
                                                                        </button>   
                                                                        <button type="submit" class="btn btn-dark waves-effect waves-light mr-1">
                                                                                <i class="ti-control-play"></i> Preview
                                                                            </button>      
                                                
                                                </div>

                                      
                                            </div>
                                            <div class="card">
                                    <div class="card-body">


                                                                    <div class="form-group">
                                                                            <label>Código Embed Iframe</label>
                                                                            <div>
                                                                                <textarea required class="form-control" rows="3"><iframe></iframe></textarea>
                                                                            </div>
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
