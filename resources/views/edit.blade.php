<form method="POST" v-on:submit.prevent="updateHabilidad(fillHabilidad.id)">
    <div class="modal fade" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="keep">Editar habilidad</label>
                    <input type="text" name="habilidad" class="form-control" v-model="fillHabilidad.habilidad">
                    <span v-for="error in errors" class="text-danger">@{{error}}</span>
                </div>
                <div class="modal-footer">
                    <v-btn small outline type="submit" color="blue"> <v-icon>done</v-icon> </v-btn>
                </div>
                
            </div>
        </div>
    </div>
</form>