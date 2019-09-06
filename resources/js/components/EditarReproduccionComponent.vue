<template>

                                <div class="row">
                                    <div class="col-lg-5">
                                            <div class="card">
                                                    <div class="card-body">
<h1>{{$route.params.id}}</h1>
<h1></h1>
                                                                <div class="btn-group m-b-15" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-success"><i class="ti-plus"></i> Agregar Live</button>
                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</button>
                                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                                    </div>
                                                                </div>

                                                            <div class="">
                                                                    <table class="table table-sm m-0 table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Tiempo</th>
                                                                                <th>Nombre Video</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">00:20:00</th>
                                                                                <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                <td><i class="ion ion-md-add-circle "></i></td>
                                                                               
                                                                            </tr>
                                                                            <tr>
                                                                                    <th scope="row">00:20:00</th>
                                                                                    <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                    <td><i class="ion ion-md-add-circle "></i></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <th scope="row">00:20:00</th>
                                                                                        <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                        <td><i class="ion ion-md-add-circle"></i></td>
                                                                                    </tr> 
                                                                            <tr>
                                                                                            <th scope="row">00:20:00</th>
                                                                                            <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                            <td><i class="ion ion-md-add-circle"></i></td>
                                                                                        </tr>
                                                                            
                                                                        </tbody>
                                                                    </table>
                        
                                                                </div>
                                                               
        
                                                    </div>
    
                                                            
                                           </div> 
                                    </div> 
                               
                                    <div class="col-lg-7">

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-striped">
                                                                    <table class="table table-sm m-10 table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Hora Inicio</th>
                                                                                <th>Hora Finaliza</th>
                                                                                <th>Nombre de Vídeo</th>
                                                                                <th>Duración</th>
                                                                                <th>Borrar</th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="table-striped">
                                                                            <tr>
                                                                                <th scope="row">{{playlist.hora_inicio}}</th>
                                                                                <td>
                                                                                <input v-model="playlist.hora_final" class="form-control">
                                                                                
                                                                                </td>
                                                                                <td>{{playlist.nombre_playlist}}</td>
                                                                                <td>00:20:00</td>
                                                                                <td><center><i class="ion ion-md-close-circle "></i></center></td>
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
                                                                            <label>Código Iframe</label>
                                                                            <div>
                                                                                <textarea required class="form-control" rows="5"><iframe></iframe></textarea>
                                                                            </div>
                                                                        </div>
 
                                    </div>
                                    </div>
                            </div>
                          </div>  
                    </template>

<script>
export default {
    data(){
        return{
            playlist: {}
        }
    },
    mounted(){
        //Campuramos la id del sistema de vou-route dentro de $route y parametros
        axios.get('/edit/' + this.$route.params.id).then(response =>{
           console.log(response);
            this.playlist = response.data;

        }).catch(error =>{
            console.log(error.response.data);
        })
    }
}
</script>

