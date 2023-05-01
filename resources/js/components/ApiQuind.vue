<template>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-12">
     <table class="table-fixed w-full">
      <thead>
         <tr class="bg-green-500 text-white">
           <th class="w-20 py-4">ID de Renta</th>
           <th class="w-20 py-4"> Nombre de Cámara</th>
           <th class="w-20 py-4">Nombre de Cliente</th>
           <th class="w-20 py-4">Fecha de inicio</th>
           <th class="w-20 py-4">Fecha Final</th>
           <th class="w-20 py-4">Estado de Alquiler</th>
           <th class="w-20 py-4">Acciones</th>
           <th class="w-20 py-4"></th>
         </tr>
       </thead>
       <tbody>
         <tr v-for="renta in rents" :key="renta.id">
           <td class="p-3 text-center">{{ renta.id }}</td>
           <td class="p-3 text-center">{{ renta.camera.brand }}</td>
           <td class="p-3 text-center">{{ renta.client.name }} {{ renta.client.second_name }}</td>
           <td class="p-3 text-center">{{ renta.start_date }}</td>
           <td class="p-3 text-center">{{ renta.end_Date }}</td>
           <td class="p-3 text-center" v-if="renta.status == 1">Alquilado</td>
           <td class="p-3 text-center" v-else-if="renta.status == 2"> Alquiler finalizado </td>
           <td class="p-3 text-center" v-else> En Multa </td>
           <td class="p-3 text-center" v-if="renta.status != 0 && renta.status != 2"><button @click="editStatus(renta.id, renta.camera.id, status = 2)" 
           class="bg-green-500 text-white px-3 py-1 rounded-sm">Finalizar Alquiler</button></td>
           <td class="p-3 text-center" v-if="renta.status != 0 && renta.status != 2">
           <button @click="editStatus(renta.id, renta.camera.id, status = 0)" 
           class="bg-green-500 text-white px-3 py-1 rounded-sm">Multar</button></td>
           <td class="p-3 text-center" v-if="renta.status == 0">
           <button @click="editStatus(renta.id, renta.camera.id = null, status = 2)" 
           class="bg-green-500 text-white px-3 py-1 rounded-sm">Quitar Multa</button></td>
         </tr>
       </tbody>
     </table>
    </div>
  </div>
  
  <br>
  <br>

  <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg text-gray-800">

     <h1 class="text-center text-3xl font-bold">Crear Alquiler</h1>
    <form @submit.prevent="createRent" class="mt-4">
    
        <select class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-500 
         p-2 my-2 focus:bg-white" v-model="camera_id" required>
              <option value="">Seleccione una cámara</option>
             <option v-for="camera in cameras" :value="camera.id">{{ camera.brand }} - {{ camera.model }}</option>
        </select>
        <select class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-500 
        p-2 my-2 focus:bg-white" v-model="client_id" required>
             <option value="">Seleccione un cliente</option>
             <option v-for="client in clients" :value="client.id">{{ client.name }} - {{ client.second_name }}</option>
        </select>
    
        <button type="submit" class="rounded-md bg-green-500 w-full text-lg text-white font-semibold p-2 my-3
        hover:bg-green-600 focus:bg-green-700">Alquilar</button>
    </form>
  </div>
</template>


<script>
import axios from 'axios'

export default {
  data() {
    return {
      rents: [],
      cameras: [],
      clients: [],
      camera_id: '',
      client_id: ''
    }
  },
  mounted() {
    axios.get('http://127.0.0.1:8000/api/rents/')
      .then(response => {
        this.rents = response.data.rents
        this.cameras = response.data.cameras
        this.clients = response.data.clients

      })
      .catch(error => {
        console.log(error)
      })
  },
  methods: {
    createRent() {
        axios.post('http://127.0.0.1:8000/api/rents/insert', {
          camera_id: this.camera_id,
          client_id: this.client_id
        })
        .then(response => {
          console.log(response);
          alert('El alquiler ha sido creado');
          location.reload();
          
        })
        .catch(error => {
          console.log(error);
          alert(error.response.data.message);
        });
      },
      editStatus(rentaId, cameraId, status) {
        axios.put(`http://127.0.0.1:8000/api/rents/${rentaId}`, { camera_id: cameraId, status: status})
          .then(response => {
            // Actualizar el estado de la renta localmente
            console.log(response);
            alert('El alquiler ha sido finalizado correctamente');
            location.reload();
          })
          .catch(error => {
            console.log(error);
            alert('Ha ocurrido un error inesperado');
          });
  }
  }
}
</script>